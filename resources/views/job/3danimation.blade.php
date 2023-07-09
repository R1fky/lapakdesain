<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3danimate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    @include('../header')
    <!-- carosel -->
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('image/job/3danimation/bac1.jfif') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <button type="button" class="btn btn-secondary">3D ANIMATION</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/job/3danimation/bac2.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <button type="button" class="btn btn-secondary">3D ANIMATION</button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- end carosel -->
    <div class="container d-flex mt-5">
        <div class="row">
            <div class="col me-3">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Budget
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Waktu Pengerjaan
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- card -->
    <div class="container mt-3">
        <div class="d-flex">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('image/job/3danimation/1.jfif') }}" class="card-img-top" alt="...">
                <a href="">Pembuat</a>
                <p>deskripsi</p>
                <p>harga</p>
                <button type="button" class="btn btn-secondary">Buy</button>
            </div>
            <div class="card ms-4" style="width: 18rem;">
                <img src="{{ asset('image/job/3danimation/2.jfif') }}" class="card-img-top" alt="...">
                <a href="">Pembuat</a>
                <p>deskripsi</p>
                <p>harga</p>
                <button type="button" class="btn btn-secondary">Buy</button>
            </div>
            <div class="card ms-4" style="width: 18rem;">
                <img src="{{ asset('image/job/3danimation/3.jfif') }}" class="card-img-top" alt="...">
                <a href="">Pembuat</a>
                <p>deskripsi</p>
                <p>harga</p>
                <button type="button" class="btn btn-secondary">Buy</button>
            </div>
            <div class="card ms-4" style="width: 18rem;">
                <img src="{{ asset('image/layanan/Joki.jfif') }}" class="card-img-top" alt="...">
                <a href="">Pembuat</a>
                <p>deskripsi</p>
                <p>harga</p>
                <button type="button" class="btn btn-secondary">Buy</button>
            </div>
        </div>
    </div>
    <!-- end card -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>