@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Kelas</div>

                <div class="card-body">
                <form action="{{route('siswa.update',$siswa->id)}}" method="POST">
                   @csrf
                   @method('PATCH')
                    <div class="form-group">
                        <label>NIS</label>
                        <input type="text" name="nis" value="{{$siswa->nis}}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" value="{{$siswa->nama}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" required>{{$siswa->alamat}}</textarea>
                        </div>
                        <div class="form-group">
                        <label>Kelas</label>
                        <select name="id_kelas" class="form-control">
                        @foreach ($kelas as $data)
                        <option value="{{$data->id}}" {{$data->id == $siswa->id_kelas ? 'selected' : ''}}>{{$data->kelas}}</option>
                        @endforeach
                    </select>
                </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
