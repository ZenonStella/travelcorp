<?php
include('../inc/header.php');
// require_once '../controllers/home_controller.php';
$json = file_get_contents('../data/continents.json');
$obj = json_decode($json, true);

?>



<div class="myfirstbox">
    <div class="myflexbox">
        <!-- <div class="mybox1">
            <div class=" picture2">
                <img class="picture" src="../assets/img/Kebumen.jpg">
                <p class="title1">Kebumen, au coeur de l'Indonésie</p>
                <p class="subtitle1">Indonésie</p>
            </div>
        </div>  -->
        <?php 
        foreach ($obj as $key => $value) { ?>
            <div class="mybox">
                <div class="picture2">
                    <img class="picture" src="../assets/img/<?= $value['picture'] ?>">
                </div>
                <p class="title1"><?= $value['title'] ?></p>
                <p class="textcontent"><?= $value['description'] ?></p>
                <p class="subtitle1"><?= $value['name'] ?></p>

            </div>
        <?php } ?>
    </div>
</div>

<?php
include('../inc/footer.php');
