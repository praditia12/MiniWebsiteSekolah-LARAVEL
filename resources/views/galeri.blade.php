<!-- Menghubungkan dengan view template master -->
@extends('master')

@section('title', 'Galeri Sekolah - SMK Negeri 1 Subang')

@section('konten')

    <div style="background-image: url(img/bg-title.jpg)">
        <div style="padding:110px;">
            <h1 class="text-light fw-bold text-center">Galeri Sekolah</h1>
        </div>
    </div>

    <div class="text-center pt-5">
        <h3 class="fw-bold">SMKN 1 SUBANG</h3>
        <P class="fw-lighter fst-italic">The School of CEREN Models</P>
    </div>

    <!-- Project -->
    <section id="projects">
      <div class="container">
        <div class="row text-center mb-3">
        </div>
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="60">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img class="portofolio-box" src="img/galeri/1.jpeg" alt="Project 1" />
              <div class="card-body">
                <p class="card-text text-center">Rapat Guru SMK Negeri 1 Subang</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3" data-aos="zoom-in" data-aos-delay="63">
            <div class="card">
              <img src="img/galeri/2.jpeg" class="card-img-top" alt="Project 2" />
              <div class="card-body">
                <p class="card-text text-center">Sekolah Pencetak Wirausaha</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3" data-aos="zoom-in" data-aos-delay="66">
            <div class="card">
              <img src="img/galeri/3.jpeg" class="card-img-top" alt="Project 3" />
              <div class="card-body">
                <p class="card-text text-center">Uji Kompetensi Bisnis Daring dan Pemasaran</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3" data-aos="zoom-in" data-aos-delay="69">
            <div class="card">
              <img src="img/galeri/4.jpeg" class="card-img-top" alt="Project 4" />
              <div class="card-body">
                <p class="card-text text-center">Upacara Hari Senin</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3" data-aos="zoom-in" data-aos-delay="72">
            <div class="card">
              <img src="img/galeri/5.jpeg" class="card-img-top" alt="Project 5" />
              <div class="card-body">
                <p class="card-text text-center">Pembelajaran Tatap Muka</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Akhir Projects -->  

@endsection