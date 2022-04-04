<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    @include('partials.title')
</head>

<body class="bg-footer">
    <div class="container mt-5 pt-5">
        <div class="container card mt-5 card-brown rounded-20 col-lg-4 shadow">
            <div class="card-body">
                {{-- <img src="images/deluxeraw.jpg" class="img-fluid col-lg-8 rounded-20" alt=""> --}}
                <a href="/"><img src="images/logotext.png" class="mx-auto d-block" style="max-width: 200px" alt=""></a>
                <h3 class="text-brown text-center mt-3"><b>Login</b></h3>
                <form class="mx-auto d-block">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-brown">Email address</label>
                        <input type="email" class="form-control form-brown rounded-10" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-brown">Password</label>
                        <input type="password" class="form-control form-brown rounded-10" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn bg-brown text-white rounded-10 float-end">Submit</button>
                </form>
            </div>
        </div>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
</body>

</html>
