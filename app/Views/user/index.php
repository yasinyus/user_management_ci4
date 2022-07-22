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
                                        <h4 class="card-title">Create New User</h4>
                                        <p class="card-title-desc">Create new user here</p>
                                    </div>
                                    <div class="card-body">
                                        <form class="needs-validation" novalidate>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">User name</label>
                                                        <input type="text" name="username" class="form-control"  placeholder="user name" required>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Email</label>
                                                        <input type="email" name="email" class="form-control"  placeholder="user@email.com"  required>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Password</label>
                                                        <input type="password" name="password" class="form-control"  placeholder="" required>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" required>
                                                            <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                                                            <div class="invalid-feedback">
                                                                You must agree before submitting.
                                                            </div>
                                                        </div>
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

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Minia.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by <a href="#!" class="text-decoration-underline">Themesbrand</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
<?= $this->endSection(); ?>