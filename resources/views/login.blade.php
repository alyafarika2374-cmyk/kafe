<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Cafe Farika</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Source+Sans+Pro:wght@400;600;700&display=swap"
        rel="stylesheet"
    >

    <style>

        body {
            font-family: 'Source Sans Pro', sans-serif;
            color: #3d2618;
            background: #f8f3ee;
        }

        h1, h2, h3, h4, h5 {
            font-family: 'Playfair Display', serif;
        }

        .login-wrapper {
            min-height: 100vh;
        }

        .login-visual {
            position: relative;
            background:
                linear-gradient(
                    180deg,
                    rgba(37, 21, 12, 0.35) 0%,
                    rgba(37, 21, 12, 0.85) 100%
                ),
                url('{{ asset('ast/img/gallery/cafe/suasana-nyaman.jpg') }}') center/cover no-repeat;
            min-height: 100vh;
            color: #ffffff;
            padding: 60px 50px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .login-visual .cafe-logo {
            width: 56px;
            height: 56px;
            object-fit: contain;
            background: #ffffff;
            border-radius: 50%;
            padding: 6px;
        }

        .login-visual .brand-name {
            font-size: 24px;
            font-weight: 700;
        }

        .login-visual .quote {
            font-size: 32px;
            line-height: 1.35;
            max-width: 460px;
        }

        .login-visual .quote-sub {
            color: #e6d6c8;
            font-size: 15px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .login-form-side {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }

        .login-card {
            width: 100%;
            max-width: 420px;
        }

        .login-card .cafe-logo-mobile {
            width: 60px;
            height: 60px;
            object-fit: contain;
        }

        .login-card h2 {
            color: #3d2618;
        }

        .login-card .subtitle {
            color: #8a7565;
            font-size: 15px;
        }

        .section-label {
            color: #9a5b2d;
            letter-spacing: 3px;
            font-weight: 700;
            font-size: 13px;
        }

        .form-control {
            min-height: 50px;
            border-radius: 8px;
            border: 1px solid #e4d6cb;
            background: #fffaf6;
        }

        .form-control:focus {
            border-color: #7b421d;
            box-shadow: 0 0 0 0.2rem rgba(123, 66, 29, 0.15);
            background: #ffffff;
        }

        .input-group-text {
            background: #fffaf6;
            border: 1px solid #e4d6cb;
            border-right: none;
            color: #7b421d;
        }

        .input-group .form-control {
            border-left: none;
        }

        .toggle-password {
            background: #fffaf6;
            border: 1px solid #e4d6cb;
            border-left: none;
            color: #9a5b2d;
        }

        .form-check-input:checked {
            background-color: #7b421d;
            border-color: #7b421d;
        }

        .link-cafe {
            color: #7b421d;
            font-weight: 600;
            text-decoration: none;
        }

        .link-cafe:hover {
            color: #5f3015;
            text-decoration: underline;
        }

        .btn-cafe {
            background: #7b421d;
            border-color: #7b421d;
            color: #ffffff;
            min-height: 50px;
            border-radius: 8px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .btn-cafe:hover {
            background: #5f3015;
            border-color: #5f3015;
            color: #ffffff;
        }

        .divider-text {
            color: #b5a293;
            font-size: 13px;
        }

        .divider-text::before,
        .divider-text::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #e4d6cb;
        }

        @media (max-width: 991.98px) {
            .login-visual {
                min-height: 260px;
                padding: 40px 30px;
            }

            .login-visual .quote {
                font-size: 24px;
            }
        }

    </style>

</head>

<body>

<div class="row g-0 login-wrapper">

    <!-- ============================================ -->
    <!-- SISI VISUAL / BRANDING -->
    <!-- ============================================ -->

    <div class="col-lg-6 d-none d-lg-flex">

        <div class="login-visual w-100">

            <a href="{{ url('/landing') }}" class="d-flex align-items-center text-white text-decoration-none">
                <img
                    src="ast/img/gallery/cafe/logo-farikaa.png"
                    class="cafe-logo"
                    alt="Cafe Farika"
                >
                <span class="brand-name ms-3">Cafe Farika</span>
            </a>

            <div>
                <div class="quote-sub mb-3">Selamat datang kembali</div>
                <h1 class="quote">
                    &ldquo;Secangkir kopi hangat, sesi yang lebih tenang.&rdquo;
                </h1>
            </div>

            <div class="d-flex align-items-center gap-2">
                <i class="bi bi-cup-hot-fill"></i>
                <span>&copy; {{ date('Y') }} Cafe Farika. All rights reserved.</span>
            </div>

        </div>

    </div>

    <!-- ============================================ -->
    <!-- SISI FORM LOGIN -->
    <!-- ============================================ -->

    <div class="col-lg-6 login-form-side">

        <div class="login-card">

            <div class="text-center text-lg-start mb-4 d-lg-none">
                <img
                    src="{{ asset('ast/img/gallery/cafe/logo-cafe.png') }}"
                    class="cafe-logo-mobile mb-2"
                    alt="Cafe Farika"
                >
            </div>

            <div class="section-label mb-2">Masuk Akun</div>
            <h2 class="fw-bold mb-2">Selamat Datang di Cafe Farika</h2>
            <p class="subtitle mb-4">Masuk untuk mengelola pesanan, meja, dan menu favorit Anda.</p>

            @if ($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            
            @if ($errors->any())
                <div class="alert alert-danger">{{ $errors->first() }}</div>
            @endif
            <form method="POST" action="{{ route('login.attempt') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            name="email"
                            placeholder="nama@email.com"
                            value="{{ old('email') }}"
                            required
                            autofocus
                        >
                    </div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label fw-semibold">Kata Sandi</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                        <input
                            type="password"
                            class="form-control"
                            id="password"
                            name="password"
                            placeholder="Masukkan kata sandi"
                            required
                        >
                        <button
                            class="btn toggle-password"
                            type="button"
                            onclick="togglePassword()"
                        >
                            <i class="bi bi-eye" id="toggleIcon"></i>
                        </button>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember" name="remember">
                        <label class="form-check-label" for="remember">
                            Ingat saya
                        </label>
                    </div>
                    <a href="#" class="link-cafe" style="font-size: 14px;">Lupa kata sandi?</a>
                </div>

                <button type="submit" class="btn btn-cafe w-100 mb-4">
                    Masuk
                </button>

                <div class="d-flex align-items-center gap-3 mb-4">
                    <span class="divider-text d-flex align-items-center gap-3 w-100 justify-content-center">
                        atau
                    </span>
                </div>

                <p class="text-center" style="font-size: 15px;">
                    Belum punya akun?
                    <a href="#" class="link-cafe">Daftar sekarang</a>
                </p>

            </form>

        </div>

    </div>

</div>

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<script>
    function togglePassword() {
        const input = document.getElementById('password');
        const icon = document.getElementById('toggleIcon');

        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.remove('bi-eye');
            icon.classList.add('bi-eye-slash');
        } else {
            input.type = 'password';
            icon.classList.remove('bi-eye-slash');
            icon.classList.add('bi-eye');
        }
    }
</script>

</body>

</html>            