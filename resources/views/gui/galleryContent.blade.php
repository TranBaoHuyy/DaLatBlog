<div class="gallery-wrapper">
    <div class="gallery-header">
    </div>
    <div class="gallery-box">
        <div class="gallery-box-content">
            <div class="gallery-back-home">
                <ul>
                    <li class="back-home"><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="post">Thư viện ảnh</li>
                </ul>
            </div>
            <div class="gallery-title">
                <h2>THƯ VIỆN ẢNH</h2>
            </div>
            <div class="gallery-content">
                <figure class="image-gallery">
                    <img src="{{ asset('image/thuVienAnh.jpg') }} " alt="thuVienAnh">
                </figure><br>
                <i><b><p>Thành phố ngàn hoa Đà Lạt không chỉ là một địa điểm tránh nóng nổi tiếng trong nước mà còn thu hút rất nhiều du khách ngoài nước. Đến với Đà Lạt, bạn vừa có thể trải nghiệm không gian mộng mơ để chill cực chất vừa có thể thưởng thức nền ẩm thực đa dạng và độc đáo với các món ăn đặc sản Đà Lạt.</p><br>
            
                <h2>1. Địa điểm ăn uống</h2><br>
                {{-- @foreach($gallaries as $gallery) --}}
                {{-- <h2>{{ $gallery->title}}</h2> --}}
                <div class="gallery">
                    {{-- @foreach($gallery->images as $image) --}}
                    <div class="gallery-cuisen">
                        {{-- <div class="gallery-cuisen-item"><img src="{{ asset($image->image_path) }}" alt="{{ $gallery->title }}" style="width: 100%; height: auto;"> </div> --}}
                        <div class="gallery-cuisen-item"><img src="{{ asset('image/comNieu.png') }} " alt="comNieu"></div>
                        <div class="gallery-cuisen-item"><img src="{{ asset('image/thitNuongKhoi.png') }} " alt="thitNuongKhoi"></div>
                        <div class="gallery-cuisen-item"><img src="{{ asset('image/banhMi.png') }} " alt="banhMi"></div>
                        <div class="gallery-cuisen-item"><img src="{{ asset('image/banhTrangNuong.png') }} " alt="banhTrangNuong"></div>
                        <div class="gallery-cuisen-item"><img src="{{ asset('image/banhCan.png') }} " alt="banhCan"></div>
                        <div class="gallery-cuisen-item"><img src="{{ asset('image/banhUotLongGa.png') }} " alt="banhUotLongGa"></div>
                    </div>
                    {{-- @endforeach --}}
                </div>
                {{-- @endforeach --}}
                <h2>2. Địa điểm du lịch</h2><br>
                <div class="gallery">
                    <div class="gallery-travelTour">
                        <div class="gallery-travelTour-item"><img src="{{ asset('image/thacDatanla.jpg') }}" alt="thacDatanla"></div>
                        <div class="gallery-travelTour-item"><img src="{{ asset('image/hoTuyenLam.jpg') }}" alt="hoTuyenLam"></div>
                        <div class="gallery-travelTour-item"><img src="{{ asset('image/hoXuanHuong.jpg') }}" alt="hoXuanHuong"></div>
                        <div class="gallery-travelTour-item"><img src="{{ asset('image/dinhLangbiang.jpg') }}" alt="dinhLangbiang"></div>   
                        <div class="gallery-travelTour-item"><img src="{{ asset('image/thacPrenn.jpg') }}" alt="thacPrenn"></div>
                        <div class="gallery-travelTour-item"><img src="{{ asset('image/thungLungTinhYeu.jpg') }}" alt="thungLungTinhYeu"></div>   
                    </div>
                </div>

                <h2>3. Phong cách sống của người dân nơi đây</h2><br>
                <div class="gallery">
                    <div class="gallery-lifeStyle">
                        <div class="gallery-lifeStyle-item"><img src="{{ asset('image/nguoiDalat1.jpg') }}" alt="nguoiDalat1"></div>
                        <div class="gallery-lifeStyle-item"><img src="{{ asset('image/nguoiDalat2.jpg') }}" alt="nguoiDalat2"></div>
                        <div class="gallery-lifeStyle-item"><img src="{{ asset('image/nguoiDalat3.jpg') }}" alt="nguoiDalat3"></div>
                        <div class="gallery-lifeStyle-item"><img src="{{ asset('image/nguoiDalat4.jpg') }}" alt="nguoiDalat4"></div>
                        <div class="gallery-lifeStyle-item"><img src="{{ asset('image/nguoiDalat5.jpg') }}" alt="nguoiDalat5"></div>
                        <div class="gallery-lifeStyle-item"><img src="{{ asset('image/nguoiDalat6.jpg') }}" alt="nguoiDalat6"></div>
                    </div>
                </div>         

                <h2>4. Đà Lạt về đêm</h2><br>
                <div class="gallery">
                    <div class="gallery-lifeStyle">
                        <div class="gallery-lifeStyle-item"><img src="{{ asset('image/dalatbandem1.jpg') }}" alt="dalatbandem1"></div>
                        <div class="gallery-lifeStyle-item"><img src="{{ asset('image/dalatbandem2.jpg') }}" alt="dalatbandem2"></div>
                        <div class="gallery-lifeStyle-item"><img src="{{ asset('image/dalatbandem3.jpg') }}" alt="dalatbandem3"></div>
                        <div class="gallery-lifeStyle-item"><img src="{{ asset('image/dalatbandem4.jpg') }}" alt="dalatbandem4"></div>
                        <div class="gallery-lifeStyle-item"><img src="{{ asset('image/dalatbandem5.jpg') }}" alt="dalatbandem5"></div>
                        <div class="gallery-lifeStyle-item"><img src="{{ asset('image/dalatbandem6.jpg') }}" alt="dalatbandem6"></div>
                    </div>
                </div>         
                <h2>5. Khu vui chơi tại đà lạt</h2><br>
                <div class="gallery">
                    <div class="gallery-lifeStyle">
                        <div class="gallery-lifeStyle-item"><img src="{{ asset('image/khuvuichoi1.png') }}" alt="khuvuichoi1"></div>
                        <div class="gallery-lifeStyle-item"><img src="{{ asset('image/khuvuichoi2.jpg') }}" alt="khuvuichoi2"></div>
                        <div class="gallery-lifeStyle-item"><img src="{{ asset('image/khuvuichoi3.jpg') }}" alt="khuvuichoi3"></div>
                        <div class="gallery-lifeStyle-item"><img src="{{ asset('image/khuvuichoi4.jpg') }}" alt="khuvuichoi4"></div>
                        <div class="gallery-lifeStyle-item"><img src="{{ asset('image/khuvuichoi5.jpg') }}" alt="khuvuichoi5"></div>
                        <div class="gallery-lifeStyle-item"><img src="{{ asset('image/khuvuichoi6.jpg') }}" alt="khuvuichoi6"></div>
                    </div>
                </div>         
            </div>
        </div>
    </div>
</div>


