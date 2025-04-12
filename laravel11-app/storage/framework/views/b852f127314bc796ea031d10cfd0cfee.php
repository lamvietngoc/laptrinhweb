<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 10.48.0 - CRUD User Example</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet">

    
    <script type="text/javascript" src="<?php echo e(asset('js/scripts.js')); ?>"></script>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #007bff;
            color: white;
        }

        .navbar a.nav-link {
            color: white;
        }

        .navbar a.nav-link:hover {
            color: #e3f2fd;
        }

        main {
            flex: 1;
            padding: 20px 0;
        }

        footer {
            background-color: #343a40;
            color: white;
            padding: 15px 0;
            text-align: center;
        }

        footer a {
            color: #17a2b8;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .card {
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .container {
            max-width: 1140px;
        }
    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg shadow-sm mb-4 ">
    <div class="container">
        <a class="navbar-brand" href="#">Laravel CRUD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <?php if(auth()->guard()->guest()): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('user.createUser')); ?>">Create User</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('signout')); ?>">Logout</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>


<main class="container mb-4">
    <?php echo $__env->yieldContent('content'); ?>
</main>


<footer class="mt-auto">
    <div class="container">
        <p class="mb-1">©  Laravel CRUD Example</p>
        <p>Developed with using <a href="https://laravel.com" target="_blank">Laravel</a> & <a href="https://getbootstrap.com" target="_blank">Bootstrap 5</a></p>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\Litterature Forest\.ssh\laptrinhweb\laravel11-app\resources\views/dashboard.blade.php ENDPATH**/ ?>