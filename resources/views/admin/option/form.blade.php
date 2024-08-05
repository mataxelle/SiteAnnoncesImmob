@extends('admin.base')

@section('title', $option->exists ? 'Modifier une option' : 'Ajouter une option')

@section('content')

    <div class="d-flex justify-content-between align-items-center">
        <h1 class="mb-5">@yield('title')</h1>
    </div>

    <form action="{{ route($option->exists ? 'admin.option.update' : 'admin.option.store', $option) }}" method="post">
        @csrf
        @method($option->exists ? 'put' : 'post')

        <div class="row">
            @include('shared.input', [
                'class' => 'col',
                'label' => 'Name',
                'name' => 'name',
                'value' => $option->name,
            ])
        </div>

        <div>
            <button class="btn btn-primary">
                @if ($option->exists)
                    Modifier
                @else
                    Ajouter
                @endif
            </button>
        </div>
    </form>


@endsection
