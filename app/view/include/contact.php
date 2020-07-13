<div class="p-2" style="background-color: #E3E3E3;font-size:12px">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-2"><?php if(!empty($company['company_facebook'])){?><i class="fa fa-facebook"></i><?php }?> <?php if(!empty($company['company_linkedin'])){ ?><i class="fa fa-linkedin"></i><?php } ?> <?php if(!empty($company['company_google_plus'])){ ?><i class="fa fa-google-plus"></i><?php } ?></div>
            <div class="col-md-7 col-7 text-right"><i class="fa fa-envelope"></i> <?php echo $company['company_mail']; ?></div>
            <div class="col-md-3 col-3 text-right"><i class="fa fa-phone"></i> <?php echo $company['company_phone']; ?> / <?php echo $company['company_phone2']; ?></div>
        </div>
    </div>
</div>