@extends('base')

@section('title', 'Toutes les propriétés')

@section('content')

    <div class="container">
        <h2 class="my-5">Toutes les propriétés</h2>

        <div class="bg-light p-5 mb-5 text-center">
            <form action="" method="get" class="d-flex gap-2">
                <input type="number" placeholder="Surface min" class="form-control" name="surface"
                    value="{{ $input['surface'] ?? '' }}">
                <input type="number" placeholder="Budget max" class="form-control" name="price"
                    value="{{ $input['price'] ?? '' }}">
                <input type="number" placeholder="Nombre de pièces min" class="form-control" name="rooms"
                    value="{{ $input['rooms'] ?? '' }}">
                <input placeholder="Mots clé" class="form-control" name="title" value="{{ $input['title'] ?? '' }}">
                <button class="btn btn-primary btn-sm flex-grow-0">Rechercher</button>
            </form>
        </div>

        <div class="row">
            @forelse ($properties as $property)
                <div class="col-3 mb-3">
                    @include('property.card')
                </div>
            @empty
                <div class="col text-center mb-3">
                    Auncu résultat
                </div>
            @endforelse
        </div>

        {{ $properties->links() }}
    </div>


@endsection
