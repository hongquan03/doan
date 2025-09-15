@extends('clients.layout.client')

@section('title', 'FAQ')
@section('breadcrumb', 'Những câu hỏi thường gặp')
@section('content')
        <!-- FAQ AREA START (faq-2) (ID > accordion_2) -->
<div class="ltn__faq-area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="ltn__faq-inner ltn__faq-inner-2">
                    <div id="accordion_2">
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-1" aria-expanded="false">
                                Làm thế nào để mua sản phẩm?
                            </h6>
                            <div id="faq-item-2-1" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Để mua sản phẩm, bạn chỉ cần chọn sản phẩm mong muốn, thêm vào giỏ hàng và tiến hành thanh toán theo hướng dẫn trên website.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-2"
                                aria-expanded="true">
                                Làm sao để hoàn tiền trên website?
                            </h6>
                            <div id="faq-item-2-2" class="collapse show" data-parent="#accordion_2">
                                <div class="card-body">
                                    <div class="ltn__video-img alignleft">
                                        <img src="{{ asset('assets/clinets/img/bg/17.jpg') }}" alt="video popup bg image">
                                        <a class="ltn__video-icon-2 ltn__video-icon-2-small ltn__video-icon-2-border----"
                                            href="https://www.youtube.com/embed/LjCzPp-MK48?autoplay=1&amp;showinfo=0"
                                            data-rel="lightcase:myCollection">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                    <p>Bạn có thể yêu cầu hoàn tiền bằng cách liên hệ với bộ phận hỗ trợ khách hàng và cung cấp thông tin đơn hàng để được xử lý nhanh chóng.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-3" aria-expanded="false">
                                Tôi là người dùng mới, nên bắt đầu từ đâu?
                            </h6>
                            <div id="faq-item-2-3" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Bạn hãy đăng ký tài khoản, cập nhật thông tin cá nhân, sau đó tìm kiếm sản phẩm mong muốn và bắt đầu mua sắm.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-4" aria-expanded="false">
                                Chính sách đổi trả và hoàn tiền
                            </h6>
                            <div id="faq-item-2-4" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Bạn có thể đổi hoặc trả hàng trong vòng 7 ngày nếu sản phẩm bị lỗi hoặc không đúng mô tả. Hãy liên hệ với bộ phận hỗ trợ để được hướng dẫn chi tiết.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-5" aria-expanded="false">
                                Thông tin cá nhân của tôi có được bảo mật không?
                            </h6>
                            <div id="faq-item-2-5" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Chúng tôi cam kết bảo mật tuyệt đối thông tin cá nhân và thanh toán của khách hàng, tuân thủ các quy định về bảo mật dữ liệu.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-6" aria-expanded="false">
                                Mã giảm giá không sử dụng được
                            </h6>
                            <div id="faq-item-2-6" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Vui lòng kiểm tra lại thời hạn và điều kiện áp dụng của mã giảm giá. Nếu vẫn không sử dụng được, hãy liên hệ hỗ trợ khách hàng để được trợ giúp.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-7" aria-expanded="false">
                                Làm sao để thanh toán bằng thẻ tín dụng?
                            </h6>
                            <div id="faq-item-2-7" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Khi thanh toán, bạn hãy chọn phương thức thanh toán bằng thẻ tín dụng, sau đó nhập thông tin thẻ để hoàn tất đơn hàng.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="need-support text-center mt-100">
                        <h2>Vẫn cần trợ giúp? Liên hệ bộ phận hỗ trợ 24/7:</h2>
                        <div class="btn-wrapper mb-30">
                            <a href="{{ url('contact') }}" class="theme-btn-1 btn">Liên hệ với chúng tôi</a>
                        </div>
                        <h3><i class="fas fa-phone"></i> +0123-456-789</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar-area ltn__right-sidebar">
                    <!-- Newsletter Widget -->
                    <div class="widget ltn__search-widget ltn__newsletter-widget">
                        <h6 class="ltn__widget-sub-title">// đăng ký nhận tin</h6>
                        <h4 class="ltn__widget-title">Nhận bản tin</h4>
                        <form action="#">
                            <input type="text" name="search" placeholder="Nhập email của bạn">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                        <div class="ltn__newsletter-bg-icon">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                    </div>
                    <!-- Banner Widget -->
                    <div class="widget ltn__banner-widget">
                        <a href="{{ url('shop') }}"><img src="{{ asset('assets/clinets/img/banner/banner-3.jpg') }}" alt="Banner Image"></a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>

        <!-- FAQ AREA START -->

        <!-- COUNTER UP AREA START -->
        <div class="ltn__testimonial-area bg-image pt-115 pb-70" data-bg="img/bg/6.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2 text-center">
                            <h6 class="section-subtitle ltn__secondary-color">// Phản hồi từ khách hàng</h6>
                            <h1 class="section-title">Khách hàng nói gì về chúng tôi<span>.</span></h1>
                        </div>
                    </div>
                </div>
                <div class="row ltn__testimonial-slider-3-active slick-arrow-1">
                    <!-- Đánh giá 1 -->
                    <div class="col-lg-4">
                        <div class="ltn__testimonial-item ltn__testimonial-item-3">
                            <div class="ltn__testimonial-img">
                                <img src="{{asset('assets/clinets/img/testimonial/1.jpg')}}" alt="Hình ảnh khách hàng">
                            </div>
                            <div class="ltn__testimonial-info">
                                <p>“Dịch vụ của công ty thật sự vượt ngoài mong đợi! Nhân viên chuyên nghiệp và kết quả tuyệt vời.”</p>
                                <h4>David Miller</h4>
                                <h6>Doanh nhân</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Đánh giá 2 -->
                    <div class="col-lg-4">
                        <div class="ltn__testimonial-item ltn__testimonial-item-3">
                            <div class="ltn__testimonial-img">
                                <img src="{{asset('assets/clinets/img/testimonial/2.jpg')}}" alt="Hình ảnh khách hàng">
                            </div>
                            <div class="ltn__testimonial-info">
                                <p>“Dịch vụ tuyệt vời! Tôi chắc chắn sẽ giới thiệu cho bạn bè và đồng nghiệp.”</p>
                                <h4>Jessica Brown</h4>
                                <h6>Nhà thiết kế</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Đánh giá 3 -->
                    <div class="col-lg-4">
                        <div class="ltn__testimonial-item ltn__testimonial-item-3">
                            <div class="ltn__testimonial-img">
                                <img src="{{asset('assets/clinets/img/testimonial/3.jpg')}}" alt="Hình ảnh khách hàng">
                            </div>
                            <div class="ltn__testimonial-info">
                                <p>“Giao tiếp rất tốt, phản hồi nhanh và đội ngũ cực kỳ chuyên nghiệp. Rất hài lòng!”</p>
                                <h4>Chris Evans</h4>
                                <h6>Chủ doanh nghiệp</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- COUNTER UP AREA END -->

@endsection