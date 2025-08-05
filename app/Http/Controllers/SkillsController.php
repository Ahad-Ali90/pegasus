<?php

namespace App\Http\Controllers;

use App\Models\skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
   
    public function index()
    {
    $skills = Skills::orderBy('position','asc')->paginate(10);
    return view('skills.index', compact('skills'));
    }

  public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'id' => 'nullable|exists:skills,id',
        ]);

        if ($request->filled('id')) {
            $skill = Skills::findOrFail($request->id);
            $skill->name = $request->name;
            $skill->save();

            return response()->json(['success' => true, 'message' => 'Skill updated successfully']);
        } else {
            $skill = new Skills();
            $skill->name = $request->name;
            $skill->save();
            $skill->position = $skill->id;
            $skill->save();

            return response()->json(['success' => true, 'message' => 'Skill added successfully']);
        }
    }

   public function destroy($id)
    {
        $skill = Skills::findOrFail($id); // Fetch skill or fail with 404
        $skill->delete();

        return response()->json(['success' => true, 'message' => 'Skill Deleted successfully']);
    }
    public function sort(Request $request)
    {
        foreach ($request->order as $item) {
            Skills::where('id', $item['id'])->update([
                'position' => $item['position']
            ]);
        }
        return response()->json(['success' => true, 'message' => 'Skill Sorted successfully']);
    }

}
