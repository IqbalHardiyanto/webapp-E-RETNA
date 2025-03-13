<?= view('layoutspetugas/head'); ?>
<?= view('layoutspetugas/navbar'); ?>

<div class="container-fluid mt-4">
    <h1 class="h3 mb-4 text-gray-800">Edit Pengguna</h1>

    <div class="card shadow">
        <div class="card-body">
            <form action="/users/update/<?= $user['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $user['nama_lengkap']; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?= $user['username']; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password (kosongkan jika tidak ingin mengubah)</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-control" id="role" name="role" required>
                        <option value="petugas rm" <?= ($user['role'] == 'petugas rm') ? 'selected' : ''; ?>>Petugas RM</option>
                        <option value="kepala rm" <?= ($user['role'] == 'kepala rm') ? 'selected' : ''; ?>>Kepala RM</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="/users" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>

<?= view('layoutspetugas/footer'); ?>
