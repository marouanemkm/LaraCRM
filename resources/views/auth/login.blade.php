@extends('base')

@section('content')
    
<div class="container-fluid">
    
    <div class="my-5">
        <h1 class="text-center my-2"><i class="fas fa-address-book"></i></h1>
        <h1 class="text-center mt-1">LaraCRM</h1>
    </div>
    
    <div class="w-50" style="margin:150px auto;">
        <form method="POST" action="{{route('login')}}">
            <fieldset>
                <legend class="text-center">Connexion</legend>
                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Adresse email">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" placeholder="Mot de passe">
                </div>
                <input type="submit" class="btn btn-primary" value="Valider">
            </fieldset>
        </form>
    </div>
    
</div>


@endsection