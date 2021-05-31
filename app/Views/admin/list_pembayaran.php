<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>
<div class="content">
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">List Pembayaran</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="table-pengajuan" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ID PEMBAYARAN</th>
                                        <th scope="col">ID PEMESANAN</th>
                                        <th scope="col">HARGA</th>
                                        <th scope="col">TANGGAL PEMESANAN</th>
                                        <th scope="col">STATUS</th>
                                        <th scope="col">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->include('layout/footer'); ?>
<div id="change-status-dialog" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="" method="POST" id="form-update">
                <div class="modal-body">
                    <h2 class="h2">Update Status Pembayaran</h2>
                    <div class="form-group form-group-default">
                        <label>Status Pembayaran</label>
                        <select name="Status_Pembayaran" id="Status_Pembayaran" class="form-control" required>
                            <option value="">- Pilihan -</option>
                            <option value="PENDING">PENDING</option>
                            <option value="PROSES">PROSES</option>
                            <option value="LUNAS">LUNAS</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" role="button" id="update-button" class="btn btn-danger">Update</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $("#change-status-dialog").on('shown.bs.modal', function() {
            $("#form-update").attr('action', '/pembayaran/update/' + $("#change-status-bayar").attr('data-id'));
        });

        var table = $('#table-pengajuan').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?= base_url('pembayaran/ajax_list') ?>",
                "type": "POST"
            },
            //optional
            "lengthMenu": [
                [5, 10, 25],
                [5, 10, 25]
            ],
            "columnDefs": [{
                    "render": function(data, type, row) {
                        var view = "";
                        if (data === "PENDING") {
                            view += `<a id="change-status-bayar" data-id="${row[1]}" href="#change-status-bayar" data-toggle="modal" data-target="#change-status-dialog" type="button" class="btn btn-outline-dark btn-sm">PENDING</a>`;
                        } else if (data === "PROSES") {
                            view += `<a id="change-status-bayar" data-id="${row[1]}" href="#change-status-bayar" data-toggle="modal" data-target="#change-status-dialog" type="button" class="btn btn-outline-info btn-sm">PROSES PEMBAYARAN</a>`;
                        } else if (data === "LUNAS") {
                            view += `<a id="change-status-bayar" data-id="${row[1]}" href="#change-status-bayar" data-toggle="modal" data-target="#change-status-dialog" type="button" class="btn btn-outline-success btn-sm">LUNAS</a>`;
                        } else {
                            view += `<a id="change-status-bayar" data-id="" type="button" class="btn btn-danger btn-sm">ERROR</button>`;
                        }
                        return `${view}`;
                    },
                    "targets": 5
                },
                {
                    "render": function(data, type, row) {
                        return `
                    <div style="width: 17vh;">
                        <a href="/pembayaran/${data}/read" class="btn btn-icon btn-round btn-info btn-sm" style="padding:5px !important ;"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    </div>
                    `;
                    },
                    "targets": -1
                },
            ],

        });
    });
</script>
<?= $this->endSection(); ?>