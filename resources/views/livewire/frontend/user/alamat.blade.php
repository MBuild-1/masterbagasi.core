<div class="p-3 pt-5">
    <div class="d-flex justify-content-between">
        <div class="search">
            <form class="form-inline my-2 my-lg-0 d-flex">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn my-2 my-sm-0 btn-primary" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
        <button class="btn btn-primary" wire:click='resetAddress' data-bs-toggle="modal" data-bs-target="#address">Tambah Alamat Baru</button>
        {{-- Alamat --}}
        <div wire:ignore.self class="modal fade" id="address" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Alamat</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent='addAddress'>
                        <div class="form-floating mb-3">
                            <input type="text" wire:model="name_place" class="form-control" id="name_place" placeholder="Contoh: Kantor">
                            <label for="name_place" >Nama Tempat</label>
                            @error('name_place') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" wire:model="number_phone" class="form-control" id="number_phone" placeholder="Contoh: 082117897654">
                            <label for="number_phone" >Nomor Telepon</label>
                            @error('number_phone') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <textarea  wire:model="address" class="form-control" placeholder="Contoh: Jln Depok" cols="50" rows="50"></textarea>
                            <label for="address" >Alamat Lengkap</label>
                            @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Tambah Alamat</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>

    @foreach ($alamat as $item)
    <div class="mt-3 p-4 alamat">
        <div class="row">
            <div class="col-8">
                <p class="mb-0 fw-bold fz-20">{{Auth::user()->name}} ( {{$item->name_place}} )</p>
                <p class="my-2 fz-20">{{$item->number_phone}}</p>
                <div class="garis w-100"></div>
                <p class="fz-20">{{$item->address}}</p>
                <div class="d-flex justify-content-between">
                    <div class="m-0 p-0 btn fz-20 fw-bold ff4200" wire:click='editAddress({{$item->id}})' data-bs-toggle="modal" data-bs-target="#editAddress" >Ubah Alamat</div>
                    <span class="border-kiri"></span>
                    <div class="m-0 p-0 btn fz-20 fw-bold ff4200">Jadikan Alamat Utama</div>
                    <span class="border-kiri"></span>
                    <div class="m-0 p-0 btn fz-20 fw-bold ff4200" wire:click='deleteAddress({{$item->id}})' >Hapus Alamat</div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex justify-content-center h-100">
                    <button type="submit" class="btn btn-primary w-50 py-2 my-auto">Pilih Alamat</button>
                </div>
            </div>
        </div>
        
            <!-- update address -->
            <div wire:ignore class="modal fade" id="editAddress" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Alamat</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent='updateAddress'>
                            <div class="form-floating mb-3">
                                <input type="text" wire:model="name_place" class="form-control" id="name_place" placeholder="Contoh: Kantor">
                                <label for="name_place" >Nama Tempat</label>
                                @error('name_place') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" wire:model="number_phone" class="form-control" id="number_phone" placeholder="Contoh: 082117897654">
                                <label for="number_phone" >Nomor Telepon</label>
                                @error('number_phone') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <textarea  wire:model="address" class="form-control" placeholder="Contoh: Jln Depok" cols="50" rows="50"></textarea>
                                <label for="address" >Alamat Lengkap</label>
                                @error('address') <span class="text-danger">{{ $message }}</span> @enderror
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
    @endforeach
    
    {{-- <div class="mt-3 p-4 alamat" style="width: 100%; border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px">
        <p class="m-0" style="font-weight: 700;  font-size: 16;">Rumah</p>
        <p class="m-0" style=" font-size: 16;">+6287088630874</p>
        <p class="m-0" style=" font-size: 16;">Kober, Kec. Beji, Kota Depok, Jawa Bara..</p>
        <p class="my-3" style=" font-size: 16;"><span><img src="{{asset('frontend/img/ico/default/location-on.svg')}}" alt=""></span> Sudah Pinpoint</p>
        <button class="m-0 p-0 btn" onclick="popUpAlamat()" style=" font-size: 16;color: #ff4200">ubah alamat</button>
    </div>

    <div class="mt-3 p-4 alamat" style="width: 100%; border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px">
        <p class="m-0" style="font-weight: 700;  font-size: 16;">Rumah</p>
        <p class="m-0" style=" font-size: 16;">+6287088630874</p>
        <p class="m-0" style=" font-size: 16;">Kober, Kec. Beji, Kota Depok, Jawa Bara..</p>
        <p class="my-3" style=" font-size: 16;"><span><img src="{{asset('frontend/img/ico/default/location-on.svg')}}" alt=""></span> Sudah Pinpoint</p>
        <button class="m-0 p-0 btn" onclick="popUpAlamat()" style=" font-size: 16;color: #ff4200">ubah alamat</button>
    </div>

    <div class="mt-3 p-4 alamat" style="width: 100%; border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px">
        <p class="m-0" style="font-weight: 700;  font-size: 16;">Rumah</p>
        <p class="m-0" style=" font-size: 16;">+6287088630874</p>
        <p class="m-0" style=" font-size: 16;">Kober, Kec. Beji, Kota Depok, Jawa Bara..</p>
        <p class="my-3" style=" font-size: 16;"><span><img src="{{asset('frontend/img/ico/default/location-on.svg')}}" alt=""></span> Sudah Pinpoint</p>
        <button class="m-0 p-0 btn" onclick="popUpAlamat()" style=" font-size: 16;color: #ff4200">ubah alamat</button>
    </div> --}}
</div>