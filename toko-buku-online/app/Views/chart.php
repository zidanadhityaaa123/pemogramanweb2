<?= $this->extend('layout'); ?>

<?= $this->section('main')?>

        <div class="container">
            <h1>Ringkasan Order</h1>
            <div class="row">
                <div class="col-9">
                    <table class="table table-stripe">
                        <thead>
                        <tr>
                            <th scope="col">#id</th>
                            <th scope="col">Detail Buku</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Total</th>
                            <th scope="col">Aksi</th>

                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">#0001</th>
                                <td>
                                    <img src="<?= base_url().'images/1.jpeg'?>" alt="" style="width: 150px; height: auto;">
                                    <h5>Dia Bukan Betty</h5>
                                </td>
                                <td>1</td>
                                <td>Rp89,000</td>
                                <td>Rp89,000</td>
                                <td>
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="col-3">
                    <div class="">
                        <h2 class="text-secondary">Total Bayar</h2>
                        <h2>Rp89,000</h2>
                        <div class="mt-5">
                            <a href="<?= base_url('checkout')?>" class="btn btn-primary">CheckOut</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?= $this->endSection();?>
    
        
    