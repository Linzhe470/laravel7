{{-- 繼承哪一個模板 --}}
@extends('layouts.template')

@section('css')
@endsection

@section('main')

<div>

    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/p-1.jpg" class="d-block w-100 " alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/p-2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/p-3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </section>

    <!-- JUMBOTRON -->

    <section>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">

                <div class="container">
                    <h2 class="display-5 text-center font-weight-normal ">Raw Denim Heirloom Man Braid</h2>
                    <p class="lead text-center mb-5" style="word-wrap:break-word ">Blue bottle crucifix vinyl
                        post-ironic "container-p-15px row-m-(-15px)"
                        four
                        dollar toast vegan taxidermy.
                        Gastropub indxgo juice poutine, <br> ramps microdosing banh mi pug.

                    </p>

                    <hr color='#6366F1' width="60px" style="border:2px solid #6366F1 ; border-radius:300px">
                </div>
            </div>
        </div>

    </section>



    <!-- TRIPLE -->
    <section>
        <div class="container">

            <div class="row">

                <div class="col-4">
                    <div class=" text-center border-0">
                        <img src="./img/svg-export/svgexport-9.svg" class="card-img-top  " alt="..."
                            style="width: 80px;background-color: #E0E7FF;border-radius: 50%;padding: 20px;">

                        <h5 class="font-weight-normal mt-3">Shooting Stars</h5>
                        <p class="text-center">
                            Blue bottle crucifix vinyl post-ironic four dollar toast vegan <br>
                            taxidermy. Gastropub indxgo juice poutine, ramps microdosing<br>
                            banh mi pug VHS try-hard.
                        </p>
                        <a href="#" class="btn p-color">Learn More <i class="fal fa-arrow-right"></i> </a>

                    </div>
                </div>
                <div class="col-4">
                    <div class=" text-center align-items-center border-0">
                        <img src="./img/svg-export/svgexport-6.svg" class="card-img-top  " alt="..."
                            style="width: 80px;background-color: #E0E7FF;border-radius: 50%;padding: 20px;">
                        <div class=" text-center display-5">
                            <h5 class="font-weight-normal mt-3">The Catalyzer</h5>
                            <p class="text-center">
                                Blue bottle crucifix vinyl post-ironic four dollar toast vegan <br>
                                taxidermy. Gastropub indxgo juice poutine, ramps microdosing<br>
                                banh mi pug VHS try-hard.
                            </p>
                            <a href="#" class="btn p-color">Learn More <i class="fal fa-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class=" text-center align-items-center border-0">
                        <img src="./img/svg-export/svgexport-7.svg" class="card-img-top  " alt="..."
                            style="width: 80px;background-color: #E0E7FF;border-radius: 50%;padding: 20px;">
                        <div class=" text-center display-5">
                            <h5 class="font-weight-normal mt-3">Neptune</h5>
                            <p class="text-center">
                                Blue bottle crucifix vinyl post-ironic four dollar toast vegan <br>
                                taxidermy. Gastropub indxgo juice poutine, ramps microdosing<br>
                                banh mi pug VHS try-hard.
                            </p>
                            <a href="#" class="btn p-color">Learn More <i class="fal fa-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>


    <!-- BUTTON -->

    <section>
        <div class="container" style="display: flex;justify-content: center;padding: 50px;">
            <button type="button" class="btn btn-primary btn-lg pb-color" style="padding: 6px 30px;">Button</button>
        </div>
    </section>

    <!-- FIELD -->


    <section>
        <div class="container">
            <div class="row">
                <h2 class="col-4 font-weight-normal">Master Cleanse Reliac Heirloom</h2>
                <p class="col-8">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway
                    tile poke
                    farm-to-table.
                    Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</p>
            </div>
        </div>
    </section>

    <section>

        <div class="card-group">
            <div class="container">
                <div class="row">
                    <div class="col-6 ">

                        <div class="row">
                            <div class="col-6 ">
                                <img src="./img/photo/500x300.png" class="d-block w-100 " alt="...">
                            </div>
                            <div class="col-6 ">
                                <img src="./img/photo/501x301.png" class="d-block w-100 " alt="...">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-4 ">
                                <img src="./img/photo/600x360.png" class="d-block w-100 " alt="...">
                            </div>
                        </div>


                    </div>

                    <div class="col-6 ">

                        <div class="row">
                            <div class="col-12 mb-4 ">
                                <img src="./img/photo/601x361.png" class="d-block w-100 " alt="...">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 ">
                                <img src="./img/photo/502x302.png" class="d-block w-100 " alt="...">
                            </div>
                            <div class="col-6 ">
                                <img src="./img/photo/503x303.png" class="d-block w-100 " alt="...">
                            </div>
                        </div>
                    </div>




                </div>

            </div>
        </div>

    </section>

    <section>
        <div class="container">
            <h2 class="display-5 text-center font-weight-normal ">Pricing</h2>
            <p class="lead text-center mb-5" style="word-wrap:break-word ">Banh mi cornhole echo park skateboard
                authentic crucifix neutra tilde lyft biodiesel artisan direct trade mumblecore 3 wolf moon twee


            </p>
        </div>

    </section>

    <!-- TABLE -->

    <section>
        <div class="container" style="max-width: 1000px;">

            <table class="table">



                <tbody>
                    <tr style="background-color: #F3F4F6;">
                        <th scope="col" style="font-weight: 400;border: none;">Plan</th>
                        <th scope="col" style="font-weight: 400;border: none;">Speed</th>
                        <th scope="col" style="font-weight: 400;border: none;">Storage</th>
                        <th scope="col" style="font-weight: 400;border: none;">Price</th>
                        <th scope="col" style="font-weight: 400;border: none;"></th>
                    </tr>
                    <tr>
                        <td>Start</td>
                        <td>5 Mb/s</td>
                        <td>15 GB</td>
                        <td>Free</td>
                        <td> <input type="radio" id="1" name="0" aria-label="Radio button for following text input">
                        </td>
                    </tr>
                    <tr>
                        <td>Pro</td>
                        <td>25 Mb/s</td>
                        <td>25 GB</td>
                        <td>$24</td>
                        <td> <input type="radio" id="2" name="0" aria-label="Radio button for following text input">
                        </td>

                    </tr>
                    <tr>
                        <td>Bussiness</td>
                        <td>36 Mb/s</td>
                        <td>40 GB</td>
                        <td>$50</td>
                        <td> <input type="radio" id="3" name="0" aria-label="Radio button for following text input">
                        </td>
                    </tr>

                    <tr>

                        <td>Exclusive</td>
                        <td>48 Mb/s</td>
                        <td>120 GB</td>
                        <td>$72</td>
                        <td> <input type="radio" id="4" name="0" aria-label="Radio button for following text input">
                        </td>

                    </tr>
                </tbody>

            </table>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <a href="#" class="btn p-color">Learn More <i class="fal fa-arrow-right"></i> </a>

                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <button type="button" class="btn btn-primary btn-lg pb-color"
                            style="padding: 6px 30px;">Button</button>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- ROBOT -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-4 d-flex flex-column justify-content-start">
                    <h2 class="font-weight-normal">Master Cleanse Reliac Heirloom</h2>
                    <hr color='#6366F1' width="60px"
                        style="border:2px solid #6366F1 ; border-radius:300px;margin: 0;">

                </div>




                <p class="col-8">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway
                    tile
                    poke
                    farm-to-table.
                    Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</p>
            </div>
        </div>

    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="card bg-faded" style="width: auto;">
                        <img src="./img/photo/720x400.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="p-color m-0">SUBTITLE</p>
                            <h5 class="card-title font-weight-normal">Chichen Itza</h5>
                            <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                                hexagon
                                disrupt edison bulbche.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card bg-faded " style="width: auto;">

                        <img src="./img/photo/721x401.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="p-color m-0">SUBTITLE</p>
                            <h5 class="card-title font-weight-normal">Colosseum Roma</h5>
                            <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                                hexagon
                                disrupt edison bulbche.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card bg-faded " style="width: auto;">

                        <img src="./img/photo/722x402.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="p-color m-0">SUBTITLE</p>
                            <h5 class="card-title font-weight-normal">Great Pyramid of Giza</h5>
                            <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                                hexagon
                                disrupt edison bulbche.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card bg-faded " style="width: auto;">

                        <img src="./img/photo/723x403.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="p-color m-0">SUBTITLE</p>
                            <h5 class="card-title font-weight-normal">San Francisco</h5>
                            <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                                hexagon
                                disrupt edison bulbche.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>


    </section>

    <!-- SHUSI -->

    <section>

        <div class="container">


            <div class="row">

                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class=" mb-4 " style="max-width: 1000px;">
                        <div class="row  d-flex align-items-center ">
                            <div class="col-md-2">
                                <img src="./img/svg-export/svgexport-9.svg" class="card-img-top  " alt="..."
                                    style="width: 120px;background-color: #E0E7FF;border-radius: 50%;padding: 20px;">
                            </div>

                            <div class="col-md-10">

                                <h5 class="font-weight-normal">Shooting Stars</h5>
                                <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy.
                                    Gastropub
                                    indxgo juice poutine.</p>
                                <a href="#" class="p-color">Learn More <i class="fal fa-arrow-right"></i> </a>

                            </div>

                        </div>
                        <hr class="my-4 mt-5">
                    </div>

                </div>

                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class=" mb-4 " style="max-width: 1000px;">
                        <div class="row  d-flex align-items-center ">

                            <div class="col-md-10">

                                <h5 class="font-weight-normal">The Catalyzer</h5>
                                <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy.
                                    Gastropub
                                    indxgo juice poutine.</p>
                                <a href="#" class="p-color">Learn More <i class="fal fa-arrow-right"></i> </a>

                            </div>

                            <div class="col-md-2">
                                <img src="./img/svg-export/svgexport-11.svg" class="card-img-top  " alt="..."
                                    style="width: 120px;background-color: #E0E7FF;border-radius: 50%;padding: 20px;">
                            </div>

                        </div>
                        <hr class="my-4 mt-5">
                    </div>

                </div>

                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class=" mb-4 " style="max-width: 1000px;">
                        <div class="row  d-flex align-items-center ">
                            <div class="col-md-2">
                                <img src="./img/svg-export/svgexport-12.svg" class="card-img-top  " alt="..."
                                    style="width: 120px;background-color: #E0E7FF;border-radius: 50%;padding: 20px;">
                            </div>

                            <div class="col-md-10">

                                <h5 class="font-weight-normal">The 400 Blows</h5>
                                <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy.
                                    Gastropub
                                    indxgo juice poutine.</p>
                                <a href="#" class="p-color">Learn More <i class="fal fa-arrow-right"></i> </a>

                            </div>

                        </div>
                        <hr class="my-4 mt-5">
                    </div>

                </div>



            </div>
        </div>



    </section>

    <!-- BUTTON -->

    <section>
        <div class="container" style="display: flex;justify-content: center;padding: 50px;">
            <button type="button" class="btn btn-primary btn-lg pb-color" style="padding: 6px 30px;">Button</button>
        </div>





    </section>


    <!-- RATING -->

    <section>
        <div class="card" style="margin: 200px 0;">
            <div class="container" style="padding: 0 160px;">
                <div class="row">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img class="rounded" src="./img/photo/400x400.png" alt="..." style="width: 100%;">
                        </div>
                        <div class="col-md-6">

                            <div class="card-body ml-4">
                                <p class="card-text mb-0 mt-1 font-weight-light" style="color: #909090;">BRAND NAME
                                </p>

                                <h2 class="card-title font-weight-normal m-0 p-0">The Catcher in the Rye</h2>
                                <div class="container m-0 p-0">
                                    <div class="row m-0 p-0 d-flex align-items-center ">
                                        <img class="" src="./img/svg-export/svgexport-13.svg" alt="..."
                                            style="width: 15px;margin: 5px 1px;">
                                        <img class="" src="./img/svg-export/svgexport-13.svg" alt="..."
                                            style="width: 15px;margin: 5px 1px;">
                                        <img class="" src="./img/svg-export/svgexport-13.svg" alt="..."
                                            style="width: 15px;margin: 5px 1px;">
                                        <img class="" src="./img/svg-export/svgexport-13.svg" alt="..."
                                            style="width: 15px;margin: 5px 1px;">
                                        <img class="" src="./img/svg-export/svgexport-14.svg" alt="..."
                                            style="width: 15px;margin: 5px 1px;">
                                        <P class="mb-0 ml-3 mr-2">4 Reviews |</P>
                                        <img class="" src="./img/svg-export/svgexport-15.svg" alt="..."
                                            style="width: 20px;margin: 5px 1px;">
                                        <img class="" src="./img/svg-export/svgexport-16.svg" alt="..."
                                            style="width: 20px;margin: 5px 1px;">
                                        <img class="" src="./img/svg-export/svgexport-17.svg" alt="..."
                                            style="width: 20px;margin: 5px 1px;">

                                    </div>
                                </div>

                                <div class="container m-0 p-0">
                                    <p class="card-text mt-3">Fam locavore kickstarter distillery. Mixtape chillwave
                                        tumeric
                                        sriracha taximy chia microdosing tilde DIY. XOXO fam indxgo juiceramps
                                        cornhole
                                        raw
                                        denim forage brooklyn. Everyday carry +1 seitan poutine tumeric. Gastropub
                                        blue
                                        bottle austin listicle pour-over, neutra jean shorts keytar banjo tattooed
                                        umami
                                        cardigan.</p>
                                </div>

                                <div class="container m-0 p-0 mt-2">

                                    <div class="row">
                                        <div class="col-12 d-flex align-items-center">
                                            <div class="d-flex align-items-center ">
                                                <P class="m-0 p-0 mr-1">Color</P>
                                                <button type="button" class="btn btn-primary btn-lg wb-color mr-1"
                                                    style="padding: 10px;border-radius: 50%;"></button>
                                                <button type="button" class="btn btn-primary btn-lg bb-color mr-1"
                                                    style="padding: 10px;border-radius: 50%;"></button>
                                                <button type="button" class="btn btn-primary btn-lg pb-color mr-3"
                                                    style="padding: 10px;border-radius: 50%;"></button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <P class="m-0 p-0 mr-3">Size</P>
                                                <select id="disabledSelect" class="form-control p-2"
                                                    style="height: 40px;width: 90px;">
                                                    <option>SM</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                    <option>XL</option>
                                                </select>
                                            </div>

                                        </div>

                                    </div>

                                </div>




                                <hr class="my-4">

                                <div class="container m-0 p-0 ">
                                    <div class="row">
                                        <div class="col-6">
                                            <h3 class="card-text font-weight-normal">$58.00</h3>

                                        </div>
                                        <div class="col-6 d-flex justify-content-end align-items-center">
                                            <button type="button" class="btn btn-primary btn-lg pb-color mr-3"
                                                style="padding: 0 30px; height: 50px;">Button</button>

                                            <a class="" href="#">
                                                <img src="./img/svg-export/svgexport-19.svg" class="p-2 "
                                                    height="40px" alt=""
                                                    style="background-color: #dadada;border-radius: 50%;">
                                            </a>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section>




    <!-- FIELDMIX -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: auto;">
                        <img src="./img/photo/420x260.png" class="card-img-top" alt="...">
                        <div class="">
                            <p class="card-text mb-0 mt-1 font-weight-light" style="color: #909090;">CATEGORY</p>
                            <h5 class="card-title font-weight-normal">The Catalyzer</h5>
                            <p class="card-text mb-5">$16.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: auto;">
                        <img src="./img/photo/421x261.png" class="card-img-top" alt="...">
                        <div class="">
                            <p class="card-text mb-0 mt-1 font-weight-light" style="color: #909090;">CATEGORY</p>
                            <h5 class="card-title font-weight-normal">Shooting Stars</h5>
                            <p class="card-text mb-5">$21.15</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: auto;">
                        <img src="./img/photo/422x262.png" class="card-img-top" alt="...">
                        <div class="">
                            <p class="card-text mb-0 mt-1 font-weight-light" style="color: #909090;">CATEGORY</p>
                            <h5 class="card-title font-weight-normal">Neptune</h5>
                            <p class="card-text mb-5">$12.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: auto;">
                        <img src="./img/photo/423x263.png" class="card-img-top" alt="...">
                        <div class="">
                            <p class="card-text mb-0 mt-1 font-weight-light" style="color: #909090;">CATEGORY</p>
                            <h5 class="card-title font-weight-normal">The 400 Blows</h5>
                            <p class="card-text mb-5">$18.40</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: auto;">
                        <img src="./img/photo/424x264.png" class="card-img-top" alt="...">
                        <div class="">
                            <p class="card-text mb-0 mt-1 font-weight-light" style="color: #909090;">CATEGORY</p>
                            <h5 class="card-title font-weight-normal">The Catalyzer</h5>
                            <p class="card-text mb-5">$16.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: auto;">
                        <img src="./img/photo/425x265.png" class="card-img-top" alt="...">
                        <div class="">
                            <p class="card-text mb-0 mt-1 font-weight-light" style="color: #909090;">CATEGORY</p>
                            <h5 class="card-title font-weight-normal">Shooting Stars</h5>
                            <p class="card-text mb-5">$21.15</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: auto;">
                        <img src="./img/photo/427x267.png" class="card-img-top" alt="...">
                        <div class="">
                            <p class="card-text mb-0 mt-1 font-weight-light" style="color: #909090;">CATEGORY</p>
                            <h5 class="card-title font-weight-normal">Neptune</h5>
                            <p class="card-text mb-5">$12.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: auto;">
                        <img src="./img/photo/428x268.png" class="card-img-top" alt="...">
                        <div class="">
                            <p class="card-text mb-0 mt-1 font-weight-light" style="color: #909090;">CATEGORY</p>
                            <h5 class="card-title font-weight-normal">The 400 Blows</h5>
                            <p class="card-text mb-5">$18.40</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>




    <!-- MAP -->

    <section>

        <div class="container-fluid  p-0 m-0 mb-5 mt-5" style="position: relative;">
            <iframe class="container-fluid p-0 m-0"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d225.6362039791967!2d55.27413328366314!3d25.19717641669751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43348a67e24b%3A0xff45e502e1ceb7e2!2z5ZOI6YeM55m85aGU!5e0!3m2!1szh-TW!2stw!4v1618139729600!5m2!1szh-TW!2stw"
                width="600" height="696" style="border:0;filter:grayscale(500%) contrast(80%);" allowfullscreen=""
                loading="lazy">

            </iframe>

            <div>
                <div class="forms"
                    style="border-radius: 10px;padding:10px;background-color: white;position: absolute;right: 200px;top: 40px;">
                    <div class="row p-3">

                        <div class="col-12">

                            <h3>Feedback</h3>

                            <p>Post-ironic portland shabby chic echo park, banjo fashion axe</p>

                            <div class="form-group">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4">
                            </div>

                            <div class="form-group">
                                <label for="inputAddress">Message</label>
                                <input type="text" class="form-control " id="inputAddress" placeholder=" "
                                    style="height: 200px;">
                            </div>

                            <button type="submit" class="btn btn-primary p-3 pb-color w-100">Button</button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>
{{--  

{{ asset('') }} 確保網域路徑

--}}

@endsection

@section('js')
@endsection

