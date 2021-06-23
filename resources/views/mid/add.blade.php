@extends('template')

@section('content')

<div class="container p-2 mt-2">
    <h2>Input Data</h2>
    <form action="{{ route('mid.save') }}" method="post">
        @csrf
        <div class="form-group">
            <label>NIM</label>
            <input type="number" name="kolom_nim" class="form-control">
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="kolom_nama" class="form-control">
            
        </div>
        <div class="form-group">
            <label>Umur</label>
            <input type="number" name="kolom_umur" class="form-control">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="kolom_alamat" class="form-control"></textarea>
        </div>
        
        <br>
        <input type="submit" name="submit" value="Save Data" class="btn btn-primary">
        <a href="{{ route('mid.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

@endsection