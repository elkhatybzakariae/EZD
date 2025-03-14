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
        // dd($projects);
        return view('layouts.app', compact('projects'));
    }
    public function about()
    {
        // $breads = [
        //     ['title' => 'Liste des Villes', 'url' => null],
        //     ['text' => 'Villes', 'url' => null], // You can set the URL to null for the last breadcrumb
        // ];
        return view('about');
    }
}
