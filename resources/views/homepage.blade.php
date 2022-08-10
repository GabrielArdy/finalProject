<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- custom CSS -->
    <link rel="stylesheet" href="{{asset( 'custom-style.css' )}}">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('icon/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('icon/css/all.css') }}">
    <title>Home | Lembaga Kemahasiswaan</title>
</head>

<body>
    <!-- navbar sementara -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <a href="/" class="navbar-brand fw-bold text-white">Lembaga Kemahasiswaan</a>
            <a class=" d-flex btn btn-primary">
                Login
            </a>
        </div>
    </nav>
    <!-- navbar sementara -->

    <!-- carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active text-left">
                <img src="/img/pic1.jpg" class="d-block w-100 h-75" alt="...">
                <div class="carousel-caption text-start d-none d-md-block">
                    <h1 class="display-5 fw-bold">First slide label</h1>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    <!-- make button show more -->
                    <a href="#" class="btn btn-outline-light" type="submit">Show more</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/pic2.jpg" class="d-block w-100 h-75" alt="...">
                <div class="carousel-caption text-start d-none d-md-block">
                    <h1 class="display-5 fw-bold">Second slide label</h1>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    <a href="#" class="btn btn-outline-light" type="submit">Show more</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/pic3.jpg" class="d-block w-100 h-75" alt="...">
                <div class="carousel-caption text-start d-none d-md-block">
                    <h1 class="display-5 fw-bold">Third slide label</h1>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    <a href="#" class="btn btn-outline-light" type="submit">Show more</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- carousel -->

    <!-- Jumbotron -->
    <div class="container-fluid my-5">
        <div class="jumbotron jumbotron-fluid text-left">
            <p class="fs-1 fw-bolder">Pengumuman
            <button type="button" class="btn btn-primary position-relative start-50">
             See all <span class="position-absolute top-0 start-100 translate-middle p-2"></span>
            </button>
            </p>
            <hr>
        </div>
    </div>
    <!-- Jumbotron -->

    <!-- album -->
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-4 gx-5 gy-5">
                <div class="card shadow">
                    <img src="/img/pic1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <!-- make time posted with text muted -->
                        <i class="fa-regular fa-calendar text-muted"></i>&nbsp;<small class="card-text text-muted">05 August 2022</small>
                        <div>
                            <i class="fa-regular fa-circle-user text-muted flex-d"></i>&nbsp;<small class="card-text text-muted">Author</small>
                        </div>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modelId">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 gx-5 gy-5">
                <div class="card shadow">
                    <img src="/img/pic2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <i class="fa-regular fa-calendar text-muted"></i>&nbsp;<small class="card-text text-muted">05 August 2022</small>
                        <div>
                            <i class="fa-regular fa-circle-user text-muted"></i>&nbsp;<small class="card-text text-muted">Author</small>
                        </div>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modelId">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 gx-5 gy-5">
                <div class="card shadow">
                    <img src="/img/pic3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <i class="fa-regular fa-calendar text-muted"></i>&nbsp;<small class="card-text text-muted">05 August 2022</small>
                        <div>
                            <i class="fa-regular fa-circle-user text-muted flex-d"></i>&nbsp;<small class="card-text text-muted">Author</small>
                        </div>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modelId">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 gx-5 gy-5">
                <div class="card shadow">
                    <img src="/img/pic1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <!-- make time posted with text muted -->
                        <i class="fa-regular fa-calendar text-muted"></i>&nbsp;<small class="card-text text-muted">05 August 2022</small>
                        <div>
                            <i class="fa-regular fa-circle-user text-muted flex-d"></i>&nbsp;<small class="card-text text-muted">Author</small>
                        </div>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modelId">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 gx-5 gy-5">
                <div class="card shadow">
                    <img src="/img/pic2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <i class="fa-regular fa-calendar text-muted"></i>&nbsp;<small class="card-text text-muted">05 August 2022</small>
                        <div>
                            <i class="fa-regular fa-circle-user text-muted flex-d"></i>&nbsp;<small class="card-text text-muted">Author</small>
                        </div>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modelId">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 gx-5 gy-5">
                <div class="card shadow">
                    <img src="/img/pic3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <i class="fa-regular fa-calendar text-muted"></i> <small class="card-text text-muted">05 August 2022</small>
                        <div>
                            <i class="fa-regular fa-circle-user text-muted"></i> <small class="card-text text-muted">Author</small>
                        </div>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modelId">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- album -->

    <!-- Pagination button -->
    <div class="container">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div> -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>