<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Covid Vaccine Administration System</title>
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('home')); ?>">
                    <i class="ni ni-tv-2 text-primary"></i> <?php echo e(__('Dashboard')); ?>

                </a>
            </li>

              <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                    <i class="fab fa-laravel" style="color: #f4645f;"></i>
                    <span class="nav-link-text" style="color: #f4645f;"><?php echo e(__('1st Vaccination')); ?></span>
                </a>

                <div class="collapse show" id="navbar-examples">
                    <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('registration1st')); ?>">
                                <?php echo e(__('Registration Process')); ?>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('deferral1st')); ?>">
                                <?php echo e(__('Defferal Process')); ?>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('vaccination1st')); ?>">
                                <?php echo e(__('Vaccination Process')); ?>

                            </a>
                        </li>
                    </ul>
                </div>
                <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                    <i class="fab fa-laravel" style="color: #f4645f;"></i>
                    <span class="nav-link-text" style="color: #f4645f;"><?php echo e(__('2nd Vaccination')); ?></span>
                </a>

                <div class="collapse show" id="navbar-examples">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('registration2nd')); ?>">
                                <?php echo e(__('Registration Process')); ?>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('deferral2nd')); ?>">
                                <?php echo e(__('Defferal Process')); ?>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('vaccination2nd')); ?>">
                                <?php echo e(__('Vaccination Process')); ?>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('tables')); ?>">
                                <?php echo e(__('View all')); ?>

                            </a>
                        </li>
                    </ul>
                </div>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
              <!-- Sidenav toggler -->

    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
            <div class="container mt-5">

    <h2 class="mb-4">Covid Vaccination Administration System Data Table 1st vaccination table </h2>
    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>Category</th>
                <th>comorbidity</th>
                <th>Unique Person ID</th>
                <th>Registered</th>
                <th>PWD</th>
                <th>last name</th>
                <th>first name</th>
                <th>middle name</th>
                <th>suffix</th>
                <th>contact</th>
                <th>region</th>
                <th>province</th>
                <th>municipality</th>
                <th>barangay</th>
                <th>sex</th>
                <th>birthdate</th>
                <th>deferral</th>
                <th>deferral reason</th>
                <th>Vaccination date</th>
                <th>vaccine manufacturer name</th>
                <th>batch number</th>
                <th>lot no</th>
                <th>bakuna Ceneter cbr id</th>
                <th>Vaccinator name</th>
                <th>1st dose</th>
                <th>2nd dose</th>
                <th>booster dose</th>
                <th>adverse event</th>
                <th>adverse event condition</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

</div>
          </div>
           

      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
        <div class="copyright text-center text-xl-left text-muted">
            &copy; <?php echo e(now()->year); ?> <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a> &amp;
            <a href="https://www.updivision.com" class="font-weight-bold ml-1" target="_blank">Updivision</a>
        </div>
          </div>
    <div class="col-xl-6">
        <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
                <a href="https://www.updivision.com" class="nav-link" target="_blank">Updivision</a>
            </li>
            <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
        </ul>
    </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "<?php echo e(route('patient1st.list')); ?>",
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
            scrollY: 600,
            scrollX: true,
            scroller: {
                loadingIndicator: true
            },
        columns: [
            {data: 'category', name: 'category'},
            {data: 'comorbidity', name: 'comorbidity'},
            {data: 'unique_person_id', name: 'unique_person_id'},
            {data: 'Registered', name: 'Registered'},
            {data: 'pwd', name: 'pwd'},
            {data: 'lastname', name: 'lastname'},
            {data: 'firstname', name: 'firstname'},
            {data: 'middlename', name: 'middlename'},
            {data: 'suffix', name: 'suffix'},
            {data: 'contact', name: 'contact'},
            {data: 'region', name: 'region'},
            {data: 'province', name: 'province'},
            {data: 'municipality', name: 'municipality'},
            {data: 'barangay', name: 'barangay'},
            {data: 'sex', name: 'sex'},
            {data: 'birthdate', name: 'birthdate'},
            {data: 'deferral', name: 'deferral'},
            {data: 'deferral_reason', name: 'deferral_reason'},
            {data: 'vaccination_date', name: 'vaccination_date'},
            {data: 'vaccine_manufacturer_name', name: 'vaccine_manufacturer_name'},
            {data: 'batch_number', name: 'batch_number'},
            {data: 'lot_no', name: 'lot_no'},
            {data: 'bakuna_center_cbr_id', name: 'bakuna_center_cbr_id'},
            {data: 'vaccinator_name', name: 'vaccinator_name'},
            {data: '1st_dose', name: '1st_dose'},
            {data: '2nd_dose', name: '2nd_dose'},
            {data: 'booster_dose', name: 'booster_dose'},
            {data: 'adverse_event', name: 'adverse_event'},
            {data: 'adverse_event_condition', name: 'adverse_event_condition'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });
    
  });
</script>
</body>

</html><?php /**PATH C:\Users\Blein Shester Alcon\Desktop\COVAS FOLDER\CoVAS\resources\views/pages/tables-1st.blade.php ENDPATH**/ ?>