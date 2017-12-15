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
    <div class="row">
        <div class="col s7 offset-s3">
            <div class="card-panel white">
                <form id="edit-cakahim-form" method="POST" action="post_add_programming_language.php"
                      enctype="multipart/form-data">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="nama" type="text" class="validate" name="nama">
                            <label for="nama">Nama Bahasa</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                                <textarea id="keterangan" class="materialize-textarea"
                                          name="keterangan" maxlength="100000"></textarea>
                            <label for="keterangan">Keterangan</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="file-field input-field col s12">
                            <div class="btn">
                                <span>File</span>
                                <input id="the-file" name="the_file" type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input id="nama-file" name="nama_file" class="file-path validate" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s5 offset-s8">
                            <button class="btn waves-effect waves-light" type="submit" name="action">
                                Tambah
                                <i class="material-icons right">add</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<script>
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