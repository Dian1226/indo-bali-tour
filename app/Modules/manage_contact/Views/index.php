<?= $this->extend('backoffice\template'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="col">
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success my-3" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($contacts as $contact) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $contact['name']; ?></td>
                        <td><?= $contact['email']; ?></td>
                        <td>
                            <a href="mailto:<?= $contact['email']; ?>" class="btn btn-warning">Reply</a>

                            <!-- <form action="" class="d-inline" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                            </form> -->
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection('content'); ?>