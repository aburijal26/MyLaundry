<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" />

    <title>Pengajuan Layanan</title>
</head>

<body>
    <header class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <div class="jumbotron text-center">
                <img src="https://i.pinimg.com/564x/f8/f5/c6/f8f5c63583ecd4a25d5f546f276328a8.jpg" alt="diskominfo_boyolali" width="150">
                <h5 style="color:grey"><b>Helpdesk Boyolali</b></h5>
                <hr>
            </div>
        </div>
    </header>
    <section class="content" id="content">
        <div class="container">
            <?php if (isset($validation)) : ?>
                <div class="alert alert-danger">
                    <?= $validation->listError(); ?>
                </div>
            <?php else : ?>
                <?php
                // To print success flash message
                if (session()->get("success")) {
                ?>
                    <div class="alert alert-success">
                        <?= session()->get("success") ?>
                    </div>
                <?php
                }
                ?>
            <?php endif; ?>

            <form name="form-pengajuan" action="<?= base_url('pengajuan/create') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row">
                    <!-- FORM -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h4 style="font-family:verdana; color:grey;">Form Pengajuan Layanan</h4>
                            <p style="text-align: center;color:grey;">Kolom isian yang wajib diisi ditandai dengan <span style="color: red;">*</span></p>
                            <br>
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-sm-3">
                            <label for="nama" class="form-label">Nama Lengkap <span style="color: red;">*</span></label>
                            <input type="text" name="nama_pemohon" class="form-control" id="nama" placeholder="Nama Lengkap" value="<?= set_value('nama_pemohon') ?>">

                            <label for="email" class="form-label">Email <span style="color: red;">*</span></label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?= set_value('email') ?>">

                            <label for="layanan" class="form-label">Jenis Layanan <span style="color: red;">*</span></label>
                            <select name="kode_layanan" class="form-control">
                                <option value="">- Pilih -</option>
                                <?php foreach ($layanan as $row) : ?>
                                    <option <?= set_select("kode_layanan", $row->kode, TRUE) ?> value=<?= $row->kode; ?>><?= $row->nama_layanan; ?></option>;
                                <?php endforeach; ?>
                            </select>

                            <label for="opd" class="form-label">Nama OPD <span style="color: red;">*</span></label>
                            <input type="text" name="nama_opd" class="form-control" id="opd" placeholder="Nama OPD" value="<?= set_value('nama_opd') ?>">

                            <label for="wa" class="form-label">No WhatsApp <span style="color: red;">*</span></label>
                            <input type="text" name="no_wa" class="form-control" id="wa" placeholder="No WhatsApp" value="<?= set_value('no_wa') ?>">

                            <label for="subjek" class="form-label">Subjek <span style="color: red;">*</span></label>
                            <input type="text" name="subjek" class="form-control" id="subjek" placeholder="Subjek" value="<?= set_value('subjek') ?>">

                            <label for="pesan" class="form-label">Pesan <span style="color: red;">*</span></label>
                            <textarea class="form-control" name="pesan" id="pesan" rows="10"><?= set_value('pesan') ?></textarea>

                            <hr>
                            <label for="lampiran" class="form-label form-inline">Lampiran <span style="color: red;">*</span></label>
                            <div class="form-group">
                                <input type="file" id="lampiran" name="lampiran1">
                                <input type="file" id="lampiran" name="lampiran2">
                            </div>
                            <hr>
                            <p style="text-align: center;font-weight: bold;">Pencegahan SPAM</p>
                            <div id="captcha" class="text-center">
                                <img src="<?= 'http://' . $_SERVER['SERVER_NAME'] . ':8080/pengajuan/generateCaptcha' ?>" alt=" gambar" />
                            </div>
                            <p style="text-align: center;color:grey;">Ketikkan angka yang Anda lihat pada gambar di
                                bawah
                                ini.</p>
                            <input type="text" name="captcha" class="form-control" id="captcha" placeholder="Captcha" value="">
                        </div>

                    </div>
                </div>
                <div class="text-center mt-2">
                    <button type="submit" class="btn btn-outline-success">Kirim Pengajuan</button>
                </div>
            </form>

            <div class="txt1 text-center p-t-54 p-b-20">
                <a href="/home">
                    Kembali
                </a>
            </div>
    </section>
    <section class="footer" id="footer">
        <div class="container">
            <hr>
            <p class="">&copy;Copyright 2021 | built by. <a href=" https://www.instagram.com/exsan_f/" lass="stretched-link" target="_blank">Exsan</a></p>
        </div>
    </section>
</body>
<!-- Jquery dan Bootsrap JS -->
<script src="<?= base_url('assets/bootstrap/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
<div>

</div>

</html>