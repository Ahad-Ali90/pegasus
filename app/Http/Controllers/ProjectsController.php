<?php

namespace App\Http\Controllers;

use App\Models\projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
   
    public function index()
    {
        $project = projects::orderBy('position','asc')->paginate(10);
        // return $project;
       return view('projects.index', compact('project'));
    }

  
     public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'keypoints'   => 'nullable|string',
            'techs'       => 'nullable|string',
            'images.*'    => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Convert comma separated values to array
        $keypoints = $request->keypoints 
            ? array_map('trim', explode(',', $request->keypoints)) 
            : [];

        $techs = $request->techs 
            ? array_map('trim', explode(',', $request->techs)) 
            : [];

        // If id present → find else create new
        $project = $request->id 
            ? projects::findOrFail($request->id) 
            : new projects();

        // Handle image upload
        $images = $request->id ? json_decode($project->images ?? '[]', true) : [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $images[] = $image->store('uploads/projects', 'public');
            }
        }

        // Assign values
        $project->name        = $request->name;
        $project->description = $request->description;
        $project->keypoints   = json_encode($keypoints);
        $project->techs       = json_encode($techs);
        $project->images      = json_encode($images);
        $project->save();
        if(!$request->id){
        $project->position = $project->id;
        $project->save();
        }
            
        
        return response()->json([
            'success' => true,
            'data'    => $project,
            'message' => $request->id 
                ? 'Project updated successfully' 
                : 'Project created successfully'
        ]);
    }

     public function sort(Request $request)
    {
        foreach ($request->order as $item) {
            projects::where('id', $item['id'])->update([
                'position' => $item['position']
            ]);
        }
        return response()->json(['success' => true, 'message' => 'Skill Sorted successfully']);
    }
      public function destroy($id)
    {
        $skill = projects::findOrFail($id); // Fetch skill or fail with 404
        $skill->delete();

        return response()->json(['success' => true, 'message' => 'Skill Deleted successfully']);
    }
}
