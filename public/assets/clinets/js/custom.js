$(document).ready(function () {
    /**************************************************
     * PAGE LOGIN, REGISTER
     **************************************************/

        console.log(2222);
    //Validate register form
    $("#register-form").submit(function (e) {
        let name = $('input[name="name"]').val();
        let email = $('input[name="email"]').val();
        let password = $('input[name="password"]').val();
        let confirmPassword = $('input[name="confirmPassword"]').val();
        let checkbox1 = $('input[name="checkbox1"]').is(':checked');
        let checkbox2 = $('input[name="checkbox2"]').is(':checked');

        let errorMessage = "";

        if (name.length < 3) {
            errorMessage += "Họ và tên phải có ít nhất 3 ký tự. <br>";
        }

        let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            errorMessage += "Email không hợp lệ. <br>";
        }
        if(password.length < 6){
            errorMessage += "Mật khẩu phải có ít nhất 6 ký tự.<br>";
        }
        if(password != confirmPassword)
        {
            errorMessage += "Mật khẩu nhập lại không khớp.<br>"
        }

        if(!checkbox1 || !checkbox2)
        {
            errorMessage += "Bạn pải đồng ý với cấc điều khoản trước khi tạo tài khoản.<br>"
        }
        
        console.log(errorMessage)

        if(errorMessage != "")
        {
            toastr.error(errorMessage,"Lỗi");
            e.preventDefault();
        }
    });
        //Validate login form
    $("#login-form").submit(function (e) {
        toastr.clear();
        let email = $('input[name="email"]').val();
        let password = $('input[name="password"]').val();
        let errorMessage = "";

        let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            errorMessage += "Email không hợp lệ. <br>";
        }
        if(password.length < 6){
            errorMessage += "Mật khẩu phải có ít nhất 6 ký tự.<br>";
        }       
        console.log(errorMessage)

        if(errorMessage != "")
        {
            toastr.error(errorMessage,"Lỗi");
            e.preventDefault();
        }
    });
});
