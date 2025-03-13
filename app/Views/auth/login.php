<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-RETNA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/assets/img/rs.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-card {
            background-color: rgba(255, 255, 255, 0.95);
            color: #333;
            border-radius: 12px;
            padding: 40px;
            width: auto;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            font-weight: bold;
        }
        .btn-login {
            background-color: #2d6a4f;
            color: white;
            padding: 12px;
            border-radius: 8px;
            font-size: 1.1rem;
        }
        .btn-login:hover {
            background-color: #1b4332;
            transform: scale(1.05);
        }
        .welcome-text {
            font-size: 1.8rem;
            font-weight: bold;
            color: #2d6a4f;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card login-card">
                <div class="card-body">
                    <div class="text-center mb-3">
                        <i class="fas fa-user-circle fa-3x" style="color:#2d6a4f;"></i>
                    </div>
                    <img src="<?= base_url('assets/img/LOGO WALUYO.png') ?>" alt="Logo" 
                         style="max-width: 40px; display: block; margin: auto;">
                    <div class="welcome-text text-center">Selamat Datang di E-RETNA</div>
                    
                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                    <?php endif; ?>
                    
                    <form action="<?= site_url('/auth/login') ?>" method="post" class="mt-4">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-login w-100">Masuk</button>
                    </form>
                    <a href="<?= site_url('manualbook') ?>" class="btn btn-secondary w-100 mt-3">Manual Book</a>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll("input[required]").forEach(function(input) {
            input.oninvalid = function(event) {
                event.target.setCustomValidity("Harap isi bidang ini");
            };
            input.oninput = function(event) {
                event.target.setCustomValidity("");
            };
        });
    });
    </script>

</body>
</html>
