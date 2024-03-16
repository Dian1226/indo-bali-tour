<?= $this->extend('backoffice\template'); ?>

<?= $this->section('content'); ?>

<div class="row">
  <div class="col">
    <a href="/backoffice/gallery/add" class="btn btn-primary">Add Data</a>
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
          <th scope="col">Image</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php foreach ($gallery as $gallery) : ?>
          <tr>
            <th scope="row"><?= $i; ?></th>
            <td><?= $gallery['title']; ?></td>
            <td><img src="/backoffice/gallery/<?= $gallery['image']; ?>" alt="" height="100px"></td>
            <td>
              <a href="/backoffice/gallery/edit/<?= $gallery['id']; ?>" class="btn btn-warning">Edit</a>

              <form action="/backoffice/gallery/<?= $gallery['id'] ?>" class="d-inline" method="post">
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