@extends('layouts.template')

@section('title')
    Digipack-index-cart-02
@endsection

@section('css')

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('/css/cart.vol.01.css') }}">

@endsection

@section('main')

<div class="container bg-light rounded py-5 px-5">
    <h1 class="h3 font-weight-bold">購物車</h1>
    <section class="pt-3">
        <div class="d-flex justify-content-around position-relative align-items-center">
            <div class="rounded-circle text-center text-white" style="width: 40px; height: 40px; line-height: 40px; background-color: #10B981;">1</div>
            <div class="progress" style="width: 12%;max-width: 180px; height: 8px;">
                <div class="progress-bar" role="progressbar" style="width: 100%;background-color: #6EE7B7;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="rounded-circle text-center text-white" style="width: 40px; height: 40px; line-height: 40px; background-color: #10B981;">2</div>
            <div class="progress" style="width: 12%;max-width: 180px; height: 8px;">
                <div class="progress-bar" role="progressbar" style="width: 30%;background-color: #6EE7B7;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="rounded-circle text-center" style="width: 40px; height: 40px; line-height: 40px; background-color: #ffffff;">3</div>
            <div class="progress" style="width: 12%;max-width: 180px; height: 8px;">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="rounded-circle text-center" style="width: 40px; height: 40px; line-height: 40px; background-color: #ffffff;">4</div>
        </div>
        <div id="process-text" class="d-flex justify-content-between px-2">
            <div class="pt-2 pl-sm-2">確認購物車</div>
            <div class="pt-2 pr-sm-3">付款與運送方式</div>
            <div class="pt-2 mr-sm-4">填寫資料</div>
            <div class="pt-2 pr-sm-2">完成訂購</div>
        </div>
    </section>
    <hr>
    <section>
        <form action="/shopping_cart/payment/check" method="POST">
            @csrf
            <div>
                <div>
                    <h2 class="h4 pb-3">付款方式</h2>
                    @php
                        $payment = Session::get('payment');
                    @endphp
                    <label class="pl-5" style="font-size: 20px;">
                        <input type="radio" name="payment" value="credit" @if ($payment == "credit") checked @endif required> 信用卡付款
                    </label>
                    <hr>
                    <label class="pl-5" style="font-size: 20px;">
                        <input type="radio" name="payment" value="atm" @if ($payment == "atm") checked @endif required> 網路 ATM
                    </label>
                    <hr>
                    <label class="pl-5" style="font-size: 20px;">
                        <input type="radio" name="payment" value="cvs" @if ($payment == "cvs") checked @endif required> 超商代碼
                    </label>
                </div>
                <hr>
                <div>
                    <h2 class="h4 pb-3">運送方式</h2>
                    @php
                        $shipment = Session::get('shipment');
                    @endphp
                    <label class="pl-5" style="font-size: 20px;">
                        <input type="radio" name="shipment" value="home" @if ($shipment == "home") checked @endif required>黑貓宅配
                    </label>
                    <hr>
                    <label class="pl-5" style="font-size: 20px;">
                        <input type="radio" name="shipment" value="store" @if ($shipment == "store") checked @endif required>超商店到店
                    </label>
                </div>
                <hr>
            </div>
            <div>
                <div class="d-flex flex-column align-items-end">

                    <div class="d-flex justify-content-between" style="line-height: 28px; width: 236px;">
                        <div class="text-black-50" style="font-size: 14px;">數量:</div>
                        <div>{{\Cart::getTotalQuantity()}}</div>
                    </div>

                    @php
                        $subTotal = \Cart::getSubTotal();
                        $shipment = \Cart::getSubTotal() > 15000 ? 0 : 6000;
                        
                    @endphp

                    <div class="d-flex justify-content-between" style="line-height: 28px;  width: 236px;">
                        <div class="text-black-50" style="font-size: 14px;">小計:</div>
                        <div>${{number_format($subTotal)}}</div>
                    </div>
                   
                    <div class="d-flex justify-content-between" style="line-height: 28px;  width: 236px;">
                        <div class="text-black-50" style="font-size: 14px;">運費:</div>
                        <div>${{number_format($shipment)}}</div>
                    </div>

                    <div class="d-flex justify-content-between" style="line-height: 28px;  width: 236px;">
                        <div class="text-black-50" style="font-size: 14px;">總計:</div>
                        <div>${{number_format($subTotal+$shipment)}}</div>
                    </div>

                </div>
            </div>
            <hr>
            <div id="btn_box" class="d-flex justify-content-between align-items-center pt-1">
                <a href="/shopping_cart/list" class="btn btn btn-outline-primary py-2 px-5">上一步</a>
                <button class="btn btn-primary py-2 px-5 next">下一步</button>
            </div>
        </form>
    </section>
</div>

    @endsection
    @section('js')

    @endsection
