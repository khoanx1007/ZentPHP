<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Category</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="views/assets/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
<?php
require_once("views/partials/header.php");
?>
<div id="layoutSidenav">
        <?php require_once('views/partials/sidebar.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                <div class="card mb-4">
                <div class="card-body">
                    <a href="index.php?mod=post&act=create" class="btn btn-primary float-right mb-3">Create category</a>
                        <table class="dataTable-table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Thumbnail</th>
                                <th>Category_ID</th>
                                <th>Content</th>
                                <th>Created_at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($posts as $key => $post) { ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $post['title'] ?></td>
                                    <td><?= $post['description'] ?></td>
                                    <td><img src="<?= $post['thumbnail']?>" style="width: 100px; height: 100px;"></td>
                                    <td><?= $post['category_id'] ?></td>
                                    <td><?= $post['content'] ?></td>
                                    <td><?= $post['created_at'] ?></td>
                                    <td>
                                        <a href="index.php?controller=category&action=edit&id=<?= $category['id'] ?>" class="btn btn-info" class="btn btn-warning">Edit</a>
                                        <a href="index.php?controller=category&action=destroy&id=<?= $category['id'] ?>" class="btn btn-info" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                </div>
            </div>
                </div>
            </main>
            <?php require_once('views/partials/footer.php'); ?>
        </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="views/assets/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>               
</body>
</html>