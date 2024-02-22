<?= $this->extend('backoffice/template'); ?>

<?= $this->section('content'); ?>

<form action="/backoffice/gallery/save" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control
                <?php if (session('validation')) {
                    if (session('validation')->getError('title')) {
                        echo 'is-invalid';
                    }
                    echo '';
                } ?>" id="title" value="<?= old('title'); ?>" aria-describedby="titlecheck">
                <div class="invalid-feedback" for="titlecheck">
                    <?php if (session('validation')) {
                        echo session('validation')->getError('title');
                    }; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" id="image" name="image" class="form-control">
                <div class="invalid-feedback" for="imagecheck">
                    <?php if (isset($validation)) : ?>
                        <?php foreach ($errors as $error) : ?>
                            <li><?= esc($error) ?></li>
                        <?php endforeach; ?>
                    <?php endif ?>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="5"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

<?= $this->endSection('content'); ?>