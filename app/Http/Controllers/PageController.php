<?php

namespace App\Http\Controllers;
;
use App\Models\AboutGenerate;
use App\Models\Certification;
use App\Models\Profile;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
  public function home()
{
    $profile = Profile::first();
    $skills = Skill::all();
  $certifications = Certification::all();

    $stats = [
        'total' => $certifications->count(),
        'categories' => $certifications
            ->groupBy('category')
            ->map(fn ($group) => $group->count()),
    ];

    return view('home', compact('profile', 'skills', 'certifications', 'stats'));
}
    public function about(Request $request)
    {
        $aboutgenerate = AboutGenerate::first();
        $certifications = Certification::all();
        return view('about', compact('aboutgenerate', 'certifications'));
    }


    public function services()
    {
        return view('services');
    }

    public function blogs()
    {
        return view('blogs');
    }

public function projects()
    {
        return view('projects');
    }

    public function contact()
    {
        return view('contact');
    }
}
