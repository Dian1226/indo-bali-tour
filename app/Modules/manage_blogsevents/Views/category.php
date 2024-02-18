<?= $this->extend('backoffice/template'); ?>

<?= $this->section('content'); ?>

<div class="row">
  <div class="col">
    <a href="/backoffice/category-blogsevents/add" class="btn btn-primary">Add Data</a>
    <?php if (session()->getFlashdata('pesan')) : ?>
      <div class="alert alert-success my-3" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
      </div>
    <?php endif; ?>
    <table class="table mt-3">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php foreach ($categories as $category) : ?>
          <tr>
            <th scope="row"><?= $i; ?></th>
            <td><?= $category['title']; ?></td>
            <td>
              <a href="/backoffice/category-blogsevents/edit/<?= $category['slug']; ?>" class="btn btn-warning">Edit</a>

              <form action="/backoffice/category-blogsevents/<?= $category['id']; ?>" class="d-inline" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</button>
              </form>
            </td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>


<?= $this->endSection('content'); ?>