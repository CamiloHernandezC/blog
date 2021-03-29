<div class="modal fade" id="assignGiftModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title m-auto" id="exampleModalLabel">LLENA TUS DATOS</h5>
            </div>
            <div class="modal-body" id="attendee-form">
                    <form id="assignGift" method="post" action="{{route('assignGift')}}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <input hidden id="giftId" name="giftId">
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control text-light" id="name" name="name" required>
                        </div>
                        <div class="modal-footer border-0">
                            <button type="submit" class="btn m-auto">Confirmar</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
