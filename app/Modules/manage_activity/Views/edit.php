<?= $this->extend('backoffice/template'); ?>

<?= $this->section('content'); ?>

<form action="/backoffice/activity/update/<?= $activity['id']; ?>" method="post" enctype="multipart/form-data">
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
                } ?>" id="title" value="<?= old('title', $activity['title']); ?>" aria-describedby="titlecheck">
                <div class="invalid-pricedback" for="titlecheck">
                    <?php if (session('validation')) {
                        echo session('validation')->getError('title');
                    }; ?>
                </div>
            </div>
        </div>
        <div class="col-3 mb-3">
            <fieldset>
                <label for="category" class="form-label">Category</label>
                <select id="category" name="category" class="form-select" value="<?= old('category', $activity['category']); ?>">
                    <option value="fun">Fun</option>
                    <option value="adventure">Adventure</option>
                </select>
            </fieldset>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label for="caption" class="form-label">Caption</label>
                <input type="text" name="caption" class="form-control" id="caption" value="<?= old('caption', $activity['caption']); ?>">
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" id="image" name="image" class="form-control">
                <div class="invalid-pricedback" for="imagecheck">
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
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="5"><?= old('description', $activity['description']); ?></textarea>
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