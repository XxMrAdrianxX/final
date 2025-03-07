<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Responsive Landing Page Design</title>

    <!-- All CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

        <div class="container">

            <a href="#" class="navbar-brand"> <span class="text-primary">playa</span>code</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarS"
                aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarS">
                <ul class="navbar-nav ms-auto mb-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link">inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">servicios</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">portafolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">equipo</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">contactos</a>
                    </li>
                    <li><a href="login.php">Iniciar sesión</a></li>

                </ul>
            </div>

        </div>

    </nav>

    <div id="carouselE" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselE" data-bs-slide-to-to="0" class="active" aria-current="true"
                aria-label="slide 1"></button>
            <button type="button" data-bs-target="#carouselE" data-bs-slide-to-to="1" aria-current="true"
                aria-label="slide 2"></button>
            <button type="button" data-bs-target="#carouselE" data-bs-slide-to-to="2" aria-current="true"
                aria-label="slide 3"></button>


        </div>

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="img/home-1.jpg" class="d-block w-100" alt="">
                <div class="carousel-caption">
                    <h5>playa con buseo</h5>
                    <p>Lorem ipsum dolor sit amet consectetur,
                        adipisicing elit. Placeat ad ipsa, ea quas aut porro error blanditiis, dolore minima soluta
                        maxime, aperiam voluptate
                        eum quos? Odio molestiae aperiam esse laudantium.
                    </p>
                    <a href="#" class="btn btn-primary mt-3">mas informacion</a>

                </div>

            </div>
            <div class="carousel-item ">
                <img src="img/home-2.jpg" class="d-block w-100" alt="">
                <div class="carousel-caption">
                    <h5>playa con buseo</h5>
                    <p>Lorem ipsum dolor sit amet consectetur,
                        adipisicing elit. Placeat ad ipsa, ea quas aut porro error blanditiis, dolore minima soluta
                        maxime, aperiam voluptate
                        eum quos? Odio molestiae aperiam esse laudantium.
                    </p>
                    <a href="#" class="btn btn-primary mt-3">mas informacion</a>

                </div>

            </div>
            <div class="carousel-item ">
                <img src="img/home-3.jpg" class="d-block w-100" alt="">
                <div class="carousel-caption">
                    <h5>playa con buseo</h5>
                    <p>Lorem ipsum dolor sit amet consectetur,
                        adipisicing elit. Placeat ad ipsa, ea quas aut porro error blanditiis, dolore minima soluta
                        maxime, aperiam voluptate
                        eum quos? Odio molestiae aperiam esse laudantium.
                    </p>
                    <a href="#" class="btn btn-primery mt-3">mas informacion</a>

                </div>

            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselE" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">previous</span>

        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselE" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">next</span>

        </button>

    </div>

    <section class="about section-padding">

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col col-md-12 col-12 ">
                    <div class="about-img">
                        <img src="img/about.jpg" class="img-fluid" alt="">

                    </div>

                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text text-white">
                        <h2>hoteles y playa <br>servicios</h2>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab tempora placeat minima
                            eveniet, perspiciatis voluptas eius omnis, iste atque velit quae! Dolor
                            laudantium provident accusamus earum odit vero iure nostrum!
                        </p>
                        <a href="#" class="btn btn-primary">mas informacion</a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="services section-padding">


        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="section-header text white pb-5">
                        <h2>nuestros servicios</h2>
                        <p>
                            Lorem ipsu
                            m dolor sit, amet consectetur adipisicing elit. Deserunt harum voluptatem rerum mollitia
                            animi veniam
                            omnis dolore sit quisquam
                            dolor quas, error culpa earum neque laborum enim autem pariatur sunt.
                        </p>

                    </div>

                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-white text-center bg-dark pb-2">
                    <div class="card-body">
                        <i class="bi bi-laptop"></i>
                        <h3 class="card title">registro</h3>
                        <p class="lead">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Natus, inventore! Unde quasi libero necessitatibus velit. Explicabo eaque aliquid sunt nemo,
                            quia suscipit
                            eos magnam neque fugit nam. Veniam, cumque quos.
                        </p>
                        <button class="btn bg-primary text-white">mas informacion</button>
                    </div>

                </div>

            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-white text-center bg-dark pb-2">
                    <div class="bi bi-wifi">
                        <i class="card-body"></i>
                        <h3 class="card title">internet</h3>
                        <p class="lead">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Natus, inventore! Unde quasi libero necessitatibus velit. Explicabo eaque aliquid sunt nemo,
                            quia suscipit
                            eos magnam neque fugit nam. Veniam, cumque quos.
                        </p>
                        <button class="btn bg-primary text-white">mas informacion</button>
                    </div>

                </div>

                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-tv"></i>
                            <h3 class="card title">tv</h3>
                            <p class="lead">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Natus, inventore! Unde quasi libero necessitatibus velit.
                                Explicabo eaque aliquid sunt nemo, quia suscipit
                                eos magnam neque fugit nam. Veniam, cumque quos.
                            </p>
                            <button class="btn bg-primary text-white">mas informacion</button>
                        </div>

                    </div>



                </div>

            </div>

    </section>

    <section class="portafolio section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center text-white pb-5">
                        <h2>playas</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi consequuntur at, quam ut
                            voluptatum et dolor eaque facilis voluptatibus, molestias voluptas fugiat temporibus
                            tenetur. Ratione sapiente impedit ut amet voluptate?</p>

                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-dark pb-2">
                        <div class="card-body text-white">
                            <div class="img-area mb-4">
                                <img src="img/project-1.jpg" class="img-fluid" alt="">

                            </div>
                            <h3>playa 1</h3>
                            <p class="lead">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum autem,
                                dignissimos ipsum magni quo ut earum repellat, tempore quibusdam unde possimus ducimus
                                vitae
                                repudiandae natus laboriosam rem, veniam fugit voluptatibus.
                            </p>
                            <button class="btn bg-primary text white">mas informacion</button>

                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="card text-light text-center bg-dark pb-2">
                            <div class="card-body text-white">
                                <div class="img-area mb-4">
                                    <img src="img/project-2.jpg" class="img-fluid" alt="">

                                </div>
                                <h3>playa 2</h3>
                                <p class="lead">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum autem,
                                    dignissimos ipsum magni quo ut earum repellat, tempore quibusdam unde possimus
                                    ducimus vitae
                                    repudiandae natus laboriosam rem, veniam fugit voluptatibus.
                                </p>
                                <button class="btn bg-primary text white">mas informacion</button>

                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-4">
                            <div class="card text-light text-center bg-dark pb-2">
                                <div class="card-body text-white">
                                    <div class="img-area mb-4">
                                        <img src="img/project-3.jpg" class="img-fluid" alt="">

                                    </div>
                                    <h3>playa 3</h3>
                                    <p class="lead">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum autem,
                                        dignissimos ipsum magni quo ut earum repellat, tempore quibusdam unde possimus
                                        ducimus vitae
                                        repudiandae natus laboriosam rem, veniam fugit voluptatibus.
                                    </p>
                                    <button class="btn bg-primary text white">mas informacion</button>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
    </section>

    <section class="team section-padding">

        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center text-white pb-5">
                        <h2>asesores</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam minus
                            amet nam ut doloremque aliquam nesciunt quas inventore ea aspernatur mollitia maiores
                            dicta laborum, in, a perferendis, possimus et architecto.
                        </p>

                    </div>

                </div>

                <div class="row">

                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="card text-center bg bg-dark">
                            <div class="card-body text-white">
                                <img src="img/team-1.jpg" class="img-fluid rounded-circle" alt="">
                                <h3 class="card-title py-2">lorem</h3>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa consequuntur aut
                                    omnis laboriosam animi tenetur repellendus eius nisi ex sapiente. Minima facilis,
                                    similique alias nostrum rerum nam distinctio recusandae ex.
                                </p>
                                <p class="socials">
                                    <i class="bi bi-twitter text-white mx-1"></i>
                                    <i class="bi bi-facebook text-white mx-1"></i>
                                    <i class="bi bi-linkeid text-white mx-1"></i>
                                    <i class="bi bi-instagram text-white mx-1"></i>
                                </p>

                            </div>

                        </div>

                    </div>

                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card text-center bg bg-dark">
                        <div class="card-body text-white">
                            <img src="img/team-2.jpg" class="img-fluid rounded-circle" alt="">
                            <h3 class="card-title py-2">lorem</h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa consequuntur aut
                                omnis laboriosam animi tenetur repellendus eius nisi ex sapiente. Minima facilis,
                                similique alias nostrum rerum nam distinctio recusandae ex.
                            </p>
                            <p class="socials">
                                <i class="bi bi-twitter text-white mx-1"></i>
                                <i class="bi bi-facebook text-white mx-1"></i>
                                <i class="bi bi-linkeid text-white mx-1"></i>
                                <i class="bi bi-instagram text-white mx-1"></i>
                            </p>

                        </div>

                    </div>

                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card text-center bg bg-dark">
                        <div class="card-body text-white">
                            <img src="img/team-3.jpg" class="img-fluid rounded-circle" alt="">
                            <h3 class="card-title py-2">lorem</h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa consequuntur aut
                                omnis laboriosam animi tenetur repellendus eius nisi ex sapiente. Minima facilis,
                                similique alias nostrum rerum nam distinctio recusandae ex.
                            </p>
                            <p class="socials">
                                <i class="bi bi-twitter text-white mx-1"></i>
                                <i class="bi bi-facebook text-white mx-1"></i>
                                <i class="bi bi-linkeid text-white mx-1"></i>
                                <i class="bi bi-instagram text-white mx-1"></i>
                            </p>

                        </div>

                    </div>

                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card text-center bg bg-dark">
                        <div class="card-body text-white">
                            <img src="img/team-4.jpg" class="img-fluid rounded-circle" alt="">
                            <h3 class="card-title py-2">lorem</h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa consequuntur aut
                                omnis laboriosam animi tenetur repellendus eius nisi ex sapiente. Minima facilis,
                                similique alias nostrum rerum nam distinctio recusandae ex.
                            </p>
                            <p class="socials">
                                <i class="bi bi-twitter text-white mx-1"></i>
                                <i class="bi bi-facebook text-white mx-1"></i>
                                <i class="bi bi-linkeid text-white mx-1"></i>
                                <i class="bi bi-instagram text-white mx-1"></i>
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="contac section-padding">

        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center text-white pb-5">
                        <h2>contacto</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus sit eveniet temporibus culpa
                            delectus aspernatur veniam natus quasi vel voluptates voluptas omnis nostrum voluptate, id
                            obcaecati. Voluptatum pariatur vitae ab.
                        </p>

                    </div>

                </div>

            </div>
            <div class="row m-0">
                <div class="col-md-12 p-0 pt-4 pb-4">
                    <form action="#" class="bg-dark p-4 m-auto">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="nombre">

                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="correo">

                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <textarea class="form-control" placeholder="mensaje" rows="3"></textarea>
                                </div>

                            </div>
                            <button class="btn btn-primary btn-lg btn-block mt-3">enviar</button>
        

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section>

    <footer class="bg-dark p-2 text-center">
        <div class="container">
            <p class="text-white">playas de colombia</p>

        </div>

    </footer>

    <!-- All Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>

<!--for getting the form download the code from download button-->