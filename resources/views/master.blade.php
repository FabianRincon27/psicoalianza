<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>&copy; App Alianza</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/normalize.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js">
    </script>

</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header justify-content-center">
                        <img src="{{ asset('img/logo.jpg') }}" alt="" class="img-logo">
                    </div>
                    <div class="card-body mt-3">
                        <div class="container ">
                            <div class="row d-flex justify-content-between">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button type="button" class="float-end btn btn-success btn-sm text-white"
                                        data-bs-toggle="modal" data-bs-target="#addEmployee">
                                        <i class='bx bx-plus-medical'></i> Añadir Empleado
                                    </button>
                                    @include('modals.employee')
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            {{-- @include('alerts.alert') --}}
                        </div>
                        <div class="container table-responsive mt-3">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">Nombres</th>
                                        <th scope="col">Apellidos</th>
                                        <th scope="col">Número De Documento</th>
                                        <th scope="col">Dirección</th>
                                        <th scope="col">Télefono</th>
                                        <th scope="col">Ciudad</th>
                                        <th scope="col">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $e)
                                        <tr class="text-center">
                                            <td>{{ $e->name }}</td>
                                            <td>{{ $e->lastname }}</td>
                                            <td>{{ $e->num_document }}</td>
                                            <td>{{ $e->address }}</td>
                                            <td>{{ $e->phone }}</td>
                                            <td>{{ $e->city }}</td>
                                            <td>
                                                <button class="btn btn-warning btn-sm text-white" data-bs-toggle="modal"
                                                    data-bs-target="#editEmployee{{ $e->id }}">
                                                    <i class='bx bxs-edit'></i>
                                                </button>
                                                @include('modals.edit-employee', $e)
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                                {{ $employees->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
