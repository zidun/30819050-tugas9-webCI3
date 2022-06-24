<html>
<head>
    <title>30819050 - Login Page</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>
<?php
if (isset($this->session->userdata['is_login'])) {
    header("location: dashboard");
}
?>
<body>
    <div class="container">
        <br><br>
        <div class="card">
            <div class="card-header">
                30819050 - Login Form
            </div>
            <div class="card-body">
                <?php
                if ($this->session->flashdata('error') != '') {
                    echo '<div class="alert alert-danger" role="alert">';
                    echo $this->session->flashdata('error');
                    echo '</div>';
                }
                ?>
                <form method="post" action="<?php echo base_url(); ?>index.php/login/postLogin">
                    <div class="form-group">
                        <label for="emailPengguna">Email</label>
                        <input type="email" class="form-control" name="emailPengguna" id="emailPengguna" placeholder="Masuka Email">
                    </div>
                    <div class="form-group">
                        <label for="passPengguna">Password</label>
                        <input type="password" class="form-control" name="passPengguna" id="passPengguna" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>