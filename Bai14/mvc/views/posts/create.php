<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Post</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="assets/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <!-- header -->
    <?php require_once('views/partials/header.php'); ?>
    <!-- end header -->
    <div id="layoutSidenav">

        <!-- sidebar -->
        <?php require_once('views/partials/sidebar.php'); ?>
        <!-- end sidebar -->

        <div id="layoutSidenav_content">
            <!-- main -->
            <main>
                <div class="container-fluid px-4">
                    <h3 class="text-center my-3">Create New Post</h3>
                    <hr>
                    <form action="index.php?mod=category&act=store" method="POST" role="form" enctype="multipart/form-data" autocomplete="off">
                        <div class="form-group mb-3">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Description</label>
                            <input type="text" class="form-control" name="description">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Thumbnail</label>
                            <input type="file" class="form-control" name="thumbnail">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Content</label>
                            <textarea type="text" class="form-control" name="description"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Category</label>
                            <select class="form-control" name="parent_id">
                                <option value="">---</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </main>
            <!-- end main -->

            <!-- footer -->
            <?php require_once('views/partials/footer.php'); ?>
            <!-- end footer -->
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
</body>

</html>