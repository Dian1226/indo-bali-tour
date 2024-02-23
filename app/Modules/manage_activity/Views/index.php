<?= $this->extend('backoffice\template'); ?>

<?= $this->section('content'); ?>

<div class="row">
  <div class="col">
    <a href="/backoffice/activity/add" class="btn btn-primary">Add Data</a>
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
          <th scope="col">Category</th>
          <th scope="col">Image</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php foreach ($activity as $activity) : ?>
          <tr>
            <th scope="row"><?= $i; ?></th>
            <td><?= $activity['title']; ?></td>
            <td><?= $activity['category']; ?></td>
            <td><img src="/backoffice/activity/<?= $activity['image']; ?>" alt="" height="100px"></td>
            <td>
              <a href="/backoffice/activity/edit/<?= $activity['id']; ?>" class="btn btn-warning">Edit</a>

              <form action="/backoffice/activity/<?= $activity['id'] ?>" class="d-inline" method="post">
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

Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae natus, nam quaerat laborum doloribus, voluptatem saepe placeat corporis aliquam harum, quae neque culpa architecto voluptas quidem. Dignissimos ipsa harum architecto ex exercitationem dolorem velit! Omnis enim, praesentium earum error officiis doloribus. Culpa doloremque deserunt omnis excepturi ipsam temporibus repudiandae commodi!