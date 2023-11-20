@extends('layouts.main')

@section('content')
    <div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1504438190342-5951e134ffee?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="d-block w-100" alt="First slide" style="max-height: 500px; object-fit: cover">
                    <div class="carousel-caption">
                        <h4 class="font-weight-bold text-shadow-effect">SD NU Kepanjen</h4>
                        <p class="text-shadow-effect">"Menumbuhkan kecerdasan, mendukung kreativitas, dan mewujudkan masa
                            depan
                            yang
                            cerah. Bergabunglah
                            dengan kami untuk petualangan belajar yang menyenangkan!"</p>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="https://images.unsplash.com/photo-1508491502856-64602b537fbf?q=80&w=1472&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="d-block w-100" alt="First slide" style="max-height: 500px; object-fit: cover">
                    <div class="carousel-caption">
                        <h4 class="font-weight-bold text-shadow-effect">SD NU Kepanjen</h4>
                        <p class="text-shadow-effect">"Menyongsong masa depan cerah dengan kecerdasan dan kebaikan. Selamat
                            datang di [Nama Sekolah],
                            tempat di mana setiap langkah adalah petualangan belajar!"</p>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>

        </div>

        <div class="container news">
            <h3 class="font-weight-bold font-black">Berita terbaru</h3>
            <hr class="border-grey" />
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-effect mt-3">
                        <img class="card-img-top"
                            src="https://images.unsplash.com/photo-1607211851821-8be3cd6146f0?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Juara 1 Bulutangkis</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-success button-success w-100">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-effect mt-3">
                        <img class="card-img-top"
                            src="https://images.unsplash.com/photo-1607211851821-8be3cd6146f0?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Juara 1 Bulutangkis</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-success button-success w-100">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-effect mt-3">
                        <img class="card-img-top"
                            src="https://images.unsplash.com/photo-1607211851821-8be3cd6146f0?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Juara 1 Bulutangkis</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-success button-success w-100">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container why">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <img src="https://images.unsplash.com/photo-1574246604907-db69e30ddb97?q=80&w=1573&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="image-islamic" class="img-fluid" style="width: 100%; max-height: 400px; object-fit: cover">
                </div>
                <div class="col-md-6 col-sm-12">
                    <h3 class="font-weight-bold font-black">Kenapa memilih kami?</h3>
                    <hr class="border-grey" />

                    <div>
                        <p><i class="bi bi-check"></i> Pendidikan Islami yang Berkualitas</p>
                        <p><i class="bi bi-check"></i> Program Unggulan yang Beragam</p>
                        <p><i class="bi bi-check"></i> Prestasi Hebat dan Beragam</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('footer')
@endsection
