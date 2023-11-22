@extends('layouts.main')

@section('content')
    @include('components.navbar')
    <div>
        <div class="image-with-text">
            <div class="background-overlay"></div>
            <img src="https://images.unsplash.com/photo-1560785496-3c9d27877182?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="" class="background-image">
            <div class="text-over-image">
                <form>
                    <h2 class="font-weight-bold text-shadow-effect">Berita SD-NU Kepanjen</h2>
                    <p class="text-small text-shadow-effect">Telusuri Berita Seru seputar SD-NU Kepanjen</p>

                    <div class="search-container mx-auto w-100 shadow-effect">
                        <input type="text" class="form-control rounded-pill search-input ms-2" placeholder="Search..." />

                        <button type="submit" class="btn btn-success font-success rounded-pill search-button">
                            Search
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container berita">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="card shadow-effect mt-3">
                        <img class="card-img-top"
                            src="https://images.unsplash.com/photo-1607211851821-8be3cd6146f0?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title">Juara 1 Bulutangkis</h6>
                            <p class="card-text text-small">Some quick example text to build on the card title and make up
                                the bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-success button-success w-100">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card shadow-effect mt-3">
                        <img class="card-img-top"
                            src="https://images.unsplash.com/photo-1607211851821-8be3cd6146f0?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title">Juara 1 Bulutangkis</h6>
                            <p class="card-text text-small">Some quick example text to build on the card title and make up
                                the bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-success button-success w-100">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card shadow-effect mt-3">
                        <img class="card-img-top"
                            src="https://images.unsplash.com/photo-1607211851821-8be3cd6146f0?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title">Juara 1 Bulutangkis</h6>
                            <p class="card-text text-small">Some quick example text to build on the card title and make up
                                the bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-success button-success w-100">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card shadow-effect mt-3">
                        <img class="card-img-top"
                            src="https://images.unsplash.com/photo-1607211851821-8be3cd6146f0?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title">Juara 1 Bulutangkis</h6>
                            <p class="card-text text-small">Some quick example text to build on the card title and make up
                                the bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-success button-success w-100">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
@endsection
