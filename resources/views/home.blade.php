<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        a {
            text-decoration: none;
            color: #555;
        }

        .chek {
            position: relative;
            height: 35px;
        }

        .chek a {
            color: black;
            font-weight: 600;
        }

        .chek span {
            position: absolute;
            width: 100%;
            background-color: #AED6F1;
            height: 5px;
            top: 105%;
            left: 0%;
            z-index: 4;
        }

        .col-1 {
            text-align: center;
        }

    </style>
</head>

<body>

    <div class="container-fluid">
        @include('layouts.nav')

        <div class="row" style="padding: 15px 10px 15px 30px;">
            <div class="col-12">
                <h3 style="font-weight: 400;">Home</h3>
            </div>
        </div>

        @include('layouts.partials')

        <div class="row d-flex justify-content-center" style="background-color: #ccc; padding-top: 70px; padding-bottom: 130px;">
            @forelse ($posts as $post)
                <div class="col-4 m-1"
                    style="padding: 30px;background-color: white; border-radius: 25px; box-shadow: 0px 0px 8px 1px #999999;">
                    <div class="row">
                        <div class="col-1">
                            <a style="padding: 5px; border-radius: 50%; border:none; background-color: #AED6F1; color: #3498DB;cursor: pointer;"
                                href="#">GG</a>

                        </div>
                        <div class="col-5"> <a href="#" style="text-decoration: none; color: blue;">
                                @php
                                    $user = App\User::find($post->user_id);
                                @endphp
                                <h6 style="font-size: 13.5px;"> Posted By @ {{ $user->name }}</h6>
                            </a></div>
                        <div class="col-5"></div>
                        <div class="col-1">
                            <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16"
                                    style="color: red; cursor: pointer;">
                                    <path
                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="row" style="padding:10px 0px;">
                        <div class="col-12">
                            <img src="{{ asset('storage/' . $post->image) }}" width="150px" class="rounded d-flex mx-auto">
                        </div>
                    </div>
                    <div class="row" style="padding:10px 0px;">
                        <div class="col-12">
                            <h5>{{ $post->desc }}</h5>
                        </div>
                    </div>
                    <div class="row pt-3 pb-1" style="border-bottom: 1px solid #666; color: #666;">
                        <div class="col-6"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                <path
                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg> {{ $post->location }}</div>
                        <div class="col-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-clock" viewBox="0 0 16 16">
                                <path
                                    d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />

                                @php

                                @endphp

                            </svg> {{ msgTime($post->created_at) }}
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px;">
                        <div class="col-4">
                            <button type="button"
                                style="border: none; background-color: white; border: 1px solid #ccc; padding: 6px 15px; border-radius: 35px;">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg" style="color: green;" width="35" height="25"
                                    fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 17 16">
                                    <path
                                        d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                                </svg>1</button>
                            </div>
                        <div class="col-4"></div>
                        <div class="col-4">
                            <a type="button" class="btn btn-dark" style="border-radius: 30px;padding: 6px 12.1px;">2
                                Comments</a>
                        </div>
                    </div>
                </div>
            @empty
                <h4>There are not posts yet</h4>
            @endforelse
            <div class="col-4"></div>
        </div>

    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
