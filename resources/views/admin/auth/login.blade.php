<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - Natural PT</title>

<link rel="stylesheet" href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">

<style>
body {
    background: linear-gradient(135deg, #e8f5e9, #ffffff);
    min-height: 100vh;
    margin: 0;
}

/* overlay pattern */
body::before {
    content: "";
    position: fixed;
    inset: 0;
    background: url("{{ asset('gambar/diagmonds-light.png') }}") repeat;
    opacity: 0.05;
    z-index: 0;
}

.login-wrapper {
    position: relative;
    z-index: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 20px;
}

/* CARD */
.login-card {
    width: 100%;
    max-width: 440px;
    border-radius: 18px;
    overflow: hidden;
    border: none;
    box-shadow: 0 15px 40px rgba(0,0,0,0.1);
    animation: fadeIn 0.6s ease-in-out;
}

@keyframes fadeIn {
    from {opacity: 0; transform: translateY(20px);}
    to {opacity: 1; transform: translateY(0);}
}

/* HEADER */
.login-header {
    background: linear-gradient(135deg, #1f7a3a, #2ea84f);
    color: white;
    text-align: center;
    padding: 25px 15px;
}

.login-header img {
    width: 65px;
    height: 65px;
    margin-bottom: 10px;
}

.login-header h4 {
    margin: 0;
    font-weight: 700;
}

.login-header small {
    opacity: 0.9;
}

/* INPUT */
.form-control:focus {
    border-color: #1f7a3a;
    box-shadow: 0 0 0 0.2rem rgba(31,122,58,0.25);
}

/* BUTTON */
.btn-login {
    background: #1f7a3a;
    color: white;
    font-weight: bold;
    border: none;
    transition: 0.3s;
    position: relative;
}

.btn-login:hover {
    background: #16602c;
    transform: translateY(-2px);
}

/* loading spinner */
.spinner-border-sm {
    display: none;
}

/* footer */
.footer-text {
    font-size: 13px;
    color: #777;
}

.toggle-password {
    position: absolute;
    right: 12px;
    top: 38px;
    font-size: 13px;
    color: #1f7a3a;
    cursor: pointer;
    font-weight: bold;
}

.toggle-password:hover {
    text-decoration: underline;
}
.toggle-btn {
    position: absolute;
    right: 10px;
    top: 32px;
    font-size: 12px;
    padding: 2px 8px;
}
</style>
</head>

<body>

<div class="login-wrapper">

<div class="card login-card">

    <!-- HEADER -->
    <div class="login-header">
        <img src="{{ asset('gambar/logo.png') }}" alt="logo">
        <h4>NATURAL LAND & PROPERTY</h4>
        <small>Sistem Informasi Pengadaan Lahan</small>
    </div>

    <div class="card-body p-4">


        <form method="POST" action="{{ route('login.process') }}" id="loginForm">
            @csrf

            <!-- EMAIL -->
           <div class="mb-3">
                <label>Email</label>

                <input type="email"
                    name="email"
                    value="{{ old('email') }}"
                    class="form-control @error('email') is-invalid @enderror">

                @error('email')
                    <div class="text-danger mt-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- PASSWORD -->
                <div class="mb-3 position-relative">
                    <label>Password</label>

                    <input type="password"
                        name="password"
                        id="password"
                        class="form-control @error('password') is-invalid @enderror">

                    <button type="button" id="toggleBtn" onclick="togglePassword()"
                        class="btn btn-sm btn-outline-success toggle-btn">
                        Show
                    </button>

                    @error('password')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

            <!-- REMEMBER -->
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" name="remember" id="remember">
                <label class="form-check-label">Remember me</label>
            </div>

            <!-- BUTTON -->
            <button type="submit" class="btn btn-login w-100 py-2" id="btnLogin">
                <span class="spinner-border spinner-border-sm me-2" id="spinner"></span>
                Login
            </button>
        </form>

        <div class="text-center mt-3 footer-text">
            <p>Login sebagai User : test@example.com / password</p>
            <p>Login sebagai Admin :admin@gmail.com / admin123456</p>
        </div>
        <div class="text-center mt-3">
    <a href="{{ url('/') }}" class="text-decoration-none">
        ← Kembali ke Website
    </a>
</div>

    </div>
</div>

</div>

<script>
function togglePassword() {
    const pass = document.getElementById("password");
    const btn = document.getElementById("toggleBtn");

    if (pass.type === "password") {
        pass.type = "text";
        btn.innerText = "Hide";
    } else {
        pass.type = "password";
        btn.innerText = "Show";
    }
}

/* loading button */
document.getElementById("loginForm").addEventListener("submit", function () {
    document.getElementById("spinner").style.display = "inline-block";
    document.getElementById("btnLogin").disabled = true;
    document.getElementById("btnLogin").innerText = "Loading...";
});
</script>

</body>
</html>