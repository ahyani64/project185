@extends('template')
@section('content')

    
    <div class="container p-2 mt-2">
    <h2>Mid Semester</h2>
    <br> 
        <a href="{{ route('mid.add') }}" class="btn btn-primary">Add Data</a>
    

    <div class="col">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($midsemesters as $mid)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mid->kolom_nim }}</td>
                    <td>{{ $mid->kolom_nama }}</td>
                    <td>{{ $mid->kolom_umur }}</td>
                    <td>{{ $mid->kolom_alamat }}</td>
                     <td>
                        <a href="" class="btn btn-sm btn-warning">Edit</a>
                        <a href="/mid/destroy/{{ $mid->id }}" class="btn btn-sm btn-danger">Delete</a>
                        
                    </td>
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