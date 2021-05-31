<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Header -->

<section class="menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4>Selamat datang di Web Helpdesk, ada yang bisa kami bantu?</h4>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 offset-sm-1">
                <div class="list-group">
                    <a href="<?= base_url('pengajuan/create') ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1" style="color: darkblue;"><b>Pengajuan layanan</b></h6>
                            <br>
                        </div>
                        <small class="text-muted">Kirim pengajuan untuk mendapatkan layanan</small>
                    </a>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="list-group">
                    <a href="<?= base_url('pengajuan/search') ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1" style="color: darkblue;"><b>Lihat pengajuan yang ada</b></h6>
                        </div>
                        <small class="text-muted">Tampilkan pengajuan yang pernah anda kirimkan sebelumnya</small>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<section class="lampiran">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="text-center">Lampiran</h4>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 offset-sm-3 text-center">
                <a href="<?= base_url('lampiran/SOP-23-01-2018 SOP Pengajuan Layanan Hosting.docx') ?>" style="text-decoration:none" download>Pengajuan Layanan Hosting</a>
                <br>
                <a href="#" style="text-decoration:none" download>Pengajuan Layanan Jaringan Baru</a>
                <br>
                <a href="#" style="text-decoration:none" download>Pengajuan Layanan Sub Domain</a>
                <br>
                <a href="#" style="text-decoration:none" download>Pengajuan Troubleshooting</a>
                <br>
                <a href="#" style="text-decoration:none" download>Hak Akses TI</a>
                <br>
                <a href="#" style="text-decoration:none" download>Pendaftaran VOIP dan Email</a>
                <br>
                <a href="#" style="text-decoration:none" download>Penitipan dan Pengembalian Server</a>
                <br>
                <a href="#" style="text-decoration:none" download>Back Up dan Restore Data</a>
            </div>
            <div class="col-sm-3 text-center">
                <a href="#" style="text-decoration:none" download>Penanganan Gangguan Server</a>
                <br>
                <a href="#" style="text-decoration:none" download>Perubahan Bandwidth</a>
                <br>
                <a href="#" style="text-decoration:none" download>Perubahan Password Email</a>
                <br>
                <a href="#" style="text-decoration:none" download>Integrasi Sistem Informasi</a>
                <br>
                <a href="#" style="text-decoration:none" download>Pengembangan Sistem Informasi</a>
                <br>
                <a href="#" style="text-decoration:none" download>Pengarsipan Sistem Informasi</a>
                <br>
                <a href="#" style="text-decoration:none" download>Akses Data Center</a>
                <br>
                <a href="#" style="text-decoration:none" download>Pengajuan Layanan VPS</a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>