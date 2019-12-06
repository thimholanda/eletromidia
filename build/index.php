<?php require_once 'header.php'?>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-purple">

        <a class="navbar-brand" href="#">
            <img src="imgs/eletromidia.svg" width="185" alt="Eletromidia">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white h2 mb-0"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto text-uppercase" style="font-size: .9rem;">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Quem Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cases</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Imprensa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                </li>
            </ul>

            <ul class="nav ml-3 h5">
                <li class="nav-item">
                    <a class="nav-link text-white px-1" href="#"><i class="fab fa-facebook-square"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white px-1" href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white px-1" href="#"><i class="fab fa-twitter-square"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white px-1" href="#"><i class="fab fa-linkedin"></i></a>
                </li>
            </ul>

        </div>

    </nav>
</header>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-0">
                <div class="main-slider">
                    <div class="slide">
                        <img class="img-fluid" src="imgs/banner1.jpg" alt="Slide 1">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row py-5">
            <div class="col-12 d-flex flex-column align-items-center">
                <p class="h5 text-purple mb-4 text-center">Assine nossa newsletter e receba novidades por e-mail</p>

                <form class="w-100">
                    <div class="form-row d-flex flex-row justify-content-center">

                        <div class="col-md-5">
                            <label class="sr-only" for="inputEmail">Email</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="far fa-envelope"></i></div>
                                </div>
                                <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                        </div>

                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-2">Assinar</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

