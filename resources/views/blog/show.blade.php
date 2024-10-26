@extends('layouts.front')
@section('content')
    <!-- Page Hero -->
    <x-page-hero :title="$post->title" back="blog" />
    <!-- Page Hero -->


    <!-- Blog Details -->
    <section class="site_content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 blog-left-col">
                    <article class="blog-details">
                        <div class="post blog-classic">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <img src="images/blog/blog-02b.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="pbmit-blog-classic-inner">
                                <div class="pbmit-blog-meta pbmit-blog-meta-top">
                                    <span class="pbmit-meta pbmit-meta-cat">
                                        <i class="pbmit-base-icon-folder-open-empty"></i>
                                        <a href="{{ route('category.show', $post->category->slug) }}"
                                            rel="category tag">{{ $post->category->name }}</a>
                                    </span>
                                    <span class="pbmit-meta pbmit-meta-date">
                                        <a href="blog-single-detail.html" rel="bookmark">
                                            <time class="entry-date published"
                                                datetime="2023-07-07T10:30:00+00:00">{{ $post->posted_at->format('d F, Y') }}</time>
                                            <time class="updated pbmit-hide"
                                                datetime="2023-07-26T09:52:36+00:00">{{ $post->posted_at->format('d F, Y') }}</time>
                                        </a>
                                    </span>
                                    <span class="pbmit-meta pbmit-meta-author"> by
                                        <a class="pbmit-author-link" href="#">{{ $post->author->name }}</a>
                                    </span>
                                    <span class="pbmit-meta pbmit-meta-comments">
                                        {{ $post->comments->count() }} Comments
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="pbmit-entry_content">
                            {!! $post->content !!}
                        </div>
                        <div class="pbmit-blog-meta-bottom">
                            <div class="pbmit-blog-meta-bottom-left">
                                <span class="pbmit-meta-tags">
                                    @forelse ($post->tags as $tag)
                                        <a href="#" rel="tag">{{ $tag }}</a>
                                    @empty
                                        <p>No tag</p>
                                    @endforelse
                                </span>
                            </div>
                        </div>
                        <nav class="navigation post-navigation" aria-label="Posts">
                            <div class="nav-links">
                                <div class="nav-previous">
                                    <a href="{{ route('blog.show', $previousPost->slug) }}" rel="prev">
                                        <span class="pbmit-post-nav-icon">
                                            <i class="pbmit-base-icon-angle-left"></i>
                                            <span class="pbmit-post-nav-head">Previous Post</span>
                                        </span>
                                        <span class="pbmit-post-nav-wrapper">
                                            <span class="pbmit-post-nav nav-title">{{ $previousPost->title }}</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="nav-next">
                                    <a href="{{ route('blog.show', $nextPost->slug) }}" rel="next">
                                        <span class="pbmit-post-nav-icon">
                                            <span class="pbmit-post-nav-head">Next Post</span>
                                            <i class="pbmit-base-icon-angle-right"></i>
                                        </span>
                                        <span class="pbmit-post-nav-wrapper">
                                            <span class="pbmit-post-nav nav-title">{{ $nextPost->title }}</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </nav>
                        <div class="pbmit-author-box">
                            <div class="pbmit-author-image">
                                <img src="images/author.png" class="img-fluid" alt="">
                            </div>
                            <div class="pbmit-author-content">
                                <span class="pbmit-author-name">
                                    <a href="blog-classic.html" title="Posted by admin"
                                        rel="author">{{ $post->author->name }}</a>
                                </span>
                                <p class="pbmit-text pbmit-author-bio">Consectetur adipisicing elit, sed do eiusmod tempor
                                    et dolore magna aliqua. Ut enim ad minim veniam, quis trud exercitation ullamco laboris
                                    commodo consequat.</p>
                            </div>
                        </div>
                    </article>
                    <div class="comments-area">
                        <h2 class="comments-title">3 Replies to “Baby school and other secrets is your family doesn’t tell
                            you”</h2>
                        <x-comment-list :post="$post" />
                        <div class="comment-respond">
                            <h3 class="comment-reply-title">Leave a Reply </h3>
                            <div class="comment-form">
                                <p class="comment-notes">Your email address will not be published. Required fields are
                                    marked *</p>
                                @livewire('comment-form')
                            </div>
                        </div>
                    </div>
                </div>
                <x-blog-side-bar />
            </div>
        </div>
    </section>
    <!-- Blog Details End -->
@endsection
