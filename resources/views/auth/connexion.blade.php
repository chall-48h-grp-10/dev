<!DOCTYPE html>
<html lang="en">
    @include('nav')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md4 col-md-offset-4" style="margin-top:20px;">
                <h4> Page de connexion </h4>
                <hr>
                <form action="{{route('user-connexion')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email"> Addresse E-mail</label>
                        <input type="email" class="form-control" placeholder="Entrez votre Addresse E-mail"
                        name="email" value="{{old('email')}}">
                    </div>

                    <div class="form-group">
                        <label for="password"> Mot de passe</label>
                        <input type="password" class="form-control" placeholder="Entrez votre mot de passe"
                        name="password" value="">
                    </div>
                    
                    <div class="form-group">
                        <button class="btn block btn-primary" type="submit">
                            Se connecter
                        </button>
                    </div>
                    <a href="inscription">Pas de compte? Inscrivez-vous ici </a>
                </form>
        </div>
    </div>
</body>
</html>