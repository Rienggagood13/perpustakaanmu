<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Sistem Peminjaman Buku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #2b6cb0, #805ad5, #ec4899);
            height: 100vh;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .login-box {
            background-color: rgba(255, 255, 255, 0.15);
            padding: 40px;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            width: 100%;
            max-width: 400px;
            color: white;
            box-shadow: 0 8px 24px rgba(0,0,0,0.3);
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-control {
            background-color: rgba(255,255,255,0.3);
            border: none;
            color: white;
        }

        .form-control::placeholder {
            color: rgba(255,255,255,0.7);
        }

        .form-control:focus {
            background-color: rgba(255,255,255,0.4);
            color: white;
        }

        .btn-login {
            width: 100%;
            background-color: rgba(255,255,255,0.3);
            color: white;
            border: none;
            border-radius: 25px;
            padding: 10px;
            font-weight: bold;
        }

        .btn-login:hover {
            background-color: rgba(255,255,255,0.5);
        }

        .form-check-label,
        .form-check-input {
            color: white;
        }

        .forgot {
            text-align: right;
        }

        .forgot a {
            color: white;
            text-decoration: underline;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>

        @if (session('status'))
            <div class="alert alert-danger">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email" required autofocus />
                @error('email') <small class="text-warning">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" required />
                @error('password') <small class="text-warning">{{ $message }}</small> @enderror
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                    <input type="checkbox" name="remember" id="remember" class="form-check-input">
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>
                @if (Route::has('password.request'))
                    <div class="forgot">
                        <a href="{{ route('password.request') }}">Forgot Me?</a>
                    </div>
                @endif
            </div>

            <button type="submit" class="btn btn-login">Login</button>
        </form>
    </div>
</body>
</html>
