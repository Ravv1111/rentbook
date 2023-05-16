<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S-RentBook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>

    <!--navbar-->
    <nav class="navbar navbar-dark navbar-expand-lg" style="background-color: rgb(3, 3, 3)">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png')}}" alt="logo" width="45" height="40">
                Rent Books
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Marvel</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">All Comic Series</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Top Storyline</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('loginIndex')}}" class="btn btn-outline-primary text-white">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--/navbar -->

    <!--Carousel-->

    <div id="carouselExampleAutoplaying" class="carousel slide" style="max-height: 300px; max-width: 100%; background-color:rgb(3, 3, 3)"
        data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="https://i.pinimg.com/originals/43/17/51/431751dfe5b862559135226cdeff529a.jpg"
                    class="d-block w-100" alt="..." style="max-height: 350px">
            </div>

            <div class="carousel-item ">
                <img src="https://i.pinimg.com/originals/43/94/3c/43943cfb691127e45a15e96372935461.jpg"
                    class="d-block w-100" alt="..." style="max-height: 350px">
            </div>

             <div class="carousel-item ">
                <img src="https://lumiere-a.akamaihd.net/v1/images/4345ed0fe55652aebe85d4c63a380195_4096x1798_ebd21ecf.jpeg"
                    class="d-block w-100" alt="..." style="max-height: 350px; padding: 60px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--/Carousel-->
    <br>
    <!--jumbotron-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4">
                <h2>MARVEL</h2>
                <a href="register" class="btn btn-outline-dark"> SIGN UP NOW!</a>
            </div>

            <div class="col-lg-8">
                <h3>JOIN THE MARVEL UNIVERSE!</h3>
                <p>Register for FREE to access member-exclusive content and activities, read FREE comics from MARVEL
                    COMICS, and get alerts and early access to exclusive products from MARVEL Shop!
                </p>
            </div>
        </div>
    </div>
    <!--jumbotron-->


    <!--card popular book-->
        {{-- id="carouselxampleInterval" class="carousel slide" style="max-height: 400px; max-widht: 100%" data-bs-interval="10000" --}}>
        <section class="">
            <div class="container mt-3">
                <div class="row text-center text-black btn-warning">
                    <h2 class="mt-3 ">Comic Books</h2>
                    <hr class="solid ">
                </div>
                <div class="row my-4 ms-5">
                  <div class="col-lg-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="http://img.over-blog-kiwi.com/0/55/25/40/20160522/ob_f8325b_secret-wars-1.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Secret Wars</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-dark w-100">Read More</a>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="http://img.over-blog-kiwi.com/0/55/25/40/20160522/ob_f8325b_secret-wars-1.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-dark w-100">Read More</a>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="http://img.over-blog-kiwi.com/0/55/25/40/20160522/ob_f8325b_secret-wars-1.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-dark w-100">Read More</a>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </section>

        <!--/card popular book-->

        <!--contact-->
        <div class="container mt-4">
            <div class="row text-center text-">
                <h2>MESSAGE</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <form action="{{ route('storeMessage')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name
                            </label>
                            <input type="text" class="form-control" name="name">

                        </div>
                        <div class="mb-3">
                            <label for="messege" class="form-label">Message</label>
                            <textarea name="message" class="form-control"></textarea>
                        </div>

                        <button type="submit" class="btn btn-dark">Send</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>
    <!--/contact-->
    <br>
    <!--footer-->
    <footer class="bg-dark text-center" style="height:30px;">
        <p class="text-white">Created by <a href="#" style="text-decoration: none; color: white;" target=""> Rava Kietha</a></p>
    </footer>



    <!--/footer-->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

</body>

</html>
