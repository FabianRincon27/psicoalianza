<div class="modal fade" id="editEmployee{{ $e->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Usuario: <b>{{ $e->name }}
                        {{ $e->lastname }}</b>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('charges-add', $e->id) }}" method="post">
                    @csrf
                    <div class="col-lg-12">
                        <label for="number_of_rooms" class="form-label"><b>Cargos</b></label>
                        <div class="mb-3">
                            @foreach (charges() as $key => $value)
                                <div class="row">
                                    @foreach ($value['keys'] as $k => $v)
                                        <div class="col-md-4">
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox" value="true"
                                                    id="{{ $k }}" name="{{ $v }}"
                                                    @if (kvfj($e->charges, $v)) checked @endif>
                                                <label class="form-check-label"
                                                    for="dashboard">{{ $v }}</label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="float-end btn btn-success btn-sm text-white">
                    <i class='bx bxs-save' style="margin-top: 5px; font-size: 13px"></i> Actualizar Datos
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
