<?= $this->extend('backoffice\template'); ?>

<?= $this->section('content'); ?>

<div class="row">
  <div class="col">
    <a href="/backoffice/transportation/add" class="btn btn-primary">Add Data</a>
    <?php if (session()->getFlashdata('pesan')) : ?>
      <div class="alert alert-success my-3" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
      </div>
    <?php endif; ?>
    <table class="table mt-3">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Brand</th>
          <th scope="col">Capacity</th>
          <th scope="col">Fee</th>
          <th scope="col">Image</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php foreach ($transportations as $transport) : ?>
          <tr>
            <th scope="row"><?= $i; ?></th>
            <td><?= $transport['brand']; ?></td>
            <td><?= $transport['capacity']; ?> person</td>
            <td>US $<?= $transport['fee']; ?></td>
            <td><img src="/backoffice/transportation/<?= $transport['image']; ?>" alt="" height="100px"></td>
            <td>
              <a href="/backoffice/transportation/edit/<?= $transport['id']; ?>" class="btn btn-warning">Edit</a>

              <form action="/backoffice/transportation/<?= $transport['id'] ?>" class="d-inline" method="post">
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