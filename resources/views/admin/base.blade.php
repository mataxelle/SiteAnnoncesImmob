<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.bootstrap5.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
    @vite(['resources/css/app.css'])
    <title>@yield('title') | Administration</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark gradient-custom">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="{{ route('admin.property.index') }}">Site Annonces Immob</a>

            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            @php
                $route = request()->route()->getName();
            @endphp

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Right links -->
                <ul class="navbar-nav ms-auto d-flex justify-content-end mt-3 mt-lg-0">
                    <li class="nav-item mx-2 mx-lg-1">
                        <a @class(['nav-link', 'active' => str_contains($route, 'property.')]) href="{{ route('admin.property.create') }}">
                            Ajouter une propriété
                        </a>
                    </li>
                    <li class="nav-item mx-2 mx-lg-1">
                        <a @class(['nav-link', 'active' => str_contains($route, 'option.')]) href="{{ route('admin.option.create') }}">
                            Ajouter une option
                        </a>
                    </li>
                </ul>
                <!-- Right links -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <div class="container mt-5">

        @include('shared.flash')

        @yield('content')
    </div>

    <script>
        new TomSelect('select[multiple]', {
            plugins: {
                remove_button: {
                    title: 'Supprimer'
                }
            }
        })
    </script>

</body>

</html>
