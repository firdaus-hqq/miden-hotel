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
   <title>MIDEN Hotel | Login</title>
</head>

<body class="bg-footer">
   <div class="container mt-5 pt-3">
      @if (session()->has('loginError'))
         <div class="alert alert-danger alert-dismissable fade show col-lg-4 mx-auto" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
      @endif
      <div class="container card mt-5 card-brown rounded-20 col-lg-4 shadow">
         <div class="card-body">
            {{-- <img src="images/deluxeraw.jpg" class="img-fluid col-lg-8 rounded-20" alt=""> --}}
            <a href="/"><img src="images/logotext.png" class="mx-auto d-block" style="max-width: 200px" alt=""></a>
            <h3 class="text-brown text-center mt-3"><b>Login</b></h3>
            <form action="/login" method="POST" class="mx-auto d-block">
               @csrf
               <div class="mb-3">
                  <label for="email" class="form-label text-brown">Email address</label>
                  <input type="email" name="email"
                     class="form-control form-brown rounded-10 @error('email') is-invalid @enderror" id="email"
                     autofocus required value="{{ old('email') }}">
                  @error('email')
                     <div class="invalid-feedback">
                        {{ $message }}
                     </div>
                  @enderror
               </div>
               <div class="mb-5">
                  <label for="password" class="form-label text-brown">Password</label>
                  <input type="password" name="password" class="form-control form-brown rounded-10" id="password"
                     required>
               </div>
               <div class="mb-3">
                  <button type="submit" class="btn bg-brown text-white rounded-10 float-end form-control">Login</button>
               </div>
            </form>
         </div>
      </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
   </script>
</body>

</html>
