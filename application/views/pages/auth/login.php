<main role="main" class="container">
    <?php  $this->load->view('layouts/_alert')?>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    Formulir Login
                </div>
                <div class="card-body">
                    <?= form_open('login', ['method' => 'POST']); ?>
                        <div class="form-group">
                            <label for="">E-mail</label>
                            <?= form_input('email', $input->email, ['class' => 'form-control', 'placeholder' => 'Masukan Alamat email', 'required' => true]); ?>
                            <? form_error('email') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Kata Sandi</label>
                            <?= form_password('password','', ['placeholder' => 'Masukan Kata Sandi', 'class' => 'form-control', 'required' => true]) ?>
                            <?= form_error('password') ?>
                        </div>
                    <button type="submit" class="btn btn-primary">Masuk</button>
                    <?= form_close(); ?>
                </div>
                </div>
        </div>
    </div>

</main>