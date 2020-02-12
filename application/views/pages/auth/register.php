<main role="main" class="container">
    
    <?php $this->load->view('layouts/_alert'); ?>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                  Formulir Registrasi
                </div>
                <div class="card-body">
                  <?=  form_open('register', ['method' => 'POST']);?>
                  
                    <div class="form-group">
                        <label for="">Nama</label>
                        <?= form_input('name', $input->name, ['class' => 'form-control', 'required' => true, 'autofocus' => true]); ?>
                        <?= form_error('name') ?>
                    </div>
                      <div class="form-group">
                          <label for="">E-mail</label>
                          <?= form_input('email', $input->email, ['class' => 'form-control', 'placeholder' => 'Masukan Alamat email', 'required' => true]); ?>
                          <? form_error('email') ?>
                      </div>
                      <div class="form-group">
                        <label for="">Password</label>
                        <?= form_password('password','', ['placeholder' => 'Masukan Password min 8 karakter', 'class' => 'form-control', 'required' => true]) ?>
                        <?= form_error('password') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Konfirmasi Password</label>
                        <?= form_password('password_confirmation','', ['placeholder' => 'Masukan Password yang sama', 'class' => 'form-control', 'required' => true]) ?>
                        <?= form_error('password_confirmation') ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Daftar</button>
                  <?= 
                  form_close();
                  ?>
                </div>
              </div>
        </div>
    </div>

</main>