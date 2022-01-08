<?= form_open_multipart(); ?>
<div class="text-right mb-3">
    <a href="<?= base_url('post/data'); ?>" class="btn btn-default">
        <i class="fa fa-arrow-left"></i> Kembali
    </a>
    <button type="submit" class="btn btn-primary">
        <i class="fa fa-save"></i> Simpan
    </button>
</div>
<div class="row">
    <div class="col-md-8 order-last order-md-first">
        <div class="card card-outline card-primary shadow-sm">
            <div class="card-header">
                <h3 class="card-title">Konten postingan</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="post_title">Judul postingan</label>
                    <input id="post_title" name="post_title" class="form-control" type="text" placeholder="Judul postingan..." value="<?= set_value('post_title'); ?>" autocomplete="off">
                    <?= form_error('post_title'); ?>
                </div>
                <label for="summernote">Isi postingan</label>
                <textarea id="summernote" class="form-control" rows="6" name="post_body" placeholder="Isi postingan.."><?= set_value('post_body'); ?></textarea>
                <?= form_error('post_body'); ?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-outline card-primary shadow-sm">
            <div class="card-header">
                <h3 class="card-title">Informasi postingan</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="category_id">Pilih kategori</label>
                    <select class="form-control" id="category_id" name="category_id" aria-label="Floating label select example">
                        <option value="">Pilih kategori</option>
                        <?php foreach ($category as $c) : ?>
                            <option value="<?= $c->category_id; ?>"><?= $c->category_name; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('category_id'); ?>
                </div>
                <div class="form-group">
                    <label class="form-label" for="post_date">Tanggal</label>
                    <input class="form-control gijgo" value="<?= set_value('post_date', date('Y-m-d')); ?>" name="post_date" id="post_date" type="text" placeholder="Select a date" />
                    <?= form_error('post_date'); ?>
                </div>
                <div class="form-group">
                    <label class="form-label" for="post_thumbnail">Thumbnail postingan</label>
                    <div class="custom-file">
                        <input accept="image/*" type="file" class="custom-file-input" id="post_thumbnail" name="post_thumbnail" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="post_thumbnail">Pilih file</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>