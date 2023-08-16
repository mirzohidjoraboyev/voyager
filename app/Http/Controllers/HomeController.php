<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Service;
use App\Models\Comment;
use App\Models\Team;

class HomeController extends Controller
{
    public function index() {
        $projects = Project::all();
        $services = Service::all();
        $comments = Comment::all();
        $teams = Team::all();
        return view('welcome', compact('projects', 'services', 'comments', 'teams'));
    }
}
