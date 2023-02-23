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
                <a href="{{ route('cafe.home') }}" class="text-warning mr-5">HOME</a>
                <a href="{{ route('cafe.login') }}" class="text-white mr-4">LOG IN</a>
                 @if(Session::has('name'))
                <a href="{{ route('cafe.logout') }}" class="text-white">LOG OUT</a>
                @endif
            </div>
        </div>
        <div class="container">
            <div class="d-inline-flex relative my-5">
                <div class="positionOnFirstDiv bg-white text-center relative p-3">
                    <h6>LOREM IPSUM</h6>
                    <h4>LOREM IPSUM</h4>
                    <p> Eos iure autem accusamus, eligendi modi placeat et doloribus fugit numquam, debitis explicabo est excepturi beatae laudantium vero, assumenda ipsa sequi.</p>
                    <button class="btn btn-warning button-position">Visit us today</button>
                </div>
                <div class="positionOnSecondDiv relative">
                    <img src="{{ asset('assets/Images/cafe.jpg') }}" alt="" class="w-100">
                </div>
            </div>
        </div>
        <div class="row bg-warning py-4 text-center">
            <div class="col-8 offset-2 p-2 borderClass">
                <div class=" p-3 rounded bg-light">
                    <h6 class="pb-2">OUR PROMISE</h6>
                    @if(Session::has('name'))
                    
                    <h3 class="text-uppercase">TO {{ Session::get('name') }} {{ Session::get('surname') }} </h3>
                    @else
                    <h3>TO YOU</h3>
                    @endif
                    <p class="pt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aliquid nobis illum facere vel praesentium hic qui, ab ullam, commodi illo voluptatum delectus quod quae at debitis error pariatur facilis dignissimos harum autem. Ut incidunt impedit eius, dolor saepe cum ipsa quo laboriosam quod neque natus, modi, pariatur exercitationem repudiandae? Voluptate exercitationem debitis sit rerum adipisci eos laboriosam velit magnam minus totam. Aliquid.</p>
                </div>
            </div>
        </div> 
        <div class="row dark-red text-center">
            <div class="col-12">
                <p class="text-white pt-3">Copyright &copy; Your Website 2018</p>
            </div>
        </div> 
    </div>
    <script src="{{ asset('assets/js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>