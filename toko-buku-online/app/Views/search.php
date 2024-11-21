<?= $this->extend('layout'); ?>

<?= $this->section('main')?>

    <div class="container">
        <div class="row bg-primary-subtle">
            <div class="col-6 p-5">
                <h1>Selamat Datang di Toko Buku Online Kamu !</h1>
                <p>Kami menyediakan berbagai macam Buku dari berbagai penerbit ternama. 
                    kali.
                </p>
                <button class="btn btn-warning">Lhat Produk</button>
            </div>
            <div class="col-6 p-5">
                <h1>Temukan Buku Favorit </h1>
                <form action="">
                    <div class="mb-3">
                        <input type="text" name = "judul" id ="judul" class="form-control" placeholder="Judul Buku">
                    </div>
                    <div class="mb-3">
                        <select name="Kategori" id="Kategori" class="form-control">
                            <option value="">-- Pilih Kategori --</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="pengarang" id="pengarang" placeholder="Pengarang" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Cari</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <h2 class="mb-3">Hasil</h2>
                <div class="row">
                        <div class="col-4">
                        <div class="card">
                        <img src="<?= base_url() ?>/images/1.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Dia Bukan Betty</h5>
                            <p class="card-text">Rp.89.000</p>
                            <a href="#" class="btn btn-primary">Add To Chart</a>
                        </div>
                        </div>
                        </div>
                    <div class="col-4">
                    <div class="card">
                        <img src="<?= base_url() ?>/images/2.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Buku Wajib Orang Miskin</h5>
                            <p class="card-text">Rp.150.000</p>
                            <a href="#" class="btn btn-primary">Add To Chart</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card">
                        <img src="<?= base_url() ?>/images/3.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bukan Untuk Dibaca</h5>
                            <p class="card-text">Rp.90.000</p>
                            <a href="#" class="btn btn-primary">Add To Chart</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card">
                        <img src="<?= base_url() ?>/images/4.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Hidayat</h5>
                            <p class="card-text">Rp.20.000</p>
                            <a href="#" class="btn btn-primary">Add To Chart</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card">
                        <img src="<?= base_url() ?>/images/5.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Memasak Nasi Goreng Tanpa Nasi</h5>
                            <p class="card-text">Rp.900.000</p>
                            <a href="#" class="btn btn-primary">Add To Chart</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card" >
                        <img src="<?= base_url() ?>/images/6.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Berkeliling Ke Alam Neraka (Ilmu Hitam)</h5>
                            <p class="card-text">Rp.1.200.000</p>
                            <a href="#" class="btn btn-primary">Add To Chart</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection();?>
    