@extends('layouts.template')

@section('title')
Digipack-index-cart-03
@endsection

@section('css')
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
{{-- <script src="https://cdn.jsdelivr.net/npm/tw-city-selector@2.1.1/dist/tw-city-selector.min.js" integrity="sha256-Iz/pF94D+raqeqXJDoOetn9L0yBFI7ogMMrhT6RzmFw=" crossorigin="anonymous"></script> --}}
<link rel="stylesheet" href="{{ asset('/css/cart.vol.01.css') }}">

<style>
    main {
        padding: 50px 0;
        width: 100%;
        background-color: #D1D5DB;
    }

    form button:not(.next) {
        width: 24px;
        height: 24px;
    }

    form input {
        width: 120px;
        height: 24px;
        font-size: 14px;
    }

    form label {
        margin: 0
    }

    .price {
        font-size: 12px;
        width: 70px;
    }
</style>
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
                <div class="progress-bar" role="progressbar" style="width: 100%;background-color: #6EE7B7;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="rounded-circle text-center text-white" style="width: 40px; height: 40px; line-height: 40px; background-color: #10B981;">3</div>
            <div class="progress" style="width: 12%;max-width: 180px; height: 8px;">
                <div class="progress-bar" role="progressbar" style="width: 30%;background-color: #6EE7B7;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="rounded-circle text-center" style="width: 40px; height: 40px; line-height: 40px; background-color: #ffffff;">4</div>
        </div>
        <div id="process-text" class="d-flex justify-content-between px-2">
            <div class="pt-2 pl-lg-2">確認購物車</div>
            <div class="pt-2 pr-sm-3">付款與運送方式</div>
            <div class="pt-2 mr-sm-4">填寫資料</div>
            <div class="pt-2 pr-sm-2">完成訂購</div>
        </div>
    </section>
    <hr>
    <section>
        <form action="/shopping_cart/information/check" method="POST">
            @csrf
            <h2 class="h4">寄送資料</h2>
            <div>
                <div class="form-group">
                    <label for="inputEmail4">姓名</label>
                    <input type="text" class="form-control shadow-none" name="name" placeholder="蒙其 ‧ D ‧ 魯夫">
                </div>
                <div class="form-group">
                    <label for="inputAddress">電話</label>
                    <input type="tel" class="form-control shadow-none" name="phone" placeholder="0988556117">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Email</label>
                    <input type="email" class="form-control shadow-none" name="email" placeholder="onepiece@gmail.com">
                </div>

{{-- 地址~~~~~~~~~~~~~ --}}
                <div class="form-row d-flex pb-4">
                    <div class="city-selector-set form-group col-md-6 ">

                        <label for="inputCity">地址</label>
                    
                        <div>
                            <!-- 縣市選單 -->
                            <select class="county form-control shadow-none col-5" name="county " placeholder="城市"></select>
                        </div>
                        <div>
                            <!-- 區域選單 -->
                            <select class="district form-control shadow-none col-5" name="district" placeholder="區域"></select>
                        </div>

                        <div>
                            <!-- 郵遞區號欄位 (建議加入 readonly 屬性，防止修改) -->
                            <input class="zipcode form-control shadow-none col-5" name="zipcode" type="text" size="3" readonly
                                placeholder="郵遞區號">

   
                                    <label for="address"></label>
                                    <input type="text" class="form-control shadow-none" id="address" name="address" placeholder="輸入完整地址">
                        </div>
                    </div>
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
                        <div>${{$shipment}}</div>
                    </div>
                    <div class="d-flex justify-content-between" style="line-height: 28px;  width: 236px;">
                        <div class="text-black-50" style="font-size: 14px;">總計:</div>
                        <div>${{number_format($subTotal+$shipment)}}</div>
                    </div>
                </div>
            </div>

            <hr>
            <div id="btn_box" class="d-flex justify-content-between align-items-center pt-1">
                <a href="/shopping_cart/payment" class="btn btn btn-outline-primary py-2 px-5" data-action="prev">上一步</a>
                <button class="btn btn-primary py-2 px-5 next" type="submit">前往付款</button>
            </div>
        </form>
    </section>
</div>
@endsection

@section('js')

{{-- 引用地址JS --}}
<script src="{{ asset('js/tw-city-selector.js') }}"></script>

<script>
    new TwCitySelector({
      el: '.city-selector-set',
      elCounty: '.county', // 在 el 裡查找 element
      elDistrict: '.district', // 在 el 裡查找 element
      elZipcode: '.zipcode' // 在 el 裡查找 element
    });
  </script>
@endsection