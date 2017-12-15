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

        th {
            padding: 15px;
        }

        td{
            width:1px;
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
    <div id="delete-bahasa-modal" class="modal modal-fixed-footer" style="height: 200px;width:250px;">
        <div class="modal-content">
            <h5>Yakin ingin hapus</h5>
            <h5 id="nama-bahasa" style="color:#039be5;"></h5>
        </div>
        <div class="modal-footer">
            <a href="post_delete_language.php" class="modal-action modal-close waves-effect waves-green btn-flat"
               onclick="event.preventDefault();document.getElementById('delete-language-form').submit()">Ya</a>
            <form id="delete-language-form" action="post_delete_language.php" method="POST" style="display:none">
                <input id="id-language" type="hidden" name="id-language">
                <input id="nama-file" type="hidden" name="nama-file">
            </form>
            <a href="admin_edit_programming_languages.php"
               class="modal-action modal-close waves-effect waves-green btn-flat">Tidak</a>
        </div>
    </div>
    <table class="bordered">
        <thead>
        <tr>
            <th>Nama</th>
            <th>Keterangan</th>
            <th>Icon</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        <?php
        $query = mysqli_query($conn, "SELECT * FROM programming_language");

        while ($row = mysqli_fetch_row($query)) {
            echo "<tr>";
            echo "<td>" . $row[1] . "</td>";
            echo "<td>" . $row[2] . "</td>";
            echo "<td class='center'>";
            echo "<img class=\"materialboxed\" src=\"" . $row[3] . "\" width = \"100\" height=\"70\">";
            echo "</td>";
            echo "<td class=\"center\">
            <div class=\"row\">
                <div class=\"col s2\">
                    <a href=\"show_edit.php\" onclick=\"event.preventDefault();document.getElementById('show-edit-form').submit()\"><i
                                class=\"material-icons\">edit</i></a>
                        <form id=\"show-edit-form\" action=\"show_edit.php\" method=\"POST\" style=\"display:none\">
                            <input type=\"hidden\" name=\"id-language\" value=\"".$row[0]."\">
                            <input type=\"hidden\" name=\"nama-language\" value=\"".$row[1]."\">
                            <input type=\"hidden\" name=\"keterangan-language\" value=\"".$row[2]."\">
                            <input type=\"hidden\" name=\"link-keterangan-language\" value=\"".$row[4]."\">
                            <input type=\"hidden\" name=\"nama-file-language\" value=\"".$row[3]."\">
                        </form>
                </div>
                <div class=\"col s2\">
                    <a href=\"Javascript:openModalDelete('$row[0]','$row[1]','$row[3]')\"><i
                                class=\"material-icons\">delete</i></a>
                </div>
            </div>
        </td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</main>

<script>
    $(document).ready(function () {
        $('.modal').modal();
    });

    $('.dropdown-button').dropdown({
            constrainWidth: true, // Does not change width of dropdown to that of the activator
            hover: true, // Activate on hover
            gutter: 0, // Spacing from edge
            belowOrigin: true, // Displays dropdown below the button
            alignment: 'left', // Displays dropdown with edge aligned to the left of button
        }
    );

    function openModalDelete(id, nama, namaFile) {
        document.getElementById('nama-bahasa').textContent = nama;
        document.getElementById('id-language').value = id;
        document.getElementById('nama-file').value = namaFile;
        $('#delete-bahasa-modal').modal('open');
    }
</script>
</body>