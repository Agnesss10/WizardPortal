@extends('modele')

@section('title','WIZARD PORTAL - Register')

@section('content')
    <style>
        body{
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
        }
        .form-control {
            width: 50%;
            margin-bottom: 10px;
        }
        button {
            width: 20%;
            margin-top: 20px;
        }
    </style>
    <body>
        <form action="{{route('register')}}" method="post">
            <div class="form-group row">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
            </div>
            <div class="form-group row">
                <label for="password_confirmation" class="col-sm-2 col-form-label">Password Confirmation</label>
                <div class="col-sm-10">
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            @csrf
        </form>

    </body>

@endsection
