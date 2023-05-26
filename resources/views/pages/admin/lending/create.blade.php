<div class="modal-dialog modal-dialog-scrollable modal-xl">



    <div class="modal-content">
        <form action="{{ route('asset.store') }}" method="POST">
            @csrf

            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Asset</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input name="label_code" type="text" class="form-control" id="floatingLabel"
                                placeholder="Label Code">
                            <label for="floatingLabel">Label Code</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" name="id_type">
                                <option selected>Pilih Type</option>
                                @foreach ($typeasset as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_type }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Pilih Type Asset</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" name="brand" id="floatingBrand" placeholder="Brand Series"
                                class="form-control">
                            <label for="floatingBrand">Brand Series</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="model" id="floatingModel"
                                placeholder="Model">
                            <label for="floatingModel">Model</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="serial_number" id="floatinSN"
                                placeholder="Serial Number">
                            <label for="floatinSN">Serial Number</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="month" class="form-control" name="buy_of_date" id="floatingBuy"
                                placeholder="Date of Buy">
                            <label for="floatingBuy">Date of Buy</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="number" class="form-control" name="harga" id="floatingHarga"
                                placeholder="Estimasi Harga">
                            <label for="floatingHarga">Estimasi Harga</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="processor" id="floatingProcessor"
                                placeholder="Processor">
                            <label for="floatingProcessor">Processor</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="ram" id="floatingRam"
                                placeholder="RAM">
                            <label for="floatingRam">RAM</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="hdd" id="floatingHDD"
                                placeholder="Harddisk">
                            <label for="floatingHDD">Harddisk</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="monitor" id="floatingMonitor"
                                placeholder="Monitor">
                            <label for="floatingMonitor">Monitor/VGA</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <select name="lan" id="floatingLan" class="form-select">
                                <option value="Tidak">Tidak</option>
                                <option value="Iya">Iya</option>
                            </select>
                            <label for="floatingLan">Lan Card</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" value="Submit">Simpan</button>
            </div>

        </form>
    </div>


</div>
