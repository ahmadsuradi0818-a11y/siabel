<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(config('app.name', 'SIAKAD')); ?> — Daftar Siswa Baru</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        serif: ['Playfair Display', 'Georgia', 'serif'],
                        sans: ['Plus Jakarta Sans', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=playfair-display:400,500,600,700,800,900|plus-jakarta-sans:300,400,500,600,700,800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes floatSlow {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-12px); }
        }
        .fade-in { animation: fadeIn 0.8s ease-out forwards; }
        .fade-in-1 { animation: fadeIn 0.6s ease-out 0.1s forwards; opacity: 0; }
        .fade-in-2 { animation: fadeIn 0.6s ease-out 0.3s forwards; opacity: 0; }
        .fade-in-3 { animation: fadeIn 0.6s ease-out 0.5s forwards; opacity: 0; }
        .float-1 { animation: floatSlow 6s ease-in-out infinite; }
        .input-focus-ring:focus-within {
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.08);
        }
        .btn-primary {
            background: linear-gradient(135deg, #1e3a5f, #2563eb);
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #15294a, #1d4ed8);
            transform: translateY(-1px);
            box-shadow: 0 8px 25px rgba(30, 58, 95, 0.2);
        }
        .form-section-title {
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #94a3b8;
            padding-bottom: 6px;
            margin-bottom: 12px;
            border-bottom: 1px solid #f0f0f5;
        }
    </style>
</head>
<body class="font-sans antialiased min-h-screen bg-[#f0f4f8] py-6">

    <div class="fixed inset-0 pointer-events-none overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 rounded-full bg-[#dbe6f5] opacity-30 blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 rounded-full bg-[#e0eaf5] opacity-30 blur-3xl"></div>
    </div>

    <div class="relative flex items-center justify-center p-4">
        <div class="w-full max-w-2xl bg-white rounded-2xl shadow-2xl shadow-blue-900/5 overflow-hidden fade-in">

            <!-- Header -->
            <div class="bg-gradient-to-br from-[#0f1f3d] via-[#162d50] to-[#1a3a5c] p-8 text-center relative overflow-hidden">
                <div class="absolute inset-0 pointer-events-none" style="background-image: radial-gradient(rgba(255,255,255,0.02) 1px, transparent 1px); background-size: 24px 24px;"></div>
                <div class="relative z-10">
                    <div class="w-14 h-14 mx-auto mb-3 rounded-2xl bg-white/10 backdrop-blur-sm flex items-center justify-center text-white text-lg border border-white/5">
                        <i class="fa-solid fa-user-plus"></i>
                    </div>
                    <h1 class="text-xl font-bold text-white">Daftar Siswa Baru</h1>
                    <p class="text-blue-200/50 text-sm mt-1">Isi data diri Anda untuk mendaftar sebagai siswa</p>
                </div>
            </div>

            <!-- Form -->
            <div class="p-6 sm:p-8">
                <?php if(session('status')): ?>
                <div class="mb-5 px-4 py-3.5 rounded-xl flex items-center gap-3 text-sm bg-emerald-50 border border-emerald-100 text-emerald-600">
                    <i class="fa-solid fa-check-circle text-emerald-400"></i>
                    <span><?php echo e(session('status')); ?></span>
                </div>
                <?php endif; ?>
                <?php if($errors->any()): ?>
                <div class="mb-5 px-4 py-3.5 rounded-xl flex items-start gap-3 text-sm bg-red-50 border border-red-100 text-red-500">
                    <i class="fa-solid fa-exclamation-circle text-red-400 mt-0.5"></i>
                    <div>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div><?php echo e($error); ?></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endif; ?>

                <form method="POST" action="<?php echo e(route('register.student')); ?>" class="space-y-6">
                    <?php echo csrf_field(); ?>

                    <!-- Akun -->
                    <div>
                        <div class="form-section-title"><i class="fas fa-user-circle mr-1.5"></i> Akun Login</div>
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-gray-500 mb-1.5">Nama Lengkap <span class="text-red-400">*</span></label>
                                <div class="input-focus-ring flex items-center gap-3 px-4 py-3 rounded-xl border border-gray-200 bg-gray-50/50 focus-within:border-blue-300 focus-within:bg-white transition-all duration-200">
                                    <i class="fa-solid fa-user text-gray-300 text-sm"></i>
                                    <input type="text" name="name" value="<?php echo e(old('name')); ?>" required class="w-full bg-transparent text-sm text-gray-700 outline-none placeholder:text-gray-300" placeholder="Nama lengkap">
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-gray-500 mb-1.5">Email <span class="text-red-400">*</span></label>
                                <div class="input-focus-ring flex items-center gap-3 px-4 py-3 rounded-xl border border-gray-200 bg-gray-50/50 focus-within:border-blue-300 focus-within:bg-white transition-all duration-200">
                                    <i class="fa-solid fa-envelope text-gray-300 text-sm"></i>
                                    <input type="email" name="email" value="<?php echo e(old('email')); ?>" required class="w-full bg-transparent text-sm text-gray-700 outline-none placeholder:text-gray-300" placeholder="nama@email.com">
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-gray-500 mb-1.5">Password <span class="text-red-400">*</span></label>
                                <div class="input-focus-ring flex items-center gap-3 px-4 py-3 rounded-xl border border-gray-200 bg-gray-50/50 focus-within:border-blue-300 focus-within:bg-white transition-all duration-200">
                                    <i class="fa-solid fa-lock text-gray-300 text-sm"></i>
                                    <input type="password" name="password" required class="w-full bg-transparent text-sm text-gray-700 outline-none placeholder:text-gray-300" placeholder="Min. 8 karakter">
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-gray-500 mb-1.5">Konfirmasi Password <span class="text-red-400">*</span></label>
                                <div class="input-focus-ring flex items-center gap-3 px-4 py-3 rounded-xl border border-gray-200 bg-gray-50/50 focus-within:border-blue-300 focus-within:bg-white transition-all duration-200">
                                    <i class="fa-solid fa-lock text-gray-300 text-sm"></i>
                                    <input type="password" name="password_confirmation" required class="w-full bg-transparent text-sm text-gray-700 outline-none placeholder:text-gray-300" placeholder="Ulangi password">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Data Siswa -->
                    <div>
                        <div class="form-section-title"><i class="fas fa-graduation-cap mr-1.5"></i> Data Siswa</div>
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-gray-500 mb-1.5">NIS <span class="text-red-400">*</span></label>
                                <div class="input-focus-ring flex items-center gap-3 px-4 py-3 rounded-xl border border-gray-200 bg-gray-50/50 focus-within:border-blue-300 focus-within:bg-white transition-all duration-200">
                                    <i class="fa-solid fa-id-card text-gray-300 text-sm"></i>
                                    <input type="text" name="nis" value="<?php echo e(old('nis')); ?>" required class="w-full bg-transparent text-sm text-gray-700 outline-none placeholder:text-gray-300" placeholder="Nomor Induk Siswa">
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-gray-500 mb-1.5">NISN</label>
                                <div class="input-focus-ring flex items-center gap-3 px-4 py-3 rounded-xl border border-gray-200 bg-gray-50/50 focus-within:border-blue-300 focus-within:bg-white transition-all duration-200">
                                    <i class="fa-solid fa-id-card text-gray-300 text-sm"></i>
                                    <input type="text" name="nisn" value="<?php echo e(old('nisn')); ?>" class="w-full bg-transparent text-sm text-gray-700 outline-none placeholder:text-gray-300" placeholder="NISN (opsional)">
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-gray-500 mb-1.5">Tempat Lahir</label>
                                <div class="input-focus-ring flex items-center gap-3 px-4 py-3 rounded-xl border border-gray-200 bg-gray-50/50 focus-within:border-blue-300 focus-within:bg-white transition-all duration-200">
                                    <i class="fa-solid fa-map-pin text-gray-300 text-sm"></i>
                                    <input type="text" name="place_of_birth" value="<?php echo e(old('place_of_birth')); ?>" class="w-full bg-transparent text-sm text-gray-700 outline-none placeholder:text-gray-300" placeholder="Tempat lahir">
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-gray-500 mb-1.5">Tanggal Lahir</label>
                                <div class="input-focus-ring flex items-center gap-3 px-4 py-3 rounded-xl border border-gray-200 bg-gray-50/50 focus-within:border-blue-300 focus-within:bg-white transition-all duration-200">
                                    <i class="fa-solid fa-calendar text-gray-300 text-sm"></i>
                                    <input type="date" name="date_of_birth" value="<?php echo e(old('date_of_birth')); ?>" class="w-full bg-transparent text-sm text-gray-700 outline-none">
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-gray-500 mb-1.5">Jenis Kelamin</label>
                                <select name="gender" class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50/50 text-sm text-gray-700 outline-none focus:border-blue-300 focus:bg-white transition-all">
                                    <option value="">-- Pilih --</option>
                                    <option value="L" <?php echo e(old('gender') == 'L' ? 'selected' : ''); ?>>Laki-laki</option>
                                    <option value="P" <?php echo e(old('gender') == 'P' ? 'selected' : ''); ?>>Perempuan</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-gray-500 mb-1.5">Agama</label>
                                <select name="religion" class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50/50 text-sm text-gray-700 outline-none focus:border-blue-300 focus:bg-white transition-all">
                                    <option value="">-- Pilih --</option>
                                    <?php $__currentLoopData = ['Islam', 'Kristen', 'Katholik', 'Hindu', 'Budha', 'Konghucu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($r); ?>" <?php echo e(old('religion') == $r ? 'selected' : ''); ?>><?php echo e($r); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="sm:col-span-2">
                                <label class="block text-xs font-semibold text-gray-500 mb-1.5">Alamat</label>
                                <div class="input-focus-ring flex items-start gap-3 px-4 py-3 rounded-xl border border-gray-200 bg-gray-50/50 focus-within:border-blue-300 focus-within:bg-white transition-all duration-200">
                                    <i class="fa-solid fa-home text-gray-300 text-sm mt-0.5"></i>
                                    <textarea name="address" rows="2" class="w-full bg-transparent text-sm text-gray-700 outline-none placeholder:text-gray-300 resize-none" placeholder="Alamat lengkap"><?php echo e(old('address')); ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Data Orang Tua -->
                    <div>
                        <div class="form-section-title"><i class="fas fa-users mr-1.5"></i> Data Orang Tua / Wali</div>
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-gray-500 mb-1.5">Nama Orang Tua / Wali</label>
                                <div class="input-focus-ring flex items-center gap-3 px-4 py-3 rounded-xl border border-gray-200 bg-gray-50/50 focus-within:border-blue-300 focus-within:bg-white transition-all duration-200">
                                    <i class="fa-solid fa-user text-gray-300 text-sm"></i>
                                    <input type="text" name="parent_name" value="<?php echo e(old('parent_name')); ?>" class="w-full bg-transparent text-sm text-gray-700 outline-none placeholder:text-gray-300" placeholder="Nama orang tua / wali">
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-gray-500 mb-1.5">No. Telepon / WA</label>
                                <div class="input-focus-ring flex items-center gap-3 px-4 py-3 rounded-xl border border-gray-200 bg-gray-50/50 focus-within:border-blue-300 focus-within:bg-white transition-all duration-200">
                                    <i class="fa-solid fa-phone text-gray-300 text-sm"></i>
                                    <input type="text" name="parent_phone" value="<?php echo e(old('parent_phone')); ?>" class="w-full bg-transparent text-sm text-gray-700 outline-none placeholder:text-gray-300" placeholder="Nomor telepon">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="flex items-center justify-between pt-2">
                        <a href="<?php echo e(route('login')); ?>" class="text-sm font-medium text-blue-500 hover:text-blue-700 transition-colors">
                            <i class="fa-solid fa-arrow-left mr-1"></i> Kembali ke Login
                        </a>
                        <button type="submit" class="btn-primary px-6 py-3 rounded-xl text-sm font-bold text-white shadow-lg shadow-blue-200 flex items-center gap-2">
                            <i class="fa-solid fa-user-plus"></i>
                            <span>Daftar</span>
                        </button>
                    </div>
                </form>
            </div>

            <div class="px-6 sm:px-8 pb-6 text-center">
                <p class="text-[0.5rem] tracking-[1.5px] text-gray-300">
                    &copy; <?php echo e(date('Y')); ?> <?php echo e(config('app.name', 'SIAKAD')); ?>

                </p>
            </div>
        </div>
    </div>

</body>
</html>
<?php /**PATH C:\laragon\www\siakad\resources\views/auth/register-student.blade.php ENDPATH**/ ?>