<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Contact;
use App\Models\Course;
use App\Models\UserAgent;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Portfolio;
use App\Models\Testimonial;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index(Request $request)
    {
        $agent = new Agent();
        //$languages = $agent->languages();
        $device = $agent->device();
        $platform = $agent->platform();
        $platform_version = $agent->version($platform);
        $browser = $agent->browser();
        $browser_version = $agent->version($browser);
        $is_robot = $agent->isRobot() ? 'yes' : 'no';
        $robot = $agent->robot(); // get robot name, if not a robot then return false

        UserAgent::create([
            //'languages' => $languages,
            'device' => $device,
            'platform' => $platform,
            'platform_version' => $platform_version,
            'browser' => $browser,
            'browser_version' => $browser_version,
            'is_robot' => $is_robot,
            'robot' => $robot,
            'ip_address' => request()->ip(),
        ]);

        $profile = Profile::first();
        $skills = Skill::all();
        $services = Service::all();
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        $categories = Category::all();
        $educations = Education::all();
        $experiences = Experience::all();
        $portfolios = Portfolio::orderBy('completion', 'desc')->get();
        $testimonials = Testimonial::all();
        $courses = Course::orderBy('year', 'desc')->get();

        return view('home',
            compact(
                'profile', 'skills', 'services', 'blogs', 'categories',
                'educations', 'experiences', 'portfolios', 'testimonials', 'courses'
            )
        );
    }

    public function blog(Blog $blog)
    {
        return view('post-single', compact('blog'));
    }

    public function portfolio(Portfolio $portfolio)
    {
        return view('project-single', compact('portfolio'));
    }

    public function leaveComment(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
            'blog_id' => 'required',
        ]);

        $inputs = $request->all();
        $add_comment = Comment::create($inputs);

        if ($add_comment) {
            return response()->json(['status' => true, 'title' => 'Thanks, Your comment successfully added', 'text' => 'Your comment will be shown after it is accepted by the admin']);
        } else {
            return response()->json(['status' => false, 'title' => 'Something went wrong!.', 'text' => 'Your comment was NOT added!']);
        }
    }

    public function getInTouch(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $inputs = $request->all();
        $create_contact_us = Contact::create($inputs);

        if ($create_contact_us) {
            return response()->json(['status' => true, 'message' => 'Your message was successfully added']);
        } else {
            return response()->json(['status' => false, 'message' => 'Something went wrong!.']);
        }
    }

}
