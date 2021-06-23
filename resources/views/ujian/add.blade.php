@extends('template')

@section('content')

<div class="container p-2 mt-2">
    <h2>Input Data</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('ujian.save') }}" method="post" data-parsley-validate>
        @csrf
        <div class="form-group">
            <label>Nama Matakuliah</label>
            <input type="text" value="{{ old('nama_mk') }}" name="nama_mk" class="form-control @error('nama_mk') is-invalid @enderror">
             @error('nama_mk')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label>Dosen</label>
            <input type="text" value="{{ old('dosen') }}" name="dosen" class="form-control @error('dosen') is-invalid @enderror">
            @error('dosen')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label>Jumlah Soal</label>
            <input type="number" value="{{ old('jumlah_soal') }}" name="jumlah_soal" class="form-control @error('jumlah_soal') is-invalid @enderror">
            @error('jumlah_soal')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control @error('keterangan') is-invalid @enderror">{{ old('keterangan') }}</textarea>
            @error('keterangan')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <br>
        <input type="submit" name="submit" value="Save Data" class="btn btn-primary">
        <a href="{{ route('ujian.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"
            integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ=="
            crossorigin="anonymous"></script>
@endsection
@section('css')
    <link rel="stylesheet" href="/css/parsley.css">
@endsection