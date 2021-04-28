<div class="modal fade" id="confirmAttendanceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content font-italic">
            <div class="modal-header border-0">
                <h5 class="modal-title m-auto" id="exampleModalLabel">Confirmar Asistencia</h5>
            </div>
            <div class="modal-body" id="attendee-form">
                @if(\Illuminate\Support\Facades\Session::get('attendee'))
                    <form id="confirmAttendance" method="post" action="{{route('confirmAttendance')}}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <div class="w-75 m-auto text-left">
                            <div class="form-check">
                            <div class="form-check row">
                                <input class="form-check-input position-relative col-4" type="checkbox"  name="principalAttendance">
                                <label class="form-check-label col-8" for="flexCheckDefault">
                                    {{\Illuminate\Support\Facades\Session::get('attendee')->name}}
                                </label>
                            </div>
                            @foreach(\Illuminate\Support\Facades\Session::get('attendee')->subAttendees()->get() as $subAttendee)
                                <div class="form-check row">
                                    <input class="form-check-input position-relative col-4" type="checkbox"  name="subAttendees[]" value="{{$subAttendee->id}}">
                                    <label class="form-check-label col-8" for="flexCheckDefault">
                                        {{$subAttendee->name}}
                                    </label>
                                </div>
                            @endforeach

                            <div class="mt-3">
                                <button type="button" onclick="cancelAttendee()" class="btn float-left">Cancelar</button>
                                <button type="submit" class="btn m-auto float-right">Confirmar</button>
                            </div>
                        </div>
                    </form>
                @else
                        @csrf
                        <div class="form-group">
                            <label for="nameCode">Nombre o código</label>
                            <input type="text" class="form-control text-light" id="nameCode" aria-describedby="nameCodeHelp" name="nameCode" required>
                            <small id="nameCodeHelp" class="form-text text-muted">Coloca el nombre tal como aparece en la invitación o el código.</small>
                        </div>
                        <div class="modal-footer border-0">
                            <button type="button" onclick="findAttendee()" class="btn m-auto">Buscar</button>
                        </div>
                @endif
            </div>
        </div>
    </div>
</div>
