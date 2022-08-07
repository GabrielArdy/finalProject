<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- custom CSS -->
    <link rel="stylesheet" href="{{ asset('custom-style.css') }}">
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
                    <h5 class="modal-title fw-bold display-5 text-capitalize">Pengumuman</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <img src="/img/pic1.jpg" alt="" class="img-fluid" style="max-width:100%; height:auto">
                        <div class="container-fluid">
                            <i class="fa-regular fa-calendar fa-3x"></i>&nbsp;<p class="txt card-text text-muted ml-lg-2 ml-lg-4">05 August 2022</p>
                        </div>
                        <p class="mt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores ducimus vel accusantium. Delectus, commodi. Tempore eius at mollitia perspiciatis rem minima nisi dolorem excepturi porro delectus soluta necessitatibus quam, natus quibusdam ipsum, exercitationem ad error nostrum eum sunt perferendis. Placeat numquam alias et voluptas voluptate dolor enim qui, blanditiis excepturi labore? Perspiciatis, laboriosam ex! Doloremque at, dicta officia neque dignissimos velit praesentium veniam quaerat nesciunt corrupti fugiat enim itaque ipsum non natus! Rerum laborum cumque ducimus reiciendis molestias numquam placeat consequuntur distinctio! Optio perferendis nostrum eum est dicta in consequatur, autem cum labore rerum perspiciatis porro quae, adipisci consectetur voluptatum enim fuga cupiditate earum ut, minima molestias? Accusamus pariatur ut amet impedit ipsa, cumque aut reprehenderit at sed cupiditate explicabo sunt dolorem eius harum, ab asperiores rem dolorum eaque incidunt nostrum totam? Minima quidem officia culpa, dicta exercitationem, maxime animi quam in quia nam, id rerum. Eius quos, maxime, impedit architecto maiores labore nam placeat, doloribus sequi veritatis aliquid possimus! Perferendis dolore nemo quia consectetur commodi nulla doloribus eligendi eaque iure laborum, ad expedita itaque pariatur. Ullam asperiores quo aut hic voluptates vel? Illo accusamus vitae adipisci. Dolores alias veniam, voluptate saepe iste ea ab, nam consectetur, repellat atque tenetur vitae debitis expedita. Libero aliquam ratione similique fuga, neque illum quibusdam aliquid ipsa nemo iste odio placeat atque dolores omnis reprehenderit temporibus laudantium veritatis obcaecati repellendus eos accusamus unde expedita. Eum ut quod rem fuga repellendus dolorum veniam minus magni nobis tempore, aliquid dolorem nisi qui nostrum aperiam dolor asperiores doloremque pariatur facere quis dolores officia alias aspernatur reprehenderit. Unde et optio velit dolorem, delectus deserunt fugit nulla perferendis officia culpa distinctio quia maiores quidem. Natus, iusto voluptate deleniti suscipit officiis error labore minima sed cum, totam autem, esse tenetur repellat ea corrupti ratione et dolore omnis enim beatae accusantium. Placeat quibusdam omnis in, id voluptatibus, enim cupiditate explicabo corporis praesentium architecto cum aliquam non nisi itaque, nulla culpa et alias aspernatur. Iste odio accusamus libero ut dolores reiciendis eius ducimus blanditiis perspiciatis veniam excepturi, magni, expedita odit rem ea quas mollitia explicabo placeat voluptatem corporis cumque voluptates. Nobis quo laudantium repellendus provident fugiat tenetur, ad quis blanditiis beatae quidem suscipit vitae in non minus corporis? Deleniti sapiente at, aspernatur debitis velit ducimus quidem praesentium libero incidunt corporis, fuga laboriosam illum consequuntur unde aut aliquam culpa. Molestiae dolore maiores nesciunt deleniti accusamus doloribus assumenda earum tempora eveniet impedit pariatur optio incidunt natus ratione quidem, est omnis itaque. Voluptates aspernatur quos nesciunt omnis similique ullam veniam voluptatibus natus, aliquam illo eum porro velit aperiam placeat nulla asperiores cupiditate vero rem cumque animi unde. Minus itaque eaque tempora asperiores reprehenderit laborum? Error voluptas, quam obcaecati incidunt voluptatibus autem consequuntur. Impedit, perferendis error quidem blanditiis ipsam accusamus. Molestias officiis a dolorem exercitationem? Sint enim ad cumque totam, iure sapiente dolore inventore eos itaque, molestiae ipsum ex fuga accusantium sequi suscipit? Quibusdam natus ad repellat nisi, tempore, perspiciatis ratione neque rem vitae quis accusamus reprehenderit quas praesentium culpa eaque! Saepe doloribus magni <a href="#" class="link-info">doloremque</a> beatae?</p>
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
    <script src="{{ asset('custom-script.js') }}"></script>
</body>

</html>