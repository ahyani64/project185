@extends('template')

@section('content')

<div class="container p-2 mt-2">
    <h2>Input Data</h2>
    <form action="{{ route('ujian.save') }}" method="post">
        @csrf
        <div class="form-group">
            <label>Nama Matakuliah</label>
            <input type="text" name="nama_mk" class="form-control">
        </div>
        <div class="form-group">
            <label>Dosen</label>
            <textarea name="dosen" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Jumlah Soal</label>
            <input type="number" name="jumlah_soal" class="form-control">
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control">
        </div>
        <br>
        <input type="submit" name="submit" value="Save Data" class="btn btn-primary">
        <a href="{{ route('ujian.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

@endsection