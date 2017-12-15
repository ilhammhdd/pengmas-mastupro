<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="materialize/css/materialize.min.css">

    <script src="materialize/js/jquery-3.2.1.min.js"></script>
    <script src="materialize/js/materialize.min.js"></script>

    <title>Register new</title>
</head>
<body>
<div class="container" style="padding-top: 100px;">
    <div class="card" style="padding: 40px; width: 50%;">
        <div class="row">
            <form class="col s12" action="post_register.php" method="post">
                <div class="row">
                    <div class="col s8 offset-s2">
                        <h4>Register new</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8 offset-s2">
                        <input id="user_name_register" type="text" name="user_name_register" required>
                        <label for="user_name_register">Username</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8 offset-s2">
                        <input id="password_register" type="password" name="password_register" required>
                        <label for="password_register">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8 offset-s2">
                        <input id="password_confirm_register" type="password" name="password_confirm_register" required>
                        <label for="password_confirm_register">Confirm Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s8 offset-s2">
                        <span id="message"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col s8 offset-s2">
                        <input type="submit" id="button_register" class="waves-effect waves-light btn" value="Register">
                    </div>
                </div>
                <h4 id="test_password"></h4>
            </form>
        </div>
    </div>
</div>
</body>
<script>
    $('#password_register, #password_confirm_register').on('keyup', function () {

        var password = $('#password_register').val();
        var password_confirm = $('#password_confirm_register').val();

        if (password == '') {
            $('#message').html('Password tidak boleh kosong').css('color', 'red');
        } else if (password != password_confirm) {
            $('#message').html('Password harus sama').css('color', 'red');
        } else {
            $('#message').html('Password sesuai').css('color', 'green');
        }
    });
</script>
</html>