<?php

require_once __DIR__ . "/../Model/Model.php";
require_once __DIR__ . "/../Model/Category.php";


$categories = new Category();
// var_dump($categories->all());
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Blank Page &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="../assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
    <script src="../assets/js/jquery-3.7.1.js"></script>
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <!-- navbar -->
            <?= include('../components/layout/navbar.php'); ?>
            <!-- sidebar -->
            <?= include('../components/layout/sidebar.php'); ?>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Home Category</h1>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Advanced Table</h4>
                                        <div class="card-header-form">
                                            <form>
                                                <div class="input-group">
                                                    <input name="keyword" id="keyword" type="text" class="form-control" placeholder="Search">
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div id="content" class="table-responsive">
                                            <table class="table table-striped">
                                                <tr>
                                                    <th>
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                                            <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                                        </div>
                                                    </th>
                                                    <th>Name Category</th>
                                                    <th>Action </th>

                                                </tr>


                                                <?php foreach ($categories->all() as $category) : ?>
                                                    <tr>
                                                        <td class="">
                                                            <div class="custom-checkbox custom-control">
                                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                                                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td><?= $category["name"] ?></td>

                                                        <td>
                                                            <a href="detail-category.php <?= $category["id"] ?>" class="btn btn-primary mr-1"> <i class="fas fa-info-circle"></i> Detail</a>
                                                            <a href="edit-category.php <?= $category["id"] ?>" class="btn btn-success mr-1"> <i class="fas fa-edit"></i> Edit </a>
                                                            <a href="hapus-category.php <?= $category["id"] ?>" class="btn btn-danger mr-1"> <i class="fas fa-trash-alt"></i> Hapus</a>
                                                        </td>

                                                    </tr>
                                                <?php endforeach; ?>


                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- footer -->
            <?= include('../components/layout/footer.php'); ?>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="../assets/modules/jquery.min.js"></script>
    <script src="../assets/modules/popper.js"></script>
    <script src="../assets/modules/tooltip.js"></script>
    <script src="../assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="../assets/modules/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script>
        $(document).ready(function() {
            $("#keyword").on("keyup", function() {
                console.log($('#keyword').val())
                $("#content").load("../assets/search/Category.php?keyword=" + $("#keyword").val());
            });
        });
    </script>
</body>

</html>