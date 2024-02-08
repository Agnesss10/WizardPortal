@extends('modele')

@section('title','WIZARD PORTAL - Login')
@section('content')
    <style>
        body {
            background-color: #60657B;
            color: white;
        }
        div {
            text-align: center;
        }
        form {
            text-align: center;
            margin-left: 10%;
            margin-right: 10%;
            margin-top: 1%;
        }
        .form-control {
            width: 50%;
            margin-bottom: 10px;
        }
        button {
            width: 17%;
            margin-right: 5px;
            margin-top: 20px;
            margin-left: 5px;
        }
        .form-group[id="buttons"]{
            margin-right: 9%;
        }
    </style>
        <body>
            <form method="post" action="{{route('login')}}">
                <div class="form-group row">
                    <label for="username"  class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" name="username" class="form-control" placeholder="Username" value="{{old('username')}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="form-group row" id="buttons">
                    <div class="col-sm-10">
                        <button type="reset" class="btn btn-primary">Reset</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="button" class="btn btn-dark" onclick="window.location.href='{{ route('register') }}'">Register</button>
                    </div>
                </div>
                @csrf
            </form>
        </body>
@endsection
