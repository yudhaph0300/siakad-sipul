@extends('layouts.main')

@section('content')
    <div class="login">
        <div class="row">
            <div class="col">
                <div class="card shadow-effect m-2 p-4 font-black">
                    <div class="card-body">
                        <p class="text-center font-weight-bold mb-0">Login ke akun anda</p>
                        <h3 class="font-weight-bold">Selamat datang di website <span class="font-success">SD-NU</span></h3>
                        <p>
                            Masukan detail untuk masuk ke akun anda
                        </p>

                        <form>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Masukan alamat email anda">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Masukan alamat password anda">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tahunPelajaran">Tahun Pelajaran</label>
                                <input type="text" class="form-control" id="tahunPelajaran" name="tahunPelajaran"
                                    placeholder="Masukan tahun pelajaran">
                            </div>

                            <button type="submit" class="btn btn-success button-success w-100">Submit</button>
                        </form>
                        <p class="text-small text-center">
                            Belum memiliki akun? Hubungi Admin
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
