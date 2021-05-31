<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Header -->

<section class="menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <span class="login100-form-title" style="color:darkblue;">
                    LIHAT PENGAJUAN YANG SEBELUMNYA
                </span>
                <br>
                <h3 style="color: gray;">Silahkan Masukkan Kode Pengajuan Lalu Tekan Cari</h3>
                <br>
                <br>
            </div>
            <div class="row">
                <form method="post" action="/pengajuan/search">
                    <div class="col-md-4 offset-sm-4 text-center">
                        <div class="input-group">
                            <input id="search-focus" type="search" name="search" class="form-control" placeholder="Masukkan Kode Pengajuan" />
                        </div>
                        <br>
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button type="submit" class="login100-form-btn">
                                    Cari Pengajuan
                                </button>
                            </div>
                        </div>
                        <div class="txt1 text-center p-t-54 p-b-20">
                            <a href="/home">
                                Kembali
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <?php if (isset($errors)) : ?>
                <div class="table-responsive-sm">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">KODE</th>
                                <th scope="col">PEMOHON</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">LAYANAN</th>
                                <th scope="col">TANGGAL PENGAJUAN</th>
                                <th scope="col">STATUS</th>
                                <th scope="col">KETERANGAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="8" class="text-center"><?= $errors ?></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            <?php elseif (isset($data)) : ?>
                <div class="table-responsive-sm">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">KODE</th>
                                <th scope="col">PEMOHON</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">LAYANAN</th>
                                <th scope="col">TANGGAL PENGAJUAN</th>
                                <th scope="col">STATUS</th>
                                <th scope="col">KETERANGAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><?= $data->kode ?></td>
                                <td><?= strtoupper($data->nama_pemohon) ?></td>
                                <td><?= strtoupper($data->email) ?></td>
                                <td><?= strtoupper($data->nama_layanan) ?></td>
                                <td><?= date("d M Y H:i:s", strtotime($data->tgl_pengajuan)) ?></td>
                                <td><?= strtoupper($data->status) ?></td>
                                <td><?= strtoupper($data->keterangan) ?></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>