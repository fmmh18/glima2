<?php include __DIR__."/include/header.php"; ?>
<body>
<?php include __DIR__."/include/contact.php"; ?>
<?php include __DIR__."/include/menu.php"; ?>
<div style="width:100%;background-color: white">
<div class="about">
<div class="container">
    <div class="row p-5">
        <div class="col-md-12 col-12 text-center">
            <h1 class="text-white mt-5">Sobre</h1>
        </div>
    </div>   
    </div>   
</div>

<div class="container">
        <div class="col-md-12 col-12 pt-4 pb-4">
            <?php echo $page['page_html']; ?>
        </div>
    </div> 
</div>
</div>
<div class="container mt-3">
    <div class="row"> 
        <?php foreach($datas as $data){ ?>
            <div class="col-md-3">
                <a href="<?php echo getenv('APP_HOST').$data->image_path; ?>"  rel="ligthbox" class="thumbnail fancybox">
                <img class="img img-thumbnail" src="<?php echo getenv('APP_HOST').$data->image_path_thumbnail; ?>" alt="<?php echo $data->image_name; ?>" >
                <div class="text-right">
                    <small class="text-muted"><?php echo $data->image_title; ?></small>
                </div>
                </a>
            </div>
        <?php } ?> 
    </div>
</div>
</body>
<?php include __DIR__."/include/map.php"; ?>
<?php include __DIR__."/include/address.php"; ?>
<?php include __DIR__."/include/footer.php"; ?>
<script>
$(document).ready(function(){ 
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
   
</script>