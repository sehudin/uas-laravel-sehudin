<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Welcome</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-body {
            padding: 4rem;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        h3 {
            color: #333;
            font-weight: bold;
            font-size: 2rem;
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>
    <section class="vh-100 d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body p-5 text-center">
                            <!-- Tambahkan gambar dengan bentuk bulat -->
                            <div style="width: 150px; height: 150px; overflow: hidden; border-radius: 50%; margin: 0 auto 20px;">
                                <img src="{{ asset('img/sehudindicoding.jpg') }}" alt="Profile Picture" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
                            </div>
                            <h3 style="font-size: 2.5rem; color: #333; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">WELCOME</h3>
                            <a href="/register" class="btn btn-primary btn-lg px-5 mb-3" style="background-color: #61d2a8; border-color: #11e5b0;">Register</a>
                            <a href="/login" class="btn btn-primary btn-lg px-5 mb-3" style="background-color: #61d2a8; border-color: #11e5b0;">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
