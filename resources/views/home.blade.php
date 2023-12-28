@extends('layout.guest.main')
@section('container')
<main class = "px-3 vh-50 d-flex align-items-center">
    <div class="container col-8">
        <div class="card border-0 rounded-4">
            <div class="card-bodyr py-4 px-4">
                <div class="">
                    <div class="col-auto">
                        <div class="d-flex justify-content-center ">
                            <div class="p-3">
                                <img src="{{ asset('logo/UNS logo.png')}}" alt="Logo UNS" width="150" height="150">
                            </div>
                            <div class="p-3">
                                <img src="{{ asset('logo/hki.png')}}" alt="Logo UNS" width="300" height="150">
                            </div>
                        </div>
                        <h3 class="text-center p-3 ls-wide text-black">Sistem Pendaftaran Merek</h3>
                    </div>
                    <div class="col-auto">
                        <form action="/home/search" method="POST">
                            @csrf
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                        <input id="newsletter1" type="text" class="form-control rounded-pill border border-info" placeholder="Masukkan Nama Merek" name="search">
                                        <button class="btn btn-outline-info rounded-pill d-flex items-center" type="submit""><div class="px-1"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg></div><div class="px-1 py-0 fs-5 fw-medium text-dark">Cari</div></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

    {{-- <main class="px-3">
        <div class="d-flex align-items-center">
            <div class="container col-lg-8 text-center">
                <img class="col-4" src="{{ asset('logo/UNS logo.png') }}" alt="" width="100" height="100">
                <img class="col-4" src="{{ asset('logo/hki.png') }}" alt="" width="200" height="100">
                <h1 class="text-primary mb-3">Sistem Pendaftaran Merek</h1>
                <form action="/home/search" method="POST">
                    @csrf
                    <div class="container col-lg-8 ">
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-primary" id="basic-addon1"><i class="bi bi-search mb-2 text-white"></i></span>
                            <input type="text" class="form-control" name="search" placeholder="Masukkan nama merek" aria-describedby="button-addon2" required>
                            <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                        </div>
                    </div>
                </form>
                {{-- <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit
                    the
                    text, and add your own fullscreen background photo to make it your own.</p> --}}
                {{-- <p class="lead">
                    <a href="#" class="btn btn-lg btn-light fw-bold border-white bg-white">Learn more</a>
                </p> 
            </div>
        </div>
    </main>--}}
@endsection
