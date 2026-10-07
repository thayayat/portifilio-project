<?php

namespace App\Http\Controllers;
;
use App\Models\AboutGenerate;
use App\Models\Certification;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\SoftSkill;
use App\Models\TechnicalSkill;
use App\Models\WorkExperience;
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
    $aboutgenerate   = AboutGenerate::first();
    $certifications  = Certification::all();
    $technicalSkills = TechnicalSkill::orderBy('order')->get();
    $workExperiences = WorkExperience::orderBy('order')->get();
    $softSkills      = SoftSkill::orderBy('order')->get();

    return view('about', compact(
        'aboutgenerate',
        'certifications',
        'technicalSkills',
        'workExperiences',
        'softSkills'
    ));
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
