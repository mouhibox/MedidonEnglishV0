<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediDon - Paramedical Equipment Donation Platform</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Red+Hat+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">
                <i class="bi bi-heart-pulse me-2"></i>MediDon 💖
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/#how-it-works">How It Works ❓</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/#needs">Need Equipment 🏥</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('donations.index') }}"><i class="bi bi-megaphone me-2"></i>My Donations 📢</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            @if (Auth::user()->type)
                            <i class="bi bi-building me-2"></i>
                            @else
                            <i class="bi bi-person me-2"></i>
                            @endif
                            {{ Auth::user()->name }} 👤
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('account.show') }}"><i
                                        class="bi bi-person me-2"></i>My Account 🧑‍💻</a></li>
                            <li><a class="dropdown-item" href="{{ route('password.change') }}"><i
                                        class="bi bi-key me-2"></i>Password 🔑</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST" class="dropdown-item">
                                    @csrf
                                    <button class="btn btn-link nav-link" type="submit"><i
                                            class="bi bi-box-arrow-right me-2"></i> Logout 🚪
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link ms-2" href="{{ route('login') }}">Login 🔑</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary rounded-pill ms-2" href="{{ route('register') }}"><i
                                class="bi bi-plus-circle"></i> Post a Donation 💝</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- CTA Section -->
    <section class="bg-light">
        <div class="container text-center py-5">
            <h2 class="fw-bold mb-4">Do you have equipment to donate? 🩺</h2>
            <p class="lead mb-4">Hundreds of establishments may be waiting for what you no longer use 🏥</p>
            <a href="#" class="btn btn-primary btn-lg px-4 me-3">
                <i class="bi bi-plus-circle"></i> Post a Donation 💖
            </a>
            <a href="#" class="btn btn-outline-dark btn-lg px-4">
                <i class="bi bi-question-circle"></i> How to Make a Donation? ❓
            </a>
        </div>
        <svg class="" aria-hidden="true" viewBox="0 0 1920 164" preserveAspectRatio="none">
            <polygon class="c2" points="1920 206 0 206 0 38 382 164 1147 99 1573 164 1920 46 1920 206"></polygon>
        </svg>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold mb-3">
                        <i class="bi bi-heart-pulse me-2"></i>MediDon 💖
                    </h5>
                    <p>Solidarity platform dedicated to the donation of paramedical equipment between healthcare professionals 🏥</p>
                    <div class="mt-3">
                        <a href="#" class="text-white me-3"><i class="bi bi-facebook"
                                style="font-size: 1.5rem;"></i></a>
                        <a href="#" class="text-white me-3"><i class="bi bi-twitter" style="font-size: 1.5rem;"></i></a>
                        <a href="#" class="text-white me-3"><i class="bi bi-linkedin"
                                style="font-size: 1.5rem;"></i></a>
                    </div>
                </div>
                <div class="col-md-2 mb-4">
                    <h5 class="fw-bold mb-3">Navigation</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Home 🏠</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Donations 🛍️</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Make a Donation 💝</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Need Equipment 🏥</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5 class="fw-bold mb-3">Information ℹ️</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Terms of Use 📜</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Privacy Policy 🔒</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">FAQ ❓</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Contact Us 📧</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5 class="fw-bold mb-3">Contact 📞</h5>
                    <p>
                        <i class="bi bi-envelope me-2"></i> mouhib.teieb@gmail.com<br>
                        <i class="bi bi-telephone me-2"></i>+216 56 444 766<br>
                        <i class="bi bi-geo-alt me-2"></i> Tunisia, Tataouine, 3200 🇹🇳
                    </p>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p class="mb-0">&copy; 2025 MediDon - Paramedical Equipment Donation Platform. All rights reserved. 🛡️</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>