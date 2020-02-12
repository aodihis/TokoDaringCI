<main role="main" class="container">
    <?php $this->load->view('layouts/_alert')?>
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <span>Formulir Pengguna</span>
                    <div class="float-right">
                        <form action="#">
                            <div class="input-group">
                                <input class="form-control form-control-sm text-center" type="text" placeholder="Cari">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary btn-sm">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <a href="#" class="btn btn-secondary btn-sm">
                                        <i class="fas fa-eraser"></i>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    
                    <?=form_open_multipart($form_action, ['method'=>'POST'])?>
                        <?= isset($input->id) ? form_hidden('id',$input->id) : '' ?>
                        
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
                            <?= form_password('password','', ['placeholder' => 'Masukan Password min 8 karakter', 'class' => 'form-control']) ?>
                            <?= form_error('password') ?>
                        </div>

                        <div class="form-group">
                            <label for="">Posisi </label>
                            <br>
                            <div class="form-check form-check-inline">
                                <?= form_radio(['name' => 'role', 'value' => 'admin', 'checked' => 
                                $input->role == 'admin' ? true : false, 'class' => 'form-check-input'])?>
                                <label for="" class="form-check-label">Admin</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <?= form_radio(['name' => 'role', 'value' => 'member', 'checked' => 
                                $input->role == 'member' ? true : false, 'class' => 'form-check-input'])?>
                                <label for="" class="form-check-label">Member</label>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="">Status </label>
                            <br>
                            <div class="form-check form-check-inline">
                                <?= form_radio(['name' => 'is_active', 'value' => 1, 'checked' => 
                                $input->is_active == 1 ? true : false, 'class' => 'form-check-input'])?>
                                <label for="" class="form-check-label">Aktif</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <?= form_radio(['name' => 'is_active', 'value' => 0, 'checked' => 
                                $input->is_active == 0 ? true : false, 'class' => 'form-check-input'])?>
                                <label for="" class="form-check-label">Tidak Aktif</label>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="">Foto</label>
                            <br>
                            <?= form_upload('image')?>
                            <?php if ($this->session->flashdata('image_error')) :?>
                                <small class="form-text text-danger">
                                <?= $this->session->flashdata('image_error')?>
                                </small>
                            <?php endif?>
                            <?php if(isset($input->image)):?>
                                <img src="<?=base_url("images/user/$input->image")?>" alt="" height=150>
                            <?php endif ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>

                        <?=
                        form_close();
                        ?>


                    
                </div>
                </div>
        </div>
    </div>

</main>