<section style="background: url('imgs/bg-pins.jpg') no-repeat center; background-size: cover; min-height: 576px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center py-5">
                <h2 class="text-secondary h5">QUEM SOMOS</h2>
                <h3 class="text-purple h2 mb-4 font-weight-bold">Impactamos mais de 13 milhões de pessoas que trabalham, estudam, consomem, vivem e se mexem nas cidades.</h3>
                <p class="mb-5">Se quer fazer sua marca acontecer, você tem que estar presente na vida de quem mais influencia o consumo nos grandes centros: os influenciadores urbanos. As milhões de pessoas que trabalham, estudam, fazem compras, se divertem e se movimentam nas cidades.</p>
                <a class="btn btn-primary" href="#">SABER MAIS <i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-5 pb-1">

        <div class="row mb-4 justify-content-center">
            <div class="col-12 text-center">
                <h2 class="text-secondary h5">PRODUTOS</h2>
                <h3 class="text-purple h2 mb-4 font-weight-bold">Conheça nosso portfólio</h3>
            </div>
            <div class="col-md-8">
                <form>
                    <div class="form-row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="sr-only" for="selectCategory">Exibir todas as categorias</label>
                                <select class="form-control" id="selectCategory">
                                    <option>Exibir todas as categorias</option>
                                    <option>Aeroportos</option>
                                    <option>Bancas de Jornal</option>
                                    <option>Estabelecimentos Comerciais</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="sr-only" for="selectState">Disponível em qualquer estado</label>
                                <select class="form-control" id="selectState">
                                    <option>Disponível em qualquer estado</option>
                                    <option>São Paulo</option>
                                    <option>Rio de Janeiro</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4 mb-4">
                <div class="card text-center w-100">
                    <span class="badge badge-light rounded-pill portfolio-badge text-secondary font-weight-normal">Aeroportos</span>
                    <img src="imgs/header-airports.jpg" class="card-img-top" alt="Aeroportos">
                    <div style="margin-top: -45px;">
                        <div class="bg-white d-inline-block p-2 rounded-circle">
                            <img width="80" src="imgs/icon-aeroporto.svg" alt="Aeroportos">
                        </div>
                    </div>
                    <div class="card-body pt-2">
                        <h4 class="card-title text-pink mb-1 h5">Aeroportos</h4>
                        <p class="card-text text-secondary mb-0">Presente no embarque e desembarque dos passageiros</p>
                        <div class="text-secondary my-4 py-2" style="border-top: 1px solid #ced4da; border-bottom: 1px solid #ced4da;">
                            <small class="d-block">
                                Diponibilidade em: SP | RJ
                            </small>
                        </div>
                        <a href="#" class="btn btn-primary">SABER MAIS <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card text-center w-100">
                    <span class="badge badge-light rounded-pill portfolio-badge text-secondary font-weight-normal">Aeroportos</span>
                    <img src="imgs/header-airports.jpg" class="card-img-top" alt="Aeroportos">
                    <div style="margin-top: -45px;">
                        <div class="bg-white d-inline-block p-2 rounded-circle">
                            <img width="80" src="imgs/icon-aeroporto.svg" alt="Aeroportos">
                        </div>
                    </div>
                    <div class="card-body pt-2">
                        <h4 class="card-title text-pink mb-1 h5">Aeroportos</h4>
                        <p class="card-text text-secondary mb-0">Presente no embarque e desembarque dos passageiros</p>
                        <div class="text-secondary my-4 py-2" style="border-top: 1px solid #ced4da; border-bottom: 1px solid #ced4da;">
                            <small class="d-block">
                                Diponibilidade em: SP | RJ
                            </small>
                        </div>
                        <a href="#" class="btn btn-primary">SABER MAIS <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card text-center w-100">
                    <span class="badge badge-light rounded-pill portfolio-badge text-secondary font-weight-normal">Aeroportos</span>
                    <img src="imgs/header-airports.jpg" class="card-img-top" alt="Aeroportos">
                    <div style="margin-top: -45px;">
                        <div class="bg-white d-inline-block p-2 rounded-circle">
                            <img width="80" src="imgs/icon-aeroporto.svg" alt="Aeroportos">
                        </div>
                    </div>
                    <div class="card-body pt-2">
                        <h4 class="card-title text-pink mb-1 h5">Aeroportos</h4>
                        <p class="card-text text-secondary mb-0">Presente no embarque e desembarque dos passageiros</p>
                        <div class="text-secondary my-4 py-2" style="border-top: 1px solid #ced4da; border-bottom: 1px solid #ced4da;">
                            <small class="d-block">
                                Diponibilidade em: SP | RJ
                            </small>
                        </div>
                        <a href="#" class="btn btn-primary">SABER MAIS <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<section style="background: url('imgs/bg-data.jpg') no-repeat center; background-size: cover;">
    <div class="container-fluid p-5">
        <div class="row p-5" style="border: 5px solid #764ca5;">

            <div class="col-12 d-flex flex-row justify-content-center mb-5">
                <img class="img-fluid mr-4" style="max-width: 300px;" src="imgs/icon-eye.png" alt="Impactamos mais de 10 milhões de pessoas diariamente">
                <div class="text-white h1 font-weight-light">
                    Impactamos mais de <strong class="text-purple display-3 font-weight-bold"><br>10 milhões</strong><br>de pessoas diariamente
                </div>
            </div>

            <div class="col-12 text-center mb-5">
                <div class="text-white h1 border-bottom border-white font-weight-light d-inline-block">Estamos presentes em mais de <strong class="text-purple">5.000 locais</strong></div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="font-weight-light justify-content-center d-flex flex-row align-items-end text-white">
                    <img class="mr-2 pb-1" height="35" src="imgs/icon-banco.svg" alt="Banco">
                    <strong class="text-purple h2 d-block mb-0 mr-2" style="min-width: 60px;">803</strong>
                    <div class="pb-1">Bancos</div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="font-weight-light justify-content-center d-flex flex-row align-items-end text-white">
                    <img class="mr-2 pb-1" height="35" src="imgs/icon-banco.svg" alt="Banco">
                    <strong class="text-purple h2 d-block mb-0 mr-2" style="min-width: 60px;">803</strong>
                    <div class="pb-1">Bancos</div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="font-weight-light justify-content-center d-flex flex-row align-items-end text-white">
                    <img class="mr-2 pb-1" height="35" src="imgs/icon-banco.svg" alt="Banco">
                    <strong class="text-purple h2 d-block mb-0 mr-2" style="min-width: 60px;">803</strong>
                    <div class="pb-1">Bancos</div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="font-weight-light justify-content-center d-flex flex-row align-items-end text-white">
                    <img class="mr-2 pb-1" height="35" src="imgs/icon-banco.svg" alt="Banco">
                    <strong class="text-purple h2 d-block mb-0 mr-2" style="min-width: 60px;">803</strong>
                    <div class="pb-1">Bancos</div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="font-weight-light justify-content-center d-flex flex-row align-items-end text-white">
                    <img class="mr-2 pb-1" height="35" src="imgs/icon-banco.svg" alt="Banco">
                    <strong class="text-purple h2 d-block mb-0 mr-2" style="min-width: 60px;">803</strong>
                    <div class="pb-1">Bancos</div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="font-weight-light justify-content-center d-flex flex-row align-items-end text-white">
                    <img class="mr-2 pb-1" height="35" src="imgs/icon-banco.svg" alt="Banco">
                    <strong class="text-purple h2 d-block mb-0 mr-2" style="min-width: 60px;">803</strong>
                    <div class="pb-1">Bancos</div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="font-weight-light justify-content-center d-flex flex-row align-items-end text-white">
                    <img class="mr-2 pb-1" height="35" src="imgs/icon-banco.svg" alt="Banco">
                    <strong class="text-purple h2 d-block mb-0 mr-2" style="min-width: 60px;">803</strong>
                    <div class="pb-1">Bancos</div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="font-weight-light justify-content-center d-flex flex-row align-items-end text-white">
                    <img class="mr-2 pb-1" height="35" src="imgs/icon-banco.svg" alt="Banco">
                    <strong class="text-purple h2 d-block mb-0 mr-2" style="min-width: 60px;">803</strong>
                    <div class="pb-1">Bancos</div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="font-weight-light justify-content-center d-flex flex-row align-items-end text-white">
                    <img class="mr-2 pb-1" height="35" src="imgs/icon-banco.svg" alt="Banco">
                    <strong class="text-purple h2 d-block mb-0 mr-2" style="min-width: 60px;">803</strong>
                    <div class="pb-1">Bancos</div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="font-weight-light justify-content-center d-flex flex-row align-items-end text-white">
                    <img class="mr-2 pb-1" height="35" src="imgs/icon-banco.svg" alt="Banco">
                    <strong class="text-purple h2 d-block mb-0 mr-2" style="min-width: 60px;">803</strong>
                    <div class="pb-1">Bancos</div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="font-weight-light justify-content-center d-flex flex-row align-items-end text-white">
                    <img class="mr-2 pb-1" height="35" src="imgs/icon-banco.svg" alt="Banco">
                    <strong class="text-purple h2 d-block mb-0 mr-2" style="min-width: 60px;">803</strong>
                    <div class="pb-1">Bancos</div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="font-weight-light justify-content-center d-flex flex-row align-items-end text-white">
                    <img class="mr-2 pb-1" height="35" src="imgs/icon-banco.svg" alt="Banco">
                    <strong class="text-purple h2 d-block mb-0 mr-2" style="min-width: 60px;">803</strong>
                    <div class="pb-1">Bancos</div>
                </div>
            </div>

        </div>
    </div>
