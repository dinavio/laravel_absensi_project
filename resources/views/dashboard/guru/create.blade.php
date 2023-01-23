@extends('dashboard.layouts.main')
@section('container')
<div class="navbar navbar-light bg-light d-flex justify-cpntent flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-botton">
<h3>Add New Guru</h3>
</div>
<div class="container mt-3 col-lg-8">
    <form method="post" action="/dashboard/guru" style= "background-color: #FFF0F5" enctype="multipart/form-data" >
        @csrf
        
        <div class="mb-3 mt-3">
        <label for="nip" class="form-label">NIP :</label>
        <input type="text" class="form-control input-color @error('nip') is-invalid @enderror" id="nip" placeholder="Masukkan nip" name="nip" value="{{ old('nip') }}" >
        @error('nip')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
        <div class="mb-3 mt-3">
        <label for="name" class="form-label">Name :</label>
        <input type="text" class="form-control input-color @error('name') is-invalid @enderror" id="name" placeholder="Nama" name="name" >
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
        <div class="mb-3 mt-3">
        <label for="image" class="form-label"> Masukan Image </label>
        <img class="img-preview img-fluid" alt="">
        <input type="file" class="form-control input-color @error('image') is-invalid @enderror" id="image" placeholder="Nama" name="image" 
        onchange="previewImage()">
        @error('image')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
        <div class="mb-3 mt-3">
        <label for="kelas_id" class="form-label">Kelas_id :</label>
        <select  class="form-control input-color @error('kelas_id') is-invalid @enderror" id="kelas_id" placeholder="Masukkan kelas_id" name="kelas_id" >
        <option value="">Pilih Kelas</option>
        @foreach ($kls as $item)
        <option value="{{ $item->id }}">{{ $item->kelas }}</option>
        @endforeach
        </select>
        @error('kelas_id')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
        <div class="mb-3 mt-3">
        <label for="email"  class="form-label">Email :</label>
        <input type="email" class="form-control input-color @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email anda" name="email" >
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
        <div class="mb-3 mt-3">
        <label for="username" class="form-label">Username :</label>
        <input type="text" class="form-control input-color @error('username') is-invalid @enderror" id="username" placeholder="Masukkan Nama anda" name="username" >
        @error('username')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
        <div class="form-check">
            <label  class="form-label">Jenis Kelamin :</label><br>
            <label class="form-check-label" for="perempuan">
                Perempuan
            </label>
            <input class="form-check-input" type="radio" name="jk" id="jk" value="perempuan">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jk" id="jk" value="laki-laki" >
            <label class="form-check-label" for="laki-laki">
                Laki-laki
            </label>
        </div>
        @error('jk')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        <div class="mb-3 mt-3">
        <label for="kode_guru" class="form-label">Alamat  :</label>
        <input type="text" class="form-control input-color @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="Masukkan Alamat anda"  >
        @error('alamat')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
        
        <!-- <div class="mb-3 mt-3">
        <label for="created" class="form-label">Created  :</label>
        <input type="date" class="form-control input-color" id="created" name="created" placeholder="Masukkan created anda"  >
        </div>
        -->
        <button type="submit" class="btn btn-info float-end" name="submit"><i data-feather="save"></i>Submit Data</button>
        <button type="submit" class="btn btn-warning float-end" name="batal"><i data-feather="chevron-right"></i>Batal</button>
    </form>
</div>

    <script>
        function previewImage(){

            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FildeReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload=function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>

@endsection