@extends('layouts.template')

@section('title')
    Digipack-index-cart-01
@endsection

@section('css')

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/cart.vol.01.css') }}">
    <style>
        .card-img-top {
            width: 60px;
            height: 60px;
            background-color: #E0E7FF;
            border-radius: 50%;
            padding: 20px;
            background-position: center;
            background-size: cover;
        }

        .targetprice {
            width: 100px;
            text-align: right;

        }

        .calc-btn {
            border: 0;
            width: 30px;
            height: 30px;
        }

        .qty-input {
            width: 80px;
            text-align: right;
        }

        .fake-hr {

            border-top: 1px solid rgb(230, 230, 230);
            margin-top: 20px;
            margin-bottom: 20px;
            width: 100%;

        }

    </style>



@endsection

@section('main')

    <main>
        <section style="background-color: #D1D5DB;" class="carts">
            <div class="cart container d-flex justify-content-center align-items-center flex-column pt-4 pb-0 mb-3">
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
                            <div class="progress-bar bg-gogo rounded-pill" role="progressbar" style="width: 40%"
                                aria-valuenow="15" aria-valuemin="25" aria-valuemax="25">
                            </div>
                        </div>

                        <div class="pin d-flex justify-content-center align-items-center flex-column">
                            <div class="p-1 mb-2 rounded-circle text-center d-flex justify-content-center align-items-center"
                                style="background-color: #f0f0f0;width: 40px;height: 40px;color: black;">2</div>
                        </div>

                        <div class="progress">
                            <div class="progress-bar bg-gogo rounded-pill" role="progressbar" style="width: 0%"
                                aria-valuenow="15" aria-valuemin="25" aria-valuemax="25">
                            </div>
                        </div>

                        <div class="pin d-flex justify-content-center align-items-center flex-column">
                            <div class="p-1 mb-2 rounded-circle text-center d-flex justify-content-center align-items-center"
                                style="background-color: #f0f0f0;width: 40px;height: 40px;color: black;">3</div>

                        </div>

                        <div class="progress">
                            <div class="progress-bar bg-gogo rounded-pill" role="progressbar" style="width: 0%"
                                aria-valuenow="15" aria-valuemin="25" aria-valuemax="25">
                            </div>
                        </div>

                        <div class="pin d-flex justify-content-center align-items-center flex-column">
                            <div class="p-1 mb-2 rounded-circle text-center d-flex justify-content-center align-items-center"
                                style="background-color: #f0f0f0;width: 40px;height: 40px;color: black;">4</div>
                        </div>

                    </div>
                </div>
            </div>


            <div class=" cart container p-0 pt-3 pl-5 pr-5">
                <div class="row pl-5 pr-5 pt-3" style="width: 100%;">
                    <div class="row d-flex justify-content-center align-items-start flex-column" style="width: 100%;">
                        <h4 class="text-left" style="font-weight: normal;">訂單明細</h4>
                    </div>
                </div>

                <div class="fake-hr"></div>


                @foreach ($cartCollection as $item)

                    <div class="row d-flex justify-content-between align-items-center">

                        <div class="col-8 d-flex align-items-start">
                            <button class="del-btn btn-danger m-3" data-id="{{ $item->id }}">X</button>
                            <div class="card-img-top mr-3 " style="background-image:url('{{ $item->attributes->img }}')">
                            </div>

                            <div class="text-left d-flex justify-content-start align-items-start flex-column">
                                <h4><a>{{ $item->name }}</a></h4>
                                <p>{{ $item->attributes->type }}</p>
                            </div>

                        </div>

                        <div class="col-4 d-flex justify-content-end align-items-center">

                            <div class="d-flex align-items-center pr-3">
                                <button class="minus        calc-btn " style="background-color: skyblue;">-</button>

                                <input class="qty-input   m-2 " type="number" data-id="{{ $item->id }}"
                                    value="{{ $item->quantity }}">

                                <button class="plus         calc-btn " style="background-color: pink;">+</button>
                                <span class="m-0 pl-3 pr-3">$</span>
                            </div>

                            <p class="m-0 pl-3 targetprice " data-price="{{ $item->price }}">

                                {{ $item->price * $item->quantity }}

                            </p>

                        </div>

                        <div class="fake-hr"></div>

                    </div>

                @endforeach



                <div class=" container p-0 m-0">

                    <div class="row p-0">
                        <div class="col-xl-9 col-lg-8 col-5"></div>
                        <div class="col-xl-1 col-lg-2 col-3">數量:</div>
                        <div id="total-qty" class="col-xl-2 col-lg-2 col-4 text-right p-0"></div>
                    </div>
                    <div class="row p-0">
                        <div class="col-xl-9 col-lg-8 col-5"></div>
                        <div class="col-xl-1 col-lg-2 col-3">小計:</div>
                        <div id="sub-price" class="col-xl-2 col-lg-2 col-4 text-right p-0"></div>
                    </div>
                    <div class="row p-0">
                        <div class="col-xl-9 col-lg-8 col-5"></div>
                        <div class="col-xl-1 col-lg-2 col-3">運費:</div>
                        <div id="shipment-price" class="col-xl-2 col-lg-2 col-4 text-right p-0"></div>
                    </div>
                    <div class="row p-0">
                        <div class="col-xl-9 col-lg-8 col-5"></div>
                        <div class="col-xl-1 col-lg-2 col-3">總計:</div>
                        <div id="total-price" class="col-xl-2 col-lg-2 col-4 text-right p-0"></div>
                    </div>

                    <div class="fake-hr"></div>

                </div>

                <div class="container d-flex justify-content-between" style="padding: 25px;">

                    <a href="./boostrap-homepage.html" class="btn p-color">
                        <i class="fal fa-arrow-left"></i>
                        Homepage
                    </a>

                    <a href="./cart.vol.02.html">
                        <button type="button" class="btn btn-primary btn-lg pb-color"
                            style="padding: 6px 30px;">Next</button>
                    </a>

                </div>
            </div>

        </section>

    </main>
