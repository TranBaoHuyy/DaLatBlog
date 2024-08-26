<div class="blog-box">
    <div class="blog-title">
        <p>Các bài viết nổi bật</p>
    </div>
    <div class="blog-content">
        <div class="blog-content-center">
            @foreach($blogs as $blog)
            <div class="blog-wrapper">
                <div class="blog-thumbnail">           
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
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!--đánh giá-->
        <div class="evaluate">
            <div class="evaluate-wrapper">
                <div class="evaluate-left">
                    <div class="testimonials">
                            <div class="testimonials-title">
                                <p>TESTIMONIALS</p>
                                <h1>CẢM NHẬN CỦA DU KHÁCH</h1>
                            </div>
                            <div class="testimonials-content">
                                <p>Người ta thấy Đà Lạt xinh đẹp bằng đôi mắt nhưng cảm nhận được cái tình,
                                     cái thơ, cái bình yên của thành phố này thì phải bằng tâm hồn.</p>
                            </div>
                    </div>
                </div>
                <div class="evaluate-right">
                    <div class="evaluate-box">
                        <div class="evaluate-detail1">
                            <p>Hỡi những ai yêu quý Đà Lạt, yêu quý những đồi núi chập chùng, những sương mờ giăng khắp lối, xin hãy một lần suy nghĩ về nó. 
                                Xin hãy tỏ ra mình là ngừời có trách nhiệm, đừng thờ ơ với những gì xung quanh</p>
                            <div class="evaluate-infor">
                                <div class="evaluate-name">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>

                                    <h2>Nguyễn Thị A</h2>
                                    <p>Du khách</p>
                                </div>
                                <div class="evaluate-image">
                                    <img src="https://cdn2750.cdn-template-4s.com/media/khach-hang/team-2.webp" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="evaluate-detail1">
                            <p>Giờ đây thì! còn đâu nữa, các cụ già có tuổi vẫn có thể không cần những áo ấm như xưa và những buổi chiều ngồi bên Hồ Xuân Huơng nhìn dòng nước trôi mà ngậm ngùi nhớ về một ngày xưa đó…! 
                                một kỷ niệm mà chỉ có những người sống lâu năm ở vùng đất này mới thấy thấm thía khi nó đã không còn.</p>
                            <div class="evaluate-infor">
                                <div class="evaluate-name">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>

                                    <h2>Nguyễn Văn B</h2>
                                    <p>Du khách</p>
                                </div>
                                <div class="evaluate-image">
                                    <img src="https://cdn2750.cdn-template-4s.com/media/khach-hang/team-3.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--liên hệ--->
        <div class="contact">
            <div class="contact-wrapper">
                <div class="contact-left">
                    <div class="contact-left-title">
                        <div class="contact-title-content">
                            <h1>LIÊN HỆ ĐỂ TƯ VẤN</h1>
                            <p>Hotline : 0123456789</p>
                        </div>
                    </div>
                    <div class="contact-form">
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" placeholder="Họ và tên" class="form-control" id="name" name="name"  required>
                                <input type="text" placeholder="Số điện thoại" class="form-control" id="phone" name="phone"  required>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Tiêu đề" class="form-control" id="content" name="content"  required>
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Nội dung" class="form-control" id="content1" name="content1"></textarea>
                            </div>
                        </form>  
                    </div>
                </div>
                <div class="contact-right">
                    <div class="contact-right-title">
                        <h1>CÂU HỎI THƯỜNG GẶP</h1>
                    </div>
                    <div class="question-box">
                        <div class="question">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <p>Những địa điểm nào tốt nhất khi đi du lịch Đà lạt ?</p>
                        </div>
                        <div class="question">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <p>Những món ngon nào tốt nhất khi đi du lịch Đà lạt ?</p>
                        </div>
                        <div class="question">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <p>Người Đà lạt có thân thiện không ?</p>
                        </div>
                        <div class="question">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <p>Những địa điểm vui chơi khi đi du lịch Đà lạt ?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

