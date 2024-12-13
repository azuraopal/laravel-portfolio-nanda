<?php

namespace App\Http\Controllers;
use App\Models\Home;
use App\Models\About;
use App\Models\Skill;
use App\Models\Certificate;
use App\Models\Projek;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $home = Home::all();
        $about = About::all();
        $skill = Skill::all();
        $projek = Projek::all();
        $contact = Contact::all();
        $certificate = Certificate::all();
        return view ('home', compact('home', 'about', 'skill', 'certificate', 'projek', 'contact'));
    }
} 
