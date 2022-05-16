<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md4 col-md-offset-4" style="margin-top:20px;">
                <h4>Page d'inscription </h4>
                <hr>
                <form action="{{route('user-inscription')}}" method="post">
                    @if(Session::has('succes'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif

                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="email"> Addresse E-mail</label>
                        <input type="email" class="form-control" placeholder="Entrez votre Addresse E-mail"
                        name="email" value="{{old('email')}}">
                        <span class="text-danger">@error('email') {{message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="user_name"> Nom d'utilisateur</label>
                        <input type="text" class="form-control" placeholder="Entrez votre nom d/'utilisateur"
                        name="user_name" value="{{old('user_name')}}">
                        <span class="text-danger">@error('user_name') {{message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="password"> Mot de passe</label>
                        <input type="password" class="form-control" placeholder="Entrez votre mot de passe"
                        name="password" value="">
                        <span class="text-danger">@error('password') {{message}} @enderror</span>
                    </div>
                    
                    <div class="form-group">
                        <button class="btn block btn-primary" type="submit">
                            S'inscrire
                        </button>
                    </div>
                    <br>
                    <a href="connexion">Deja inscrit? Connectez-vous ici ! </a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>