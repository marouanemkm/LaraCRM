@extends('base')

@section('content')

<div class="container-fluid">

    <div class="my-5">
        <h1 class="text-center my-2"><i class="fas fa-address-book"></i></h1>
        <h1 class="text-center mt-1">LaraCRM</h1>
    </div>

    <div class="w-50" style="margin:75px auto;">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            @method('POST')
            <fieldset>
                <legend class="text-center">Connexion</legend>
                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Sasir votre adresse email">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Saisir votre mot de passe">
                </div>
                <input type="submit" class="btn btn-primary" value="Valider">
                <p class="mt-2">Pas de compte ? <a href="{{ route('showRegister') }}" class="link-primary">Inscrivez-vous ici.</a></p>
            </fieldset>
        </form>
    </div>

</div>


@endsection
