<div class="row">
    <div class="col-md-4 border-right">
        <div class="d-flex flex-column align-items-center text-center p-3 py-1">
            <div class="row mt-5">
                <div class="card" style="width: 18rem; border-radius: 10px">
                    <img class="card-image-top p-3" width="350px" src="{{ asset(Auth::user()->avatar) }}">
                    <div class="card-body">
                        <div class="col-md-12">
                            <input type="file" class="form-control" id="image" name="avatar">
                        </div>
                    </div>
                </div>
                <div class="mt-3 d-flex justify-content-center" style="padding-right: 10px !important;">
                    <div class="btn fw-bold"
                        style="font-size: 14px; width: 100%; border: 1px solid #ccc; border-radius: 8px">Ubah Sata Sandi
                    </div>
                </div>
                <div class="mt-3 d-flex justify-content-center" style="padding-right: 10px !important;">
                    <div class="btn fw-bold"
                        style="position: relative; font-size: 14px; width: 100%; border: 1px solid #ccc; border-radius: 8px">
                        <span class="btn-icon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        Pin Master Bagasi
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md">
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <h4 class="fw-bold">Ubah Biodata</h4>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-3 ">
                    <p class="fw-bold" style="font-size: 16px;">Nama</p>
                </div>
                <div class="col">
                    <p style="font-size: 16px;" class="text-sm">{{ Auth::user()->name }} <span type="button" data-bs-toggle="modal" data-bs-target="#nama" class="btn" style=" color:#ff4200 ">Ubah</span></p>
                </div>
                  <!-- Nama -->
                <div class="modal fade" id="nama" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Nama</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form wire:submit.prevent='updateName'>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" class="form-control" wire:model="name">
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3 ">
                    <p class="fw-bold text-sm" style="font-size: 16px;">Tanggal Lahir</p>
                </div>
                <div class="col">
                    <p class="text-sm " style="font-size: 16px;">
                        {{ Auth::user()->place_birth }},{{ Auth::user()->birthday }} <span class="btn"
                            style=" color:#ff4200 " data-bs-toggle="modal" data-bs-target="#tanggal">Ubah</span></p>
                </div>
                    <!-- Tanggal Lahir -->
                    <div class="modal fade" id="tanggal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Tanggal Lahir</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form wire:submit.prevent='updateEmail'>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control" wire:model="email">
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-3 ">
                    <p class="fw-bold text-sm" style="font-size: 16px;">Jenis Kelamin</p>
                </div>
                <div class="col">
                    <p class="text-sm " style="font-size: 16px;">{{ Auth::user()->gender }} <span class="btn"
                            style=" color:#ff4200 ">Ubah</span></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4 class="fw-bold">Ubah Kontak</h4>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-3 ">
                    <p class="fw-bold" style="font-size: 16px;">Email</p>
                </div>
                <div class="col">
                    <p style="font-size: 16px;" class="text-sm">{{ Auth::user()->name }} <span class="btn"
                            style=" color:#ff4200 ">Ubah</span></p>
                </div>
            </div>
            <div class="row">
                <div class="col-3 ">
                    <p class="fw-bold text-sm" style="font-size: 16px;">Nomor HP</p>
                </div>
                <div class="col">
                    <p class="text-sm " style="font-size: 16px;">
                        {{ Auth::user()->place_birth }},{{ Auth::user()->birthday }} <span class="btn"
                            style=" color:#ff4200 ">Ubah</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

