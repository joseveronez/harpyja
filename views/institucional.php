<?php 
    $qualquer = $_GET['inst']
?>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 MarginT30p MarginB10p">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 MarginB7p" style="background-image: url(<?= RAIZSITE ?>/imagens/teste.jpg); background-position: center center; background-repeat: no-repeat; background-size: cover; background-origin: content-box ; height: 250px;">
        </div>
        <?php
            if ($qualquer == 1){
                ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginB10p">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3 class="size18">A EMPRESA</h3>
                        <hr class="hrTitleSobre hrPadrao MarginB2p">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p class="size13 justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dictum, augue a varius lobortis, ipsum velit ornare augue, et consequat sem massa quis nulla. Aenean venenatis vulputate odio quis laoreet. Nulla aliquam urna leo, nec euismod tortor mollis id. Fusce dictum quam sit amet ante pellentesque, nec luctus elit aliquet. Nunc iaculis purus non egestas semper. Duis condimentum dictum mattis. Nullam ultrices nulla sit amet eros dignissim semper. Cras sagittis diam mauris, et ullamcorper nisl interdum id. Maecenas fermentum tempus urna, at dapibus tortor varius ac. Phasellus vitae tempus nulla, sed iaculis ligula. Ut et tellus ac lorem sagittis efficitur. Donec vitae risus dictum, consequat nibh id, finibus turpis. Sed nec nunc orci. Nunc faucibus turpis ut lorem convallis, id volutpat tortor dictum.</p>
                    </div>
                </div>
                <?php
            } else {
                ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3 class="size18">O NOME</h3>
                        <hr class="hrTitleSobre hrPadrao MarginB2p">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p class="size13 justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dictum, augue a varius lobortis, ipsum velit ornare augue, et consequat sem massa quis nulla. Aenean venenatis vulputate odio quis laoreet. Nulla aliquam urna leo, nec euismod tortor mollis id. Fusce dictum quam sit amet ante pellentesque, nec luctus elit aliquet. Nunc iaculis purus non egestas semper. Duis condimentum dictum mattis. Nullam ultrices nulla sit amet eros dignissim semper. Cras sagittis diam mauris, et ullamcorper nisl interdum id. Maecenas fermentum tempus urna, at dapibus tortor varius ac. Phasellus vitae tempus nulla, sed iaculis ligula. Ut et tellus ac lorem sagittis efficitur. Donec vitae risus dictum, consequat nibh id, finibus turpis. Sed nec nunc orci. Nunc faucibus turpis ut lorem convallis, id volutpat tortor dictum.</p>
                    </div>
                </div>
                <?php
            }
        ?>
    </div>
</div>
<script type="text/javascript">
</script>