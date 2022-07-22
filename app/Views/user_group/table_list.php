<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">User Group</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">User Group</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">List Data User Group</h4>
                                        <a href="<?= base_url('user_group/create') ?>" class="btn btn-bg btn-outline-success">Add New User Group</a>
                                        <div class="row">
                                
                            </div>
                            <div class="col-md-2 mt-5">
                                    <!-- <div class="form-group">
                                        <label>Filter By User Type</label>
                                        <select class="form-control user_type" name="">
                                            <option>-- Choose --</option>
                                            <?php $no = 1; foreach($level_user as $l): ?>
                                                <?php if($no <> 1) { ?>
                                                   <option value="<?= $l['level_name'] ?>"><?= $l['level_name'] ?></option>
                                                <?php } ?>
                                            <?php $no++; endforeach ?>
                                        </select>
                                    </div> -->
                                </div>
                                    </div>
                                    <div class="card-body">
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                        

                                            <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Level Name</th>
                                                <th></th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <?php $no = 1; foreach($level_user as $level): ?>
                                            <tr id="<?= $level['id'] ?>">
                                                <td><?= $no?></td>
                                                <td><?= $level['level_name'] ?></td>
                                                <td>
                                                    <a href="<?= base_url('user_group/edit/'.$level['id']) ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                    <button type="submit" class="btn btn-sm btn-outline-danger remove"> Delete</button>
                                                </td>
                                            </tr>
                                            <?php $no++; endforeach ?>
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

            </div>

<script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");
    
       swal({
        title: "Are you sure?",
        text: "You will not be able to recover this data!",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel it!",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
          $.ajax({
             url: '/user_group/delete/' + id,
             type: 'GET',
             error: function() {
                alert('Something is wrong');
             },
             success: function(data) {
                  $("#"+id).remove();
                  swal("Deleted!", "Your data has been deleted.", "success");
             }
          });
        } else {
          swal("Cancelled", "Your data is safe :)", "error");
        }
      });
     
    });
    
</script>
<script type="text/javascript">
	$(document).ready(function() {
	    $('#datatable').DataTable();
	    function filterData () {
		    $('#datatable').DataTable().search(
		        $('.user_type').val()
		    	).draw();
		}
		$('.user_type').on('change', function () {
	        filterData();
	    });
	});
</script>
            <!-- end main content-->
<?= $this->endSection(); ?>

