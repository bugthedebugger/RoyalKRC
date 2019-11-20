<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="dist/fonts/css/all.min.css">
    <link rel="stylesheet" href="dist/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <section class="login">
        <div class="container">
            <div class="row form-group">
                <div class="col-md-12">
                    <div class="logo-container">
                        <img src="img/logo.svg" class="logo" alt="royal_rfc_logo">
                    </div>
                </div>
                <div class="card col-md-6">
                    <h3> Dashboard Login</h3>
                    <form id="login-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="username">
                            <input id="email" type="text" name="email" class="username" placeholder="Email" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="password">
                            <input id="password" name="password" type="password" class="password" placeholder="Password" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="primary-button">
                            <a onclick="document.getElementById('login-form').submit()" class="primary-button">Sign In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </section>
    <section class="footer footer-login ">
            <div class="footer__copyright ">
                    <div class="container ">
                        <div class="row ">
                            <div class="info col-md-12 ">
                                <p>&copy; 2019 Royal RFC</p>
                            </div>
                        </div>
                    </div>
            </div>
    </section>
    <script src="dist/js/main.js"></script>
</body>
</html>