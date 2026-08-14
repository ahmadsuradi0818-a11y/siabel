<?php $__env->startSection('title', 'Guru Mata Pelajaran'); ?>

<?php $__env->startSection('content'); ?>
<div class="row mb-4">
    <div class="col-12 d-flex align-items-stretch">
        <div class="card card-primary card-outline w-100">
            <div class="card-header d-flex align-items-center justify-content-between" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                <h3 class="card-title text-white m-0">
                    <i class="fas fa-chalkboard-teacher me-2"></i> Guru Mata Pelajaran
                </h3>
            </div>
            <div class="card-body">
                <?php if(session('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle me-1"></i> <?php echo e(session('success')); ?>

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
                            <i class="fas fa-layer-group me-1"></i> Total: <strong><?php echo e($teachers->total()); ?></strong> guru
                        </span>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0" id="guruTable">
                        <thead class="table-light">
                            <tr>
                                <th class="text-center" style="width: 60px;">No</th>
                                <th>Nama Guru</th>
                                <th>NIP</th>
                                <th>Mapel & Kelas</th>
                                <th class="text-center" style="width: 120px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <?php
                                $mapelKelas = [];
                                foreach ($teacher->subjects as $subject) {
                                    $classes = $teacher->teachingClasses->filter(
                                        fn($c) => $c->pivot->subject_id == $subject->id
                                    )->pluck('name')->implode(', ');
                                    $mapelKelas[] = $classes
                                        ? '<span class="badge bg-info me-1 mb-1">' . e($subject->name) . '</span> <small class="text-muted">(' . e($classes) . ')</small>'
                                        : '<span class="badge bg-info me-1 mb-1">' . e($subject->name) . '</span>';
                                }
                            ?>
                            <tr>
                                <td class="text-center"><?php echo e($teachers->firstItem() + $index); ?></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                                            style="width: 36px; height: 36px; background: linear-gradient(135deg, #667eea, #764ba2); color: #fff; font-size: 14px; font-weight: 600; flex-shrink: 0;">
                                            <?php echo e(strtoupper(substr($teacher->name, 0, 1))); ?>

                                        </div>
                                        <div>
                                            <div class="fw-semibold"><?php echo e($teacher->name); ?></div>
                                            <small class="text-muted"><?php echo e($teacher->email); ?></small>
                                        </div>
                                    </div>
                                </td>
                                <td><?php echo e($teacher->teacher?->nip ?? '-'); ?></td>
                                <td>
                                    <?php if(!empty($mapelKelas)): ?>
                                        <?php echo implode('<br>', $mapelKelas); ?>

                                    <?php else: ?>
                                        <span class="text-muted fst-italic">Belum ada mapel</span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-center">
                                    <a href="<?php echo e(route('admin.teacher-subjects.edit', $teacher)); ?>" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-edit me-1"></i> Atur
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="5" class="text-center text-muted py-4">Belum ada data guru.</td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <?php echo e($teachers->links()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
function filterTable() {
    var input = document.getElementById('searchGuru');
    var filter = input.value.toLowerCase();
    var table = document.getElementById('guruTable');
    var rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
    for (var i = 0; i < rows.length; i++) {
        var name = rows[i].getElementsByTagName('td')[1]?.textContent.toLowerCase() || '';
        rows[i].style.display = name.indexOf(filter) > -1 ? '' : 'none';
    }
}
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\siakad\resources\views/admin/teacher-subjects/index.blade.php ENDPATH**/ ?>