@extends('layouts.app')
<br><br><br>
<div id="alert" class="alert alert-info">
  <div class="container"><strong>Perhatian!</strong> Website ini masih dalam tahap pengembangan.
    <a onclick="document.getElementById('alert').style.display = 'none'" href="#" class="float-right">Tutup</a>
  </div>


</div>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::user() -> jabatan == "admin")

                    <body>
                      <div class="container">
                        <h5>Poin Anda {{Auth::user()->poin}}</h5>
                          <br>
                        <form class="form-group" action="{{route('User.update', Auth::user()->id)}}" method="post">
                          @csrf

                          {{method_field('PUT')}}
                          <input type="hidden" name="poin" value="{{Auth::user()->poin}}">
                          <input type="submit" name="submit" class="btn btn-primary" value="Tambah Poin">
                        </form>
                      </div>
                    </body>

                    @elseif(Auth::user()-> jabatan == "member")

                    <body>
                      <div class="container">
                        <h5>Poin Anda {{Auth::user()->poin}}</h5>
                          <br>
                        <form class="form-group" action="{{route('User.update', Auth::user()->id)}}" method="post">
                          @csrf

                          {{method_field('PUT')}}
                          <input type="hidden" name="poin" value="{{Auth::user()->poin}}">
                          <input type="submit" name="submit" class="btn btn-primary" value="Tambah Poin">
                        </form>
                      </div>
                    </body>
                    @else

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
