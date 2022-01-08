<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

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
                <h3 style="font-weight: 400;">Feeds</h3>
            </div>
        </div>
        <div class="row" style="background-color: #ccc; padding-top: 70px; padding-bottom: 130px;">
            <div class="col-4"></div>
            <div class="col-4"
                style="padding: 30px;background-color: white; border-radius: 25px; box-shadow: 0px 0px 8px 1px #999999;">
                <div class="row">
                    <div class="col-1">
                        <a style="padding: 5px; border-radius: 50%; border:none; background-color: #AED6F1; color: #3498DB;cursor: pointer;"
                            href="#">GG</a>

                    </div>
                    <div class="col-5"> <a href="#" style="text-decoration: none; color: blue;">
                            <h6 style="font-size: 13.5px;"> Posted By @ ahmed</h6>
                        </a></div>
                    <div class="col-5"></div>
                    <div class="col-1"></div>
                </div>
                <div class="row" style="padding:10px 0px;">
                    <div class="col-12">
                        <h5>hhhhhhh
                            <br>
                            hhhhh
                        </h5>
                    </div>
                </div>
                <div class="row pt-3 pb-1" style="border-bottom: 1px solid #666; color: #666;">
                    <div class="col-12" style="text-align: left;">
                        <h4>Feeds</h4>
                    </div>
                </div>



                <!-- feeds 1 -->


                <div class="row mt-3">
                    <div class="col-1">
                        <a style="padding: 5px; border-radius: 50%; border:none; background-color: #AED6F1; color: #3498DB;cursor: pointer;"
                            href="#">GG</a>

                    </div>
                    <div class="col-5"> <a href="#" style="text-decoration: none; color: blue;">
                            <h6 style="font-size: 13.5px;"> Posted By @ ahmed</h6>
                        </a></div>
                    <div class="col-5"></div>
                    <div class="col-1">

                    </div>
                </div>
                <div class="row" style="padding:10px 0px;">
                    <div class="col-12">
                        <h5>hhhhhhh
                            <br>
                            hhhhh
                        </h5>
                    </div>
                    <div class="row">
                        <div class="col-10"></div>
                        <div class="col-1">
                            <button type="button" style="border: none; background-color: white;">
                                <svg xmlns="http://www.w3.org/2000/svg" style="color: green;" width="22" height="22"
                                    fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                                </svg>
                            </button>
                        </div>
                        <div class="col-1">
                            <button type="button" style="border: none; background-color: white;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                    class="bi bi-trash-fill" viewBox="0 0 16 16" style="color: red; cursor: pointer;">
                                    <path
                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                </svg>
                            </button>
                        </div>
                        <hr style="width: 80%; margin-left: 10%; margin-top: 10px;">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-1">
                        <a style="padding: 5px; border-radius: 50%; border:none; background-color: #AED6F1; color: #3498DB;cursor: pointer;"
                            href="#">GG</a>

                    </div>
                    <div class="col-5"> <a href="#" style="text-decoration: none; color: blue;">
                            <h6 style="font-size: 13.5px;"> Posted By @ ahmed</h6>
                        </a></div>
                    <div class="col-5"></div>
                    <div class="col-1">

                    </div>
                </div>
                <div class="row" style="padding:10px 0px;">
                    <div class="col-12">
                        <h5>hhhhhhh
                            <br>
                            hhhhh
                        </h5>
                    </div>
                    <div class="row">
                        <div class="col-10"></div>
                        <div class="col-1">
                            <button type="button" style="border: none; background-color: white;">
                                <svg xmlns="http://www.w3.org/2000/svg" style="color: green;" width="22" height="22"
                                    fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                                </svg>
                            </button>
                        </div>
                        <div class="col-1">
                            <button type="button" style="border: none; background-color: white;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                    class="bi bi-trash-fill" viewBox="0 0 16 16" style="color: red; cursor: pointer;">
                                    <path
                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                </svg>
                            </button>
                        </div>
                        <hr style="width: 80%; margin-left: 10%; margin-top: 10px;">
                    </div>
                </div>

            </div>
            <div class="col-4"></div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
