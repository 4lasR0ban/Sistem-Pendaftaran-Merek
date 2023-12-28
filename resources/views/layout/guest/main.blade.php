<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemweb-PDKI</title>
    <link rel="stylesheet" href="{{ asset('/dist/assets/css/shared/iconly.css') }}">

    <link rel="stylesheet" href="{{ asset('/dist/assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/dist/assets/css/main/app-dark.css') }}">
    {{-- <link rel="shortcut icon" href="{{ asset('/dist/assets/images/logo/favicon.svg') }}" type="image/x-icon"> --}}
    <link rel="shortcut icon" href="{{ asset('/logo/uns.png') }}" type="image/png">

</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                {{-- <div class="header-top">
                    <div class="container">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/logo/logo.svg" alt="Logo"></a>
                        </div>
                        <div class="header-top-right">
                            <a class="btn btn-primary bg-gradient" href="">
                                <i class="bi bi-box-arrow-in-right me-1"></i>
                                <span>Login</span>
                            </a>
                            <!-- Burger button responsive -->
                            <a href="#" class="burger-btn d-block d-xl-none">
                                <i class="bi bi-justify fs-3"></i>
                            </a>
                        </div>
                    </div>
                </div> --}}
                <nav class="main-navbar bg-info">
                    <div class="container">
                        <ul class="d-flex justify-content-end">
                            <li class="me-auto">
                                <ul>
                                    <li class="menu-item">
                                        <a href="/">
                                            <span class="menu-link">PemwebHKI</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="/home/brands">
                                            <span class="menu-link">Brands</span>
                                        </a>
                                    </li>
                                </ul>
                                
                            </li>
                            
                            <li class="menu-item">
                                @if (auth()->user())
                                    <a class="btn btn-success bg-gradient" href="/login">
                                        <i class="bi bi-box-arrow-in-right me-1"></i>
                                        <span>Dashboard</span>
                                    </a>
                                @else
                                    <a class="btn btn-primary bg-gradient rounded-pill" href="/login">
                                        <i class="bi bi-box-arrow-in-right me-1"></i>
                                        <span>Login</span>
                                    </a>
                                @endif

                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- Burger button responsive -->
                <div class="container">
                    <div class="float-end">
                        <a href="#" class="burger-btn d-block d-xl-none">
                            <i class="bi bi-justify fs-3"></i>
                        </a>
                    </div>

                </div>

            </header>

            <div class="content-wrapper container">

                <div class="page-heading">

                </div>
                <div class="page-content">
                    @yield('container')
                </div>

            </div>

            <div class="container">
                <footer class="py-5">
                  <div class="row">
                    <div class="col-6 col-md-2 mb-3">
                      <h5>Section</h5>
                      <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                      </ul>
                    </div>
            
                    <div class="col-6 col-md-2 mb-3">
                      <h5>Section</h5>
                      <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                      </ul>
                    </div>
            
                    <div class="col-6 col-md-2 mb-3">
                      <h5>Section</h5>
                      <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                      </ul>
                    </div>
            
                    <div class="col-md-5 offset-md-1 mb-3">
                      <form>
                        <h5>Subscribe to our newsletter</h5>
                        <p>Monthly digest of what's new and exciting from us.</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                          <label for="newsletter1" class="visually-hidden">Email address</label>
                          <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                          <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                      </form>
                    </div>
                  </div>
            
                  <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                    <p>© K3520075 | 2023 </p>
                    <ul class="list-unstyled d-flex">
                      <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
                      <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
                      <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
                    </ul>
                  </div>
                </footer>
              </div>
            
        </div>
    </div>
    <script src="{{ asset('/dist/assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/dist/assets/js/app.js') }}"></script>
    <script src="{{ asset('/dist/assets/js/pages/horizontal-layout.js') }}"></script>

    <script src="{{ asset('/dist/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src={{ asset('/dist/assets/js/pages/dashboard.js') }}></script>

</body>

</html>
