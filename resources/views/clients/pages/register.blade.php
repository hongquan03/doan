@extends('clients.layout.client')

@section('title', 'Đăng ký')
@section('breadcrumb', 'Đăng ký')

@section('content')
        <!-- LOGIN AREA START (Register) -->
        <!-- KHU VỰC ĐĂNG KÝ BẮT ĐẦU -->
<div class="ltn__login-area pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title">Đăng ký <br>Tài khoản của bạn</h1>
                    <p>Vui lòng điền thông tin bên dưới để tạo tài khoản.<br>
                        Hãy chắc chắn rằng thông tin của bạn là chính xác.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="account-login-inner">
                    <form action="{{route('post-register')}}" class="ltn__form-box contact-form-box" method="POST" id="register-form"> {{--  method="POST" id="register-form" --}}
                        @csrf

                        <input type="text" name="name" placeholder="Họ và Tên" value="{{old('name')}}" required> {{--  required --}}
                        @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                        <input type="text" name="email" placeholder="Email*" value="{{old('email')}}" required>
                        @error('email')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                        <input type="password" name="password" placeholder="Mật khẩu*"required>
                        @error('password')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                        <input type="password" name="confirmPassword" placeholder="Xác nhận mật khẩu*"required>
                        @error('confirmPassword')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                        <label class="checkbox-inline">
                            <input type="checkbox" name="checkbox1" value="" required>
                            Tôi đồng ý cho phép trang web xử lý dữ liệu cá nhân của tôi để gửi các thông tin tiếp thị theo chính sách bảo mật.
                        </label>
                        @error('checkbox1')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                        <label class="checkbox-inline">
                            <input type="checkbox" name="checkbox2" value="" required>
                            Bằng cách nhấn "Tạo tài khoản", tôi đồng ý với chính sách bảo mật.
                        </label>
                        @error('checkbox2')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                        <div class="btn-wrapper">
                            <button class="theme-btn-1 btn reverse-color btn-block" type="submit">TẠO TÀI KHOẢN</button>
                        </div>
                    </form>
                    <div class="by-agree text-center">
                        <p>Khi tạo tài khoản, bạn đồng ý với các điều khoản của chúng tôi:</p>
                        <p><a href="#">ĐIỀU KHOẢN SỬ DỤNG &nbsp; &nbsp; | &nbsp; &nbsp; CHÍNH SÁCH BẢO MẬT</a></p>
                        <div class="go-to-btn mt-50">
                            <a href="#">ĐÃ CÓ TÀI KHOẢN ? ĐĂNG NHẬP NGAY</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- KHU VỰC ĐĂNG KÝ KẾT THÚC -->

        <!-- LOGIN AREA END -->

@endsection