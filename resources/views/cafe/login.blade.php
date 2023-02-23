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
                <a href="{{ route('cafe.login') }}" class="text-warning mr-4">LOG IN</a>
                @if(Session::has('name'))
                <a href="{{ route('cafe.logout') }}" class="text-white">LOG OUT</a>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-3 mt-5 mb-5">
                <form action="{{ route('cafe.store') }}" method="POST">
                @csrf
                    <div class="form-group">
                        @error('name')
                            <div class="bg-red text-white">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="name" class="text-white text-uppercase">Name:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        @error('surname')
                            <div class="bg-red text-white">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="surname" class="text-white text-uppercase">Surname</label>
                        <input type="text" class="form-control @error('surname') is-invalid @enderror" id="surname" name="surname" value="{{ old('surname') }}">
                        
                    </div>
                    <div class="form-group">
                        @error('email')
                            <div class="bg-red text-white">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="email" class="text-white text-uppercase">Email:</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                    </div>
                    <button type="submit" class="btn-block btn-primary">Submit</button>
                </form>
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