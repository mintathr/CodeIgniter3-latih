<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <!--<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>-->
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900">Change your password for</h1>
                                    <h5 class="mb-4"><?= $this->session->userdata('reset_email'); ?></h5>
                                </div>
                                <?= $this->session->flashdata('message'); ?>
                                <form method="post" action="<?= base_url('auth/changepassword'); ?>" class="user">
                                    <div class="form-group">
                                        <input type="password" name="password1" class="form-control form-control-user" id="password1" placeholder="Enter New Password">
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password2" class="form-control form-control-user" id="password2" placeholder="Repeat Password">
                                        <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Change Password
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>