<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\skills;
use App\Models\ContactInfo;

class ApiController extends Controller
{
    public function skills(Request $request)
    {
        $skills = Skills::all();
        return response()->json([
            'data' => $skills,
        ]);
    }
      public function contactInfo()
    {
        $contactInfo = ContactInfo::all()->pluck('value', 'key')->toArray();

        // Convert resume relative path to full URL if exists
        if (isset($contactInfo['resume']) && $contactInfo['resume'] !== null) {
            $contactInfo['resume'] = url($contactInfo['resume']); 
        }

        return response()->json([
            'status' => true,
            'data' => $contactInfo,
        ]);
    }
    public function portfolioData()
{
    // Fetch skills
$skills = Skills::orderBy('position', 'asc')->get();

    // Fetch contact info
    $contactInfo = ContactInfo::all()->pluck('value', 'key')->toArray();

    // Convert resume relative path to full URL if exists
    if (isset($contactInfo['resume']) && $contactInfo['resume'] !== null) {
        $contactInfo['resume'] = url($contactInfo['resume']); 
    }

    return response()->json([
        'status' => true,
        'data' => [
            'skills' => $skills,
            'contact' => $contactInfo
        ]
    ]);
}

    
}
