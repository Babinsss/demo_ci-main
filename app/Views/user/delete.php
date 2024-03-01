<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <h3>Are you sure you want to delete this user?</h3>

    <form action="<?= base_url("user/delete/{$user->user_id}") ?>" method="post">
        <?= csrf_field() ?>

        <div class="row mt-3">
            <div class="col-md-6">
                <label for="first_name" class="form-label fw-bold">First Name:</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="<?= $user->first_name ?? '' ?>" readonly>
            </div>
            <div class="col-md-6">
                <label for="middle_name" class="form-label fw-bold">Middle Name:</label>
                <input type="text" class="form-control" id="middle_name" name="middle_name" value="<?= $user->middle_name ?? '' ?>" readonly>
            </div>
            <div class="col-md-6">
                <label for="last_name" class="form-label fw-bold">Last Name:</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="<?= $user->last_name ?? '' ?>" readonly>
            </div>
            <div class="col-md-6">
                <label for="age" class="form-label fw-bold">Age:</label>
                <input type="text" class="form-control" id="age" name="age" value="<?= $user->age ?? '' ?>" readonly>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label fw-bold">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $user->email ?? '' ?>" readonly>
            </div>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-danger" name="confirm_delete" value="1">Delete</button>
            <a href="<?= base_url('/user/list') ?>" class="btn btn-primary">Cancel</a>
        </div>
    </form>
</div>

<?= $this->endSection('content') ?>