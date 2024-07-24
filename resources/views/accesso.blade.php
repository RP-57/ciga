@extends('layouts.app')
 
@section('content')
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Log In</h1>
            </div>
            <div class="col-lg-12 text-center">
                <p class="lead mb-0">Inserisci utente e password per proseguire.</p>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <div class="container mb-4">
        <div class="row">
            <!-- Blog entries-->
            <form method="POST" action="{{ route('accesso') }}">
                <div class="col-lg-12">
                    <p class="lead mb-0">Log In text</p>
                </div>
                <div class="mt-6">
                    <input for="password" :value="__('Password')" />

                    <input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

                    <error :messages="$errors->get('password')" class="mt-2" />
                </div>

            </form>
        </div>
    </div>
@endsection