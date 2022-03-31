
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login </title>
    <link rel="stylesheet" href="./script/css/style.login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title login">
                เข้าสู่ระบบ
            </div>
            <div class="title signup">
                สมัครสมาชิก
            </div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Signup</label>
                <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
                <form action="" method="post" class="login">
                    <div class="field">
                        <input type="email" name="email" id="email" placeholder="อีเมล์" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password" id="password" placeholder="รหัสผ่าน" required>
                    </div>

                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" name="submit" value="Login">
                    </div>
                    <div class="signup-link">
                        คุณยังไม่เป็นสมาชิก? <a href="">Signup now</a>
                    </div>



                </form>
                <form  action="" method="post" class="signup">
                    <div class="field">
                        <input type="text" name="firstname" placeholder="ชื่อ" required>
                    </div>
                    <div class="field">
                        <input type="text" name="lastname" placeholder="นามสกุล" required>
                    </div>
                    <div class="field">
                        <input type="text" name="telephone" placeholder="เบอร์โทร" required>
                    </div>
                    <div class="field">
                        <input type="email" name="email" placeholder="อีเมล์" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password" placeholder="รหัสผ่าน" required>
                    </div>
                    <div class="field">
                        <input type="password" name="confirm_password" placeholder="ยืนยันรหัสผ่าน" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" name="submit" value="Signup">
                    </div>
                </form>

            </div>
        </div>
    </div>
    <script>
    const loginText = document.querySelector(".title-text .login");
    const loginForm = document.querySelector("form.login");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector("form .signup-link a");
    signupBtn.onclick = (() => {
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
    });
    loginBtn.onclick = (() => {
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
    });
    signupLink.onclick = (() => {
        signupBtn.click();
        return false;
    });
    </script>
</body>

</html>