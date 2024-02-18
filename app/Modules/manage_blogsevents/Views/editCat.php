<?= $this->extend('backoffice/template'); ?>

<?= $this->section('content'); ?>

<form action="/backoffice/category-newsevents/update/<?= $category['id']; ?>" method="post">
    <input type="hidden" name="slug" value="<?= $category['slug']; ?>">
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
                } ?>" id="title" value="<?= old('title', $category['title']); ?>" aria-describedby="titlecheck">
                <div class="invalid-feedback" for="titlecheck">
                    <?php if (session('validation')) {
                        echo session('validation')->getError('title');
                    }; ?>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control" placeholder="indobalitour.com/category/<?= $category['slug']; ?>" id="slug" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>

<?= $this->endSection('content'); ?>