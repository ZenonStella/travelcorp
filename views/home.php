<?php
include('../inc/header.php');
require_once '../controllers/home_controller.php';
?>



<div class="myfirstbox">
    <div class="myflexbox">
        <div class="mybox1">
            <div class=" picture2">
                <img class="picture" src="../assets/img/Kebumen.jpg">
                <p class="title1">Kebumen, au coeur de l'Indonésie</p>
                <p class="subtitle1">Indonésie</p>
            </div>
        </div> 
        <?php for ($i = 0; $i <= 5; $i++) { ?>
            <div class="mybox">
                <div class="picture2">
                    <img class="picture" src="../assets/img/SanFrancisco.jpg">
                </div>
                <h1>La baie de San Francisco</h1>
                <p class="textcontent"> autant de
                    souvenirs que
                    d'expériences différentes à raconter ? D'un voyage authentique et chaleureux empreint de saveurs, de
                    senteurs et de
                    légendes en Afrique, berceau de l'humanité.

                    Chaque séjour en club avec Pr
                </p>
                <p class="subtitle1">Indonésie</p>

            </div>
        <?php } ?>
    </div>
</div>

<?php
include('../inc/footer.php');
