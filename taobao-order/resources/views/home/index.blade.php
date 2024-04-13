@extends('layouts.app')
 @section('title', $viewData['title'])
 @section('content')
 <div class="row">
 <div class="col-md-6 col-lg-4 mb-2" >
 <img src="{{ asset('/images/Blue and Orange 3D Delivery Order Instagram Post.png') }}"class="img-fluid rounded">
 </div>
 <div class="col-md-6 col-lg-4 mb-2" class="img-fluid rounded">
 <img src="{{ asset('/images/Blue and Orange 3D Delivery Order Instagram Post (2).png') }}"class="img-fluid rounded">
 </div>
 <div class="col-md-6 col-lg-4 mb-2" class="img-fluid rounded">
 <img src="{{ asset('/images/Laptop Mockup of Fashion Clothing Instagram Post (1).png') }}"class="img-fluid rounded">
 </div>
 <section class="faq-section">
    <div class="container">
        <h2 class="section-title"><hr/>Câu hỏi thường gặp</h2>
        <div class="row">
            <div class="col-md-6 col-lg-6 mb-2">
                <div class="accordion" id="faqAccordion">
                    <!--FAQ1-->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingOne">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                HÀNG ORDER LÀ GÌ?
                           </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Những hàng hóa không được mua trực tiếp tại cửa hàng thường được định nghĩa chung là hàng order. Thông thường loại hàng này được đặt mua qua các website thương mại điện tử hoặc qua các cửa hàng online. Với xu thế hội nhập hiện nay của nền kinh tế Việt Nam nhiều khách hàng có xu hướng chọn mua đồ ngoại chính vì vậy nhu cầu order hàng quốc tế đang ngày càng tăng cao. Tuy nhiên các bước giao dịch đa quốc gia thường phức tạp, nếu bạn không biết các thủ tục giao dịch thì cần tìm sự hỗ trợ từ những dịch vụ đặt hàng Trung Quốc vận chuyển hàng hóa trung gian để thực hiện các giao dịch chính xác và nhanh nhất.
                            </div>
                        </div>
                    </div>
                    <!--FAQ2-->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingTwo">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                ĐẶT HÀNG TRUNG QUỐC TỪ CÁC WEBSITE NHƯ THẾ NÀO
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Nếu bạn đang có nhu cầu đặt hàng Trung Quốc về Việt Nam trước hết cần truy cập ordertaobao.vn và đăng ký tài khoản thành viên. Khi có tài khoản đăng nhập bạn thực hiện tìm kiếm nguồn hàng, chọn nhà cung cấp, chọn sản phẩm và lên đơn đặt hàng. Để biết chi tiết các bước xem ngay: Hướng dẫn đặt hàng tại Order-Taobao chi tiết nhất
                            </div>
                        </div>
                    </div>
                    <!--FAQ3-->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingThree">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                LÀM THẾ NÀO ĐỂ MUA HÀNG TRUNG QUỐC ĐÚNG SẢN PHẨM
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Hiện nay các sàn thương mại điện tử của Trung Quốc đều chỉ sử dụng tiếng bản địa, nếu muốn tìm đúng nguồn hàng bạn cần sử dụng các công cụ dịch của GG. Tuy nhiên, để hỗ trợ khách hàng tốt nhất, NH China phát triển chức năng dịch tự động, nếu bạn đặt hàng với chúng tôi, công cụ dịch tự động trên thanh tìm kiếm sẽ giúp bạn nhanh chóng tìm kiếm sản phẩm bằng tiếng Việt.
                            </div>
                        </div>
                    </div>
                    <!--FAQ4-->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFour">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                           LỰA CHỌN HÀNG NHƯ THẾ NÀO ĐỂ TRÁNH HÀNG GIẢ, HÀNG NHÁI                            </button>
                        </h3>
                        <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                            Tại các website TMĐT của Trung Quốc sẽ có những cách xem chi tiết hàng hóa khác nhau. Việc tìm kiếm nâng cao và tra cứu đánh giá sản phẩm là cách tốt nhất để bạn kiểm tra xem nguồn hàng có chất lượng hay không. Xem ngay cách lựa chọn tìm kiếm nâng cao đánh giá nguồn hàng mà chúng tôi tổng hợp được.
                            </div>
                        </div>
                    </div>
                    <!--FAQ5-->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFive">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                           LỰA CHỌN NHÀ CUNG CẤP NHƯ THẾ NÀO
                            </button>
                        </h3>
                        <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                            Thông thường mỗi nhà cung cấp trên sàn TMĐT sẽ được nhiều lượt mua hàng và phản hồi về sản phẩm tích cực hơn những shop còn lại. Nếu muốn chọn đúng nhà cung cấp tốt, bạn nên kiểm tra phản hồi của khách hàng và xem những bình luận sản phẩm bằng ảnh thật để đánh giá và lựa chọn. Nhằm giúp bạn có nguồn hàng tốt nhất chúng tôi đã tổng hợp danh sách các nhà cung cấp hàng Trung Quốc uy tín, bạn hãy xem ngay!
                            </div>
                        </div>
                    </div>
                    <!--FAQ6-->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingSix">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                           BẠN CÓ THỂ ĐẶT MUA GÌ VỚI NHẬP HÀNG CHINA
                            </button>
                        </h3>
                        <div id="collapseSix" class="accordion-collapse collapse show" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                            Chúng tôi có thể thỏa mãn mọi nhu cầu mua hàng của bạn từ các sản phẩm thời trang, đồ gia dụng, mỹ phẩm, các sản phẩm làm đẹp, thiết bị dân dụng, đồ điện tử,... Bên cạnh đó, chúng tôi tuyệt đối không đặt và vận chuyển các loại hàng hóa thuộc danh sách hàng cấm và những loại mặt hàng dễ cháy nổ, dễ vỡ.
                            </div>
                        </div>
                    </div>
                    <!--FAQ7-->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingSeven">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                           GIAO DỊCH KHI ORDER HÀNG TRUNG QUỐC NHƯ THẾ NÀO
                           </button>
                        </h3>
                        <div id="collapseSeven" class="accordion-collapse collapse show" aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                            Để đặt hàng order từ Trung Quốc về Việt Nam bạn sẽ chọn sản phẩm và gửi link sản phẩm đó cho NH China. Sau khi nhận link, đội ngũ CSKH của chúng tôi sẽ kết nối 2 chiều cho quý khách và nhà cung cấp để đàm phán giá và chốt đơn hàng. Khi đã chốt được đơn hàng, bạn có thể làm theo hướng dẫn đặt hàng chi tiết của chúng tôi và chờ sản phẩm về tay chỉ sau vài ngày.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 mb-2">
                <img src="{{asset('/images/banner-faq.png')}}" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>
 <section class="testimonial-section">
    <div class="container">
        <h2 class="section-title">Ý kiến khách hàng</h2>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"Tôi rất hài lòng với sản phẩm và dịch vụ của công ty. Họ rất chuyên nghiệp và chu đáo."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="avatar1.jpg" alt="Avatar 1" class="testimonial-avatar">
                        <h4 class="testimonial-name">Nguyễn Văn A</h4>
                        <p class="testimonial-role">Khách hàng</p>
                    </div>
                </div>
            </div>
            <!-- Thêm các testimonial card khác ở đây -->
        </div>
    </div>
</section>
 @endsection