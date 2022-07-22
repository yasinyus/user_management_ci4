<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                       <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Edit User</h4>
                                        <p class="card-title-desc">Edit user here</p>
                                    </div>
                                    <div class="card-body">
                                        <form class="needs-validation" action="" method="post" novalidate>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Account name</label>
                                                        <input type="text" name="account_name" class="form-control"  placeholder="account name" value="<?= $user['account_name'] ?>" required>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">User name</label>
                                                        <input type="text" name="user_name" class="form-control"  placeholder="user name" value="<?= $user['user_name'] ?>" required>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Email</label>
                                                        <input type="email" name="user_email" class="form-control"  placeholder="user@email.com" value="<?= $user['user_email'] ?>"  required>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">User Level</label>
                                                        <select class="form-control user_type" name="level_id">
                                                            <option>-- Choose --</option>
                                                            <?php $no = 1; foreach($level_user as $l): ?>
                                                              
                                                                <option value="<?= $l['id'] ?>" <?= ($user['id'] == $l['id']) ? 'selected' : ''  ?>><?= $l['level_name'] ?></option>
                                                                
                                                            <?php $no++; endforeach ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">status</label>
                                                        <select name="status" class="form-select" >
                                                            <option value="1" <?= ($user['status'] == 1) ? 'selected' : ''  ?>>Enabled</option>
                                                            <option value="0" <?= ($user['status'] == 0) ? 'selected' : ''  ?>>Disabled</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Password</label>
                                                        <input type="text" name="password" class="form-control"  placeholder="" required>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Submit form</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end page title -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
            </div>
<?= $this->endSection(); ?>