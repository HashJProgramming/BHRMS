<?php
include_once 'functions/authentication.php';
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - BHRMS</title>
    <meta name="description" content="Boarding House Rental Management System">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Change-Password-floating-Label.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-icons.css">
    <link rel="stylesheet" href="assets/css/Profile-with-data-and-skills.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper" style="background: rgb(255,255,255);">
            <nav class="navbar navbar-expand-lg shadow py-3 border mb-4 navbar-light">
                <div class="container-fluid"><span class="bs-icon-md bs-icon-rounded bs-icon-semi-white border rounded-circle border-primary-subtle shadow-lg d-flex justify-content-center align-items-center me-2 bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-house-heart-fill">
                            <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707L7.293 1.5Z"></path>
                            <path d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9.293Zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018Z"></path>
                        </svg></span><a class="navbar-brand d-flex align-items-center" href="/"><span>&nbsp;BHRMS</span></a><button data-bs-toggle="collapse" data-bs-target="#navcol-1" class="navbar-toggler"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-original-title="Here you can see your Dashboard." data-bs-placement="bottom" href="index.php" style="color:#393939;" title="Here you can see your Dashboard."><i class="fas fa-th-list"></i>&nbsp;Dashboard</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-original-title="Here you can see your Dashboard." data-bs-placement="bottom" href="boarders.php" style="color:#393939;" title="Here you can view and manage the boarders."><i class="fas fa-users"></i>&nbsp;Boarders</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-original-title="Here you can see your Dashboard." data-bs-placement="bottom" href="rooms.php" style="color:#393939;" title="Here you can view and manage the rooms."><i class="fas fa-home"></i>&nbsp;Rooms</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-original-title="Here you can see your Dashboard." data-bs-placement="bottom" href="rentals.php" style="color:#393939;" title="Here you can view and transact payments."><i class="fas fa-credit-card"></i>&nbsp;Rental</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-original-title="Here you can see your Sales &amp; Transactions." data-bs-placement="bottom" href="reports.php" style="color:#393939;" title="Here you can view, export and print the sales reports."><i class="fas fa-chart-pie"></i>&nbsp;Reports</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-original-title="Here you can manage your account." data-bs-placement="bottom" href="account.php" style="color:#393939;" title="Here you can manage your account."><i class="fas fa-user-shield"></i>&nbsp;My Account</a></li>
                        </ul><a class="btn btn-light shadow" role="button" data-bs-original-title="Here you can logout your acccount." data-bs-placement="left" data-bs-toggle="tooltip" data-bss-tooltip="" href="functions/logout.php">logout</a>
                    </div>
                </div>
            </nav>
            <div id="content">
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Boarders</h3><button class="btn btn-primary btn-icon-split" type="button" data-bs-target="#add" data-bs-toggle="modal"><span class="text-white-50 icon"><i class="fas fa-user-friends"></i></span><span class="text-white text">Add Boarder</span></button>
                    </div>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Boarders Lists</p>
                        </div>
                        <div class="card-body">
                            
                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Boarders</th>
                                            <th>Room</th>
                                            <th>Type</th>
                                            <th>Rent</th>
                                            <th>Start date</th>
                                            <th>Cellphone</th>
                                            <th class="text-center">Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php include_once 'functions/views/boraders.php' ?>
                                    </tbody>
                                    <tfoot>
                                        <tr></tr>
                                    </tfoot>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="add">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Boarder</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="functions/add-boarder.php" method="POST" enctype="multipart/form-data">
                        <div class="container">
                            <div class="form-floating mb-3"><input class="form-control form-control" type="text" placeholder="Fullname" name="fullname" required=""><label class="form-label" for="floatingInput">Fullname</label></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3"><input class="form-control form-control" type="text" placeholder="Phone" name="phone" minlength="11" maxlength="11" required=""><label class="form-label" for="floatingInput">Phone</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating"><select class="form-select form-select" aria-label="Floating label select example" id="floatingSelect-2" name="sex" required="">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select><label class="form-label" for="floatingSelect">Sex</label></div>
                                </div>
                            </div>
                            <div class="form-floating mb-3"><input class="form-control form-control" type="text" placeholder="Address" name="address" required=""><label class="form-label" for="floatingInput">Address</label></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3"><input class="form-control form-control" placeholder="Start Date" name="start_date" type="date" required=""><label class="form-label" for="floatingInput">Start Date</label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating"><select class="form-select form-select" aria-label="Floating label select example" id="floatingSelect-1" name="room" required="">
                                            <option value="1">Room 1</option>
                                            <option value="Female">Female</option>
                                        </select><label class="form-label" for="floatingSelect">Room#</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating"><select class="form-select form-select" aria-label="Floating label select example" id="floatingSelect-3" name="type" required="">
                                            <option value="Bed Spacer">Bed Spacer</option>
                                            <option value="Regular">Regular</option>
                                        </select><label class="form-label" for="floatingSelect">Type</label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 mt-3"><label class="form-label">Profile Picture</label><input class="form-control" type="file" accept="image/*" name="profile" required=""></div>
                                </div>
                                <div class="col">
                                    <div class="mb-3 mt-3"><label class="form-label">Proof of Identity</label><input class="form-control" type="file" accept="image/*" name="proof" required=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer"><button class="btn btn-primary" type="submit">Save</button></div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="update">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Boarder</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="container">
                            <div class="form-floating mb-3"><input class="form-control form-control" type="text" placeholder="Fullname" name="fullname" required=""><label class="form-label" for="floatingInput">Fullname</label></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3"><input class="form-control form-control" type="text" placeholder="Phone" name="phone" minlength="11" maxlength="11" required=""><label class="form-label" for="floatingInput">Phone</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating"><select class="form-select form-select" aria-label="Floating label select example" id="floatingSelect-4" name="sex" required="">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select><label class="form-label" for="floatingSelect">Sex</label></div>
                                </div>
                            </div>
                            <div class="form-floating mb-3"><input class="form-control form-control" type="text" placeholder="Address" name="address" required=""><label class="form-label" for="floatingInput">Address</label></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3"><input class="form-control form-control" placeholder="Rent" name="rent" type="date" required=""><label class="form-label" for="floatingInput">Start Date</label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating"><select class="form-select form-select" aria-label="Floating label select example" id="floatingSelect-5" name="room" required="">
                                            <option value="1">Room 1</option>
                                            <option value="Female">Female</option>
                                        </select><label class="form-label" for="floatingSelect">Room#</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating"><select class="form-select form-select" aria-label="Floating label select example" id="floatingSelect-6" name="type" required="">
                                            <option value="Bed Spacer">Bed Spacer</option>
                                            <option value="Regular">Regular</option>
                                        </select><label class="form-label" for="floatingSelect">Type</label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 mt-3"><label class="form-label">Profile Picture</label><input class="form-control" type="file" accept="image/*" name="profile" required=""></div>
                                </div>
                                <div class="col">
                                    <div class="mb-3 mt-3"><label class="form-label">Proof of Identity</label><input class="form-control" type="file" accept="image/*" name="proof" required=""></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-primary" type="button">Save</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="remove">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Remove</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to remove this boarder?</p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">No</button><button class="btn btn-danger" type="button">Yes</button></div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/js/dataTables.buttons.min.js"></script>
    <script src="assets/js/jszip.min.js"></script>
    <script src="assets/js/pdfmake.min.js"></script>
    <script src="assets/js/vfs_fonts.js"></script>
    <script src="assets/js/buttons.html5.min.js"></script>
    <script src="assets/js/buttons.print.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/sweetalert.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>