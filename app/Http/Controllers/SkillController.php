<?php

namespace App\Http\Controllers;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skill = Skill::all();
        return view ('skill', compact('skill'));
    }
}
