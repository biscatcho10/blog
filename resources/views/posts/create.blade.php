<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <h3 style="font-weight: 400;">Create Post</h3>
            </div>
        </div>
        @include('layouts.partials')
        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row" style="background-color: #ccc; padding-top: 20px; padding-bottom: 45px;">
                <div class="col-4"></div>
                <div class="col-4"
                    style="padding: 20px 15px;background-color: white; border-radius: 5px; box-shadow: 0px 0px 5px 1px #999999;">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Post title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Location</label>
                        <input type="text" class="form-control" name="location" placeholder="location">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="desc" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Media</label>
                        <input type="file" name="image" class="form-control form-control-sm" style="border: none;">
                    </div>
                    <div class="col-12" style="text-align: right;">
                        <button type="submit" class="btn btn-dark">Create Post</button>
                    </div>
                </div>
                <div class="col-4"></div>
            </div>
        </form>
    </div>
</body>

</html>
