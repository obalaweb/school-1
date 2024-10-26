<div class="col-lg-3 blog-right-col">
    <aside class="sidebar">
        <aside class="pbmit-author-detail widget">
            <div class="single-blog-author">
                <div class="author-img">
                    <img src="images/blog/author-img.jpg" alt="">
                </div>
                <div class="pbmit-author-detail">
                    <h4 class="pbmit-author-title">Olivia Shelby</h4>
                    <div class="pbmit-author-cat">Maths Teacher</div>
                </div>
                <p class="pbmit-author-position">tempora incidunt ut labore et dolor quaerat voluptatem.
                </p>
                <ul class="pbmit-social-links">
                    <li class="pbmit-social-li pbmit-social-facebook">
                        <a title="Facebook" href="#" target="_blank" rel="noopener">
                            <span><i class="pbmit-base-icon-facebook-f"></i></span>
                        </a>
                    </li>
                    <li class="pbmit-social-li pbmit-social-twitter">
                        <a title="Twitter" href="#" target="_blank" rel="noopener">
                            <span><i class="pbmit-base-icon-twitter-x"></i></span>
                        </a>
                    </li>
                    <li class="pbmit-social-li pbmit-social-linkedin">
                        <a title="LinkedIn" href="#" target="_blank" rel="noopener">
                            <span><i class="pbmit-base-icon-linkedin-in"></i></span>
                        </a>
                    </li>
                    <li class="pbmit-social-li pbmit-social-instagram">
                        <a title="Instagram" href="#" target="_blank" rel="noopener">
                            <span><i class="pbmit-base-icon-instagram"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <aside class="widget widget-search">
            <form class="search-form">
                <input type="search" class="search-field" placeholder="Search …" value="">
                <button type="submit" class="search-submit"></button>
            </form>
        </aside>
        <aside class="widget widget-categories">
            <h2 class="widget-title">Our Categories</h2>
            <ul>
                @forelse($categories as $category)
                    <li>
                        <span class="pbmit-cat-li">
                            <a href="blog-classic.html">{{ $category->name }}</a>
                            <span class="pbmit-brackets">( {{ $category->posts_count }} )</span>
                        </span>
                    </li>
                @empty
                @endforelse
            </ul>
        </aside>
        <aside class="widget widget-recent-post">
            <h2 class="widget-title">Recent Post</h2>
            <ul class="recent-post-list">
                <li class="recent-post-list-li">
                    <a class="recent-post-thum" href="blog-single-detail.html">
                        <img src="images/recent-post/blog-img-01.jpg" class="img-fluid" alt="">
                    </a>
                    <div class="pbmit-rpw-content">
                        <span class="pbmit-rpw-title">
                            <a href="blog-single-detail.html">How to Keep Children Safe Online In Simple
                                Steps</a>
                        </span>
                        <span class="pbmit-rpw-date">
                            <a href="blog-single-detail.html">12 September, 2023</a>
                        </span>
                    </div>
                </li>
                <li class="recent-post-list-li">
                    <a class="recent-post-thum" href="blog-single-detail.html">
                        <img src="images/recent-post/blog-img-02.jpg" class="img-fluid" alt="">
                    </a>
                    <div class="pbmit-rpw-content">
                        <span class="pbmit-rpw-title">
                            <a href="blog-single-detail.html">Baby school and other secrets is your family
                                doesn’t tell you</a>
                        </span>
                        <span class="pbmit-rpw-date">
                            <a href="blog-single-detail.html">10 September, 2023</a>
                        </span>
                    </div>
                </li>
                <li class="recent-post-list-li">
                    <a class="recent-post-thum" href="blog-single-detail.html">
                        <img src="images/recent-post/blog-img-03.jpg" class="img-fluid" alt="">
                    </a>
                    <div class="pbmit-rpw-content">
                        <span class="pbmit-rpw-title">
                            <a href="blog-single-detail.html">Why would baby scroll ever banned
                                worldwide?</a>
                        </span>
                        <span class="pbmit-rpw-date">
                            <a href="blog-single-detail.html">7 September, 2023</a>
                        </span>
                    </div>
                </li>
            </ul>
        </aside>
        <aside class="widget widget-tag-cloud">
            <h3 class="widget-title">Tag Cloud</h3>
            <ul class="tagcloud">
                <li>
                    <a href="blog-classic.html" class="tag-cloud-link">Canteen</a>
                </li>
                <li>
                    <a href="blog-classic.html" class="tag-cloud-link">Children</a>
                </li>
                <li>
                    <a href="blog-classic.html" class="tag-cloud-link">Class</a>
                </li>
                <li>
                    <a href="blog-classic.html" class="tag-cloud-link">Courses</a>
                </li>
                <li>
                    <a href="blog-classic.html" class="tag-cloud-link">Examination</a>
                </li>
                <li>
                    <a href="blog-classic.html" class="tag-cloud-link">Sports</a>
                </li>
                <li>
                    <a href="blog-classic.html" class="tag-cloud-link">Teachers</a>
                </li>
                <li>
                    <a href="blog-classic.html" class="tag-cloud-link">Time-Table</a>
                </li>
            </ul>
        </aside>
        <aside class="widget pbmit-service-ad">
            <div class="textwidget">
                <div class="pbmit-service-ads-wrapper">
                    <div class="pbmit-ads-img">
                        <img src="images/ads-logo.svg" class="img-fluid" alt="">
                    </div>
                    <h3 class="pbmit-ads-title">Opening new activity class 2023</h3>
                    <div class="pbmit-ads-btn">
                        <a href="#" class="pbmit-btn pbmit-btn-white">
                            <span>Book a Visit</span>
                        </a>
                    </div>
                </div>
            </div>
        </aside>
    </aside>
</div>
