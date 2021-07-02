<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <?php include("includes/css.php"); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  

 <?php include("includes/header.php"); ?>
  <!-- /.navbar -->

  <!-- Main sidebar Container -->
  

    <!-- sidebar -->
    <?php include("includes/sidebar.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content header (Page header) -->
    <?php include("includes/breadcrumb.php"); ?>
     <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 pt-4">
            <h1 class="text-center pr-md-5 mr-md-3"><i class="fad fa-head-side-brain"></i> Ability</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="m-md-3 m-2">
      
      <div class="container">
       <div class="row py-5 bgcolor1 border1">
         <div class="col-lg-12 d-lg-flex justify-content-lg-center">
          <input type="text" placeholder="Ability" class="mr-lg-2 mb-lg-0 mb-md-0 mb-2 w-50" maxlength="50"> 
          <input type="number" placeholder="Max time" class="mr-lg-2 mb-lg-0 mb-md-0 mb-2 w-25" min="0" max="99">
          <button type="button" class="bg-primary buttonstyle buttonhover"><i class="fas fa-arrow-alt-to-right"></i> Submit</button>


         </div>
       </div> 


      </div>
          </section>
      

          <section>
            <div class="container">
              <div class="row">
                <div class='col-lg-12'>
                  <div class="card">
            
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped tableId">
                  <thead>
                  <tr>
                    <th>SNo</th>
                    <th>Ability</th>
                    <th>Max Time</th>
                    <th>Action</th>
			  <th>yellow</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td> 1.</td>
                    <td>Ability</td>
                    <td>Max Time</td>
                    <td><div class="dropdown show" style=" display: inline !important;">
                                <a href="#" class="btn btn-light btn-sm " role="button" id="dropdownMenuLink" data-toggle="dropdown">
                                    <i class="fas fa-ellipsis-h"></i><i class="fas fa-angle-down ml-2" style="font-size:1.3em;"></i>
                                </a>
                            
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                               
                                <a class="dropdown-item" href="mast-edit-ability.php" data-toggle="modal" data-target="#exampleModalCenter">Edit </a>

                                

                              </div>
                             <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fad fa-head-side-brain"></i> Edit Ability</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" placeholder="Ability" class="mr-lg-2 mb-lg-0 mb-md-0 mb-2 w-75" maxlength="50"> 
        <input type="number" placeholder="Max time" class="mb-lg-0 mb-md-0 mb-2 widthnum" min="0" max="99">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary"><i class="fas fa-arrow-alt-to-right"></i> Submit</button>
      </div>
    </div>
  </div>
</div>
                            </div>  </td>
                  </tr>
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

                </div>
              </div>
            </div>
          </section>
    <!-- /.content-header -->

    <!-- Main content -->
   
        </div>

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->

    </section>

    <!-- /.content -->
  </div>


  <!-- /.content-wrapper -->
 <?php include("includes/footer.php"); ?>

  <!-- Control sidebar -->

  <!-- /.control-sidebar -->
</div>

 <?php include("includes/jslinks.php"); ?>
 <script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- Bootstrap 4 -->
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
	$(document).ready(function(){
    $('input[type="number"]').on('keyup',function(){
        v = parseInt($(this).val());
        min = parseInt($(this).attr('min'));
        max = parseInt($(this).attr('max'));

        /*if (v < min){
            $(this).val(min);
        } else */if (v > max){
            $(this).val(max);
        }
    })
})
</script>




<!-- ./wrapper -->

<!-- jQuery -->

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

</body>
</html>
