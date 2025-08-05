<?php

namespace App\Http\Controllers;

use App\Models\contactInfo;
use Illuminate\Http\Request;

class ContactInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $contactRows = ContactInfo::all();
        $contact = $contactRows->pluck('value', 'key')->toArray();

        return view('ContactInfo.index', compact('contact'));
    }

    
public function store(Request $request)
{
    // Text-based inputs
    $data = $request->input('contact', []);

  if ($request->hasFile('resume_file')) {
    $file = $request->file('resume_file');
    $filename = time().'_'.$file->getClientOriginalName();
    $file->move(public_path('uploads/resume'), $filename);
    $data['resume'] = 'uploads/resume/'.$filename;
}

    // Save all key-value pairs to database
    foreach ($data as $key => $value) {
        ContactInfo::updateOrCreate(
            ['key' => $key],
            ['value' => $value]
        );
    }

    return redirect()->back()->with('success', 'Saved successfully!');
}

}
