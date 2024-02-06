<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Login</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 500px;
        }
        h2 {
            color: #343a40;
            font-weight: bold;
            margin-bottom: 2rem;
        }
        label {
            color: #495057;
            font-weight: bold;
        }
        .form-control {
            border-radius: 25px;
        }
        .btn-primary {
            border-radius: 25px;
            margin-top: 1rem;
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <section>
        <div class="px-4 py-5 px-md-5 text-center text-lg-start">
            <div class="container">
                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                @if (session()->has('error'))
                    <h5 class="text-danger">{{ session('error') }}</h5>
                @endif
                @if (session()->has('success'))
                    <h5 class="text-success">{{ session('success') }}</h5>
                @endif
                <form method="post">
                    @csrf
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">Email address</label>
                        <input type="email" name="email" id="email" class="form-control" />
                    </div>
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" />
                    </div>
                    <button class="btn btn-primary btn-lg px-5 mb-3" style="background-color: #61d2a8; border-color: #11e5b0;"type="submit">Login</button>
                    <a href="/" class="btn btn-primary btn-lg px-5 mb-3" style="background-color: #61d2a8; border-color: #11e5b0;">Kembali</a>

                </form>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
