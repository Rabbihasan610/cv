<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Post;
use App\Models\Experience;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function experience()
    {
        $experiences = Experience::orderBy('created_at', 'desc')->get();
        return view('frontend.experience', compact('experiences'));
    }

    public function projects()
    {
        $projects = Project::where('is_published', true)->get();
        return view('frontend.projects', compact('projects'));
    }

    public function blog()
    {
        $posts = Post::where('is_published', true)->orderBy('created_at', 'desc')->get();
        return view('frontend.blog', compact('posts'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function cv()
    {
        $experiences = \App\Models\ResumeItem::where('type', 'experience')->orderBy('order')->get();
        $educations = \App\Models\ResumeItem::where('type', 'education')->orderBy('order')->get();
        $trainings = \App\Models\ResumeItem::where('type', 'training')->orderBy('order')->get();
        $languages = \App\Models\ResumeItem::where('type', 'language')->orderBy('order')->get();
        $volunteers = \App\Models\ResumeItem::where('type', 'volunteer')->orderBy('order')->get();
        $references = \App\Models\ResumeItem::where('type', 'reference')->orderBy('order')->get();
        
        $activeCv = \App\Models\Cv::where('is_active', true)->latest()->first();

        return view('frontend.cv', compact(
            'experiences', 'educations', 'trainings', 'languages', 'volunteers', 'references', 'activeCv'
        ));
    }

    public function subscribe(Request $request)
    {
        $request->validate(['email' => 'required|email|unique:subscribers,email']);
        \App\Models\Subscriber::create(['email' => $request->email]);
        return back()->with('success', 'Thank you for subscribing to my newsletter!');
    }

    public function contactSubmit(Request $request, \App\Services\GeminiService $gemini)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string'
        ]);

        // Trigger Gemini AI to draft an auto-reply
        $autoReply = $gemini->generateAutoReply($request->message);

        // Here we would normally store the inquiry or send an email.
        // For now, we will return the auto-reply in the session so the frontend can display it.
        return back()->with('success', 'Message sent successfully! AI Assistant says: ' . $autoReply);
    }

    public function blogSingle($slug)
    {
        $post = \App\Models\Post::where('slug', $slug)->firstOrFail();
        return view('frontend.blog-single', compact('post'));
    }

    public function commentSubmit(Request $request, $postId)
    {
        $request->validate([
            'guest_name' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
        
        \App\Models\Comment::create([
            'post_id' => $postId,
            'guest_name' => $request->guest_name,
            'guest_email' => $request->guest_email,
            'content' => $request->content,
            'is_approved' => false
        ]);
        
        return back()->with('comment_success', 'Your comment has been submitted and is awaiting moderation.');
    }
}
