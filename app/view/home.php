<?php include __DIR__."/include/header.php"; ?>
<body>
<?php include __DIR__."/include/contact.php"; ?>
<?php include __DIR__."/include/menu.php"; ?>
<?php include __DIR__."/include/carrousel.php"; ?>
<div class="container">
    <div class="row p-5">
        <div class="col-md-12 col-12">
            <blockquote class="blockquote text-left">
                <p class="mb-0 pt-5 text-center">Conheça a história da nossa empresa.</p>
                <footer class="blockquote-footer">
                <cite title="Título da fonte">
                                <?php 
                                $texto = $page['page_html'];
                                $posicao = strpos($texto,"Sabemos conversar, orientar,");
                                echo substr($texto, 0,$posicao); ?>
                </cite></footer>
            </blockquote>
        </div>
    </div>
</div>
<div style="width:100%;background-color: white">
<div class="container">
    <div class="row p-5">
        <div class="col-md-12 col-12 text-center">
            <h3>Serviços</h3>
        </div>
    </div> 
    <div class="row">
        <?php foreach($service as $services): ?>
        <div class="col-4"><img class="figure-img img-fluid rounded" src="<?php echo $services['service_image']?>" title="<?php echo $services['service_name']?>" alt="<?php echo $services['service_name']?>">
        <h4><?php echo $services['service_name']; ?></h4>
        <p><?php echo $services['service_description']; ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</div>
</div>
</body>
<?php include __DIR__."/include/map.php"; ?>
<?php include __DIR__."/include/address.php"; ?>
<?php include __DIR__."/include/footer.php"; ?>