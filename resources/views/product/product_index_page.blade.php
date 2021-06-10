@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/front_product_index.css') }}" />

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.js"
        integrity="sha512-CrNI25BFwyQ47q3MiZbfATg0ZoG6zuNh2ANn/WjyqvN4ShWfwPeoCOi9pjmX4DoNioMQ5gPcphKKF+oVz3UjRw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.css"
        integrity="sha512-/D4S05MnQx/q7V0+15CCVZIeJcV+Z+ejL1ZgkAcXE1KZxTE4cYDvu+Fz+cQO9GopKrDzMNNgGK+dbuqza54jgw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <style>
        .typebtns {
            justify-content: flex-start;
            align-items: center;
            padding: 1rem 0;
        }

        .typebtn {
            background-color: lightgray;
            color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 5px;
            margin: 0 10px;
            width: 100px;
            cursor: pointer;
            border-radius: 20px;
            font-weight: 700;
        }

        .typebtn:hover {
            background-color: rgb(223, 223, 223);
            text-decoration: none;
        }

        a:hover {
            color: #000;
        }

        .text-6xl {
            font-size: 2rem !important;
        }

    </style>
@endsection

@section('content')
    <div class="p-0 my-5">

    </div>
@endsection
@section('main')

    <div class="text-gray-600 font-body">
        <div class="grid md:grid-cols-2 lg:grid-cols-3">
            {{-- <div class="md:col-span-1 md:flex md:justify-end">
          <nav class="text-right">
            <div class="flex justify-between items-center">
              <h1 class="font-bold uppercase p-4 border-b border-gray-100">
                <a href="/" class="hover:text-gray-700">Food Ninja</a>
              </h1>
              <div class="px-4 cursor-pointer md:hidden" id="burger">
                <svg
                  class="w-6"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                  />
                </svg>
              </div>
            </div>
            <ul class="text-sm mt-6 hidden md:block" id="menu">
              <li class="text-gray-700 font-bold py-1">
                <a
                  href="#"
                  class="px-4 flex justify-end border-r-4 border-primary"
                  ><span>Home</span>
                  <svg
                    class="w-5 ml-2"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                    />
                  </svg>
                </a>
              </li>
              <li class="py-1">
                <a href="#" class="px-4 flex justify-end border-r-4 border-white"
                  ><span>About</span>
                  <svg
                    class="w-5 ml-2"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                    />
                  </svg>
                </a>
              </li>
              <li class="py-1">
                <a href="#" class="px-4 flex justify-end border-r-4 border-white"
                  ><span>Contact</span>
                  <svg
                    class="w-5 ml-2"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                    />
                  </svg>
                </a>
              </li>
            </ul>
          </nav>
        </div> --}}
            <main class="bg-white px-16 py-6 md:col-span-2 lg:col-span-3 min-h-screen">
                {{-- <div class="flex justify-center md:justify-end">
            <a
              href="#"
              class="
                btn
                text-primary
                border-primary
                md:border-2
                hover:bg-primary
                hover:text-white
                transition
                ease-out
                duration-500
              "
              >Log in</a
            >
            <a
              href="#"
              class="
                btn
                text-primary
                border-primary
                md:border-2
                hover:bg-primary
                hover:text-white
                transition
                ease-out
                duration-500
                ml-2
              "
              >Sign up</a
            >
          </div> --}}
                <header>
                    <h2 class="text-gray-700 text-6xl font-semibold">FANCY CLOTHES</h2>
                    {{-- <h3 class="text-2xl font-semibold">Make Your Style</h3> --}}
                </header>
                <div class="">
                    <h4 class="font-bold mt-3 pb-2 border-b border-gray-200">
                        Latest Collections
                    </h4>
                    <div class="typebtns d-flex ">
                        <a class="typebtn d-flex  " href="/realindex">all</a>

                        @foreach ($productTypes as $type)

                            <a class="typebtn d-flex " href="/realindex?typeId={{ $type->id }}">{{ $type->name }}</a>

                        @endforeach
                    </div>

                    <div class="mt-3 grid lg:grid-cols-4  gap-10 px-5">
                        @foreach ($productData as $item)
                            <div class="card hover:shadow-lg">

                                <img src="{{ $item->img }}" alt="stew" class="w-full object-cover" height="500px" />

                                <div class="m-4">
                                    <span class="font-bold">{{ $item->name }}</span>
                                    <span class="d-flex justify-content-between">

                                        <span class="block text-gray-500 text-sm">${{ $item->price }}</span>
                                        <button class="add-btn typebtn d-flex  "
                                            data-id="{{ $item->id }}">加入購物車</button>
                                    </span>

                                </div>

                                <div class="badge">
                                    <span>{{ $item->gotProductType->name }}</span>
                                </div>

                            </div>
                        @endforeach

                    </div>


                    <h4 class="font-bold mt-12 pb-2 border-b border-gray-200">
                        Most Popular
                    </h4>
                    <div class="mt-8">
                        <!-- cards -->
                    </div>
                    <div class="flex justify-center">
                        <div class="
                              btn
                              bg-secondary-100
                              text-secondary-200
                              hover:shadow-inner
                              transform
                              hover:scale-125
                              hover:bg-opacity-50
                              transition
                              ease-out
                              duration-300
                            ">
                            Load more
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>





@endsection

@section('js')
    <!--引用jQuery-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!--引用dataTables.js-->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


    <script>
        const burger = document.getElementById("burger");
        const menu = document.getElementById("menu");

        burger.addEventListener("click", () => menu.classList.toggle("hidden"));

    </script>

    {{-- 加入購物車 --}}
    <script>
        document.querySelectorAll('.add-btn').forEach(function(addBtn) {
            addBtn.addEventListener('click', function() {
                var productId = this.getAttribute('data-id');
                var formData = new FormData();
                console.log(productId);

                formData.append('_token', '{{ csrf_token() }}');
                formData.append('productId', productId);


                fetch('/shopping_cart/add', {
                    method: 'POST',
                    body: formData
                }).then(function(response) {
                    return response.text();

                }).then(function(data) {
                    console.log(data);
                    if (data == 'success')
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: '已加入購物車',
                            showConfirmButton: false,
                            timer: 1500
                        })
                })

            });

        });

    </script>




@endsection
