<!DOCTYPE html>
<?php
session_start();
include 'db_connection.php';
if (!$_SESSION['account_verified']) {
    header("location: login.php");
};
?>
<html>
<head>
    <title>Admin Home</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">

    <script src="materialize/js/jquery-3.2.1.min.js"></script>
    <script src="materialize/js/materialize.min.js"></script>

    <style>
        header, main, footer {
            padding-left: 280px;
        }

        @media only screen and (max-width: 992px) {
            header, main, footer {
                padding-left: 0;
            }
        }

        .side-nav {
            width: 280px;
            padding-top: 50px;
        }

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
<ul id="slide-out" class="side-nav fixed">
    <li>
        <a href="admin_home.php"><i class="material-icons">home</i>Home</a>
    </li>
    <li>
        <a class="dropdown-button menu" href="#languages" data-activates="dropdown-languages"><i
                    class="material-icons">code</i><b>Programming Languages</b></a>
        <ul id='dropdown-languages' class='dropdown-content'>
            <li><a href="admin_show_programming_languages.php">See All Programming Languages</a></li>
            <li><a href="admin_edit_programming_languages.php">Edit Programming Languages</a></li>
            <li><a href="admin_add_programming_languages.php">Add Programming Languages</a></li>
        </ul>
    </li>
    <li>
        <a href="admin_home.php"><i class="material-icons">import_export</i>Export as PDF</a>
    </li>
</ul>
<header>
    <nav style="background-color: #00bfa5;">
        <div class="nav-wrapper teal">
            <a style="font-size: 25px;">Muhammad Ilham 1202150049</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <form action='post_logout.php' method='post'>
                    <li><input type='submit' value='LOGOUT' class='waves-effect waves-light btn-small'></li>
                </form>
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

<script type="text/javascript">
    $(document).ready(function () {
        $('.carousel').carousel();
    });

    $('.dropdown-button').dropdown({
            constrainWidth: true, // Does not change width of dropdown to that of the activator
            hover: true, // Activate on hover
            gutter: 0, // Spacing from edge
            belowOrigin: true, // Displays dropdown below the button
            alignment: 'left', // Displays dropdown with edge aligned to the left of button
        }
    );
</script>
</body>