<?= $this->extend('layout/template_users'); ?>

<?= $this->section('content'); ?>
<div class="content">
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">List Pemesanan</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="table-pengajuan" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ID PEMESANAN</th>
                                        <th scope="col">NAMA PEMESAN</th>
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
<script>
    function confirmToDelete(el) {
        swal({
            title: 'Are you sure?',
            text: "The data will be deleted and lost forever",
            icon: 'warning',
            buttons: {
                cancel: {
                    visible: true,
                    text: 'No, cancel!',
                    className: 'btn btn-danger'
                },
                confirm: {
                    text: 'Yes, delete it!',
                    className: 'btn btn-success'
                }
            }
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url: '/pemesanan/delete/' + el,
                    type: 'POST',
                    error: function() {
                        swal(
                            'Error',
                            'Something Wrong',
                            'error'
                        );
                    },
                    success: function(data) {
                        swal(
                            'Deleted!',
                            'Your data has been deleted.',
                            'success'
                        );
                    }
                });
            } else {
                swal(
                    'Cancelled',
                    'Your data is safe :)',
                    'error'
                );
            }
        });
    }
</script>
<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#table-pengajuan').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?= base_url('pemesanan/ajax_list') ?>",
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
                            view += `<a href="#change-status-dialog" data-toggle="modal" data-target="#change-status-dialog" type="button" class="btn btn-outline-dark btn-sm">PENDING</a>`;
                        } else if (data === "PROSES") {
                            view += `<a href="#change-status-dialog" data-toggle="modal" data-target="#change-status-dialog" type="button" class="btn btn-outline-info btn-sm">PROSES</a>`;
                        } else if (data === "SELESAI") {
                            view += `<a href="#change-status-dialog" data-toggle="modal" data-target="#change-status-dialog" type="button" class="btn btn-outline-success btn-sm">SELESAI</a>`;
                        } else {
                            view += `<a type="button" class="btn btn-danger btn-sm">ERROR</button>`;
                        }
                        return `${view}`;
                    },
                    "targets": 4
                },
                {
                    "render": function(data, type, row) {
                        return `
                    <div style="width: 17vh;">
                        <a href="/pemesanan/${data}/read" class="btn btn-icon btn-round btn-info btn-sm" style="padding:5px !important ;"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a href="#" onclick="confirmToDelete('${data}')" class="btn btn-icon btn-round btn-danger btn-sm" style="padding:5px !important ;"><i class="fa fa-trash" aria-hidden="true"></i></a>
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