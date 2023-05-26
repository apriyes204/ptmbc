<div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Karyawan Baru</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3" action="{{ route('karyawan.store') }}" method="POST">
                @csrf
                <div class="col-md-6">
                    <div class="form-floating">
                        <input name="nik" type="number" class="form-control" id="floatingNik" placeholder="Your NIK">
                        <label for="floatingNik">Nomor Induk Karyawan</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input name="nama" type="text" class="form-control" id="floatingName" placeholder="Your Name">
                        <label for="floatingName">Nama Lengkap</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input name="email" type="email" class="form-control" id="floatingEmail" placeholder="Your Email">
                        <label for="floatingEmail">Alamat Email</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input name="posisi" type="text" class="form-control" id="floatingPosisi" placeholder="Posisi">
                        <label for="floatingPosisi">Posisi</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <select name="depart_id" id="floatingDepart" class="form-select" aria-label="Departemen">
                            <option value="">Pilih Departemen</option>
                            @foreach ($depart_data as $item)
                            
                            <option value="{{ $item->id }}">{{ $item->nama_departemen }}</option>

                            @endforeach
                        </select>
                        <label for="floatingDepart">Departemen</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <select name="status" class="form-select" id="floatingStatus" aria-label="Status">
                            <option selected>Status Pegawai</option>
                            <option value="Contract">Contract</option>
                            <option value="Permanent">Permanent</option>
                        </select>
                        <label for="floatingSelect">Status</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input name="no_telp" type="number" class="form-control" id="floatingNoTelp" placeholder="NoTelp">
                        <label for="floatingNoTelp">Nomor Telepon</label>
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
    </div>
</div>
