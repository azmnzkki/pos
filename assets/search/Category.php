<?php


require_once __DIR__ . "/../../Model/Model.php";
require_once __DIR__ . "/../../Model/Category.php";

$key = $_GET["keyword"];
$category = new Category();
$kategories = $category->search($key);


// var_dump($kategories);


?>

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


        <?php foreach ($kategories as $category) : ?>
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