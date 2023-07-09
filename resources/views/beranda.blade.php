<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>



<body>

    @include('header')

    <!-- carosel -->

    <div id="carouselExample" class="carousel slide">

        <div class="carousel-inner">

            <div class="carousel-item active">

                <img src="{{ asset('image/carosel1.jpg') }}" class="w-100" alt="...">

                <div class="carousel-caption">

                    <h4>Lapak Desaign</h4>

                    <p>Kami membantu anda, dengan cara apa yang anda cari, dan tersedia di yudesign</p>

                    <a href="#" class="btn btn-secondary mt-2">SIGN UP</a>

                </div>

            </div>

        </div>

    </div>

    <!-- end carosel -->

    <!-- card-->

    <div class="container mt-5">

        <h2> Layanan Yang Sedang Populer</h2>

        <div class="d-flex">

            <div class="card" style="width: 18rem;">

                <img src="{{ asset('image/layanan/3danimate.jfif') }}" class="card-img-top" alt="...">

                <a href="3danimation" class="btn btn-secondary mt-2">3D Animation</a>

            </div>

            <div class="card ms-4" style="width: 18rem;">

                <img src="{{ asset('image/layanan/Fotographer.jfif') }}" class="card-img-top" alt="...">

                <a href="#" class="btn btn-secondary mt-2">Fotographer</a>

            </div>

            <div class="card ms-4" style="width: 18rem;">

                <img src="{{ asset('image/layanan/Logo.jfif') }}" class="card-img-top" alt="...">

                <a href="#" class="btn btn-secondary mt-2">Logo</a>

            </div>

            <div class="card ms-4" style="width: 18rem;">

                <img src="{{ asset('image/layanan/Joki.jfif') }}" class="card-img-top" alt="...">

                <a href="#" class="btn btn-secondary mt-2">WordPress</a>

            </div>

        </div>

    </div>

    <!-- end card -->



    <!-- seperti faq -->

    <div class="container-fluid mt-5 text-white" style="background-color: #F266AB;">

        <div class="row mx-5 p-5 ">

            <div class="col-lg-8">

                <h2>Cara Kerja Lapak Design</h2>

                <ul class="list-group list-group-flush mt-5">

                    <li class="">

                        <h4>Pengerjaan Cepat</h4>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, rem omnis.</p>

                    </li>

                    <li class="">

                        <h4>Pembayaran Tidak Ribet</h4>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae assumenda possimus corporis laudantium tempore quod alias aspernatur numquam voluptatem qui.</p>

                    </li>

                    <li class="">

                        <h4>Dukungan Atau Bantuan</h4>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae assumenda possimus corporis laudantium tempore quod alias aspernatur numquam voluptatem qui.</p>

                    </li>

                </ul>

                <a href="faq" class="btn btn-secondary mt-2">FAQ</a>

            </div>

            <div class="col-lg-4 ">

                <img src="image/layanan/Fotographer.jfif" class="img-fluid rounded" alt="">

            </div>

        </div>

    </div>

    <!-- end seperti faq -->



    <!-- featur -->

    <!-- end featur -->



    <!-- group layanan -->

    <div class="container mt-5">

        <h2>Layanan Yang Di Sediakan</h2>

        <div class="row text-center mt-5">

            <div class="col-lg-4">

                <img src="image/layanan/vidio.png" class="rounded-circle" width="100" height="100">

                </img>

                <h2 class="fw-normal">Vidio</h2>

            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4">

                <img src="image/layanan/data.gif" class="rounded-circle" width="100" height="100">

                </img>

                <h2 class="fw-normal">Data</h2>

            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4">

                <img src="image/layanan/pemrograman.jfif" class="rounded-circle" width="100" height="100">

                </img>

                <h2 class="fw-normal">pemrograman</h2>

            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->

    </div>

    <!-- end group layanan-->



    <!-- footer -->

    @include('footer')

    <!-- end footer -->



</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>



</html>