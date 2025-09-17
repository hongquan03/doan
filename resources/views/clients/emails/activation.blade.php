<!DOCTYPE html>
<html>
<head>
    <title>Kích hoạt tài khoản</title>
</head>
<body>
    <p>Xin chào, {{ $user->name }}</p>
    <p>Để hoàn tất đăng ký trên website của chúng tôi, vui lòng nhấp vào liên kết dưới đây để kích hoạt tài khoản của bạn:</p>
    <a href="{{ url('/activate/'.$token) }}" style="padding: 10px 50px; background-color: green; color: #fff; text-decoration: none;">
        Kích hoạt tài khoản
    </a>
    <p>Trân trọng,</p>
    <p>Đội ngũ hỗ trợ khách hàng</p>
</body>
</html>
