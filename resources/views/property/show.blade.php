@extends('base')

@section('title', $property->title)

@section('content')

    <div class="container">

        <h1>{{ $property->title }}</h1>
        <h2>{{ $property->rooms }} pièces - {{ $property->surface }} m²</h2>

        <div class="text-primary fm-bold" style="font-size: 4rem;">
            {{ number_format($property->price, thousands_separator: ' ') }}e
        </div>

        <hr>

        <div class="mt-4">
            <h4>Intéressé par ce bien ?</h4>

            <form action="" method="post" class="vstack gap-3">
                @csrf
                <div class="row">
                    @include('shared.input', [
                        'class' => 'col',
                        'label' => 'Prénom',
                        'name' => 'firstname',
                    ])

                    @include('shared.input', [
                        'class' => 'col',
                        'label' => 'Nom',
                        'name' => 'lastname',
                    ])
                </div>
                <div class="row">
                    @include('shared.input', [
                        'class' => 'col',
                        'label' => 'Téléphone',
                        'name' => 'phone',
                    ])

                    @include('shared.input', [
                        'class' => 'col',
                        'label' => 'Email',
                        'name' => 'email',
                        'type' => 'email',
                    ])
                </div>
                @include('shared.input', [
                    'class' => 'col',
                    'label' => 'Votre message',
                    'name' => 'message',
                    'type' => 'textarea',
                ])
                <div>
                    <button class="btn btn-primary">Nous contacter</button>
                </div>
            </form>
        </div>

    </div>


@endsection
