<?php

namespace App\Http\Controllers;

use App\Models\Compound;
use App\Models\Project;
use Illuminate\Http\Request;

class CompoundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Project $project = null)
    {

        //
        if (!empty($project)) {
            $compounds = Compound::where('project_id', $project->id)->simplePaginate(15);

            return view('compounds.index', compact('compounds'));
        }

        $compounds = Compound::paginate(15);

        return view('compounds.index', compact('compounds'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
