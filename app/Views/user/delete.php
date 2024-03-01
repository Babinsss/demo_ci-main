<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <h3>Are you sure you want to delete this user?</h3>

    <form id="deleteForm" action="<?= base_url("user/delete/{$user->user_id}") ?>" method="post">
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
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmationModal">Delete</button>
            <a href="<?= base_url('/') ?>" class="btn btn-primary">Cancel</a>
        </div>
    </form>
</div>

<!-- Modal -->
<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this user?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger" form="deleteForm" name="confirm_delete" value="1">Delete</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content') ?>

<script>
    // Optionally, you can include jQuery here if not already included
    // Ensure that Bootstrap JS is also included in your project
    // <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
</script>
// <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</script>