<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-white text-center pt-5">BUSINESS CASUAL</h1>
            </div>
        </div>
        <div class="row mt-5 dark-red">
            <div class="col-12 bg-dark-red text-center p-3">
                <a href="{{ route('cafe.home') }}" class="text-white mr-5">HOME</a>
                <a href="{{ route('cafe.login') }}" class="text-white mr-4">LOG IN</a>
                 @if(Session::has('name'))
                <a href="{{ route('cafe.logout') }}" class="text-white">LOG OUT</a>
                @endif
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-8 offset-2 my-5">
                <h4 class="text-white">Your name: {{ Session::get('name') }}</h4>
                <h4 class="text-white">Your surname: {{ Session::get('surname') }}</h4>
                @if(Session::has('email'))
                <h4 class="text-white">Your email: {{ Session::get('email') }}</h4>
                @endif
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 mt-5"></div>
        </div>
        <div class="row dark-red text-center mt-5">
            <div class="col-12">
                <p class="text-white py-3">Copyright &copy; Your Website 2018</p>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>