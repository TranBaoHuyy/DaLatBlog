<div class="box-content-wrapper">
    <div class="box-content-header">
        <div class="carousel">
            <div class="carousel-item">
                <img src="{{ asset("/image/bground.jpg") }}" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset("/image/background.jpg") }}" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset("/image/banner2.jpg") }}" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset("/image/banner3.jpg") }}" alt="">
            </div>
        </div>
        <button class="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
        <button class="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
    </div>
    <div id="boxContent" class="content-blog">
        <div class="blog-choice1">
            <a href="{{ route('travelTour') }}">
                <div class="title-blog">
                    DU LỊCH
                </div>
            </a>
        </div>
        <div class="blog-choice2">
            <div class="title-blog">
                <a href="{{ route('cuisine') }}">ẨM THỰC</a>
            </div>
        </div>
        <div class="blog-choice3">
            <div class="title-blog">
            <a href="{{ route('phongCachSong') }}">PHONG CÁCH SỐNG</a>
            </div>
        </div>
        <div class="blog-choice4">
            <div class="title-blog">
            <a href="{{ route('gallery') }}">THƯ VIỆN ẢNH</a>
            </div>
        </div>
    </div>
</div>




