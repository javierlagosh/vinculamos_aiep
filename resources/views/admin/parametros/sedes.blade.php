@extends('admin.panel')

@section('contenido')

<section class="section">
    <div class="section-body">
        <div class="row">            
            <div class="col-12">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6">
                        @if(Session::has('errorSede'))
                            <div class="alert alert-danger alert-dismissible show fade mb-4 text-center">
                                <div class="alert-body">
                                    <strong>{{ Session::get('errorSede') }}</strong>
                                    <button class="close" data-dismiss="alert"><span>&times;</span></button>
                                </div>
                            </div>
                        @endif
                        @if(Session::has('exitoSede'))
                            <div class="alert alert-success alert-dismissible show fade mb-4 text-center">
                                <div class="alert-body">
                                    <strong>{{ Session::get('exitoSede') }}</strong>
                                    <button class="close" data-dismiss="alert"><span>&times;</span></button>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-3"></div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <h4>Listado de Sedes</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Director</th>
                                        <th>Estudiantes</th>
                                        <th>Docentes</th>
                                        <th>Iniciativas</th>
                                        <th>Estado</th>                                            
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $contadorSedes = 0;    
                                    ?>
                                    
                                    @foreach ($Sedes as $sede)
                                        <?php
                                        $contadorSedes = $contadorSedes + 1;
                                        ?>
                                        <tr>
                                            <td>{{ $contadorSedes }}</td>
                                            <td>{{ $sede->sede_nombre}}</td>
                                            <td>{{ $sede->sede_director}}</td>
                                            <td>{{ $sede->sede_meta_estudiantes }}</td>
                                            <td>{{ $sede->sede_meta_docentes }}</td>
                                            <td>{{ $sede->sede_meta_socios }}</td>
                                            <td>{{ $sede->sede_meta_iniciativas }}</td>
                                            <td>
                                                    @if ($sede->sede_vigente == 'S')
                                                        <div class="badge badge-success badge-shadow">Activo</div>
                                                    @else
                                                        <div class="badge badge-danger badge-shadow">Inactivo</div>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn btn-icon btn-warning" onclick="editarFormato({{ $sede->sede_codigo }})" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-edit"></i></a>
                                                    <form action="{{ route('superadmin.sedes.borrar', $sede->sede_codigo) }}" method="POST" style="display: inline-block">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-icon btn-danger" data-toggle="tooltip" title="Eliminar"><i class="fas fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @foreach ($Sedes as $sede)
        <div class="modal fade" id="modalEditarsedes-{{ $sede->sede_codigo }}" tabindex="-1" role="dialog"
            aria-labelledby="modalEditarsedes" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEditarsedes">Editar Sede</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.sedes.actualizar', $sede->sede_codigo) }}" method="POST">
                            @method('PUT')
                            @csrf

                            <div class="form-group">
                                <label>Nombre</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="far fa-id-card"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" id="sede_nombre" name="sede_nombre"
                                        value="{{ $sede->sede_nombre }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Director</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-sort-numeric-up"></i>
                                        </div>
                                    </div>
                                    <input type="number" class="form-control" id="sede_puntaje" name="sede_puntaje"
                                        value="{{ $sede->sede_director }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Estudiantes</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-sort-numeric-up"></i>
                                        </div>
                                    </div>
                                    <input type="number" class="form-control" id="sede_puntaje" name="sede_puntaje"
                                        value="{{ $sede->sede_meta_estudiantes }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Docentes</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-sort-numeric-up"></i>
                                        </div>
                                    </div>
                                    <input type="number" class="form-control" id="sede_puntaje" name="sede_puntaje"
                                        value="{{ $sede->sede_meta_docentes }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Socios</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-sort-numeric-up"></i>
                                        </div>
                                    </div>
                                    <input type="number" class="form-control" id="sede_puntaje" name="sede_puntaje"
                                        value="{{ $sede->sede_meta_socios }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Iniciativas</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-sort-numeric-up"></i>
                                        </div>
                                    </div>
                                    <input type="number" class="form-control" id="sede_puntaje" name="sede_puntaje"
                                        value="{{ $sede->sede_meta_iniciativas }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Estado</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-traffic-light"></i>
                                        </div>
                                    </div>
                                    <select class="form-control select2" id="sede_vigencia" name="sede_vigencia">
                                        <option value="S" {{ $sede->sede_vigente == 'S' ? 'selected' : '' }}>Activo
                                        </option>
                                        <option value="N" {{ $sede->sede_vigente == 'N' ? 'selected' : '' }}>Inactivo
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary waves-effect">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <script>
        function editarFormato(sede_codigo) {
            $('#modalEditarsedes-'+sede_codigo).modal('show');
        }
    </script>

    <link rel="stylesheet" href="{{ asset('public/bundles/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{ asset('public/bundles/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('public/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('public/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('public/js/page/datatables.js') }}"></script>

@endsection