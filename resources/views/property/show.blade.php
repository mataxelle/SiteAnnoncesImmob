@extends('base')

@section('title', $property->title)

@section('content')

    <div class="container mt-5">

        <h1>{{ $property->title }}</h1>
        <h2>{{ $property->rooms }} pièces - {{ $property->surface }} m²</h2>

        <div class="text-primary fm-bold" style="font-size: 4rem;">
            {{ number_format($property->price, thousands_separator: ' ') }}e
        </div>

        <hr>

        <div class="mt-4">
            <h4>Intéressé par ce bien ?</h4>

            <form action="{{ route('property.contact', $property) }}" method="post" class="vstack gap-3">
                @csrf
                <div class="row">
                    @include('shared.input', [
                        'class' => 'col',
                        'label' => 'Prénom',
                        'name' => 'firstname',
                        'value' => 'Mathieu',
                    ])

                    @include('shared.input', [
                        'class' => 'col',
                        'label' => 'Nom',
                        'name' => 'lastname',
                        'value' => 'Dupont',
                    ])
                </div>
                <div class="row">
                    @include('shared.input', [
                        'class' => 'col',
                        'label' => 'Téléphone',
                        'name' => 'phone',
                        'value' => '06 12 34 56 78 90',
                    ])

                    @include('shared.input', [
                        'class' => 'col',
                        'label' => 'Email',
                        'name' => 'email',
                        'type' => 'email',
                        'value' => 'mathieu@dupontest.com',
                    ])
                </div>
                @include('shared.input', [
                    'class' => 'col',
                    'label' => 'Votre message',
                    'name' => 'message',
                    'type' => 'textarea',
                    'value' => 'Je souhaite des information concernant ce bien.',
                ])
                <div>
                    <button class="btn btn-primary">Nous contacter</button>
                </div>
            </form>
        </div>

        <div class="mt-5">
            <p>{{ $property->description }}</p>
            <div class="row">
                <div class="col-8">
                    <h2>Caractéristiques</h2>
                    <table class="table table-striped">
                        <tr>
                            <td>Surface habitable</td>
                            <td>{{ $property->surface }}</td>
                        </tr>
                        <tr>
                            <td>Pièces</td>
                            <td>{{ $property->rooms }}</td>
                        </tr>
                        <tr>
                            <td>Chambres</td>
                            <td>{{ $property->bedrooms }}</td>
                        </tr>
                        <tr>
                            <td>Etages</td>
                            <td>{{ $property->floor ?: 'Rez de chaussé' }}</td>
                        </tr>
                        <tr>
                            <td>Localisation</td>
                            <td>
                                {{ $property->address }} <br>
                                {{ $property->city }} ({{ $property->postal_code }})
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-4">
                    <h2>Spécificités</h2>
                    <ul class="list-group">
                        @foreach ($property->options as $option)
                            <li class="list-group-item">{{ $option->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </div>


@endsection
