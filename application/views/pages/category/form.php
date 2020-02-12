<main role="main" class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
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
                    
                    <?= form_open($form_action, ['method' => 'POST']) ?>
                        <?= isset($input->id) ? form_hidden('id',$input->id) : '' ?>
                        <div class="form-group">
                            <label for="">Kategori</label>
                            <?= form_input('title',$input->title, [
                                'class' => 'form-control', 'id' => 'title', 'onkeyup' => 'createSlug()', "required" => true,
                                'autofocus' => true
                            ] )?> 
                            <?=form_error('title')?>
                        </div>

                        <div class="form-group">
                            <label for="">Kata kunci</label>
                            <?= form_input('slug', $input->slug, [
                                'class' => 'form-control', 'id' => 'slug', 'required' => true
                            ])?>
                            <?= form_error('slug') ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    <?= form_close() ?>
                    
                </div>
                </div>
        </div>
    </div>

</main>