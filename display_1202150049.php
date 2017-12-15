<?php
session_start();
include 'db_connection.php';
if (!$_SESSION['account_verified']) {
    header("location: index.php");
};
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script type="text/javascript" src="materialize/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <title>Home</title>
</head>
<body>
<nav style="background-color: #00bfa5;">
    <div class="nav-wrapper">
        <a style="font-size: 25px;">Muhammad Ilham 1202150049</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <?php
            echo "<form action='post_logout.php' method='post'>";
            echo "<li><input type='submit' value='LOGOUT' class='waves-effect waves-light btn'></li>";
            echo "</form>";
            ?>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <table>
            <thead>
            <tr>
                <th>Kode Iklan</th>
                <th>Jenis</th>
                <th>Gambar</th>
                <th>Harga</th>
                <th>DP</th>
                <th>Bunga</th>
                <th>Cicilan 5thn</th>
                <th>Cicilan 10thn</th>
            </tr>
            </thead>

            <tbody>
            <?php
            $query = mysqli_query($conn, "SELECT * FROM kuis1_1202150049");
            $_SESSION['total_rumah_A'] = 0;
            $_SESSION['total_rumah_B'] = 0;
            $_SESSION['total_rumah_C'] = 0;

            while ($row = mysqli_fetch_row($query)) {
                $dpA = 30 / 100 * $row[4];
                $dpB = 20 / 100 * $row[4];
                $dpC = 15 / 100 * $row[4];

                $bungaA = 12 / 100;
                $bungaB = 10 / 100;
                $bungaC = 8 / 100;

                echo "<tr>";
                echo "<td id='kode_iklan'>" . $row[1] . "</td>";
                echo "<td id='jenis'>" . $row[2] . "</td>";
                echo "<td id='gambar'>";
                echo "<img src=" . $row[3] . " style='width: 180px; height: 100px;'>";
                echo "</td>";
                if ($row[4] > 1000000000) {
                    $_SESSION['total_rumah_A']++;
                    echo "<td id='harga' style='background-color: yellow'>" . number_format($row[4]) . "</td>";
                } else if ($row[4] <= 1000000000 && $row[4] >= 200000000) {
                    $_SESSION['total_rumah_B']++;
                    echo "<td id='harga' style='background-color: green'>" . number_format($row[4]) . "</td>";
                } else if ($row[4] < 200000000) {
                    $_SESSION['total_rumah_C']++;
                    echo "<td id='harga'>" . number_format($row[4]) . "</td>";
                }

                if ($row[4] > 1000000000) {
                    echo "<td id='dp'>" . number_format($dpA) . "</td>";
                } else if ($row[4] <= 1000000000 && $row[4] >= 200000000) {
                    echo "<td id='dp'>" . number_format($dpB) . "</td>";
                } else if ($row[4] < 200000000) {
                    echo "<td id='dp'>" . number_format($dpC) . "</td>";
                }

                if ($row[4] > 1000000000) {
                    echo "<td id='bunga'>12%</td>";
                } else if ($row[4] <= 1000000000 && $row[4] >= 200000000) {
                    echo "<td id='bunga'>10%</td>";
                } else if ($row[4] < 200000000) {
                    echo "<td id='bunga'>8%</td>";
                }

                $cicilan5thnA = ($row[4] - $dpA) * $bungaA * 5 / 60;
                $cicilan5thnB = ($row[4] - $dpB) * $bungaB * 5 / 60;
                $cicilan5thnC = ($row[4] - $dpC) * $bungaC * 5 / 60;

                if ($row[4] > 1000000000) {
                    echo "<td id='cicilan_5thn'>" . number_format($cicilan5thnA) . "</td>";
                } else if ($row[4] <= 1000000000 && $row[4] >= 200000000) {
                    echo "<td id='cicilan_5thn'>" . number_format($cicilan5thnB) . "</td>";
                } else if ($row[4] < 200000000) {
                    echo "<td id='cicilan_5thn'>" . number_format($cicilan5thnC) . "</td>";
                }

                $cicilan10thnA = ($row[4] - $dpA) * $bungaA * 5 / 120;
                $cicilan10thnB = ($row[4] - $dpB) * $bungaB * 5 / 120;
                $cicilan10thnC = ($row[4] - $dpC) * $bungaC * 5 / 120;

                if ($row[4] > 1000000000) {
                    echo "<td id='cicilan_5thn'>" . number_format($cicilan10thnA) . "</td>";
                } else if ($row[4] <= 1000000000 && $row[4] >= 200000000) {
                    echo "<td id='cicilan_5thn'>" . number_format($cicilan10thnB) . "</td>";
                } else if ($row[4] < 200000000) {
                    echo "<td id='cicilan_5thn'>" . number_format($cicilan10thnC) . "</td>";
                }
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col s6">
            <?php
            echo "<p>Total Rumah Kategori A :" . $_SESSION['total_rumah_A'] . "</p>";
            echo "<p>Total Rumah Kategori B :" . $_SESSION['total_rumah_B'] . "</p>";
            echo "<p>Total Rumah Kategori C :" . $_SESSION['total_rumah_C'] . "</p>";
            ?>
        </div>
        <div class="col s6 right-align">
            <a class="waves-effect waves-light btn modal-trigger" href="#modal_tambah">tambah</a>
        </div>
    </div>
    <!--    <div class="row">-->
    <!--        <a class="waves-effect waves-light btn modal-trigger" href="#modal_tambah">tambah</a>-->
    <!--    </div>-->
    <div id="modal_tambah" class="modal modal-fixed-footer" style="height:600px !important;">
        <form class="col s12" action="post_properti_baru.php" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <h5>Tambah Properti</h5>
                <div class="row">

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="kode_iklan" type="text" class="validate" name="kode_iklan">
                            <label for="kode_iklan">Kode Iklan</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="jenis" type="text" class="validate" name="jenis">
                            <label for="jenis">Jenis</label>
                        </div>
                    </div>
                    <div class="row">
                        <p class="col s12">File Gambar</p>
                        <div id="file_field" class="file-field input-field">
                            <div class="btn">
                                <span>File</span>
                                <input type="file" name="filenya">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" name="file_path">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="harga" type="text" class="validate" name="harga">
                            <label for="harga">Harga</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="modal-action modal-close waves-effect waves-green btn-flat" value="tambah"
                       name="submit">
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function () {
        // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
        $('.modal').modal();
    });
</script>
</body>
</html>