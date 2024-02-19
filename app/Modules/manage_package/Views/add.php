<?= $this->extend('backoffice/template'); ?>

<?= $this->section('content'); ?>

<form action="/backoffice/package/save" method="post" enctype="multipart/form-data">
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
        <div class="col-3">
            <label for="fee" class="form-label">Fee</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="feecheck">USD $</span>
                <input type="number" name="fee" class="form-control 
                <?php if (session('validation')) {
                    if (session('validation')->getError('fee')) {
                        echo 'is-invalid';
                    }
                    echo '';
                } ?>" value="<?= old('fee'); ?>" id="fee" aria-describedby="feecheck">
                <div class="invalid-feedback" for="feecheck">
                    <?php if (session('validation')) {
                        echo session('validation')->getError('fee');
                    }; ?>
                </div>
            </div>
        </div>
        <div class="col-2">
            <label for="stars" class="form-label">Stars</label>
            <div class="input-group mb-3">
                <input type="number" class="form-control
                <?php if (session('validation')) {
                    if (session('validation')->getError('stars')) {
                        echo 'is-invalid';
                    }
                    echo '';
                } ?>" value="<?= old('stars'); ?>" name="stars" value="<?= old('stars'); ?>" aria-describedby="starscheck">
                <span class="input-group-text">/5</span>
                <div class="invalid-feedback" for="starscheck">
                    <?php if (session('validation')) {
                        echo session('validation')->getError('stars');
                    }; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label for="caption" class="form-label">Caption</label>
                <input type="text" name="caption" class="form-control" id="title" value="<?= old('caption'); ?>">
            </div>
        </div>
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
    </div>
    <div class="row">
        <div class="col">
            <div class="col">
                <div class="mb-3">
                    <label for="rundown" class="form-label">Rundown</label>
                    <textarea class="form-control" id="rundown" name="rundown" rows="5"></textarea>
                </div>
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