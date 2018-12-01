@extends('layouts.app')

<style>
  body,footer,#kaki {overflow-x: hidden !important;}
  #tombol1 {right: 18px; position: absolute;}
  .keterangan {
    background-color: rgba(0, 0, 0, 0.5) !important;
    height: 100vh;
    align-items: center;
    display: flex;
  }

  div.belakang {
    background-image: url('/img/trash.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    min-height: 100%;
  }
  
    div.buang-sampah {
    background-image: url('/img/buang-sampah.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
  }
  
  #buang-sampah {background-color: rgba(0, 0, 0, 0.5) !important;height: 400px !important;}
  div.buang-sampah {min-height: 400px ;}

  @media (max-width: 601px) {
    div.belakang, div.buang-sampah {
      background-attachment: scroll !important;
      width: 100%;
      min-height: 200px !important;
    }
    
        div.buang-sampah, #buang-sampah {min-height: 270px !important;}

    .belakang-2 {
      background-color: rgba(0,0,0,0.6);
      height: 200px; color: white !important;
      display: flex;
      align-items: center; justify-content: center;
    }

    .keterangan {
      display: none !important;
    }


  }

  .kontainer {display: table;clear: both;content: ""}
</style>


<br><br>
<body>
  <div class="belakang">
    <div class="hide-lg hide-md container belakang-2 " <br>
      <center> <h2 class="w3-animate-zoom">Apa Itu Coinstrash?</h2> </center>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div id="sisi-kiri" class="col-lg-6 hide-md hide-sm">
          <div class="container d-flex hide-md hide-sm align-items-center" style="height: 100vh">
            <button id="tombol1" type="button" class="btn btn-light text-primary"  onclick="tombol1()" name="button"><i class="fas fa-arrow-left"></i></button>
          </div>
        </div>

        <div id="sisi-kanan" class="col-lg-6 col-md-12 col-sm-12 keterangan p-3 text-white text-center">
          <div class="container">

              <!-- Keterangan :
                  Dari welcomeController mengambil data id 1 dan dikirim kesini
                  dengan skrip $satu-> isi
              -->
              <div class="container hide-sm hide-lg">
                <h3 class="text-primary text-center">COINSTRASH</h3>
                <br>
              </div>

            {!!($satu->isi)!!}

            <div class="container hide-sm hide-lg">
              <center><br>
                <a href="#konten" class="btn btn-lg btn-primary" style="text-decoration: none">
                  Telusuri Konten
                </a>
                
              </center>
            </div>

              @if(!Auth::user())

              @elseif(Auth::user()->jabatan == "admin")
              <br><br>
                <center>
                  <a href="{{route('welcome.edit', "1")}}" style="text-decoration: none">
                    <button type="button" class="btn btn-primary d-block" name="button"><i class="fas fa-pen-square"></i> Edit</button>
                  </a>
                </center>

              @endif
              <br><br>

              <div class="">

              </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="container p-3">

    <div class="hide-lg hide-md">
      {!!($satu->isi)!!}

      @if(!Auth::user())

      @elseif(Auth::user()->jabatan == "admin")
        <div class="container p-1 m-1 border-bottom">
          <a href="{{route('welcome.edit', '1')}}" style="text-decoration: none">
        <button type="button" class="btn btn-primary d-block mb-3 mt-3" name="button"><i class="fas fa-pen-square"></i> Edit</button>
          </a>
        </div>
      @endif
    </div>

    <div id="konten" class="container-fluid pt-4 pb-4">
      <center><h3>Bagaimana Caranya?</h3>
        <div class="display-5 text-monospaced text-secondary">
          Bagaimana caranya saya menggunakan layanan ini
        </div>
      </center>

      <br><br>
      <div class="row text-center">
        <div class="col-sm-12 col-lg-4 col-md-4 mt-5 ">

          <div class="display-2">
            <i class="fas fa-trash-alt"></i>
          </div>

          <br>

          <!-- Keterangan :
              Dari welcomeController mengambil data id 2 dan dikirim kesini
              dengan skrip $dua-> isi
          -->

          {!!($dua->isi)!!}

          @if(!Auth::user())

          @elseif(Auth::user()->jabatan == "admin")
            <center>
              <div class="container">
                <a href="{{route('welcome.edit', '2')}}" style="text-decoration: none">
                  <button type="button" class="btn btn-primary d-block mb-3 mt-3" name="button"><i class="fas fa-pen-square"></i> Edit</button>
                </a>
              </div>
            </center>
          @endif
        </div>

        <div class="col-sm-12 col-lg-4 col-md-4 mt-5">

          <div class="display-2">
            <i class="fas fa-coins"></i>
          </div>

          <br>

          <!-- Keterangan :
              Dari welcomeController mengambil data id 3 dan dikirim kesini
              dengan skrip $tiga-> isi
          -->

          {!!($tiga->isi)!!}

          @if(!Auth::user())
          @elseif(Auth::user()->jabatan == "admin")
          <center>
            <div class="container">
              <a href="{{route('welcome.edit', '3')}}" style="text-decoration: none">
                <button type="button" class="btn btn-primary d-block mb-3 mt-3" name="button"><i class="fas fa-pen-square"></i> Edit</button>
              </a>
            </div>
          </center>
          @endif
        </div>

        <div class="col-sm-12 col-lg-4 col-md-4 mt-5 ">
          <div class="display-2">
            <i class="fas fa-shopping-cart"></i>
          </div>

          <br>
          {!!($empat->isi)!!}

          @if(!Auth::user())
          @elseif(Auth::user()->jabatan == "admin")
          <center>
            <div class="container">
              <a href="{{route('welcome.edit', '4')}}" style="text-decoration: none">
                <button type="button" class="btn btn-primary d-block mb-3 mt-3" name="button"><i class="fas fa-pen-square"></i> Edit</button>
              </a>
            </div>
          </center>
          @endif
        </div>
      </div>
    </div>
  </div>
  
  <div class="buang-sampah">
       <div id="buang-sampah" class="container-fluid  p-3 d-flex align-items-center justify-content-center text-white" style="background-color: rgba(255, 255, 255, 0.8)">
        <center>
        <h3>Tunggu Apalagi?</h3>
            <div class="text-monospaced text-white display-5">
            Segera kumpulkan poinya dan tukarkan dengan hadiah menarik
            </div>
        
        <br><br>
            <a class="btn btn-primary text-white" href="{{route('register')}}" style="text-decoration: none"> Daftar Sekarang </a>
        </center>
  </div> 
  </div>
  

</body>

<footer>
  <div class="bg-dark" >
    <div class="row" id="kaki" style="overflow-x: hidden !important">
        <div class="col-lg-6 col-md-6 col-sm-12" >
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.39500245579!2d109.25234141475383!3d-7.4214624751595535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655e96a7e3cc79%3A0x6d79bcd9709b4b6!2sSMK+Negeri+1+Purwokerto!5e0!3m2!1sid!2sid!4v1543463005817"
              style="width: 100%; min-height: 500px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 text-white pt-5 pb-5 text-center d-flex align-items-center" style="height: auto">
            <div class="container">
                <h3>You Can Find Us At</h3>
                <br>
                <div class="container">
                    <h5>EMAIL</h5>
                    <small>  <a class="text-white" href="mailto:admin@smkn1purwokerto.sch.id">admin@smkn1purwokerto.sch.id</a> </small>
                </div>
                <br>
                <div class="container">
                    <h5>ADDRESS</h5>
                    <small>Jl. DR. Soeparno No.29, Purwokerto Wetan, Purwokerto Tim. <div class="">Kabupaten Banyumas, Jawa Tengah 53123</div> </small>
                </div>
                <br>
                <div class="container">
                    <h5>PHONE</h5>
                    <small><a class="text-white" href="tel:+62281637132">(0281) 637132</a></small>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid p-2 text-center text-white" style="background-color: #282828 !important">
    <a href="/" class="text-white"><small>
            <?php
          $tahun = date('Y');
          echo $tahun;
         ?> -
            Powered By COINSTRASH</small></a>
</div>
</footer>

<script>
	function tombol1() {
    	document.getElementById('sisi-kiri').style.display = "none";
      document.getElementById('sisi-kanan').classList.toggle('col-lg-12');
      document.getElementById('tombol1').style.display = "none";
    }

</script>
<script>
	function tombol1() {
    	document.getElementById('sisi-kiri').style.display = "none";
      document.getElementById('sisi-kanan').classList.toggle('col-lg-12');
      document.getElementById('tombol1').style.display = "none";
    }

</script>

<script>
   /*function check(e)
   {
   alert(e.keyCode);
   }*/
   document.onkeydown = function(e) {
           if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {//Alt+c, Alt+v will also be disabled sadly.
               alert('not allowed');
           }
           return false;
   };
   </script>
