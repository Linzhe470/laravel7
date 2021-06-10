@extends('layouts.template')

@section('title')
    Digipack-index-cart-02
@endsection

@section('css')

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


                <div class="fake-hr"></div>

                {{-- 之後要放進去 --}}
                <section>
                    <form action="" method="POST">
                        @csrf
                    </form>

                </section>

                <div class="row pl-5 pr-5 pt-3" style="width: 100%;">
                    <div class="row d-flex justify-content-center align-items-start flex-column" style="width: 100%;">
                        <h4 class="text-left" style="font-weight: normal;">
                            付款方式
                        </h4>
                    </div>
                </div>

                <div class="container p-0 pt-3 pl-5 pr-5">
                    <div class="row d-flex justify-content-start pl-5 align-items-center">

                        <label class="form-check-label" for="payment">
                            <input class="form-check-input" type="radio" name="payment" value="visa" @if ($payment == "visa")
                                
                            @endif  required>
                            信用卡付款
                        </label>

                        <div class="fake-hr"></div>
                    </div>
                    <div class="row d-flex justify-content-start pl-5 align-items-center">

                        <label class="form-check-label" for="payment">
                            <input class="form-check-input" type="radio" name="payment" value="atm" @if ($payment == "atm")
                                
                            @endif required>
                            網路 ATM
                        </label>

                        <div class="fake-hr"></div>
                    </div>
                    <div class="row d-flex justify-content-start pl-5 align-items-center">
                        <label class="form-check-label" for="payment">
                            <input class="form-check-input" type="radio" name="payment" value="cvs" @if ($payment == "cvs")
                                
                            @endif required>
                            超商代碼
                        </label>
                        <div class="fake-hr"></div>
                    </div>

                </div>

                <div class="row pl-5 pr-5 pt-3" style="width: 100%;">
                    <div class="row d-flex justify-content-center align-items-start flex-column" style="width: 100%;">
                        <h4 class="text-left" style="font-weight: normal;">運送方式</h4>
                    </div>
                </div>

                <div class="container p-0 pt-3 pl-5 pr-5">
                    <div class="row d-flex justify-content-start pl-5 align-items-center">
                   
                                <label class="form-check-label" for="shipment">
                                    <input class="form-check-input" type="radio" name="shipment" value="home" @if ($shipment == "home")
                                        
                                    @endif required>
                                    黑貓宅配
                                </label>
    
                        <div class="fake-hr"></div>
                    </div>
                    <div class="row d-flex justify-content-start pl-5 align-items-center">
                   
                                <label class="form-check-label" for="shipment">
                                    <input class="form-check-input" type="radio" name="shipment" value="store" @if ($shipment == "store")
                                        
                                    @endif required>
                                    超商店到店
                                </label>
    
                        <div class="fake-hr"></div>
                    </div>
                    

                </div>
                <div class="container p-0 pt-3 pl-5 pr-5">
                    <div class="container p-0 m-0">

                        <div class="row p-0">
                            <div class="col-xl-9 col-lg-8 col-5"></div>
                            <div class="col-xl-1 col-lg-2 col-3">數量:</div>
                            <div class="col-xl-2 col-lg-2 col-4 text-right p-0">{{ \Cart::getTotalQuantity() }}</div>
                        </div>

                        @php
                            $subTotal = \Cart::getSubTotal();
                            $shipment = \Cart::getSubTotal() > 15000 ? 0 : 6000;
                            
                        @endphp

                        <div class="row p-0">
                            <div class="col-xl-9 col-lg-8 col-5"></div>
                            <div class="col-xl-1 col-lg-2 col-3">小計:</div>
                            <div class="col-xl-2 col-lg-2 col-4 text-right p-0">
                                {{ number_format($subTotal) }}
                            </div>
                        </div>


                        <div class="row p-0">
                            <div class="col-xl-9 col-lg-8 col-5"></div>
                            <div class="col-xl-1 col-lg-2 col-3">運費:</div>
                            <div class="col-xl-2 col-lg-2 col-4 text-right p-0">
                                {{ $shipment }}</div>
                        </div>
                        <div class="row p-0">
                            <div class="col-xl-9 col-lg-8 col-5"></div>
                            <div class="col-xl-1 col-lg-2 col-3">總計:</div>
                            <div class="col-xl-2 col-lg-2 col-4 text-right p-0">
                                {{ number_format($subTotal + $shipment) }}
                            </div>
                        </div>

                        <div class="fake-hr"></div>
                    </div>


                    <div class="container p-0 pt-3 pl-5 pr-5">

                        <div class="container d-flex justify-content-between" style="padding: 0;">
                            <a href="/shopping_cart/list"><button type="button" class="btn btn-primary btn-lg pbr-color"
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

    @endsection
