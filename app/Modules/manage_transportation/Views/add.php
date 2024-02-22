<?= $this->extend('backoffice/template'); ?>

<?= $this->section('content'); ?>

<form action="/backoffice/transportation/save" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label for="brand" class="form-label">Brand</label>
                <input type="text" name="brand" class="form-control
                <?php if (session('validation')) {
                    if (session('validation')->getError('brand')) {
                        echo 'is-invalid';
                    }
                    echo '';
                } ?>" id="brand" value="<?= old('brand'); ?>" aria-describedby="brandcheck">
                <div class="invalid-feedback" for="brandcheck">
                    <?php if (session('validation')) {
                        echo session('validation')->getError('brand');
                    }; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="capacity" class="form-label">Capacity</label>
            <div class="input-group mb-3">
                <input type="number" class="form-control
                <?php if (session('validation')) {
                    if (session('validation')->getError('capacity')) {
                        echo 'is-invalid';
                    }
                    echo '';
                } ?>" value="<?= old('capacity'); ?>" aria-describedby="capacitycheck" name="capacity" value="<?= old('capacity'); ?>">
                <span class="input-group-text" id="capacitycheck">person</span>
                <div class="invalid-feedback" for="capacitycheck">
                    <?php if (session('validation')) {
                        echo session('validation')->getError('capacity');
                    }; ?>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label for="fee" class="form-label">Fee</label>
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
        <div class="col">
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control" placeholder="indobalitour/transportation/" id="slug" disabled>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" id="image" name="image" class="form-control
                <?php if (session('validation')) {
                    if (session('validation')->getError('image')) {
                        echo 'is-invalid';
                    }
                    echo '';
                } ?>" aria-describedby="imagecheck">
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
                <label for="extra" class="form-label">Extra</label>
                <textarea class="form-control" id="extra" name="extra" rows="3"></textarea>
                <div id="extrahelp" class="form-text">Optional</div>
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