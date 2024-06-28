@extends('layouts.app')

@section('content')
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Detail Mobil</h1>
            </div>
        </div>
    </header>

    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ asset($car->image_url) }}" alt="{{ $car->brand }} {{ $car->model }}">
                        <!-- Product details-->
                        <div class="card-body card-body-custom pt-4">
                            <div>
                                <!-- Product name-->
                                <h3 class="fw-bolder text-primary">{{ $car->brand }} {{ $car->model }}</h3>
                                <p>{{ $car->description }}</p>
                                <div class="mobil-info-list border-top pt-4">
                                    <ul class="list-unstyled">
                                        <li>
                                            <i class="ri-checkbox-circle-line"></i>
                                            <span>P3K</span>
                                        </li>
                                        <li>
                                            <i class="ri-checkbox-circle-line text-secondary"></i>
                                            <span>CHARGER</span>
                                        </li>
                                        <li>
                                            <i class="ri-checkbox-circle-line text-secondary"></i>
                                            <span>AUDIO</span>
                                        </li>
                                        <li>
                                            <i class="ri-checkbox-circle-line"></i>
                                            <span>AC</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card">
                        <!-- Product details-->
                        <div class="card-body card-body-custom pt-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="fw-bolder">{{ $car->brand }} {{ $car->model }}</h5>
                                    <div class="rent-price mb-3">
                                        <span style="font-size: 1rem" class="text-primary">Rp.{{ number_format($car->price, 0, ',', '.') }}</span>
                                    </div>
                                </div>
                                <ul class="list-unstyled list-style-group">
                                <li class="border-bottom p-2 d-flex justify-content-between">
                                            <span>Tahun</span>
                                            <span style="font-weight: 600">{{ $car->year }}</span>
                                        </li>
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
                                    <li class="border-bottom p-2 d-flex justify-content-between">
                                        <span>Transmisi</span>
                                        <span style="font-weight: 600">{{ $car->transmission }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer border-top-0 bg-transparent">
                            <div class="text-center">
                                <form action="{{ route('purchases.store', $car->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn d-flex align-items-center justify-content-center btn-primary w-100 mt-auto" >Beli</button>
                                </form>
                            </div>
                        </div>
                    </div>
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
