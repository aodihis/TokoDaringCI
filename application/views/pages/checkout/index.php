<main role="main" class="container">
    <?php $this->load->view('layouts/_alert');?>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Formulir Pengiriman
                </div>
                <div class="card-body">
                    <form action="<?=base_url('/checkout/create')?>" method="POST">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input class="form-control" type="text" name="name" placeholder="Masukan Nama Penerima" value="<?=$input->name?>">
                        <?=form_error('name')?>
                    </div>

                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea id="" class="form-control" name="address" rows="5" cols="30" value="<?=$input->address?>"></textarea>
                        <?=form_error('address')?>
                    </div>

                    <div class="form-group">
                        <label for="">Nomor Telepon</label>
                        <input class="form-control" type="text" name="phone" placeholder="Nomor Telepon Nama Penerima" value="<?=$input->phone?>">
                        <?=form_error('phone')?>
                    </div>
                    <button class="btn btn-primary" type="submit">Simpan</button>

                    </form> 
                </div>
            </div>
            
        </div>
        <div class="col-md-4">

            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-header">Keranjang</div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Produk</th>
                                        <th>Qty</th>
                                        <th>Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($cart as $row):?>
                                    <tr>
                                        <td><?= $row->title ?></td>
                                        <td><?= $row->qty ?></td>
                                        <td>Rp.<?= number_format($row->price, 0, ',', '.') ?>,00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Subtotal</td>
                                        <td>Rp.<?= number_format($row->subtotal, 0, ',', '.') ?>,00</td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="2">Total</th>
                                        <th>Rp.<?=number_format(array_sum(array_column($cart, 'subtotal')),0,',','.')?>,00</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>