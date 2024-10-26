<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogSideBar extends Component
{
    public $post;
    /**
     * Create a new component instance.
     */
    public function __construct(Post $post = null)
    {
        $this->post = $post;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $categories = Category::withCount('posts')->take(8)->get();
        if ($this->post->exists) {
            $recentPosts = Post::where('isPublished', Post::PUBLISHED)->whereNotIn($this->post->id)->take(4);
        } else {
            $recentPosts = Post::where('isPublished', Post::PUBLISHED)->take(4)->latest();
        }
        return view('components.blog-side-bar', [
            'categories' => $categories,
            'recentPosts' => $recentPosts,
        ]);
    }
}
