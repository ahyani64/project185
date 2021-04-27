@extends('template')
@section('content')

    
    <div class="container p-2 mt-2">
    <h2>Data Ujian</h2>
    <br> 
        <a href="{{ route('ujian.add') }}" class="btn btn-primary">Tambah Data</a>
    

    <div class="col">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Matakuliah</th>
                    <th>Dosen</th>
                    <th>Jumlah Soal</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ujians as $ujian)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $ujian->nama_mk }}</td>
                    <td>{{ $ujian->dosen }}</td>
                    <td>{{ $ujian->jumlah_soal }}</td>
                    <td>{{ $ujian->keterangan }}</td>
                    <td>Hapus</td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    </div>

     <!-- Vendor JS Files -->
  <script src="/assets/vendor/jquery/jquery.min.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="/assets/vendor/counterup/counterup.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/venobox/venobox.min.js"></script>
  <script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="/assets/vendor/typed.js/typed.min.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>
    
@endsection