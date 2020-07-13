<?php include_once  __DIR__."/../include/header.php"; ?>
<div class="container mt-5">
    <div class="row pt-5">
        <div class="shadow col-md-4 col-4 offset-md-4 offset-4 mt-5 border-1 bg-white">
            <form action="admin/login" method="post">
            <div class="col-auto text-center">
                <img src="<?php echo getenv('APP_HOST').'/assets/media/company/logo80.png' ?> " class="img-fluid p-3" alt="">
            </div>
            <div class="col-auto mt-2">
            <div class="input-group">
                <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                </div>
                    <input type="text" class="form-control" id="user_mail" name="user_mail" placeholder="Digite seu e-mail">
                </div>
            </div> 
            <div class="col-auto mt-3 mb-2">
            <div class="input-group mb-2">
                <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-lock"></i>&nbsp;&nbsp;</div>
                </div>
                    <input type="password" class="form-control" id="user_password" name="user_password" placeholder="Digite sua senha">
                </div>
            </div> 
            <div class="col-auto mb-4 text-center">
                <input type="submit" value="Acessar" class="btn btn-primary" style="border-radius:0px" name="action"/>
            </div>
            </form>
        </div>
        <div class="shadow col-md-4 col-4 offset-md-4 offset-4 p-2 border-1 bg-dark text-white text-center">
            Todos os direitos ao <b style="font-size:11px">GL Lima Terceirização</b>
        </div>
    </div>
</div>
<?php include_once __DIR__."/../include/footer.php"; ?>