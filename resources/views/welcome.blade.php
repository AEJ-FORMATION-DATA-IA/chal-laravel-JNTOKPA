<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>challenge Laravel</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
</head>

<body class="text-center">

    <!--main class="form-signin">
        @if (session()->has("echec"))
        <p class="text-danger">{{ session()->get("echec") }}</p>
        @endif
        <form method="POST" action="{{ route('connexion') }}">

            <h1 class="h3 mb-3 fw-normal">CONNECTEZ-VOUS</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Login" name="login">
                <label for="floatingInput">Login</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Mot de passe" name="pass">
                <label for="floatingPassword">Mot de passe</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">SE CONNECTER</button>
            <p class="mt-5 mb-3 text-muted">&copy;Jean-Noel TOKPA Challenge Laravel </p>
        </form>
    </main-->

    <div class="form-signin">
        <a href="{{ route('accueil') }}" class="btn btn-primary"><button class="w-100 btn btn-lg btn-primary">SE CONNECTER</button></a>
        <p class="mt-5 mb-3 text-muted">&copy;Jean-Noel TOKPA Challenge Laravel </p>
    </div>




</body>

</html>