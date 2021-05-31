<?= $this->extend('layout/template_users'); ?>

<?= $this->section('content'); ?>
<div class="content">
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Halaman Utama</h2>
                </div>
            </div>
        </div>

    </div>
    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top center" src="<?= base_url('list.png') ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer">
                        <a href="/pemesanan" class="btn btn-info btn-block">Lihat Pemesanan</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top center" src="<?= base_url('payment.png') ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer">
                        <a href="/pembayaran" class="btn btn-info btn-block">Lihat Pembayaran</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top center" src="<?= base_url('delivery.png') ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer">
                        <a href="/delivery" class="btn btn-info btn-block">Delivery</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top center" src="<?= base_url('cart.png') ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer">
                        <a href="/pemesanan/create" class="btn btn-info btn-block">Pemesanan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->include('layout/footer'); ?>
<?= $this->endSection(); ?>