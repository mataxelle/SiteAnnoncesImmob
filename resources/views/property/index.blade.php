@extends('base')

@section('title', 'Toutes les propriétés')

@section('content')

    <div class="container">
        <h2 class="my-5">Toutes les propriétés</h2>
        <div class="row">
            @foreach ($properties as $property)
                <div class="col-3 mb-3">
                    @include('property.card')
                </div>
            @endforeach
        </div>

        {{ $properties->links() }}
    </div>


@endsection
