<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Compound;
use App\Models\Project;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class DashboardController extends Controller
{
    /**
     * @return Factory|View|Application|object
     */
    public function index()
    {
        $projects = Project::all()->count();

        return view('dashboard', compact('projects'));
    }
}
