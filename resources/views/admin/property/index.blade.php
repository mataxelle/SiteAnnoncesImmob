@extends('admin.base')

@section('title', 'Liste des propriétés')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1 class="mb-5">@yield('title')</h1>
    <a href="{{ route('admin.property.create') }}" class="btn btn-primary">Ajouter une propriété</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Titre </th>
            <th>Surface </th>
            <th>Prix </th>
            <th>Ville </th>
            <th class="text-end">Actions </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($properties as $property)
            <tr>
                <td>{{ $property->title }}</td>
                <td>{{ $property->surface }}m²</td>
                <td>{{ number_format($property->price, thousands_separator: ' ') }}</td>
                <td>{{ $property->city }}</td>
                <td></td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $properties->links() }}


@endsection