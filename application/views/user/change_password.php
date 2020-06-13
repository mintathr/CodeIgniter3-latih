<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>

            <?= form_open('user/changepassword'); ?>
            <div class="form-group">
                <label for="formGroupExampleInput">Current Password</label>
                <input type="password" name="current_password" class="form-control" id="current_password">
                <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">New Password</label>
                <input type="password" name="new_password1" class="form-control" id="new_password1">
                <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Repeat Password</label>
                <input type="password" name="new_password2" class="form-control" id="new_password2">
                <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Change</button>
            </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->