</section>

<section>

    <div class="container">
        <div class="row pt-5 justify-content-center">
            <div class="col-lg-10 text-center">
                <h2 class="text-secondary h5">CASES</h2>
                <h3 class="text-purple h2 mb-4 font-weight-bold">Conheça os resultados de marcas que escolheram estar no caminho de seu público com a Eletromidia.</h3>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row pb-5">
            <div class="col-12 px-0 mb-5">
                <div class="cases-slider" style="line-height: 0;">

                    <div class="cases-slide px-2">
                        <a href="#">
                            <figure class="m-0 position-relative">
                                <div class="mask-black-transparent"></div>
                                <img class="img-fluid w-100" src="imgs/slide1.jpg" alt="Slide 1">
                                <figcaption>L’ORÉAL</figcaption>
                            </figure>
                        </a>
                    </div>

                    <div class="cases-slide px-2">
                        <a href="#">
                            <figure class="m-0 position-relative">
                                <div class="mask-black-transparent"></div>
                                <img  class="img-fluid w-100" src="imgs/slide1.jpg" alt="Slide 1">
                                <figcaption>L’ORÉAL</figcaption>
                            </figure>
                        </a>
                    </div>

                    <div class="cases-slide px-2">
                        <a href="#">
                            <figure class="m-0 position-relative">
                                <div class="mask-black-transparent"></div>
                                <img  class="img-fluid w-100" src="imgs/slide1.jpg" alt="Slide 1">
                                <figcaption>L’ORÉAL</figcaption>
                            </figure>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-12 text-center">
                <a href="#" class="btn btn-primary-outline">VER TODOS OS CASES</a>
            </div>
        </div>
    </div>

</section>

<section style="background: url('imgs/bg-icon-gray.jpg') no-repeat center; background-size: cover;">
    <div class="container">
        <div class="row justify-content-center py-5">

            <div class="col-lg-10 text-center">
                <h2 class="text-secondary h5">IMPRENSA</h2>
                <h3 class="text-purple h2 mb-4 font-weight-bold">Fique por dentro do nosso universo</h3>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <img src="imgs/header-airports.jpg" class="card-img-top" alt="Imprensa">
                    <div class="card-body pt-4">
                        <h4 class="card-title h5 text-pink">Eletromidia instala mobiliário urbano entrevias no Rio de Janeiro</h4>
                        <a href="#" class="btn btn-primary mt-3">SABER MAIS <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <img src="imgs/header-airports.jpg" class="card-img-top" alt="Imprensa">
                    <div class="card-body pt-4">
                        <h4 class="card-title h5 text-pink">Eletromidia instala mobiliário urbano entrevias no Rio de Janeiro</h4>
                        <a href="#" class="btn btn-primary mt-3">SABER MAIS <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <img src="imgs/header-airports.jpg" class="card-img-top" alt="Imprensa">
                    <div class="card-body pt-4">
                        <h4 class="card-title h5 text-pink">Eletromidia instala mobiliário urbano entrevias no Rio de Janeiro</h4>
                        <a href="#" class="btn btn-primary mt-3">SABER MAIS <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-12 text-center mt-4">
                <a href="#" class="btn btn-primary-outline">VER TODOS OS CASES</a>
            </div>

        </div>
    </div>
</section>

<?php require_once 'footer.php'?>

