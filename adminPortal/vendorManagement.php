<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

</head>

<body>

    <!-- ======= Header ======= -->
    <?php include 'Includes/header.php'; ?>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php include 'Includes/sideHeader.php'; ?>
    <!-- End Sidebar-->


    <main id="main" class="main">

        <div class="pagetitle">
            <h1> Vendor Management </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Manage Vendors</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="cardTitleHeading">
                                <h5 class="card-title">Manage Vendor</h5>
                                <a href="addVendor.php">Add Vendor</a>
                            </div>
                            <div class="table-responsive">

                                <table id="listingTable" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Hours</th>
                                            <th>Location</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>10</td>
                                            <td> Nixon</td>
                                            <td>24 hrs</td>
                                            <td>Lorem ipsum dolor sit, amet consectetur.</td>
                                            <td> <button class="listEditButton"><i class="bi bi-pencil"></i></button>
                                                <button class="listDeleteButton"><i class="bi bi-trash3"></i></button>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td> Nixon</td>
                                            <td>1234</td>
                                            <td>Lorem ipsum dolor sit, amet consectetur.</td>
                                            <td> <button class="listEditButton"><i class="bi bi-pencil"></i></button>
                                                <button class="listDeleteButton"><i class="bi bi-trash3"></i></button>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td> Nixon</td>
                                            <td>1234</td>
                                            <td>Lorem ipsum dolor sit, amet consectetur.</td>
                                            <td> <button class="listEditButton"><i class="bi bi-pencil"></i></button>
                                                <button class="listDeleteButton"><i class="bi bi-trash3"></i></button>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td> Nixon</td>
                                            <td>1234</td>
                                            <td>Lorem ipsum dolor sit, amet consectetur.</td>
                                            <td> <button class="listEditButton"><i class="bi bi-pencil"></i></button>
                                                <button class="listDeleteButton"><i class="bi bi-trash3"></i></button>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </section>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include 'Includes/footer.php'; ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/chart.js/chart.umd.js"></script>
    <script src="../assets/vendor/echarts/echarts.min.js"></script>
    <script src="../assets/vendor/quill/quill.min.js"></script>
    <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- jquery Cdn -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#listingTable').DataTable();

        });
    </script>
    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>