@endsection
@section('js')


    <script>
        // .parentElement

        //  加加 減減 動動
        var plusBtns = document.querySelectorAll('.plus');
        var minusBtns = document.querySelectorAll('.minus');
        var qtyInputs = document.querySelectorAll('.qty-input');

        console.log(minusBtns, plusBtns, qtyInputs);

        // 加按鈕
        plusBtns.forEach(function(plusBtn) {
            plusBtn.addEventListener('click', function() {

                // 更改inputvalue
                var input = this.previousElementSibling;
                input.value = input.value * 1 + 1;

                // 更新賽宣(session)
                updateData(input, 1)

                // 更改p content

                var price = this.parentElement.nextElementSibling;
                var newPrice = (price.getAttribute('data-price') * input.value).toLocaleString();
                console.log(price);
                price.innerText = newPrice;

                // calcPrice(this);
                cartCalc()

            });
        });


        // 更新的方宣
        function updateData(input, qty) {
            // var qty = 1;
            var productId = input.getAttribute('data-id');
            var formData = new FormData();
            console.log(productId);

            formData.append('_token', '{{ csrf_token() }}');
            formData.append('productId', productId);
            formData.append('qty', qty);


            fetch('/shopping_cart/update', {
                    method: 'POST',
                    body: formData
                })
                .then(function(response) {
                    return response.text();

                }).then(function(data) {
                    console.log(data);
                    input.value = data;
                })

        }

        // 減按鈕
        minusBtns.forEach(function(minusBtn) {
            minusBtn.addEventListener('click', function() {
                var input = this.nextElementSibling;
                input.value = input.value * 1 - 1;

                // 更改inputvalue
                // 阻止他變成負數
                // 更新賽宣
                if (input.value <= 1) {
                    input.value = 1;
                }
                updateData(input, -1)



                // 更改p content

                var price = this.parentElement.nextElementSibling;
                var newPrice = (price.getAttribute('data-price') * input.value).toLocaleString();
                console.log(price);
                price.innerText = newPrice;

                // calcPrice(this);
                cartCalc()
            });
        });

        // 動數字

        qtyInputs.forEach(function(qtyInput) {
            console.log(qtyInput);
            qtyInput.addEventListener('change', function() {

                var input = this;
                if (input.value <= 1) {
                    input.value = 1;
                }
                console.log(input.value);
                // 更改p content

                var price = this.parentElement.nextElementSibling;
                var newPrice = (price.getAttribute('data-price') * input.value).toLocaleString();
                console.log(price);
                price.innerText = newPrice;

                // calcPrice(this);
                cartCalc()

            })

        })

        //  統計顯示

        cartCalc()

        function cartCalc() {
            var totalQty = 0;
            var subPrice = 0;
            var shipmentPrice = 6000;
            var totalPrice = 0;
            var qtyInputs = document.querySelectorAll('.qty-input');

            qtyInputs.forEach(function(qtyInput) {

                // 統計數量

                totalQty += Number(qtyInput.value);
                console.log(totalQty);

                // 統計毛價格

                var price = qtyInput.parentElement.nextElementSibling.getAttribute('data-price');
                subPrice += price * qtyInput.value;

            });

            document.querySelector('#total-qty').innerText = totalQty.toLocaleString();
            document.querySelector('#sub-price').innerText = subPrice.toLocaleString();

            //  計算運費
            if (subPrice >= 15000) {
                shipmentPrice = 0;
            }
            document.querySelector('#shipment-price').innerText = shipmentPrice.toLocaleString();

            //  統計總額
            totalPrice = subPrice + shipmentPrice;

            document.querySelector('#total-price').innerText = totalPrice.toLocaleString();
        }


        // 將重複動作包覆成function
        // this = element;


        // 刪除該筆資料

        // function productRemove(element) {

        //     var delBtns = document.querySelectorAll('del-btn');


        //     delBtns.forEach(function(delBtn) {

        //             delBtn.addEventListener('click', function() {
        //                 var formData = new FormData();

        //                 formData.append('_token', '{{ csrf_token() }}');
        //                 formData.append('productId', this.getAttribute('data-id'));
        //                 delBtnElement = this;


        //                 fetch('/shopping_cart/delete', {
        //                         method: 'POST',
        //                         body: formData
        //                     })
        //                     .then(function(response) {
        //                         return response.text();

        //                     }).then(function(data) {
        //                         console.log(data);
        //                         if (data == 'success') {
        //                             var productArea = delBtnElement.parentElement.parentElement;
        //                             productArea.remove();
        //                             productArea.nextElementSibling.remove();

        //                         };

        //                     })

        //             });



        //         )
        //     }
        }

    </script>





@endsection
