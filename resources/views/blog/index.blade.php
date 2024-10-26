@extends('layouts.front')
@section('content')
    <!-- Page Hero -->
    <x-page-hero title="blog" />
    <!-- Page Hero -->

    <!-- Blog Sortable Grid View -->
    <section class="section-md pbmit-sortable-yes">
        <div class="container">
            <div class="pbmit-sortable-list">
                <ul class="pbmit-sortable-list-ul">
                    <li><a href="#" class="pbmit-sortable-link pbmit-selected" data-sortby="*">All</a></li>
                    <li><a href="#" class="pbmit-sortable-link" data-sortby="canteen">Canteen</a></li>
                    <li><a href="#" class="pbmit-sortable-link" data-sortby="classes">Classes</a></li>
                    <li><a href="#" class="pbmit-sortable-link" data-sortby="education">Education</a></li>
                    <li><a href="#" class="pbmit-sortable-link" data-sortby="indoor-games">Indoor games</a></li>
                    <li><a href="#" class="pbmit-sortable-link" data-sortby="sports">Sports</a></li>
                    <li><a href="#" class="pbmit-sortable-link" data-sortby="teachers">Teachers</a></li>
                </ul>
            </div>
            <div class="row pbmit-element-posts-wrapper">
                @forelse ($posts as $post)
                    <article class="pbmit-ele pbmit-blog-style-1 col-md-4 classes">
                        <div class="post-item">
                            <div class="pbminfotech-box-content">
                                <div class="pbmit-featured-container">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ $post->image }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbmit-meta-date-wrapper pbmit-meta-line">
                                        <div class="pbmit-meta-date">
                                            <span class="pbmit-day-wrap">{{ $post->posted_at->format('d') }}</span>
                                            <span class="pbmit-date-wrap">{{ $post->posted_at->format('M Y') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="pbmit-category-admin-wraper d-flex align-items-center">
                                    <div class="pbmit-meta-cat-wrapper pbmit-meta-line">
                                        <div class="pbmit-meta-category">
                                            <a href="blog-classic.html" rel="category tag">{{ $post->category->name }}</a>
                                        </div>
                                    </div>
                                    <div class="pbmit-meta-author pbmit-meta-line">
                                        <span class="pbmit-post-author">admin</span>
                                    </div>
                                </div>
                                <div class="pbmit-content-wrapper">
                                    <h3 class="pbmit-post-title">
                                        <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </article>
                @empty
                    <p>Check back later </p>
                @endforelse

            </div>
        </div>
    </section>
    <!-- Blog Sortable Grid View End -->
@endsection
