@extends('admin.base')

@section('title', $property->exists ? 'Modifier une propriété' : 'Ajouter une propriété')

@section('content')

    <div class="d-flex justify-content-between align-items-center">
        <h1 class="mb-5">@yield('title')</h1>
    </div>

    <form action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', $property) }}"
        method="post">
        @csrf
        @method($property->exists ? 'put' : 'post')

        <div class="row">
            @include('shared.input', [
                'class' => 'col',
                'label' => 'Titre',
                'name' => 'title',
                'value' => $property->title,
            ])

            <div class="col row">
                @include('shared.input', [
                    'class' => 'col',
                    'label' => 'Surface',
                    'name' => 'surface',
                    'value' => $property->surface,
                ])
                @include('shared.input', [
                    'class' => 'col',
                    'label' => 'Price',
                    'name' => 'price',
                    'value' => $property->price,
                ])
            </div>
        </div>

        @include('shared.input', [
            'type' => 'textarea',
            'label' => 'Description',
            'name' => 'description',
            'value' => $property->description,
        ])

        <div class="row">
            @include('shared.input', [
                'class' => 'col',
                'label' => 'Pièces',
                'name' => 'rooms',
                'value' => $property->rooms,
            ])
            @include('shared.input', [
                'class' => 'col',
                'label' => 'Chambres',
                'name' => 'bedrooms',
                'value' => $property->bedrooms,
            ])
            @include('shared.input', [
                'class' => 'col',
                'label' => 'Etage',
                'name' => 'floor',
                'value' => $property->floor,
            ])
        </div>

        <div class="row">
            @include('shared.input', [
                'class' => 'col',
                'label' => 'Adresse',
                'name' => 'address',
                'value' => $property->address,
            ])
            @include('shared.input', [
                'class' => 'col',
                'label' => 'Ville',
                'name' => 'city',
                'value' => $property->city,
            ])
            @include('shared.input', [
                'class' => 'col',
                'label' => 'Code postal',
                'name' => 'postal_code',
                'value' => $property->postal_code,
            ])
        </div>

        @include('shared.select', [
            'label' => 'Options',
            'name' => 'options',
            'value' => $property->options()->pluck('id'),
            'multiple' => true,
        ])

        @include('shared.checkbox', [
            'class' => 'col',
            'label' => 'Vendu',
            'name' => 'sold',
            'value' => $property->sold,
            'options' => $options,
        ])

        <div>
            <button class="btn btn-primary">
                @if ($property->exists)
                    Modifier
                @else
                    Ajouter
                @endif
            </button>
        </div>
    </form>


@endsection
