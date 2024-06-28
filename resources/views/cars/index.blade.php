@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div id="product">
        <div class="container px-4 px-lg-5 mt-5">
            <h3 class="text-center mb-5">Daftar Mobil Tersedia</h3>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach($cars as $car)
                    <div class="col mb-5">
                        <div class="card h-100">
                            @if ($car->available)
                                <div class="badge badge-custom bg-success text-white position-absolute" style="top: 0; right: 0">
                                    Tersedia
                                </div>
                            @endif
                            <img class="card-img-top" src="{{ asset($car->image_url) }}" alt="{{ $car->brand }} {{ $car->model }}">
                            <div class="card-body card-body-custom pt-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">{{ $car->brand }} {{ $car->model }}</h5>
                                    <div class="rent-price mb-3">
                                        <span class="text-primary">Rp.{{ number_format($car->price, 0, ',', '.') }}</span>
                                    </div>
                                    <ul class="list-unstyled list-style-group">
                                        <li class="border-bottom p-2 d-flex justify-content-between">
                                            <span>Bahan bakar</span>
                                            <span style="font-weight: 600">{{ $car->bahan_bakar }}</span>
                                        </li>
                                        <li class="border-bottom p-2 d-flex justify-content-between">
                                            <span>Jumlah Kursi</span>
                                            <span style="font-weight: 600">{{ $car->number_of_seats }}</span>
                                        </li>
                                        <li class="border-bottom p-2 d-flex justify-content-between">
                                            <span>Warna</span>
                                            <span style="font-weight: 600">{{ $car->color }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-footer border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-info mt-auto text-white" style="width:100%" href="{{ route('cars.show', $car->id) }}">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
        
    </section>

    <section class="team">
        <div id="about">
            <h2 class="tim" >Tentang Kami</h2>
            <div class="team-members">
                <div class="team-member">
                    <img src="img/member1.png" alt="Member 1">
                    <p>ALFIN</p>
                    <P>UI/UX</P>
                    <P>3337220111</P>
                </div>
                <div class="team-member">
                    <img src="img/member2.png" alt="Member 2">
                    <p>GIAN</p>
                    <P>UI/UX</P>
                    <P>3337220019</P>
                </div>
                <div class="team-member">
                    <img src="img/member3.png" alt="Member 3">
                    <p>PRIANDA</p>
                    <P>Programmer</P>
                    <P>3337220113</P>
                </div>
                <div class="team-member">
                    <img src="img/member4.png" alt="Member 4">
                    <p>DIDA</p>
                    <P>Programmer</P>
                    <P>3337220092</P>
                </div>
                <div class="team-member">
                    <img src="img/member5.png" alt="Member 5">
                    <p>ADLI</p>
                    <P>Programmer</P>
                    <P>3337220059</P>
                </div>
            </div>
            </div>
        </section>


    <!-- footer -->
    <footer class="footer mt-auto border-dark shadow-lg">
      <div class="container mt-5">
        <div class="row">
          <div class="col-lg-6">
            <h5 class="text-uppercase mt-2" style="margin:0">Mobank</h5>
            <div class="mt-2">
              <p>Mobank adalah penyedia mobil impianmu. Mobank menyediakan berbagai jenis mobil sport dan mobil lainnya.</p>
            </div>
          </div>

          <div class="col-lg-3">
            <h5 class="mt-2">Menu</h5>
            <div class="mt-2">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a href="{{ route('cars.index') }}" class="nav-link text-white active">
                    <i class="fas fa-angle-right text-white"></i>
                    Beranda
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#product" class="nav-link text-white active">
                    <i class="fas fa-angle-right text-white"></i>
                    Produk
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col">
            <h5 class="mt-2">Contact</h5>
            <div class="mt-2">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a href="#" class="nav-link text-white">
                    <i class="fas fa-angle-right text-white"></i>
                    Mobank@gmail.com
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link text-white">
                    <i class="fas fa-angle-right text-white"></i>
                    +6281234567890
                  </a>
                </li>
              </ul>
            </div>
          </div>
        <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container-mt-5 -->
    
      <!-- credit -->
      <div class="container-fluid mt-2">
        <div class="row" id="footer-credit" style="background: #181b1f">
          <div class="col">
            <div class="container mt-2 mb-2 text-center">
              <small class="text-white">
                Copyright © 2024 By <a href="#" class="text-white">Mobank</a>. All Rights Reserved. 
              </small>
            </div>
          </div>
        </div>
      </div>
      <!-- end credit -->
    </footer>
    <!-- end footer -->
@endsection
