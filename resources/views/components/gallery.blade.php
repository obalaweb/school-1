<style>
    .pbmit-gallery-thumb {
        position: relative;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
    }

    .pbmit-gallery-thumb a {
        display: block;
        width: 100%;
        height: 100%;
    }
</style>
<section class="section-md pbmit-element-gallery-style-1">
    <div class="container">
        <div class="row g-0">
            <div class="col-md-9 col-xl-10">
                <div class="pbmit-heading-subheading">
                    <h4 class="pbmit-subtitle">Gallery</h4>
                    <h2 class="pbmit-title">Kids school you’ll love</h2>
                </div>
            </div>
            <div class="col-md-3 col-xl-2">
                <div class="pbmit-head-btn">
                    <a href="services.html" class="pbmit-btn">
                        <span>Full Gallary</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse ($images as $image)
                @if ($loop->index < 5)
                    @if ($loop->index == 0)
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="pbmit-gallery-thumb">
                                        <a href="{{ $image->getFirstMediaUrl() }}" class="pbmit-lightbox">
                                            <img src="{{ asset('assets/images/homepage-1/gallry-01.jpg') }}"
                                                class="img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                            @elseif ($loop->index == 1)
                                <div class="col-md-4">
                                    <div class="pbmit-gallery-thumb">
                                        <a href="{{ $image->getFirstMediaUrl() }}" class="pbmit-lightbox">
                                            <img src="{{ asset('assets/images/homepage-1/gallry-02.jpg') }}"
                                                class="img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            @elseif ($loop->index == 2)
                                <div class="col-md-4">
                                    <div class="pbmit-gallery-thumb">
                                        <a href="{{ $image->getFirstMediaUrl() }}" class="pbmit-lightbox">
                                            <img src="{{ asset('assets/images/homepage-1/gallry-04.jpg') }}"
                                                class="img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                            @elseif ($loop->index == 3)
                                <div class="col-md-8">
                                    <div class="pbmit-gallery-thumb">
                                        <a href="{{ $image->getFirstMediaUrl() }}" class="pbmit-lightbox">
                                            <img src="{{ asset('assets/images/homepage-1/gallry-05.jpg') }}"
                                                class="img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif

                @if ($loop->index == 4)
                    <div class="col-md-3">
                        <div class="pbmit-gallery-thumb">
                            <a href="{{ $image->getFirstMediaUrl() }}" class="pbmit-lightbox">
                                <img src="{{ asset('assets/images/homepage-1/gallry-03.jpg') }}" class="img-fluid"
                                    alt="">
                            </a>
                        </div>
                    </div>
                @endif
            @empty
            @endforelse
        </div>
    </div>
</section>
