<!DOCTYPE html>
<html lang="fr">
<style>
    html,body{
        background-color: #60657B;
        color: white;
    }
    header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        padding: 10px;
        background-color: #60657B;
    }
    .header img {
        width: 10%;
    }
</style>
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
</head>
<body>
<header>
    <img src="WizardPortalLogo.png">
</header>
<div class="text-center" style="width: auto" >
    @include('flash::message')
</div>
@yield('content')
</body>
</html>


