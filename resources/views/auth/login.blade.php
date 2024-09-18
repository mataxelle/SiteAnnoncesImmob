@extends('base')

@section('title', 'Se connecter')

@section('content')

    <div class="container mt-4">
        <h1>@yield('title')</h1>

        @include('shared.flash')

        <form action="{{ route('login') }}" method="post" class="vstack gap-3">
            @csrf

            @include('shared.input', [
                'class' => 'col',
                'label' => 'Email',
                'name' => 'email',
                'type' => 'email',
            ])

            @include('shared.input', [
                'class' => 'col',
                'label' => 'Mot de passe',
                'name' => 'password',
                'type' => 'password',
            ])
            <div>
                <button class="btn btn-primary">Se connecter</button>
            </div>
        </form>
    </div>
@endsection
