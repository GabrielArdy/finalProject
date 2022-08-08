<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- custom CSS -->
    <link rel="stylesheet" href="{{ asset('custom-style.css') }}">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('icon/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('icon/css/all.css') }}">
    <title>Home | Lembaga Kemahasiswaan</title>
</head>

<body>


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
                    <!-- button show more -->
                    <a href="#" class="btn btn-outline-light">Show more</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/pic2.jpg" class="d-block w-100 h-75" alt="...">
                <div class="carousel-caption text-start d-none d-md-block">
                    <h1 class="display-5 fw-bold">Second slide label</h1>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    <a href="#" class="btn btn-outline-light">Show more</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/pic3.jpg" class="d-block w-100 h-75" alt="...">
                <div class="carousel-caption text-start d-none d-md-block">
                    <h1 class="display-5 fw-bold">Third slide label</h1>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    <a href="#" class="btn btn-outline-light">Show more</a>
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
    <div class="container my-5">
        <div class="jumbotron jumbotron-fluid text-center">
            <p class="fs-1 fw-bolder">Pengumuman</p>
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
    </div>



    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-fullscreen-lg-down modal-fullscreen-sm-down" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold display-5 text-capitalize">{ Nama Pengumuman }</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <img src="/img/pic1.jpg" alt="" class="img-fluid" style="max-width:100%; height:auto">
                        <div class="container-fluid">
                            <div class="author-container my-3">
                                <i class="fa-regular fa-calendar fa-lg text-muted"></i>&nbsp;<p class="txt card-text text-muted ml-lg-2 ml-lg-4">05 August 2022</p>
                                <i class="fa-regular fa-circle-user fa-lg text-muted"></i>&nbsp;<p class="txt card-text text-muted ml-lg-2 ml-lg-4">Author</p>
                            </div>
                        </div>
                        <hr>
                        <p class="fs-6">{ Isi Pengumuman } Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam blanditiis deleniti minus reprehenderit, corrupti repudiandae commodi. Dolore quas quisquam rem vitae incidunt enim consequuntur commodi, aperiam nobis repudiandae placeat tempora atque nihil beatae! Delectus, recusandae consequuntur. Architecto ab illo aspernatur aut aliquid nostrum? Impedit recusandae voluptatum ea expedita, saepe aliquid commodi sint, tempore tempora aut eaque? Molestias neque eligendi odio vitae architecto facere explicabo, aperiam deleniti! Velit tempora exercitationem eaque similique temporibus quidem atque pariatur explicabo dignissimos consectetur dolorem, iure ex nobis dolor quaerat rerum dolore numquam alias repellendus tenetur reiciendis facere aspernatur. Sapiente ducimus, praesentium sint at, architecto mollitia aut illo fuga corrupti commodi repudiandae exercitationem laudantium. Tenetur unde adipisci fugiat! Amet quidem quod praesentium numquam, sunt facere. Tenetur nihil animi asperiores, similique ullam odit vel? Enim excepturi quis repellat non tempora quos amet quasi, cum veniam dignissimos perferendis praesentium neque, fugit alias temporibus molestiae earum soluta nemo magni facere, autem rem natus corrupti eos? Dolorum labore accusantium nisi aliquam quidem sunt eos fugit nihil voluptatum ipsam mollitia obcaecati iusto id ut magnam, atque, est in neque rerum soluta unde doloremque sapiente! Quo consequatur pariatur amet, consequuntur cupiditate ullam, excepturi sed numquam molestiae iste quisquam sapiente? Dolorum, corrupti atque! Obcaecati dolorem, harum numquam ut doloribus quaerat, a ipsa laborum impedit at architecto blanditiis quo nemo et? Molestiae dolorum, atque non, quis doloribus qui deleniti totam alias impedit eius maxime, temporibus fuga tenetur magni ad odit corrupti facere. Quibusdam quisquam assumenda consectetur quidem fuga voluptate molestias porro voluptas deleniti neque illo perferendis quasi tempora, reiciendis ipsam facilis. Consequuntur molestiae porro cum doloremque repudiandae nobis sequi. Quia perspiciatis totam explicabo, non repellendus, voluptatum quam numquam hic reiciendis pariatur provident maxime ex sed nisi veritatis nesciunt dolores id laboriosam molestiae, velit assumenda inventore at magnam ipsa? Inventore quidem corporis eos unde natus. { Contoh Link }: <a href="{{ url('https://uksw.edu') }}" class="link-info" target="_blank">Click disini!</a></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Custom JS -->
    <script src="{{ asset('custom-script.js') }}"></script>.
</body>

</html>