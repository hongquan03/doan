<?php

namespace App\Http\Controllers\Clinets;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    public function showResetForm($token) {
        return view('clients.auth.reset-password', ['token' => $token]);
        
    }

    public function resetPassword(Request $request)
    {
        $request->validate(
    [
        'email' => 'required|email|exists:users,email',
        'password' => 'required|min:6|confirmed',
        'token' => 'required',
    ],
    [
        'email.required' => 'Vui lòng nhập email.',
        'email.email' => 'Email không hợp lệ.',
        'email.exists' => 'Email này chưa được đăng ký trong hệ thống.',
        'password.required' => 'Vui lòng nhập mật khẩu.',
        'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
        'password.confirmed' => 'Mật khẩu xác nhận không khớp.',
        'token.required' => 'Mã token không hợp lệ hoặc đã hết hạn.',
    ]);
    $status = Password::reset(
        $request->only('email','password','password_confirmation','token'),
        function($user, $password){
            $user->forceFill([
            'password' => Hash::make($password)
        ])->save();
        }      
    );
    if($status === Password::PASSWORD_RESET){
        toastr()->success('Mật khẩu đã được đặt lại thành công.');
        return redirect()->route('login');
    }
    toastr()->error('Đặt lại mật khẩu không thành công.');
    return back()->withErrors(['email' => __($status)]);
    }
}
