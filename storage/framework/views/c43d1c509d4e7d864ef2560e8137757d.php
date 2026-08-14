<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name', 'SIABEL')); ?></title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
</head>
<body class="bg-body-tertiary">
    <div class="d-flex align-items-center justify-content-center min-vh-100 py-5 px-3">
        <div class="text-center mb-4 w-100" style="max-width: 420px;">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <i class="bi bi-mortarboard-fill text-primary" style="font-size: 3rem;"></i>
                        <h1 class="h4 fw-bold text-dark mt-2"><?php echo e(config('app.name', 'SIABEL')); ?></h1>
                        <p class="text-muted small mt-1" style="font-size: 0.65rem; letter-spacing: 1.5px; text-transform: uppercase;">Sistem Informasi Akademik Belajar</p>
                    </div>
                    <?php echo e($slot); ?>

                </div>
            </div>
            <p class="text-muted small mt-4">&copy; <?php echo e(date('Y')); ?> SIABEL</p>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\siakad\resources\views/layouts/guest.blade.php ENDPATH**/ ?>