<?php

namespace App\Http\Controllers;

use App\Models\Compound;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function index()
    {
        // show search form
        return view('search.index');
    }

    public function search(Request $request)
    {
        // apply restrictions to the search
        // get results based on the filters
        // if a smiles is present were doing a sub-structure search - pass the results to the RDKit API
        $query = Compound::query();
        if ($request->has('id')) {
            $query->where('id',$request->get('id'));
        }
        if ($request->has('project_id')) {
            $query->where('project_id',$request->get('project_id'));
        }
        if ($request->has('mol_name')) {
            $query->where('mol_name',$request->get('mol_name'));
        }
        if ($request->has('chembl_id')) {
            $query->where('chembl_id',$request->get('chembl_id'));
        }
        foreach( Compound::DEFAULT_PROPERTIES as $property) {
            if ($request->has($property)) {
                $query->where($property,$request->get($property));
            }
        }
        foreach( Compound::DEFAULT_DERIVED_VALUES as $derived_value) {
            if ($request->has($derived_value)) {
                $query->where($derived_value,$request->get($derived_value));
            }
        }

        $results = $query->get();

        if ( $request->has('smiles') ) {
            // fetch all of the smiles from result
            // pass them to the RDKit API for substructure searching

        }

        return view('search.search', compact('results'));
    }
}
