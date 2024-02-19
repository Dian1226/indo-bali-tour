<?= $this->extend('backoffice/template'); ?>

<?= $this->section('content'); ?>

<form action="/backoffice/blogsevents/update/<?= $blog['id']; ?>" method="post" enctype="multipart/form-data">
    <div class="row mb-3">
        <div class="col">
            <fieldset>
                <label for="category" class="form-label">Category</label>
                <select id="category" name="category" class="form-select" value="<?= old('category'); ?>">
                    <?php foreach ($categories as $category) : ?>
                        <option value="<?= $category['title']; ?>"><?= $category['title']; ?></option>
                    <?php endforeach; ?>
                </select>
            </fieldset>
        </div>
        <div class="col">
            <label for="created_at" class="form-label">Date</label>
            <input type="date" name="created_at" class="form-control
            <?php if (session('validation')) {
                if (session('validation')->getError('created_at')) {
                    echo 'is-invalid';
                }
                echo '';
            } ?>" placeholder="Select date" id="Created_at" aria-describedby="datecheck" value="<?= $blog['created_at']; ?>">
            <div class="invalid-feedback" for="datecheck">
                <?php if (session('validation')) {
                    echo session('validation')->getError('created_at');
                }; ?>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control
                <?php if (session('validation')) {
                    if (session('validation')->getError('title')) {
                        echo 'is-invalid';
                    }
                    echo '';
                } ?>" id="title" value="<?= $blog['title']; ?>" aria-describedby="titlecheck" placeholder="Title">
            <div class="invalid-feedback" for="titlecheck">
                <?php if (session('validation')) {
                    echo session('validation')->getError('title');
                }; ?>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="content" class="form-label">Content</label>
            <textarea type="text" name="content" class="form-control" placeholder="Content" rows="5" id="content" value=""><?= $blog['content']; ?></textarea>
        </div>
        <div class="col">
            <label for="image" class="form-label d-block">Image</label>
            <div class="input-group">
                <input type="file" class="form-control" id="image" name="image" value="<?= $blog['image']; ?>">
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="caption" class="form-label">Caption Image</label>
            <input type="text" name="caption" class="form-control" id="caption" placeholder="Caption image" value="<?= $blog['caption_image']; ?>">
        </div>
        <div class="col">
            <label for="tags" class="form-label">Tags</label>
            <input type="text" name="tags" class="form-control" id="tags" placeholder="Tags" value="<?= $blog['tags']; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="meta" class="form-label">Meta Keywords</label>
            <input type="text" name="meta" class="form-control" placeholder="Meta keywords" id="meta" value="<?= $blog['meta_keywords']; ?>">
        </div>
        <div class="col">
            <label for="hit" class="form-label">Hit</label>
            <input type="number" name="hit" class="form-control" placeholder="Hit" id="hit" value="<?= $blog['hit']; ?>">
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
    <div class="row mb-3">
        <div class="col">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

<?= $this->endSection('content'); ?>