@extends('layouts.auth')


@section('content')
<div class="mx-auto p-3 login-box">
    <div class="row justify-content-center">
        <img src="../img/LogoOpen.png" height="237" width="215" alt="Catering Chef" class="authLogo">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <div class="col">
                    <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" placeholder="Vorname" autocomplete="firstname" autofocus>

                    @error('firstname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                
                <div class="col">
                    <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" placeholder="Nachname" autocomplete="surname" autofocus>

                    @error('surname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">

                <div class="col">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-Mail" autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">

                <div class="col">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Passwort" autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">

                <div class="col">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Passwort wiederholen" autocomplete="new-password">
                </div>
            </div>

            <div class="form-group mb-0 d-flex">
                  <button type="submit" class="btn mx-auto">
                        {{ __('Registrieren') }}
                    </button>
            </div>
        </form>
        <div class="mt-2">
                <p> Bereits ein Konto? <a href="/login"> Melden Sie sich an!</a></p>
        </div>
    </div>
</div>
@endsection
