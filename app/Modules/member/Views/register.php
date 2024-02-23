<?= $this->extend('backoffice/template'); ?>

<?= $this->section('content'); ?>

<form action="<?= site_url('email'); ?>" method="post">
    <div class="row mb-3">
        <div class="col">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="col">
            <label for="nationality" class="form-label">Nationality</label>
            <input type="text" class="form-control" name="nationality" id="nationality">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-6">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="col-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="col-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

<?= $this->endSection('content'); ?>