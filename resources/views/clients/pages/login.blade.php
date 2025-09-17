@extends('clients.layout.client')

@section('title', 'Đăng nhập')
@section('breadcrumb', 'Đăng nhập')

@section('content')
        <!-- KHU VỰC ĐĂNG NHẬP BẮT ĐẦU -->
        <div class="ltn__login-area pb-65">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area text-center">
                            <h1 class="section-title">Đăng nhập <br>Vào Tài Khoản Của Bạn</h1>
                            <p>Hãy đăng nhập để tiếp tục trải nghiệm các dịch vụ của chúng tôi.<br>
                                Chúng tôi luôn sẵn sàng hỗ trợ bạn.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Form đăng nhập -->
                    <div class="col-lg-6">
                        <div class="account-login-inner">
                            <form action="#" class="ltn__form-box contact-form-box" method="POST" id="login-form"> 
                                @csrf

                                <input type="email" name="email" placeholder="Email*" required>
                                @error('email')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                                <input type="password" name="password" placeholder="Mật khẩu*">
                                @error('password')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                                <div class="btn-wrapper mt-0">
                                    <button class="theme-btn-1 btn btn-block" type="submit">ĐĂNG NHẬP</button>
                                </div>
                                <div class="go-to-btn mt-20">
                                    <a href="#"><small>QUÊN MẬT KHẨU?</small></a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Chuyển sang đăng ký -->
                    <div class="col-lg-6">
                        <div class="account-create text-center pt-50">
                            <h4>BẠN CHƯA CÓ TÀI KHOẢN?</h4>
                            <p>Thêm sản phẩm vào danh sách yêu thích, nhận gợi ý cá nhân hóa, <br>
                                thanh toán nhanh chóng và theo dõi đơn hàng dễ dàng.</p>
                            <div class="btn-wrapper">
                                <a href="{{ route('register') }}" class="theme-btn-1 btn black-btn">TẠO TÀI KHOẢN</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- KHU VỰC ĐĂNG NHẬP KẾT THÚC -->
@endsection
