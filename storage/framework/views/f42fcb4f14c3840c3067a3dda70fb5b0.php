<?php $__env->startSection('title', 'Data Guru'); ?>

<?php $__env->startSection('content'); ?>
<div class="row mb-4">
    <div class="col-12 d-flex align-items-stretch">
        <div class="card card-primary card-outline w-100">
            <div class="card-header d-flex align-items-center justify-content-between" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);">
                <h3 class="card-title text-white m-0">
                    <i class="fas fa-chalkboard-teacher me-2"></i> Data Guru
                </h3>
                <div>
                    <button type="button" class="btn btn-light btn-sm shadow-sm me-1" data-bs-toggle="modal" data-bs-target="#importModal">
                        <i class="fas fa-upload me-1"></i> Import
                    </button>
                    <button type="button" class="btn btn-light btn-sm shadow-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                        <i class="fas fa-plus me-1"></i> Tambah Guru
                    </button>
                </div>
            </div>
            <div class="card-body">
                <?php if(session('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle me-1"></i> <?php echo e(session('success')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                <?php endif; ?>
                <?php if(session('error')): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-circle me-1"></i> <?php echo e(session('error')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                <?php endif; ?>
                <?php if($errors->any()): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-circle me-1"></i> 
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div><?php echo e($error); ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                <?php endif; ?>
                <div class="row mb-3 align-items-center">
                    <div class="col-md-6">
                        <div class="input-group input-group-sm" style="max-width: 300px;">
                            <span class="input-group-text bg-white border-end-0">
                                <i class="fas fa-search text-muted"></i>
                            </span>
                            <input type="text" id="searchGuru" class="form-control border-start-0 ps-0" placeholder="Cari guru..." onkeyup="filterTable()">
                        </div>
                    </div>
                    <div class="col-md-6 text-md-end mt-2 mt-md-0">
                        <span class="text-muted small">
                            <i class="fas fa-layer-group me-1"></i> Total: <strong><?php echo e($teachers->total() ?? $teachers->count()); ?></strong> guru
                        </span>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0" id="guruTable">
                        <thead class="table-light">
                            <tr>
                                <th class="text-center" style="width: 60px;">No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>NIP</th>
                                <th class="text-center">Role</th>
                                <th class="text-center" style="width: 120px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr class="align-middle">
                                <td class="text-center text-muted"><?php echo e($loop->iteration); ?></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center text-white fw-bold" style="width: 42px; height: 42px; font-size: 15px; background: linear-gradient(135deg, #43e97b, #38f9d7);">
                                                <?php echo e(substr($teacher->user->name, 0, 1)); ?>

                                            </div>
                                        </div>
                                        <div>
                                            <span class="fw-semibold"><?php echo e($teacher->user->name); ?></span>
                                            <div class="text-muted small">NIP: <?php echo e($teacher->nip); ?></div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-muted">
                                        <i class="fas fa-envelope me-1 text-muted small"></i><?php echo e($teacher->user->email); ?>

                                    </span>
                                </td>
                                <td>
                                    <span class="font-monospace text-muted small"><?php echo e($teacher->nip); ?></span>
                                </td>
                                <td class="text-center">
                                    <?php if($teacher->user->role == 'admin'): ?>
                                        <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill px-3 py-2 fw-normal">
                                            <i class="fas fa-shield-alt me-1"></i> Admin
                                        </span>
                                    <?php else: ?>
                                        <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-2 fw-normal">
                                            <i class="fas fa-chalkboard-teacher me-1"></i> Guru
                                        </span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-1">
                                        <button type="button"
                                            class="btn btn-sm btn-outline-warning rounded-circle btn-edit"
                                            style="width: 34px; height: 34px;"
                                            title="Edit Guru"
                                            data-bs-toggle="modal" data-bs-target="#editModal"
                                            data-url="<?php echo e(route('admin.teachers.update', $teacher)); ?>"
                                            data-name="<?php echo e($teacher->user->name); ?>"
                                            data-email="<?php echo e($teacher->user->email); ?>"
                                            data-nip="<?php echo e($teacher->nip); ?>"
                                            data-role="<?php echo e($teacher->user->role); ?>"
                                            data-place-of-birth="<?php echo e($teacher->place_of_birth); ?>"
                                            data-date-of-birth="<?php echo e($teacher->date_of_birth ? $teacher->date_of_birth->format('Y-m-d') : ''); ?>"
                                            data-address="<?php echo e($teacher->address); ?>"
                                            data-phone="<?php echo e($teacher->phone); ?>"
                                            data-gender="<?php echo e($teacher->gender); ?>"
                                            data-religion="<?php echo e($teacher->religion); ?>">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-sm btn-outline-danger rounded-circle btn-delete"
                                            style="width: 34px; height: 34px;"
                                            title="Hapus Guru"
                                            data-bs-toggle="modal" data-bs-target="#deleteModal"
                                            data-url="<?php echo e(route('admin.teachers.destroy', $teacher)); ?>"
                                            data-name="<?php echo e($teacher->user->name); ?>">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="6">
                                    <div class="text-center py-5">
                                        <div class="mb-3" style="font-size: 4rem; opacity: 0.3;">
                                            <i class="fas fa-chalkboard-teacher"></i>
                                        </div>
                                        <h5 class="text-muted mb-1">Belum Ada Data Guru</h5>
                                        <p class="text-muted small mb-3">Mulai dengan menambahkan guru baru.</p>
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                                            <i class="fas fa-plus me-1"></i> Tambah Guru
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php if(method_exists($teachers, 'links') && $teachers->hasPages()): ?>
            <div class="card-footer border-top-0 bg-transparent">
                <div class="d-flex justify-content-center">
                    <?php echo e($teachers->links()); ?>

                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Modal Import -->
<div class="modal fade" id="importModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <form action="<?php echo e(route('admin.teachers.import')); ?>" method="POST" enctype="multipart/form-data" class="modal-content shadow">
            <?php echo csrf_field(); ?>
            <div class="modal-header" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);">
                <h5 class="modal-title text-white"><i class="fas fa-upload me-2"></i>Import Guru</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-4">
                    <div style="font-size: 3rem; opacity: 0.4;">
                        <i class="fas fa-file-excel text-success"></i>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        <i class="fas fa-file me-1"></i> File (Excel .xlsx/.xls atau Word .docx)
                    </label>
                    <input type="file" name="file" class="form-control" accept=".xlsx,.xls,.docx" required>
                </div>
                <div class="alert alert-info py-2 small mb-0">
                    <i class="fas fa-info-circle me-1"></i>
                    <strong>Format file:</strong> Kolom: Nama, Email, Password, NIP, Role (admin/guru).
                    Baris pertama = header (diabaikan).
                    <br>
                    <a href="<?php echo e(route('admin.teachers.download-template')); ?>" class="text-primary fw-semibold">
                        <i class="fas fa-download me-1"></i> Download template
                    </a>
                </div>
            </div>
            <div class="modal-footer bg-light">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    <i class="fas fa-times me-1"></i> Batal
                </button>
                <button type="submit" class="btn btn-success shadow-sm">
                    <i class="fas fa-upload me-1"></i> Import
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Tambah Guru -->
<div class="modal fade" id="createModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form method="POST" action="<?php echo e(route('admin.teachers.store')); ?>" class="modal-content shadow">
            <?php echo csrf_field(); ?>
            <div class="modal-header" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);">
                <h5 class="modal-title text-white"><i class="fas fa-user-plus me-2"></i>Tambah Guru</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-semibold"><i class="fas fa-user text-primary me-1"></i> Nama Lengkap</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white"><i class="fas fa-user text-muted"></i></span>
                                <input type="text" name="name" class="form-control" placeholder="Masukkan nama lengkap" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-semibold"><i class="fas fa-envelope text-warning me-1"></i> Email</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white"><i class="fas fa-envelope text-muted"></i></span>
                                <input type="email" name="email" class="form-control" placeholder="contoh@email.com" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-semibold"><i class="fas fa-lock text-danger me-1"></i> Password</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white"><i class="fas fa-key text-muted"></i></span>
                                <input type="password" name="password" id="crPassword" class="form-control" placeholder="Minimal 8 karakter" required minlength="8">
                                <button type="button" class="input-group-text bg-white" onclick="togglePass()" tabindex="-1">
                                    <i class="fas fa-eye text-muted" id="crEye"></i>
                                </button>
                            </div>
                            <div class="form-text small text-muted"><i class="fas fa-info-circle me-1"></i> Minimal <strong>8 karakter</strong></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-semibold"><i class="fas fa-id-card text-info me-1"></i> NIP</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white"><i class="fas fa-barcode text-muted"></i></span>
                                <input type="text" name="nip" class="form-control" placeholder="Nomor Induk Pegawai" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-semibold"><i class="fas fa-venus-mars me-1"></i> Jenis Kelamin</label>
                            <select name="gender" class="form-select">
                                <option value="">— Pilih —</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-semibold"><i class="fas fa-map-pin text-danger me-1"></i> Tempat Lahir</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white"><i class="fas fa-city text-muted"></i></span>
                                <input type="text" name="place_of_birth" class="form-control" placeholder="Kota lahir">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-semibold"><i class="fas fa-calendar text-info me-1"></i> Tanggal Lahir</label>
                            <input type="date" name="date_of_birth" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-semibold"><i class="fas fa-place-of-worship me-1"></i> Agama</label>
                            <select name="religion" class="form-select">
                                <option value="">— Pilih —</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold"><i class="fas fa-home text-success me-1"></i> Alamat</label>
                    <textarea name="address" class="form-control" rows="2" placeholder="Alamat lengkap"></textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-semibold"><i class="fas fa-phone text-secondary me-1"></i> No. Telepon</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white"><i class="fas fa-phone text-muted"></i></span>
                                <input type="text" name="phone" class="form-control" placeholder="Contoh: 081234567890">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-2">
                            <label class="form-label fw-semibold"><i class="fas fa-user-tag text-success me-1"></i> Role</label>
                            <select name="role" class="form-select">
                                <option value="guru">Guru</option>
                                <option value="admin">Admin</option>
                            </select>
                            <div class="form-text small text-muted"><i class="fas fa-info-circle me-1"></i> Guru untuk pengajar, Admin untuk pengelola sistem</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-light">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    <i class="fas fa-times me-1"></i> Batal
                </button>
                <button type="submit" class="btn btn-primary shadow-sm">
                    <i class="fas fa-save me-1"></i> Simpan
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Edit Guru -->
<div class="modal fade" id="editModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form method="POST" class="modal-content shadow" id="editForm">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="modal-header" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                <h5 class="modal-title text-white"><i class="fas fa-edit me-2"></i>Edit Guru</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-semibold"><i class="fas fa-user text-primary me-1"></i> Nama Lengkap</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white"><i class="fas fa-user text-muted"></i></span>
                                <input type="text" name="name" id="editName" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-semibold"><i class="fas fa-envelope text-warning me-1"></i> Email</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white"><i class="fas fa-envelope text-muted"></i></span>
                                <input type="email" name="email" id="editEmail" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-semibold"><i class="fas fa-id-card text-info me-1"></i> NIP</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white"><i class="fas fa-barcode text-muted"></i></span>
                                <input type="text" name="nip" id="editNip" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-semibold"><i class="fas fa-venus-mars me-1"></i> Jenis Kelamin</label>
                            <select name="gender" id="editGender" class="form-select">
                                <option value="">— Pilih —</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label fw-semibold"><i class="fas fa-map-pin text-danger me-1"></i> Tempat Lahir</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white"><i class="fas fa-city text-muted"></i></span>
                                <input type="text" name="place_of_birth" id="editPlaceBirth" class="form-control" placeholder="Kota lahir">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label fw-semibold"><i class="fas fa-calendar text-info me-1"></i> Tanggal Lahir</label>
                            <input type="date" name="date_of_birth" id="editDateBirth" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label fw-semibold"><i class="fas fa-place-of-worship me-1"></i> Agama</label>
                            <select name="religion" id="editReligion" class="form-select">
                                <option value="">— Pilih —</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold"><i class="fas fa-home text-success me-1"></i> Alamat</label>
                    <textarea name="address" id="editAddress" class="form-control" rows="2" placeholder="Alamat lengkap"></textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-semibold"><i class="fas fa-phone text-secondary me-1"></i> No. Telepon</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white"><i class="fas fa-phone text-muted"></i></span>
                                <input type="text" name="phone" id="editPhone" class="form-control" placeholder="Contoh: 081234567890">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-semibold"><i class="fas fa-user-tag text-success me-1"></i> Role</label>
                            <select name="role" id="editRole" class="form-select">
                                <option value="guru">Guru</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-0">
                    <label class="form-label fw-semibold"><i class="fas fa-lock text-danger me-1"></i> Password <span class="text-muted fw-normal">(kosongkan jika tidak diubah)</span></label>
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="fas fa-key text-muted"></i></span>
                        <input type="password" name="password" id="editPassword" class="form-control" placeholder="Minimal 8 karakter">
                        <button type="button" class="input-group-text bg-white" onclick="toggleEditPass()" tabindex="-1">
                            <i class="fas fa-eye text-muted" id="editEye"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-light">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    <i class="fas fa-times me-1"></i> Batal
                </button>
                <button type="submit" class="btn btn-primary shadow-sm">
                    <i class="fas fa-save me-1"></i> Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Hapus Guru -->
<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content shadow text-center">
            <div class="modal-body py-5">
                <div class="mb-3" style="font-size: 4rem; color: #f5576c;">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <h5 class="fw-bold mb-1">Hapus Guru</h5>
                <p class="text-muted mb-0" id="deleteMessage">Yakin ingin menghapus guru ini?</p>
            </div>
            <div class="modal-footer bg-light justify-content-center border-0 pt-0 pb-4">
                <button type="button" class="btn btn-outline-secondary px-4" data-bs-dismiss="modal">
                    <i class="fas fa-times me-1"></i> Batal
                </button>
                <button type="button" id="btnConfirmDelete" class="btn btn-danger px-4 shadow-sm">
                    <i class="fas fa-trash me-1"></i> Ya, Hapus
                </button>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<style>
.btn-edit i { pointer-events: none; }
.btn-delete i { pointer-events: none; }
</style>
<script>
function filterTable() {
    var input = document.getElementById('searchGuru');
    var filter = input.value.toLowerCase();
    var table = document.getElementById('guruTable');
    var tbody = table.querySelector('tbody');
    if (!tbody) return;
    var rows = tbody.getElementsByTagName('tr');
    for (var i = 0; i < rows.length; i++) {
        var cells = rows[i].getElementsByTagName('td');
        var found = false;
        for (var j = 0; j < cells.length; j++) {
            if (cells[j].textContent.toLowerCase().indexOf(filter) > -1) {
                found = true;
                break;
            }
        }
        rows[i].style.display = found ? '' : 'none';
    }
}

function togglePass() {
    var inp = document.querySelector('#createModal input[name="password"]');
    var eye = document.getElementById('crEye');
    if (inp.type === 'password') { inp.type = 'text'; eye.classList.replace('fa-eye', 'fa-eye-slash'); }
    else { inp.type = 'password'; eye.classList.replace('fa-eye-slash', 'fa-eye'); }
}

function toggleEditPass() {
    var inp = document.querySelector('#editModal input[name="password"]');
    var eye = document.getElementById('editEye');
    if (inp.type === 'password') { inp.type = 'text'; eye.classList.replace('fa-eye', 'fa-eye-slash'); }
    else { inp.type = 'password'; eye.classList.replace('fa-eye-slash', 'fa-eye'); }
}

document.addEventListener('DOMContentLoaded', function () {
    // EDIT - populate form when modal opens
    document.getElementById('editModal').addEventListener('show.bs.modal', function (event) {
        var btn = event.relatedTarget;
        document.getElementById('editForm').action = btn.getAttribute('data-url');
        document.getElementById('editName').value = btn.getAttribute('data-name');
        document.getElementById('editEmail').value = btn.getAttribute('data-email');
        document.getElementById('editNip').value = btn.getAttribute('data-nip');
        document.getElementById('editRole').value = btn.getAttribute('data-role');
        document.getElementById('editPlaceBirth').value = btn.getAttribute('data-place-of-birth') || '';
        document.getElementById('editDateBirth').value = btn.getAttribute('data-date-of-birth') || '';
        document.getElementById('editAddress').value = btn.getAttribute('data-address') || '';
        document.getElementById('editPhone').value = btn.getAttribute('data-phone') || '';
        document.getElementById('editGender').value = btn.getAttribute('data-gender') || '';
        document.getElementById('editReligion').value = btn.getAttribute('data-religion') || '';
        document.getElementById('editPassword').value = '';
    });

    // DELETE
    var csrf = document.querySelector('meta[name="csrf-token"]').content;
    var _deleteUrl = '';
    document.getElementById('deleteModal').addEventListener('show.bs.modal', function (event) {
        var btn = event.relatedTarget;
        _deleteUrl = btn.getAttribute('data-url');
        document.getElementById('deleteMessage').textContent = 'Yakin ingin menghapus guru ' + btn.getAttribute('data-name') + '?';
    });
    document.getElementById('btnConfirmDelete').addEventListener('click', function () {
        var btn = this;
        btn.disabled = true;
        btn.innerHTML = 'Menghapus...';
        var fd = new FormData();
        fd.append('_token', csrf);
        fd.append('_method', 'DELETE');
        fetch(_deleteUrl, { method: 'POST', body: fd })
            .then(function () { window.location.reload(); })
            .catch(function () { window.location.reload(); });
    });
});
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\siakad\resources\views/admin/teachers/index.blade.php ENDPATH**/ ?>