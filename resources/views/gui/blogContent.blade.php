<div class="blog-box">
    <div class="blog-title">
        <p>Các bài viết nổi bật</p>
    </div>
    <div class="blog-content">
        <div class="blog-content-left">
            @foreach($blogs as $blog)
            <div class="blog-wrapper">
                <div class="blog-thumbnail">           
                    <div class="blog-date">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <div class="calendar-time">
                            <p>{{ $blog->created_at->format('d') }}</p>
                           <p>{{ $blog->created_at->format('F Y') }}</p>
                        </div>
                    </div>
                    <div class="blog-image">
                            <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" style="width: 100%;height: 340px;">
                    </div>
                </div>
                <div class="blog-content-inner">
                    <div class="blog-content-inner-wrapper">
                      
                        <h1>{{ $blog->title }}</h1>
                    <p>
                        {{ $blog->content}}
                    </p> 
                    <button class="button-read">
                        Xem Thêm
                    </button>
                    <div class="social-icon">
                        <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>                     
                        <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin" aria-hidden="true"></i></a>
                        <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a>
                        <a href="https://www.pinterest.com/"><i class="fa-brands fa-pinterest" aria-hidden="true"></i></a>
                        <a href="https://www.tiktok.com/"><i class="fa-brands fa-tiktok" aria-hidden="true"></i></a>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
       
        <!---blog-content-right--->
        <div class="blog-content-right">
            <div class="sidebar">
                <div class="about-me">
                    <div class="about-me-title">
                        <p>GIỚI THIỆU</p>
                    </div>
                    <div class="about-me-image">
                        <img src="{{ asset('/image/User.png')}}" alt="">
                    </div>
                    <div class="about-me-infor">
                        <p>Tôi là một người có niềm đam mê mãnh liệt với việc khám phá những vẻ đẹp tiềm ẩn của Đà Lạt. Mỗi chuyến đi đến thành phố này là một hành trình mới, nơi tôi có cơ hội tìm hiểu sâu hơn về những góc nhỏ độc đáo, những con đường hoa dã quỳ, hay những đồi thông xanh mướt. Đà Lạt với tôi không chỉ là một địa điểm du lịch, mà là một nơi để cảm nhận sự kết nối với thiên nhiên và tìm thấy sự bình yên trong tâm hồn</p>
                    </div>
                </div>
                <div class="social-network">
                    <div class="social-network-title">
                        <p>MẠNG XÃ HỘI</p>
                    </div>
                    <div class="social-network-icon">
                        <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>                     
                        <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin" aria-hidden="true"></i></a>
                        <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a>
                        <a href="https://www.pinterest.com/"><i class="fa-brands fa-pinterest" aria-hidden="true"></i></a>
                        <a href="https://www.tiktok.com/"><i class="fa-brands fa-tiktok" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="category"><!--lam category -mcr--->
                    <div class="category-title">
                        <p>THƯ VIỆN</p>
                    </div>
                    <div class="category-box">
                        <ul>
                            <li><a href="{{ route('travelTrip') }}">Hướng dẫn du lịch</a></li>
                            <li><a href="{{ route('phongCachSong') }}">Phong cách sống</a></li>
                            <li><a href="{{ route('cuisine') }}">Ẩm thực</a></li>
                            <li><a href="{{ route('travelTrip') }}">Giới thiệu</a></li>
                            <li><a href="{{ route('travelTour') }}">Điểm đến</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

