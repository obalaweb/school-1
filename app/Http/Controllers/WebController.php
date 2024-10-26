<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Post;
use App\Models\Teacher;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function front()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function faq()
    {
        return view('faq');
    }
    public function team()
    {
        return view('teams.index');
    }

    public function teamShow(Teacher $teacher)
    {
        return view('teams.index', ['team' => $teacher]);
    }
    public function contactUs()
    {
        return view('contactUs');
    }
    public function donate()
    {
        return view('donate');
    }
    public function history()
    {
        return view('history');
    }

    public function admissions()
    {
        return view('admissions');
    }

    public function blog()
    {
        $posts = Post::where('isPublished', Post::PUBLISHED)->with('category')->paginate(6);
        return view('blog.index', ['posts' => $posts,]);
    }
    public function blogShow(Post $post)
    {
        $nextPost = Post::where('id', '>', $post->id)
            ->orderBy('id', 'asc')
            ->first();

        $previousPost = Post::where('id', '<', $post->id)
            ->orderBy('id', 'asc')
            ->first();

        return view('blog.show', [
            'post' => $post,
            'nextPost' => $nextPost,
            'previousPost' => $previousPost
        ]);
    }

    public function event()
    {
        return view('events.index');
    }
    public function eventShow(Event $event)
    {
        return view('events.show', $event);
    }
}
