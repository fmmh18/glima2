<div class="bg-dark p-2 text-white">
<p><h4><?php echo $company['company_name']; ?></h4></p>
<p><b>Telefone(s):</b> <?php echo $company['company_phone']; ?> / <?php echo $company['company_phone2']; ?><br/>
<b>E-mail:</b> <?php echo $company['company_mail']; ?>
</p>
<p><h4 class="text-center">Endereço</h4></p>
<p class="text-center"><?php echo $company['company_address']; ?> - <?php echo $company['company_neighborhood']; ?> -
<?php echo $company['company_zipcode']; ?> - <?php echo $company['company_city']; ?>/<?php echo $company['company_state']; ?></p>
</div>