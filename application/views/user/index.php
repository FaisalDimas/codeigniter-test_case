<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $judul; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page-->
    <link href="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- My Custom CSS -->
    <style>
    h1 {
        color: black;
        margin-top: 15px;
    }

    footer {
        margin-top: 95px;
    }
    </style>

</head>

<body id="page-top">

    <div class="container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><b>Majoo Teknologi Indonesia</b></a>
        </nav>
        <!-- End Navbar -->
        <h1><b>Produk</b></h1>

        <section id="content">
            <div class="container">
                <div class="row">
                    <?php foreach ($produk as $p) : ?>
                    <div class="col-md card-group">
                        <div class="card border-dark">
                            <img class="card-img-top" src="<?= base_url('assets/img/produk/') . $p['foto']; ?>">
                            <div class="card-body text-center text-dark">
                                <h5 class="card-title"><b><?= $p['nama']; ?></b></h5>
                                <h3 class="card-title"><b>Rp. <?= $p['harga']; ?></b></h3>
                                <p class="card-text"><?= $p['deskripsi']; ?></p>
                                <button type="submit" class="btn btn-outline-dark">Beli</button>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

    </div>
    <footer class="bg-dark text-white">
        <div class="container">
            <div class="row pt-3">
                <div class="col text-center">
                    <p>2021 &copy; PT Majoo Teknologi Indonesia</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url(); ?>assets/js/demo/datatables-demo.js"></script>

</body>

</html>