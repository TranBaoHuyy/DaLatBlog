<div class="wrapper">
    <div class="wrapper-top">
        <div class="logo-blog">
            <a href="{{ route('home') }}"><img src="{{ asset('/image/logo.jpg') }}" alt="Logo DALAT"></a>
            <div class="blog-title">
                <img src="{{ asset('/image/imagelogo.png') }}" alt="Logo DALAT">
            </div>
        </div>
        <div class="auth-container">
            <div class="auth-box">
                @if (Route::has('login'))
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class=""
                        >
                        </a>
                        @else
                        <a
                            href="{{ route('login') }}"
                            class="" style="border-right: 1px solid #909090"
                        >
                            Đăng nhập
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class=""
                            >
                                Đăng ký
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>
</div>
<div class="nav-Navigation" >
    <nav>
        <ul>
            <li><a href="{{route('home')}}">Trang chủ</a></li>
            <li><a href="{{ route('travelTrip') }}">Hướng dẫn du lịch</a></li>
            <li><a href="{{ route('cuisine') }}">Ẩm thực</a></li>
            <li><a href="{{ route('gallery') }}">Thư viện ảnh</a></li>
            <li><a href="{{ route('travelTour') }}">Trải nghiệm du lịch</a></li>
        </ul>
    </nav>
</div>
