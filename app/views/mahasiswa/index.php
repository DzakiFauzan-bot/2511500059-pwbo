<div class="container mt-4">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>







    <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal"
        data-bs-target="#exampleModal">
        Tambah Data Mahasiswa
    </button>




    <h3>Daftar Mahasiswa</h3>
    <ul class="list-group">
        <?php foreach ($data['mhs'] as $mhs): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo $mhs['nama']; ?>


                <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>"
                    class="badge bg-primary text-white text-decoration-none">
                    detail
                </a>






                <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>"
                    class="badge bg-success text-decoration-none tampilModalUbah" data-bs-toggle="modal"
                    data-bs-target="#exampleModal" data-id="<?= $mhs['id']; ?>">
                    Ubah
                </a>







                <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>"
                    class="badge bg-danger float-end ms-1 text-decoration-none"
                    onclick="return confirm('Yakin ingin menghapus data ini?');">
                    Hapus
                </a>




            </li>
        <?php endforeach; ?>
    </ul>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Tambah Data Mahasiswa
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>

                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="form-select" id="jurusan" name="jurusan" required>
                            <option value="">Pilih Jurusan</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Manajemen Informatika">Manajemen Informatika</option>
                        </select>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Tambah Data
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>