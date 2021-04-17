@extends('base')

@section('content')

<div class="container-fluid">

    <div class="my-5">
        <h1 class="text-center my-2"><i class="fas fa-address-book"></i></h1>
        <h1 class="text-center mt-1">LaraCRM</h1>
    </div>

    <div class="w-50" style="margin:70px auto;">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            @method('POST')
            <fieldset>
                <legend class="text-center">Inscription</legend>
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Saisir votre nom">
                </div>
                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Saisir votre adresse email">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Saisir votre mot de passe">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirmez mot de passe</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Saisir votre mot de passe">
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <input type="submit" class="btn btn-primary" value="Valider">
                <p class="mt-2">Retour à la <a href="{{ route('showLogin') }}" class="link-primary">connection ici.</a></p>
            </fieldset>
        </form>
    </div>
</div>


@endsection
