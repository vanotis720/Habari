@extends('auth.app')
@section('content')
    <div class="header">
        <div class="logo text-center" style="margin-top: 30px">
            <!--<img src="{{ asset('assets/img/logo-ada2.jpg') }}" alt="Logo">-->
            <h1>Habari</h1>
        </div>
        <p class="lead">Connectez-vous à votre compte</p>
    </div>
    {{-- @include('templates.alert') --}}
    <form class="form-auth-small" action="{{ route('login.submit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="signin-phone" class="control-label sr-only">Téléphone</label>
            <input type="phone" name="phone" class="form-control" id="signin-phone" value="{{ old('phone') }}"
                placeholder="Votre numéro de téléphone">
            @error('phone')
                <span class="alert alert-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="signin-password" class="control-label sr-only">Mot de passe</label>
            <input type="password" name="password" class="form-control" id="signin-password"
                value="{{ old('password') }}" placeholder="Votre Mot de passe">
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group clearfix">
            <label class="fancy-checkbox element-left">
                <input type="checkbox">
                <span>Remember me</span>
            </label>
            <label class="fancy-checkbox element-right">
                <span>Vous n'avez pas un compte ? </span><a href="{{ route('register') }}">s'inscrire ici</a>
            </label>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">CONNEXION</button>
    </form>
@endsection
