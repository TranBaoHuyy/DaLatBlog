<div class="cuisine-wrapper">
    <div class="cuisine-header">
    </div>
    <div class="cuisine-box">
        <div class="cuisine-box-content">
            <div class="cuisine-back-home">
                <ul>
                    <li class="back-home"><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="post">Bài viết</li>
                </ul>
            </div>
            <div class="cuisine-title">
                <h2>Địa Điểm Ăn Uống Đà Lạt Nổi Tiếng</h2>
            </div>
            <div class="cuisine-content">
                <figure class="image-cuisine">
                    <img src="{{ asset('image/bannerAmThuc1.jpg') }} " alt="">
                </figure><br>
                <i><b><p>Thành phố ngàn hoa Đà Lạt không chỉ là một địa điểm tránh nóng nổi tiếng trong nước mà còn thu hút rất nhiều du khách ngoài nước. Đến với Đà Lạt, bạn vừa có thể trải nghiệm không gian mộng mơ để chill cực chất vừa có thể thưởng thức nền ẩm thực đa dạng và độc đáo với các món ăn đặc sản Đà Lạt.</p><br>
                <i><p>(*)Danh sách các địa điểm ăn uống Đà Lạt nổi tiếng </p></i><br>
            @foreach ($cuisines as $cuisine)
                <h2>Địa điểm ăn uống</h2>
                {{-- <h3>1. Cơm niêu Đà Lạt</h3><br> --}}
                <h3>{{$cuisine->title}}</h3>
                {{-- <p>Địa chỉ: Cơm niêu Như Ngọc – số 19/8 Hồ Tùng Mậu, tp. Đà Lạt</p><br> --}}
                <p>{{$cuisine->titleLocation}}</p>
                <figure class="image-cuisine">
                    <img src="{{ asset($cuisine->image) }}" alt="{{ $cuisine->title }}" style="width: 100%; height: auto;">
                    {{-- <i><figcaption>Cơm niêu Đà Lạt được chế biến kỳ công sẽ mang lại cho bạn trải nghiệm tuyệt vời</figcaption></i> --}}
                    <i><figcaption>{{$cuisine->figcaption}}</figcaption></i>
                </figure><br>
                {{-- <p>Cơm niêu được nấu sao cho có được lớp cơm cháy mỏng dưới đáy, phần cơm ở trên luôn dẻo và thơm. Cơm được ăn với các món ăn dân dã thường ngày như: bông cải xào tỏi, thiên lý xào thịt heo, cá kho tiêu,...
                    Thưởng thức món đặc sản Đà Lạt này cùng gia đình thì trên cả tuyệt vời cho một chuyến đi rồi đúng không nè. Giá cơm niêu chỉ từ 95000 - 150000 VNĐ/phần.</p><br> --}}
                    <p>{{$cuisine->content}}</p><br>
            @endforeach
            <!---dữ liệu thực tế--->
                {{-- <h3>2. Thịt nướng ngói</h3><br>
                <p>Địa chỉThịt nướng ngói Xưa - 427/3 Phan Đình Phùng, thành phố Đà Lạt</p><br>
                <figure class="image-cuisine">
                    <img src="{{ asset('image/thitNuongKhoi.png') }} " alt="">
                    <i><figcaption>Với hình thức nướng ngói độc đáo này, hương vị của thịt sẽ đặc biệt như thế nào?</figcaption></i>
                </figure><br>
                <p>Đến nơi có khí hậu mát mẻ và lạnh về đêm thì một buổi tiệc BBQ quây quần sẽ mang lại bầu không khí khó quên cho bạn. Nếu không tự nướng thì bạn hoàn toàn có thể đến các nhà hàng, quán ăn,...để mua và thưởng thức vị thịt nướng đặc biệt này nhé. Giá tham khảo: 100.000 VNĐ - 220.000 VNĐ/ phần</p><br>
                
                <h3>3. Bánh mì xíu mại</h3><br>
                <p>Địa chỉ: Bánh mì cô Sương – số 14 Ánh Sáng, phường 1, thành phố Đà Lạt</p><br>
                <figure class="image-cuisine">
                    <img src="{{ asset('image/banhMi.png') }} " alt="">
                    <i><figcaption>Sự kết hợp giữa các thành phần đơn giản nhưng lại tạo nên một món ăn ngon tuyệt</figcaption></i>
                </figure><br>
                <p>Khi đến Đà Lạt, bạn có thể chọn món bánh mì xíu mại vào thực đơn ăn sáng của mình. Mặc dù thành phần rất đơn giản, từ bánh mì chấm với nước xíu mại chua chua ngọt ngọt thơm ngon, và chút dai dai của da heo trong vừng viên xíu mại, nhưng cũng đủ làm nên một món đặc sản Đà Lạt thơm ngon. Giá món bánh mì xíu mại chỉ từ 35.000 VNĐ/phần.</p><br>
                
                <h3>4. Bánh tráng nướng</h3><br>
                <p>Địa chỉ:Bánh tráng nướng cô Hoa – số 56 Thông Thiên Học, thanh phố Đà Lạt</p><br>
                <figure class="image-cuisine">
                    <img src="{{ asset('image/banhTrangNuong.png') }} " alt="">
                    <i><figcaption>Sẽ thật thú vị khi vừa dạo chợ đêm Đà Lạt vừa cầm chiếc bánh nóng nổi </figcaption></i>
                </figure><br>
                <p>Bánh tráng nướng là món ăn vặt yêu thích của không chỉ các bạn trẻ mà còn đốn tim nhiều du khách lớn tuổi. Bánh tráng gạo được nướng lên, tạo vị béo nhờ trứng, kết hợp với hành lá, gà khô, bò khô, xúc xích, phomai, tương ớt, nước sốt me đã tạo nên một đặc sản Đà Lạt được lưu truyền khắp nơi.</p><br>   --}}
            </div>
        </div>
    </div>
</div>


