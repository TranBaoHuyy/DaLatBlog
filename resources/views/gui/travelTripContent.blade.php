<div class="travel-trip-wrapper">
    <div class="travel-trip-header">
    </div>
    <div class="travel-trip-box">
        <div class="travel-trip-box-left">
            <div class="travel-trip-back-home">
                <ul>
                    <li class="back-home"><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="post">Bài viết</li>
                </ul>
            </div>
            @foreach($Trips as $trip)
            <div class="travel-trip-title">
                {{-- <h1>Thời điểm tốt nhất cho chuyến du lịch Đà Lạt</h1> --}}
                <h1>{{ $trip->title}}</h1>
            </div>
            <div class="travel-trip-content">
                <h2>{{$trip->titleDetail}}</h2><br>
                <h3>{{$trip->titleName}}</h3><br>
                <p>{{$trip->titleLocation}}</p><br>
                <p>{{$trip->content}}</p><br>
                <figure class="image-trip">
                    <img src="{{ asset($trip->image) }}" alt="{{ $trip->titleName }}" style="width: 100%; height: auto;"> 
                     <i><figcaption>{{$trip->figcaption}}</figcaption></i>
                    {{-- <i><figcaption>Khung cảnh nên thơ của địa điểm du lịch Đà Lạt hồ Xuân Hương (Ảnh: Sưu tầm)</figcaption></i> --}}
                </figure><br>
            @endforeach
            </div>
        </div>
        <div class="travel-trip-box-right">
            <div class="sidebar">
                <div class="tourist-locations">
                    <div class="tourist-locations-title">
                        <p>CÁC ĐỊA ĐIỂM DU LỊCH</p>
                    </div>
                    <div class="tourist-locations-list">
                        <ul>
                            <li><a href="{{ route('thacDatanla') }}">Thác Datanla</a></li>
                            <li><a href="{{ route('phongCachSong') }}">Phong Cách Sống</a></li>
                            <li><a href="{{ route('quangTruongLamVien') }}">Quảng Trường Lâm Viên</a></li>
                            <li><a href="{{ route('hoTuyenLam') }}">Hồ Tuyền Lâm</a></li>
                            <li><a href="{{ route('dinhLangBiang') }}">Đỉnh Langbiang</a></li>
                        </ul>
                    </div>
                </div>
                <div class="social-network">
                    <div class="social-network-title">
                        <p>SOCIAL NETWORK</p>
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
                        <p>CATEGORY</p>
                    </div>
                    <div class="category-box">
                        <ul>
                            <li><a href="{{ route('travelTrip') }}">Hướng dẫn du lịch</a></li>
                            <li><a href="{{ route('phongCachSong') }}">Phong cách sống</a></li>
                            <li><a href="{{ route('cuisine') }}">Ẩm thực</a></li>
                            <li><a href="{{ route('home') }}">Giới thiệu</a></li>
                            <li><a href="{{ route('travelTour') }}">Điểm đến</a></li>  
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


