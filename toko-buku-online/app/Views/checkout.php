<?= $this->extend('layout'); ?>

<?= $this->section('main')?>


<div class="container">
        <h3>Review Dan Submit Order</h3>
        <hr />
        <table>
            <tr>
                <td>Dia Bukan Betty</td>
                <td>@1</td>
                <td>Rp89,000</td>
            </tr>
        </table>
        <h3 class="mt-3">Total</h3>
        <hr />
        <span>Rp89,000</span>
        <h3 class="mt-3">Alamat Pengiriman</h3>
        <hr />
        <p>JL Simp. Sungai Jeruk, Mr. Jambi</p>
        <h3 class="mt-3">Metode Bayar</h3>
        <hr />
        <p>Tranfer Bank</p>
        <p>No Rekening: James Bon, BNI, 101001001010</p>
        <div class="mt-5">
            <form action="<?= base_url('submit')?>" method="POST">
                <button type="submit" class="btn btn-success">Submit Order</button>
            </form>
            
        </div>
</div>



<?= $this->endSection();?>