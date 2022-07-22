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
                                                        <input type="text" name="level_name" class="form-control"  placeholder="level name" value="<?= $user_group['level_name'] ?>" required>
                                                        
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