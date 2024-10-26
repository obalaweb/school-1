<div class="pbmit-title-bar-wrapper">
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner container">
                        <h1 class="pbmit-tbar-title"> {{ $title }}</h1>
                    </div>
                </div>
                <div class="pbmit-breadcrumb">
                    <div class="pbmit-breadcrumb-inner">
                        <span>
                            <a title="home" href="{{ route('front') }}" class="home"><span>Kidzieo</span>
                            </a>
                        </span>
                        @if ($back)
                            <span><a title="{{ $back }}" href="/{{ $back }}"
                                    class="home"><span>{{ $back }}</span></a></span>
                        @endif
                        <span class="sep">
                            <i class="pbmit-base-icon-angle-double-right"></i>
                        </span>
                        <span><span class="post-root post post-post current-item"> {{ $title }}</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
