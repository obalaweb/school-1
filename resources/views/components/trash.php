@foreach ($images as $image)
@if ($loop->iteration < 5) <div class="row">

    @if ($loop->iteration < 3) <div class="col-md-9">
        @if ($loop->iteration == 1)
        <div class="col-md-8">
            <div class="pbmit-gallery-thumb">
                <a href="{{ asset('assets/images/homepage-1/gallry-01b.jpg') }}" class="pbmit-lightbox">
                    <img src="{{ asset('assets/images/homepage-1/gallry-01.jpg') }}" class="img-fluid" alt="">
                </a>
            </div>
        </div>
        @endif
        @if ($loop->iteration == 2)
        <div class="col-md-4">
            <div class="pbmit-gallery-thumb">
                <a href="{{ asset('assets/images/homepage-1/gallry-02b.jpg') }}" class="pbmit-lightbox">
                    <img src="{{ asset('assets/images/homepage-1/gallry-02.jpg') }}" class="img-fluid" alt="">
                </a>
            </div>
        </div>
        @endif
        </div>
        @endif
        <div class="row">
            @if ($loop->iteration == 4)
            <div class="col-md-4">
                <div class="pbmit-gallery-thumb">
                    <a href="{{ asset('assets/images/homepage-1/gallry-04b.jpg') }}" class="pbmit-lightbox">
                        <img src="{{ asset('assets/images/homepage-1/gallry-04.jpg') }}" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
            @endif
            @if ($loop->iteration == 5)
            <div class="col-md-8">
                <div class="pbmit-gallery-thumb">
                    <a href="{{ asset('assets/images/homepage-1/gallry-05b.jpg') }}" class="pbmit-lightbox">
                        <img src="{{ asset('assets/images/homepage-1/gallry-05.jpg') }}" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
            @endif
        </div>
        </div>
        @endif
        @if ($loop->iteration == 5)
        <div class="col-md-3">
            <div class="pbmit-gallery-thumb">
                <a href="{{ asset('assets/images/homepage-1/gallry-03b.jpg') }}" class="pbmit-lightbox">
                    <img src="{{ asset('assets/images/homepage-1/gallry-03.jpg') }}" class="img-fluid" alt="">
                </a>
            </div>
        </div>
        @endif
        @endforeach
