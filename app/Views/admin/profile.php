<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>
<div class="content">
    <div class="page-inner">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-9">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="page-title">Kode Pelanggan #<?= $id; ?></h4>
                    </div>
                    <div class="col-auto">
                        <a href="/dashboard" class="btn btn-primary ml-2">
                            <span><i class="fas fa-arrow-left"></i></span> Kembali
                        </a>
                    </div>
                </div>
                <div class="page-divider"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-invoice">
                            <div class="card-body">
                                <div class="invoice-detail">
                                    <div class="invoice-item">
                                        <div class="card card-with-nav">
                                            <div class="card-body">
                                                <div class="row mt-3">
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Nama Lengkap</label>
                                                            <input type="text" class="form-control" name="name" placeholder="Name" value="<?= $nama_lengkap; ?>" readonly style="opacity: 1!important;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Username</label>
                                                            <input type="text" class="form-control" name="email" placeholder="Name" value="<?= $User_Name; ?>" readonly style="opacity: 1!important;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Nomor Telepon</label>
                                                            <input type="text" class="form-control" name="email" placeholder="Name" value="<?= $NomorTlp; ?>" readonly style="opacity: 1!important;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="separator-solid mb-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->include('layout/footer'); ?>
<?= $this->endSection(); ?>