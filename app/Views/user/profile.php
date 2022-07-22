<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Profile</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">User</a></li>
                                            <li class="breadcrumb-item active">Profile</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-9 col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm order-2 order-sm-1">
                                                <div class="d-flex align-items-start mt-3 mt-sm-0">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-xl me-3">
                                                            <img src="<?= base_url('uploads/') ?>/<?= $user['photo_profile'] ?>" alt="" class="img-fluid rounded-circle d-block">
                                                        </div>
                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                data-bs-whatever="@mdo">Edit photo</button>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <div>
                                                            <h5 class="font-size-16 mb-1"><?= $user['user_name'] ?></h5>
                                                            <p class="text-muted font-size-13"><?= $user['account_name'] ?></p>
                                                            <p class="text-muted font-size-13"><?= $user['user_email'] ?></p>

                                                            <div class="d-flex flex-wrap align-items-start gap-2 gap-lg-3 text-muted font-size-13">
                                                                <div><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i><?= $user['level_name'] ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                       
                                    </div>
                                    <!-- end card body -->
                                </div>
                             
                            </div>
                         
                        </div>
                        <div class="col-lg-6">
                                <div class="">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script> 
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap gap-3">
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Change Profile Photo</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form action="<?php echo base_url('user/update_photo_profile').'/'.$user['user_id'];?>" name="ajax_form" id="ajax_form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                                        <div class="modal-body">
                                                            
                                                                <div class="mb-3">
                                                                    <label for="recipient-name" class="col-form-label">Select File Photo:</label>
                                                                    <input type="file" name="file" class="form-control" id="file" onchange="readURL(this);" accept=".png, .jpg, .jpeg" />
                                                                </div>
                                                            
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" id="send_form" class="btn btn-success">Submit</button>
          </div>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end preview-->
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <script>
                function readURL(input, id) {
                    id = id || '#blah';
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                
                        reader.onload = function (e) {
                            $(id)
                                    .attr('src', e.target.result)
                                    .width(200)
                                    .height(150);
                        };
                
                        reader.readAsDataURL(input.files[0]);
                    }
                }
                </script>

                
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