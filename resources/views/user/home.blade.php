@extends('modele')

@section('title','WIZARD PORTAL - Home')

@section('content')
    <style>
        body{
            background-color: #60657B;
            color: white;
        }
        h5,p{
            color: black;
        }
    </style>
    <header class="d-flex justify-content-center">

    </header>
    <body>
        <div class="d-flex align-items-center justify-content-center" style="min-height: 10vh;">
            <div class="card text-center" style="width: 50rem;">
                <div class="card-body">
                    <h5 class="card-title">Welcome {{ Auth::user()->username }} to Wizard Portal !</h5>
                    <br>
                    <p class="card-text" style="text-align: justify">
                        Your gateway to magical mastery. Dive into a world of enchanting knowledge, where wizards connect, learn, and grow. Unleash the magic within – join us at Wizard Portal and embark on an extraordinary journey of discovery!
                    </p>
                    <button class="btn btn-dark" onclick="window.location.href='{{ route('logout') }}'">Logout</button>
                </div>
            </div>
        </div>

    </body>
@endsection
