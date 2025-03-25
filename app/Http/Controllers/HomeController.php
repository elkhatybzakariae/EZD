<?php

namespace App\Http\Controllers;

// use App\Livewire\Category;
use App\Models\Categorie;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function landing()
    {
        // $breads = [
        //     ['title' => 'Liste des Villes', 'url' => null],
        //     ['text' => 'Villes', 'url' => null], // You can set the URL to null for the last breadcrumb
        // ];
        $projects = Project::all();
        return view('pages.allpr', compact('projects'));
    }
    public function project($id)
    {
        $project = Project::findorfail($id);
        // dd($projects);
        return view('pages.project', compact('project'));
    }
    public function about()
    {
        return view('pages.about');
    }
}
