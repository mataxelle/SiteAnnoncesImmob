@extends('base')

@section('title', 'Accueil')

@section('content')

    <div class="bg-light p-5 mb-5 text-center">
        <div class="container">
            <h1>Site annonces immob</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Sed error dicta corrupti voluptatem eos fugiat assumenda tempora in laborum? Totam,
                consectetur ex quos ab ullam voluptatem? Nesciunt quae optio recusandae.
            </p>
        </div>
    </div>

    <div class="container">
        <h2 class="mb-5">Nos dernières propriétés</h2>
        <div class="row">
            @foreach ($properties as $property)
                <div class="col">
                    @include('property.card')
                </div>
            @endforeach
        </div>
    </div>


@endsection
