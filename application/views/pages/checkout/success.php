<main role="main" class="container">
    <?php $this->load->view('layouts/_alert');
    ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Transaksi Berhasil
                </div>
                <div class="card-body">
                    <h5>Nomor Pesanan: <?=$content->invoice?></h5>
                    <p>Terima Kasih, sudah berbelanja</p>
                    <p>Silahkan lakukan pembayaran untuk proses berikutnya</p>
                        <ol>
                            <li>Lakukan pembayaran pada rekening <strong>BCA 839182222</strong>
                        a/n SUper Keren</li>
                        <li>Total Pembayaran : <strong>Rp.<?=number_format($content->total,0,',','.')?>,00</strong></li>
                        </ol>
                        <p>Jika sudah melakukan pembayaran kirimkan bukti transaksi di halaman konfirmasi atau
                            bisa <a href="<?=base_url("/myorder/detail/$content->invoice")?>">klik disini</a> </p>
                    <a href="<?=base_url()?>" class="btn btn-primary"><i class="fas fa-angle-left"></i>Kembali</a>
                </div>

            </div>
        </div>
    </div>

</main>