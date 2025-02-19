<section class="blog_one">
    <div class="container">
        <div class="row g-0">
            <div class="col-md-9">
                <div class="pbmit-heading-subheading">
                    <h4 class="pbmit-subtitle">Blogs</h4>
                    <h2 class="pbmit-title">News & Articles</h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="blog-one_btn">
                    <a href="#" class="pbmit-btn">
                        <span>All Articles</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="swiper-slider" data-loop="true" data-autoplay="false" data-dots="false" data-arrows="false"
            data-columns="3" data-margin="30" data-effect="slide">
            <div class="swiper-wrapper">
                @forelse ($posts as $post)
                    <article class="pbmit-blog-style-1 swiper-slide">
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
                                            <a href="#" rel="category tag">{{ $post->category->name }}</a>
                                        </div>
                                    </div>
                                    <div class="pbmit-meta-author pbmit-meta-line">
                                        <span class="pbmit-post-author">{{ $post->author->name }}</span>
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
                    <p>Check back later</p>
                @endforelse
            </div>
        </div>
    </div>
</section>
