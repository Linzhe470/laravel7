@extends('layouts.template')

@section('title')
    Digipack-index-cart-02
@endsection

@section('css')

    <link rel="icon" href="./img/svg-export/p-logo.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/cart.vol.01.css') }}">

@endsection

@section('main')

    <main>
        <section style="background-color: #D1D5DB;" class="carts">
            <div class="cart container d-flex justify-content-center align-items-center flex-column">

                <div class="row pl-5 pr-5 pt-0" style="width: 100%;">
                    <div class="row d-flex justify-content-center align-items-start flex-column" style="width: 100%;">
                        <h3 class="text-left" style="font-weight: 800;">購物車</h3>
                    </div>
                </div>

                <div class="row pl-5 pr-5 mb-5 d-flex justify-content-center align-items-center" style="width: 100%;">

                    <div class="pins row d-flex justify-content-between align-items-center">

                        <div class="pin d-flex justify-content-center align-items-center flex-column">
                            <div class="p-1 mb-2 rounded-circle text-center d-flex justify-content-center align-items-center"
                                style="background-color: #10b981;width: 40px;height: 40px;color: white;">1
                            </div>
                        </div>

                        <div class="progress">
                            <div class="progress-bar bg-gogo rounded-pill" role="progressbar" style="width: 100%"
                                aria-valuenow="15" aria-valuemin="25" aria-valuemax="25">
                            </div>
                        </div>

                        <div class="pin d-flex justify-content-center align-items-center flex-column">
                            <div class="p-1 mb-2 rounded-circle text-center d-flex justify-content-center align-items-center"
                                style="background-color: #10b981;width: 40px;height: 40px;color: white;">2
                            </div>
                        </div>

                        <div class="progress">
                            <div class="progress-bar bg-gogo rounded-pill" role="progressbar" style="width: 40%"
                                aria-valuenow="15" aria-valuemin="25" aria-valuemax="25">
                            </div>
                        </div>

                        <div class="pin d-flex justify-content-center align-items-center flex-column">
                            <div class="p-1 mb-2 rounded-circle text-center d-flex justify-content-center align-items-center"
                                style="background-color: #ffffff;width: 40px;height: 40px;color: black;">3</div>

                        </div>

                        <div class="progress">
                            <div class="progress-bar bg-gogo rounded-pill" role="progressbar" style="width: 0%"
                                aria-valuenow="15" aria-valuemin="25" aria-valuemax="25">
                            </div>
                        </div>

                        <div class="pin d-flex justify-content-center align-items-center flex-column">
                            <div class="p-1 mb-2 rounded-circle text-center d-flex justify-content-center align-items-center"
                                style="background-color: #ffffff;width: 40px;height: 40px;color: black;">4</div>
                        </div>

                    </div>
                </div>



                <div style="border-top: 1px solid rgb(230, 230, 230);margin-top: 20px;margin-bottom: 20px;width:94%;">
                </div>

                <div class="row pl-5 pr-5 pt-3" style="width: 100%;">
                    <div class="row d-flex justify-content-center align-items-start flex-column" style="width: 100%;">
                        <h4 class="text-left" style="font-weight: normal;">
                            付款方式
                        </h4>
                    </div>
                </div>

                <div class="container p-0 pt-3 pl-5 pr-5">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-12 d-flex align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                    value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    信用卡付款
                                </label>
                            </div>
                        </div>
                        <div
                            style="border-top: 1px solid rgb(230, 230, 230);margin-top: 20px;margin-bottom: 20px;width:96%;">
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-12 d-flex align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                    value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">

                                    網路 ATM
                                </label>
                            </div>
                        </div>
                        <div
                            style="border-top: 1px solid rgb(230, 230, 230);margin-top: 20px;margin-bottom: 20px;width:96%;">
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-12 d-flex align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                    value="option2" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    超商代碼
                                </label>
                            </div>
                        </div>
                        <div
                            style="border-top: 1px solid rgb(230, 230, 230);margin-top: 20px;margin-bottom: 40px;width:100%;">
                        </div>
                    </div>

                </div>

                <div class="row pl-5 pr-5 pt-3" style="width: 100%;">
                    <div class="row d-flex justify-content-center align-items-start flex-column" style="width: 100%;">
                        <h4 class="text-left" style="font-weight: normal;">運送方式</h4>
                    </div>
                </div>

                <div class="container p-0 pt-3 pl-5 pr-5">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-12 d-flex align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios3"
                                    value="option3" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    黑貓宅配
                                </label>
                            </div>
                        </div>
                        <div
                            style="border-top: 1px solid rgb(230, 230, 230);margin-top: 20px;margin-bottom: 20px;width:96%;">
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-12 d-flex align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios4"
                                    value="option4" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    超商店到店
                                </label>
                            </div>
                        </div>
                        <div
                            style="border-top: 1px solid rgb(230, 230, 230);margin-top: 20px;margin-bottom: 20px;width:96%;">
                        </div>
                    </div>

                </div>
                <div class="container p-0 pt-3 pl-5 pr-5">
                    <div class="container p-0 m-0">

                        <div class="row p-0">
                            <div class="col-xl-9 col-lg-8 col-5"></div>
                            <div class="col-xl-1 col-lg-2 col-3">數量:</div>
                            <div class="col-xl-2 col-lg-2 col-4 text-right p-0">3</div>
                        </div>
                        <div class="row p-0">
                            <div class="col-xl-9 col-lg-8 col-5"></div>
                            <div class="col-xl-1 col-lg-2 col-3">小計:</div>
                            <div class="col-xl-2 col-lg-2 col-4 text-right p-0">$24.80</div>
                        </div>
                        <div class="row p-0">
                            <div class="col-xl-9 col-lg-8 col-5"></div>
                            <div class="col-xl-1 col-lg-2 col-3">運費:</div>
                            <div class="col-xl-2 col-lg-2 col-4 text-right p-0">$24.80</div>
                        </div>
                        <div class="row p-0">
                            <div class="col-xl-9 col-lg-8 col-5"></div>
                            <div class="col-xl-1 col-lg-2 col-3">總計:</div>
                            <div class="col-xl-2 col-lg-2 col-4 text-right p-0">$24.90</div>
                        </div>

                        <div
                            style="border-top: 1px solid rgb(230, 230, 230);margin-top: 20px;margin-bottom: 20px;width: 100%;">
                        </div>
                    </div>


                    <div class="container p-0 pt-3 pl-5 pr-5">

                        <div class="container d-flex justify-content-between" style="padding: 0;">
                            <a href="./cart.vol.01.html"><button type="button" class="btn btn-primary btn-lg pbr-color"
                                    style="padding: 6px 30px;">Back</button></a>
                            <a href="./cart.vol.03.html"><button type="button" class="btn btn-primary btn-lg pb-color"
                                    style="padding: 6px 30px;">Next</button></a>
                        </div>

                    </div>

                </div>

            </div>

        </section>

    @endsection
    @section('js')
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
            integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
        </script>
    @endsection
