@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Kelas</div>

                <div class="card-body">
                    <div class="form-group">
                        <label>NIS</label>
                        <input type="text" name="nis" value="{{$siswa->nis}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" value="{{$siswa->nama}}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" readonly>{{$siswa->alamat}}</textarea>
                        </div>
                        <div class="form-group">
                        <label>Kelas</label>
                        <input type="text" class="form-control" value="{{$siswa->kelas->kelas}}" readonly>
                    </select>
                </div>
                <div class="form-group">
                    <label>Mata Pelajaran</label>
                    @foreach ($siswa->mapel as $data)
                    <li>{{$data->nama}}</li>
                    @endforeach
                </div>
                    <div class="form-group">
                 <a href="{{url()->previous()}}" class="btn btn-primary">Kembali</a>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
