<?= $this->extend('layout/template_users'); ?>

<?= $this->section('content'); ?>
<div class="content">
    <div class="page-inner">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-9">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="page-title">Kode Pesanan #<?= $id; ?></h4>
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
                        <div class="invoice-detail">
                            <div class="invoice-item">
                                <div class="invoice-top">
                                    <h3 class="title"><strong>Form Pemesanan</strong></h3>
                                </div>
                                <div class="card card-with-nav">
                                    <form method="post" action="/pemesanan/create">
                                        <div class="card-body">
                                            <div class="row mt-3">
                                                <div class="col-md-12">
                                                    <div class="form-group form-group-default">
                                                        <label>ID Pelanggan</label>
                                                        <input type="text" class="form-control" name="NamaPemesan" placeholder="Nama Lengkap" value="<?= $IDPelanggan; ?>" required readonly>
                                                    </div>
                                                    <div class="form-group form-group-default">
                                                        <label>Nama Lengkap</label>
                                                        <input type="text" class="form-control" name="NamaPemesan" placeholder="Nama Lengkap" value="<?= $nama_lengkap; ?>" required readonly>
                                                    </div>
                                                    <div class="form-group form-group-default">
                                                        <label>Nomor Telepon</label>
                                                        <input type="number" class="form-control" name="NomorTlp" placeholder="Nomor Telepon" value="<?= $NomorTlp; ?>" required readonly>
                                                    </div>
                                                    <div class="form-group form-group-default">
                                                        <label>Alamat Lengkap</label>
                                                        <textarea name="Alamat" id="" cols="30" rows="2" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Berat Pakaian</label>
                                                        <div class="input-group">
                                                            <input type="number" id="berat" class="form-control" name="BeratPakaian" placeholder="Berat Pakaian" aria-label="Berat Pakaian" aria-describedby="basic-addon2" min="1" required>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2"> KG</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-group-default">
                                                        <label>Kondisi Pakaian</label>
                                                        <input type="text" class="form-control" name="KondisiPakaian" placeholder="Kondisi Pakaian" value="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Tipe Pakaian</label>
                                                        <input type="text" class="form-control" name="TipePakaian" placeholder="Tipe Pakaian" value="" required>
                                                    </div>
                                                    <div class="form-group form-group-default">
                                                        <label>Waktu Pengerjaan</label>
                                                        <select name="WaktuPengerjaan" id="waktukerja" class="form-control" required>
                                                            <option value="">- Pilihan -</option>
                                                            <option value="6" data-harga="10000">Express (6 Jam)</option>
                                                            <option value="48" data-harga="7000">Cepat (2 Hari)</option>
                                                            <option value="72" data-harga="5000">Normal (3 Hari)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Metode Pembayaran</label>
                                                        <select name="MetodePembayaran" class="form-control" required>
                                                            <option value="">- Pilihan -</option>
                                                            <option value="OVO">OVO</option>
                                                            <option value="GOPAY">GOPAY</option>
                                                            <option value="DANA">DANA</option>
                                                            <option value="TRANSFER BANK">TRANSFER BANK</option>
                                                            <option value="COD">COD</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Delivery</label>
                                                        <select name="HargaDelivery" id="HargaDelivery" class="form-control" required>
                                                            <option value="">- Pilihan -</option>
                                                            <option value="7000">Antar (Rp 7.000)</option>
                                                            <option value="5000">Jemput (Rp 5.000)</option>
                                                            <option value="10000">Antar - Jemput (Rp 15.000)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group form-group-default">
                                                        <label>Total</label>
                                                        <input type="text" class="form-control" id="total" name="Jumlah" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer mt-2">
                                            <button type="submit" class="btn btn-primary btn-md pull-right mb-2">Pesan</button>
                                        </div>
                                    </form>
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
<?= $this->include('layout/footer'); ?>
<script>
    $(document).ready(function() {
        $("#berat").on("change", function() {
            var berat = $(this).val();
            if (berat <= 0) {
                alert("Pemesanan Minimal berat 1 KG");
                $(this).val(1);
                berat += 1;
            }
            var harga = 7000;
            var total = parseInt(berat) * parseInt(harga);
            $("#total").val(total);
        });
        $("#waktukerja").on("change", function() {
            var harga = $(this).find(':selected').data('harga');
            var total = (parseInt($("#berat").val()) * 7000) + harga;
            $("#total").val(total);

        });

        $("#HargaDelivery").on("change", function() {
            var ongkir = $(this).find(':selected').val();
            var total = (parseInt($("#berat").val()) * 7000) + parseInt($("#waktukerja").find(':selected').data('harga')) + parseInt(ongkir);
            $("#total").val(total);
        });
    });
</script>
<?= $this->endSection(); ?>