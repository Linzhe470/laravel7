<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boostrap-homework</title>
    <link rel="icon" href="./img/svg-export/p-logo.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <style>
        .navbar .barmenu ul li {
            padding: 0 10px;
        }

        .jumbotron,
        .jumbotron-fluid {
            background-color: transparent;
        }

        .p-color {
            color: #6366F1;
        }

        .pb-color {
            background-color: #6366F1;
        }

        .container {
            max-width: 1500px;
            padding: 50px 0;
        }

        .card {
            border: none;
        }


        .bg-faded {
            background-color: #F3F4F6;
            padding: 20px;
            margin: 0;
            border-radius: 18px;
        }

        .wb-color {
            background-color: white;
        }

        .bb-color {
            background-color: black;
        }

        .nav-link {
            color: grey;
        }

        .barmenu .nav-item:hover {
            background-color: #F3F4F6;
            border-radius: 5px;
        }

        .goout{
            text-align: center;
            font-size: 26px;
        }
        .navbar .barmenu ul{
            display: flex;
            align-items: center;
        }
        .carousel-item{
            height: calc(100vh - 100px);
        }
    </style>

    @yield('css')
    

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container p-1" style="width: 80%;">

            <!-- Just an image -->
            <a class="navbar-brand" href="https://lesson-bootstrap.dev-hub.io/" target="_blank">
                <img src="./img/svg-export/svgexport-1.svg" width="80%" height="" alt="">
            </a>

            <div class="barmenu ">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">
                                Blog
                                <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#"> Portfolio
                                <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#"> About
                                <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Link#1</a>
                            <a class="dropdown-item" href="#">Link#2</a>
                            <a class="dropdown-item" href="#">Link#3</a>

                        </div>

                    </li>
                    <li class="nav-item active goout">
                        <a class="nav-link" href="./cart.vol.01.html" ><i class="fas fa-shopping-cart"></i> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active goout">
                        <a class="nav-link" href="./login.html"><i class="fas fa-user-circle"></i> <span class="sr-only">(current)</span></a>
                    </li>


                    </ul>

                </div>



            </div>
        </div>




    </nav>

    <main>

        @yield('main')

    </main>

    <footer>
        <div class="container">
            <div class="row ">
                <div class="col-3">
                    <div class="container p-0">

                        <div class=" d-flex align-items-center justify-content-start mb-2">

                            <img src={{ asset('./img/svg-export/svgexport-20.svg') }} alt="...">

                            <h5 class="card-title m-0 ml-3">數位方塊</h5>

                        </div>

                        <div>
                            <p>Air plant banjo lyft occupy retro adaptogen indego</p>
                        </div>
                    </div>

                </div>

                <div class="col-8 d-flex justify-content-between">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link disabled font-weight-blad" href="#" tabindex="-1" aria-disabled="true"
                                style="color: black;">CATEGORIES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">First Link
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Second Link
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Third Link
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Fourth Link
                            </a>
                        </li>

                    </ul>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link disabled font-weight-blad" href="#" tabindex="-1" aria-disabled="true"
                                style="color: black;">CATEGORIES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">First Link
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Second Link
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Third Link
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Fourth Link
                            </a>
                        </li>

                    </ul>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link disabled font-weight-blad" href="#" tabindex="-1" aria-disabled="true"
                                style="color: black;">CATEGORIES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">First Link
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Second Link
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Third Link
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Fourth Link
                            </a>
                        </li>

                    </ul>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link disabled font-weight-blad" href="#" tabindex="-1" aria-disabled="true"
                                style="color: black;">CATEGORIES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">First Link
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Second Link
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Third Link
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Fourth Link
                            </a>
                        </li>

                    </ul>



                </div>


            </div>
        </div>
        <div class="container-fluid" style="background-color:lightgray;">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <p>© 2020 Tailblocks — @knyttneve</p>
                    <div>
                        <img src={{ asset('./img/svg-export/svgexport-21.svg') }} alt="...">
                        <img src={{ asset('./img/svg-export/svgexport-22.svg') }} alt="...">
                        <img src={{ asset('./img/svg-export/svgexport-23.svg') }} alt="...">
                    </div>
                </div>
            </div>

        </div>





    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>

    @yield('js')

</body>

</html>
