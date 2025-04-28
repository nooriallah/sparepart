<div class="container-fluid">


    {{--    Search section --}}
    <div class="container">
        <div class="row">
            <div class="col">

                <form action={{ route("serp", 2025) }} method=""
                      class="search_result_form d-flex justify-content-center align-items-center">
                    <input
                        type="text"
                        name="vin"
                        class="w-100 border-0"
                        placeholder="Enter VIN number..."
                    />
                    <button type="submit" class="border-0">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"
                             viewBox="0 0 50 50">
                            <path
                                d="M 21 3 C 11.621094 3 4 10.621094 4 20 C 4 29.378906 11.621094 37 21 37 C 24.710938 37 28.140625 35.804688 30.9375 33.78125 L 44.09375 46.90625 L 46.90625 44.09375 L 33.90625 31.0625 C 36.460938 28.085938 38 24.222656 38 20 C 38 10.621094 30.378906 3 21 3 Z M 21 5 C 29.296875 5 36 11.703125 36 20 C 36 28.296875 29.296875 35 21 35 C 12.703125 35 6 28.296875 6 20 C 6 11.703125 12.703125 5 21 5 Z"></path>
                        </svg>
                    </button>
                </form>

            </div>
        </div>
    </div>


    {{--        Category sections--}}
    <div class="container mb-">
        <div class="row">
            <div class="col">


                <nav class="navbar navbar-expand-lg p-0">

                    <button class="navbar-toggler bg-transparent p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Toyota</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Mercedes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Honda</a>
                            </li><li class="nav-item">
                                <a class="nav-link" href="#">BMW</a>
                            </li><li class="nav-item">
                                <a class="nav-link" href="#">Lexus</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                   data-bs-toggle="dropdown" aria-expanded="false">
                                    More
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Ford</a></li>
                                    <li><a class="dropdown-item" href="#">Mazda</a></li>
                                    <li><a class="dropdown-item" href="#">Audi</a></li>
                                    <li><a class="dropdown-item" href="#">Kia</a></li>
                                    <li><a class="dropdown-item" href="#">Volvo</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>


{{--                                <div class="categories_buttons d-flex align-items-center gap-5">--}}

{{--                                    <a href="#" class="fw-bold">Toyota</a>--}}
{{--                                    <a href="#" class="">Mercedes</a>--}}
{{--                                    <a href="#" class="">Honda</a>--}}
{{--                                    <a href="#" class="">BMW</a>--}}
{{--                                    <a href="#" class="">Lexus</a>--}}
{{--                                    <a href="#" class="">Ford</a>--}}
{{--                                    <a href="#" class="">Tesla</a>--}}
{{--                                    <a href="#" class="">Mazda</a>--}}
{{--                                    <a href="#" class="">Audi</a>--}}
{{--                                    <a href="#" class="">Kia</a>--}}
{{--                                    <a href="#" class="">Volvo</a>--}}

{{--                                </div>--}}


{{--                                        <div id="category_slider" class="sliderm">--}}
                {{--                                            <div class="sliderm__slider">--}}
                {{--                                                <div class="sliderm__slides d-flex gap-3">--}}
                {{--                                                    <a href="#" class="btn btn-lg btn-outline-primary rounded-5">Toyota</a>--}}
                {{--                                                    <a href="#" class="btn btn-lg btn-outline-primary rounded-5">Mercedes</a>--}}
                {{--                                                    <a href="#" class="btn btn-lg btn-outline-primary rounded-5">Honda</a>--}}
                {{--                                                    <a href="#" class="btn btn-lg btn-outline-primary rounded-5">BMW</a>--}}
                {{--                                                    <a href="#" class="btn btn-lg btn-outline-primary rounded-5">Lexus</a>--}}
                {{--                                                    <a href="#" class="btn btn-lg btn-outline-primary rounded-5">Ford</a>--}}
                {{--                                                    <a href="#" class="btn btn-lg btn-outline-primary rounded-5">Tesla</a>--}}
                {{--                                                    <a href="#" class="btn btn-lg btn-outline-primary rounded-5">Mazda</a>--}}
                {{--                                                    <a href="#" class="btn btn-lg btn-outline-primary rounded-5">Audi</a>--}}
                {{--                                                    <a href="#" class="btn btn-lg btn-outline-primary rounded-5">Kia</a>--}}
                {{--                                                    <a href="#" class="btn btn-lg btn-outline-primary rounded-5">Volvo</a>--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}


            </div>
        </div>

    </div>

    <hr class="mb-5">


    {{--        Search reslult cards --}}
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="card w-100 d-flex align-items-center flex-row">
                    <div class="card-body gap-0">
                        <div class="d-flex align-items-center mb-3">
                            <img src="/frontend/images/img.jpeg" style="width: 80px; height: 80px;"
                                 class="rounded-circle me-3" alt="Card image">
                            <div class="d-flex flex-column ">
                                <h5 class="">Spare part name</h5>
                                <a href="#" class="card-text">www.website.com</a>
                            </div>
                        </div>
                        <div>
                            <h2><a href="#">Trodo.com: Car spare parts online</a></h2>
                            <p>
                                Great selection of car spare parts & accessories from leading manufacturers. Buy
                                from trodo.com and save your time and money!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>


