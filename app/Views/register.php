<?= $this->include('layout/header_login'); ?>
<div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
        <div class=" p-l-55 p-r-55 p-t-65 p-b-54">
            <div class="logo text-center">
                <img src="<?= base_url('logo.png') ?>" width="300" alt="mylaundry_logo">
                <h5 style="color:grey">Register</h5>
            </div>
            <hr>
            <?php if (isset($validation)) : ?>
                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
            <?php endif; ?>
            <form class="login100-form validate-form" method="post" action="/daftar/save">
                <div class="row">
                    <div class="col-md-6">
                        <div class="wrap-input100 validate-input m-b-23" data-validate="Nama Lengkap is required">
                            <span class="label-input100">Nama Depan</span>
                            <input class="input100" type="text" name="Nama_Depan" placeholder="Masukkan Nama Depan">
                            <span class="focus-input100" data-symbol="&#xf206;"></span>
                        </div>
                        <div class="wrap-input100 validate-input m-b-23" data-validate="Nama Lengkap is required">
                            <span class="label-input100">Nama Belakang</span>
                            <input class="input100" type="text" name="Nama_Belakang" placeholder="Masukkan Nama Belakang">
                            <span class="focus-input100" data-symbol="&#xf206;"></span>
                        </div>

                        <div class="wrap-input100 validate-input m-b-23" data-validate="Nama Lengkap is required">
                            <span class="label-input100">Email</span>
                            <input class="input100" type="email" name="Email" placeholder="Masukkan Email">
                            <span class="focus-input100" data-symbol="&#x2709;"></span>
                        </div>

                        <div class="wrap-input100 validate-input m-b-23" data-validate="Nama Lengkap is required">
                            <span class="label-input100">No. Telepon</span>
                            <input class="input100" type="number" name="NomorTlp" placeholder="Masukkan No. Telepon">
                            <span class="focus-input100" data-symbol="&#xf2b6;"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="wrap-input100 validate-input m-b-23" data-validate="Username is required">
                            <span class="label-input100">Username</span>
                            <input class="input100" type="text" name="User_Name" placeholder="Masukkan username">
                            <span class="focus-input100" data-symbol="&#xf206;"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <span class="label-input100">Password</span>
                            <input class="input100" type="password" name="Password" placeholder="Masukkan password">
                            <span class="focus-input100" data-symbol="&#xf190;"></span>
                        </div>
                    </div>
                </div>
                <div class="text-right p-t-8 p-b-31">

                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button type="submit" class="login100-form-btn">
                            Register
                        </button>
                    </div>
                </div>

                <div class="txt1 text-center p-t-54 p-b-20">
                    <a href="/login">
                        Kembali
                    </a>
                </div>
                <?= $this->include('layout/footer_login'); ?>
            </form>
        </div>
    </div>
</div>
</body>

</html>