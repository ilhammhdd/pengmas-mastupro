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
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
    </nav>
</header>

<main>
    <div style="height: 89vh;">
        <div class="row">
            <div class="carousel">
                <?php
                $query = mysqli_query($conn, "SELECT * FROM programming_language");

                while ($row = mysqli_fetch_row($query)) {
                    echo "<a class=\"carousel-item\" href=\"#" . $row[4] . "\"><img src=\"" . $row[3] . "\"></a>";
                }
                ?>
                <!--<a class="carousel-item" href="#c"><img src="storage/images/C.png"></a>
                <a class="carousel-item" href="#c-sharp"><img src="storage/images/C%23.png"></a>
                <a class="carousel-item" href="#java"><img src="storage/images/java.png"></a>
                <a class="carousel-item" href="#php"><img src="storage/images/php.png"></a>
                <a class="carousel-item" href="#python"><img src="storage/images/python.png"></a>-->
            </div>
        </div>

        <div class="row">
            <h5 class="center" style="color:teal;">Click on the picture to see details</h5>
        </div>
    </div>
    <?php
    $query = mysqli_query($conn, "SELECT * FROM programming_language");

    while ($row = mysqli_fetch_row($query)) {
        echo "<div id=\"" . $row[4] . "\" class=\"section scrollspy\">";
        echo "<div class=\"card-panel teal\">";
        echo "<span class=\"white-text\">" . $row[2] . "</span>";
        echo "</div>";
        echo "</div>";
    }
    ?>
</main>

<script type="text/javascript" src="materialize/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.carousel').carousel();
    });
</script>
</body>
</html>