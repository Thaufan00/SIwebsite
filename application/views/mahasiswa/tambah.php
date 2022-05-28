<div class="container">

<div class="row mt-3">
    <div class="col-md-6">

    <div class="card">
        <div class="card-header">
            Form Tambah Data Mahasiswa
        </div>
        <div class="card-body">
            <?php if( validation_errors() ) :?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php endif; ?>
        <form action="" method="post">

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text"  name="nama" class="form-control" id="nama">
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control" id="nim">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan<label>
            <input type="text" name="jurusan" class="form form-control" id="jurusan">
        </div>
        <button type="submit" name="tambah" class="btn btn-primary float-right"> Tambah Data </button>

        </button>
        </form>

        </div>
        </div>


    </div>
</div>


</div>