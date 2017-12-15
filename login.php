<!DOCTYPE html>
<?php session_start(); ?>
<?php include 'db_connection.php' ?>
<html>
<head>
    <title>Welcome</title>

    <link rel="stylesheet" href="materialize/css/materialize.min.css">

    <script src="materialize/js/jquery-3.2.1.min.js"></script>
    <script src="materialize/js/materialize.min.js"></script>

    <style>
        body {
            background: white;
        }

        .section.scrollspy {
            height: 100vh;
            padding-top: 0;
        }

        .card-panel {
            height: 100vh;
        }
    </style>
</head>
<body>
<header>
    <nav>
        <div class="nav-wrapper teal">
            <a href="index.php" class="brand-logo">Home</a>
        </div>
    </nav>
</header>
<div class="container" style="padding-top: 100px;">
    <div class="card" style="padding: 40px; width: 50%;">
        <div class="row">
            <form class="col s12" action="post_login.php" method="post">
                <div class="row">
                    <div class="col s8 offset-s2">
                        <h4>Login</h4>
                    </div>
                </div>
                <?php
                if (isset($_SESSION['message'])) {
                    echo "<div class=\"row\">";
                    echo "<div class=\"input-field col s8 offset-s2\">";
                    echo "<span style='color: red;'>" . $_SESSION['message'] . "</span>";
                    echo "</div>";
                    echo "</div>";
                    unset($_SESSION['message']);
                }
                ?>
                <div class="row">
                    <div class="input-field col s8 offset-s2">
                        <input id="user_name_login" type="text" class="validate" name="user_name_login">
                        <label for="user_name_login">Username</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8 offset-s2">
                        <input id="password_login" type="password" class="validate" name="password_login">
                        <label for="password_login">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s8 offset-s2">
                        <input type="submit" value="login" id="button_login" class="waves-effect waves-light btn">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>