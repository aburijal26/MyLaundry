<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Administrator - MyLaundry</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?= base_url('admin/img/icon.ico') ?>" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="<?= base_url('admin/js/plugin/webfont/webfont.min.js') ?>"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['<?= base_url('admin/css/fonts.min.css') ?>']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url('admin/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('admin/css/atlantis.min.css') ?>">
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- HEADER -->
            <?= $this->include('layout/header'); ?>
        </div>

        <!-- SIDEBAR -->
        <?= $this->include('layout/sidebar'); ?>

        <div class="main-panel">
            <!-- CONTENT -->
            <?= $this->renderSection('content'); ?>
        </div>
    </div>

</body>

</html>