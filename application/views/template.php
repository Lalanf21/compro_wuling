<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">

    <!-- lightbox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <title>Wuling</title>

    <!-- font awesome 5.11.2 -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/brands.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/regular.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/solid.min.css"> -->
    <link rel="stylesheet" href="<?= base_url('assets/css/all.min.css') ?>">
    <!-- End Font awesome -->

    <style>
        body {
            background-color: #eaeaea;
        }

        /* .active {
            color: gold !important;
        } */

        ol {
            color: black;
        }

        .satu i,
        .dua i,
        .tiga i {
            padding: 5px;
            border-radius: 50px;
            z-index: 1;
            position: fixed;
            overflow: hidden;
            border-radius: 10px;
        }

        .satu i {
            bottom: 20px;
            right: 5px;
        }

        .dua i {
            bottom: 20px;
            right: 65px;
        }

        .tiga i {
            bottom: 20px;
            right: 130px;
        }

        .dropdown-menu a:hover {
            background: rgba(233, 223, 223, 0.678);
        }

        .to_top {
            background: white;
            border-radius: 50%;
            display: inline-block;
            padding: 6px 10px;
            position: fixed;
            left: 10px;
            cursor: pointer;
            bottom: 20px;
            font-weight: bold;
            z-index: 2;
        }

        .promo_home {
            @media only screen and (max-width: 1200px) {
                body {
                    min-height: 500px;
                }
            }
        }

        .footer {
            padding: 30px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-white">
        <div class="container">
            <div class="row col-sm-12 col-lg-12 col-md-12" style="font-size:1.25rem;">
                <a class="navbar-brand" href="<?= site_url('home') ?>"><img src="<?= base_url('assets/img/logo.jpg') ?>" width="120px"></a>
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= site_url('home') ?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('promo') ?>">Promo</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Product
                            </a>
                            <div class="dropdown-menu bg-light" aria-labelledby="navbarDropdown" style="border:none;">
                                <a class="dropdown-item text-dark" href="<?= site_url('product/almaz') ?>">Almaz</a>
                                <a class="dropdown-item text-dark" href="<?= site_url('product/cortez') ?>">Cortez</a>
                                <a class="dropdown-item text-dark" href="<?= site_url('product/confero') ?>">Confero</a>
                                <a class="dropdown-item text-dark" href="<?= site_url('product/formo') ?>">Formo</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Content -->
    <?php $this->load->view($konten)  ?>
    <!-- akhir content -->
    <div class="container-fluid bg-dark text-white">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-6">
                <h3 class="text-center text-uppercase p-3">Contact Info</h3>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg text-center footer mr-3">
                <h4>IRMENDO</h4>
                <hr class="bg-white" width="50%">
                <div class="text-left ml-5 font-weight-300">
                    <p><i class="fas fa-phone fa-1x"> </i> 021-566-9955</p>
                    <p><i class="fab fa-whatsapp-square"></i> 0878-8775-6208</p>
                    <p><i class="fas fa-envelope-square"></i> irmendo2903@gmail.com</p>
                </div>
                <p>Untuk informasi dan pemesanan produk Wuling, Silahkan menghubungi kontak diatas</p>
            </div>
            <div class="col-lg footer">
                <h4 class="text-center text-uppercase">PT.Prima Wuling Motor</h4>
                <hr class="bg-white" width="50%">
                <p class="text-center">Jl. Daan Mogot KM.21 Batu Ceper, Jakarta Barat 11112</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center bg-danger">
                Copyright @ <?= date('Y') ?> || Made by <a href="#" class="text-white">AllandTech</a>
            </div>
        </div>
    </div>

    <div class="to_top"><i class="fas fa-arrow-up fa-2x text-success"></i></div>

    <div class="satu"><a href=""><i class="fab fa-whatsapp text-danger fa-3x text-center bg-white" title="Whatsapp"></i></a></div>
    <div class="dua"><a href=""><i class="fab fa-facebook text-primary fa-3x text-center bg-white" title="Facebook"></i></a></div>
    <div class="tiga"><a href=""><i class="fab fa-instagram text-dark fa-3x text-center bg-white" title="Instagram"></i></a></div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js.map"></script>
    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() > 300) {
                $('.to_top').fadeIn();
            } else {
                $('.to_top').fadeOut();
            }
        });

        $('.to_top').click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, 1000);
            return false;
        });

        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>


    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->


</body>

</html>