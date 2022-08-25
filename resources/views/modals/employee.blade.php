<div class="modal fade modal-lg" id="addEmployee" tabindex="-1" aria-labelledby="addEmployeeLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addEmployeeLabel">Registrar Empleado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('employee-post') }}" method="POST" id="form_add">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombres</label>
                                <input type="text" class="form-control" id="name" name="name">
                                <div id="errorName" class="form-text text-danger visually-hidden">Debe escribir los
                                    nombres
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" id="lastname" name="lastname">
                                <div id="errorLastname" class="form-text text-danger visually-hidden">Debe escribir los
                                    apellidos
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="type_document" class="form-label">Tipo De Documento</label>
                                {!! Form::select('type_document', ['0' => 'Cédula De Ciudadanía', '1' => 'Pasaporte'], 0, [
                                    'class' => 'form-select',
                                ]) !!}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="num_document" class="form-label">Número De Documento</label>
                                <input type="number" class="form-control" id="num_document" name="num_document">
                                <div id="errorNumdocument" class="form-text text-danger visually-hidden">Debe escribir
                                    un
                                    número de documento</div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="address" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="address" name="address">
                                <div id="errorAddress" class="form-text text-danger visually-hidden">Debe escribir una
                                    dirección
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="nit" class="form-label">Ciudad</label>
                                <input type="text" class="form-control" id="city" name="city">
                                <div id="errorCity" class="form-text text-danger visually-hidden"> Debe ingresar una
                                    ciudad
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="city" class="form-label">Teléfono</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                                <div id="errorPhone" class="form-text text-danger visually-hidden">Debe escribir un
                                    teléfono
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success btn-sm" id="btn_add">Registrar
                            Empleado</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
