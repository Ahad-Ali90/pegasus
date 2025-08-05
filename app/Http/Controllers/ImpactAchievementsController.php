<?php

namespace App\Http\Controllers;

use App\Models\impactAchievements;
use Illuminate\Http\Request;

class ImpactAchievementsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ImpactAchievements.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(impactAchievements $impactAchievements)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(impactAchievements $impactAchievements)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, impactAchievements $impactAchievements)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(impactAchievements $impactAchievements)
    {
        //
    }
}
