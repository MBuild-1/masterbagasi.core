@extends('layouts.app')
@section('content')
<div class="container vh-100">
    
    <div class="row mt-5 pt-3 h-75" >
        <div class="col-6 p-5 h-100">
            <div class="h-100 w-100" style="background-color: #b4b4b4"></div>
        </div>
        <div class="col-6 p-5 h-100">
            <div class="h-100 w-100 d-flex flex-column gap-5">
                <div class="">
                    <h1>Mari Belanja Bersama</h1>
                    <h3>Dapatkan Harga Pengiriman Lebih Hemat</h3>
                </div>
                <div class="w-100 d-flex flex-column gap-3">
                    <div class="btn btn-menu-keranjang w-100 p-3 shadow" data-bs-toggle="modal" data-bs-target="#buatKeranjang">
                        <h1 class="fw-bold">Buat Keranjang</h1> 
                    </div>
                    <div class="btn btn-menu-keranjang w-100 p-3 shadow" data-bs-toggle="modal" data-bs-target="#gabungKeranjang">
                        <h1 class="fw-bold">Gabung Keranjang</h1> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="buatKeranjang"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="buatKeranjangLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="buatKeranjangLabel">Buat Keranjang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="password-buat-keranjang" class="col-form-label">Password Keranjang</label>
                            <input type="password" class="form-control" id="password-buat-keranjang" name="passwordBuatKeranjang">
                            <span toggle="#password-buat-keranjang" class="eyeshow field-icon toggle-password" style="background-position: bottom"></span>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" onclick="window.location='{{ url('sharingcart') }}'">Buat</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="gabungKeranjang"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="gabungKeranjangLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="gabungKeranjangLabel">Gabung Keranjang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="id-gabung-keranjang" class="col-form-label">ID Keranjang</label>
                            <input type="text" class="form-control" id="id-gabung-keranjang">
                        </div>
                        <div class="mb-3">
                            <label for="password-gabung-keranjang" class="col-form-label">Password Keranjang</label>
                            <input type="password" class="form-control" id="password-gabung-keranjang" name="passwordGabungKeranjang">
                            <span toggle="#password-gabung-keranjang" class="eyeshow field-icon toggle-password" style="background-position: bottom"></span>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" onclick="window.location='{{ url('sharingcart') }}'">Gabung</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection