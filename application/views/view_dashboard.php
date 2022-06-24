<html>
<?php
$emailPengguna = ($this->session->userdata['emailPengguna']);
$namaPengguna = ($this->session->userdata['namaPengguna']);
?>

<head>
    <title>Dashboard Page</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="container">
        <br><br><br>
        <div class="card">
            <div class="card-body">
                <?php
                echo "Hallo <b>" . $namaPengguna . "!</b>";
                echo "<br/>";
                echo "<br/>";
                echo "Nama Pengguna : <b>" . $namaPengguna . "</b>";
                echo "<br/>";
                echo "Email : <b>" . $emailPengguna . "</b>";
                echo "<br/>";
                echo "Tugas : <b>9</b>";
                echo "<br/>";
                echo "NIM : <b>3081950</b>";
                echo "<br/>";
                ?>
                <br>
                <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/login/logout" role="button">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>