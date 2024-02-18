<?= $this->extend('backoffice/template'); ?>

<?= $this->section('content'); ?>

<form action="/backoffice/menu-manager/save" method="post">
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
        <div class="row mb-3">
            <div class="col">
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" name="slug" class="form-control" placeholder="indobalitour.com/" id="slug" disabled>
                </div>
            </div>
            <div class="col">
                <fieldset>
                    <div class="mb-3">
                        <label for="target" class="form-label">Target</label>
                        <select id="target" name="target" class="form-select">
                            <option value="same window">Same Window</option>
                            <option value="new window">New Window</option>
                        </select>
                    </div>
                </fieldset>
            </div>
            <div class="col">
                <fieldset>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select id="status" name="status" class="form-select">
                            <option value="show">Show</option>
                            <option value="hidden">Hidden</option>
                        </select>
                    </div>
                </fieldset>
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