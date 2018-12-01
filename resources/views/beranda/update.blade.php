@extends('layouts.app')

<?php if (!Auth::user()): ?>
  <body>
    <br><br><br><br>
      <div class="container" >
          <h2>Maaf! Akses Ditolak</h2>
          <h5>Untuk dapat mengakses laman ini, Silahkan Login Sebagai Admin terlebih dahulu</h5>
            <br>
          <div class="btn-group">
            <a class="btn btn-primary" href="/">
              <i class="fas fa-arrow-left"></i> Kembali Ke Beranda
            </a>

            <a class="btn btn-primary" href="{{route('login')}}">
              <i class="fas fa-user"></i> Login
            </a>
          </div>
      </div>
  </body>
<?php elseif(Auth::user()->jabatan == "admin"): ?>
  <body>
    		<script src="{{ asset('editor/ckeditor.js')}} " type="text/javascript"></script>
    <br><br><br>

    <div class="container p-3">
      <h2>Edit {{$ganti->judul}}</h2>
        <br>
      <form class="form-group" action="{{route('welcome.update', $ganti->id)}}" method="post">
        @csrf

        {{method_field('PUT')}}
        <textarea id="editor1" name="isi" >{{$ganti->isi}}</textarea>

        <div class=" mt-4">
          <input type="submit" name="submit" value="Perbarui" class="btn btn-success border">
          <a href="/" class="btn btn-light ml-2">Batal Perbarui</a>
        </div>
      </form>
    </div>
  </body>
<?php endif; ?>

<script>
CKEDITOR.replace( 'editor1' );
</script>
