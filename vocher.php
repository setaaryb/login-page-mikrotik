<?php
if(substr($validity,-1) == "d"){
  $validity = "   <br>MASA AKTIF : ".substr($validity,0,-1)." HARI";
}else if(substr($validity,-1) == "h"){
  $validity = "MASA AKTIF : ".substr($validity,0,-1)."Jam";
}
if(substr($timelimit,-1) == "d" & strlen($timelimit) >3){
  $timelimit = "Durasi:".((substr($timelimit,0,-1)*7) +  substr($timelimit, 2,1))." HARI";
}else if(substr($timelimit,-1) == "d"){
  $timelimit = "Durasi:".substr($timelimit,0,-1)." HARI";
}else if(substr($timelimit,-1) == "h"){
  $timelimit = "Durasi:".substr($timelimit,0,-1)."Jam";
}else if(substr($timelimit,-1) == "w"){
  $timelimit = "Durasi:".(substr($timelimit,0,-1)*7)." HARI";
}
if($mks ) { $mks = "border:none; width: 215px; height:141px; background: url('https://setaaryb.github.io/login-page-mikrotik/vcr.png') no-repeat; background-size:contain;";}
else{ $mks = "border:none; width: 215px; height:141px; background: 
url('https://setaaryb.github.io/login-page-mikrotik/vcr.png') no-repeat; background-size:contain;";}?> 	
<table style="display:inline-block;border-collapse:  collapse;border-radius: 3px;border: 1px solid #444;
margin: 2.5px;width: 140px;overflow:hidden;position:relative;padding: 1px;margin: 0px;border: 1px solid #444; background:<?php echo $mks ?>; ">		
<tbody>
 <tr>  
   <td> 
<div style="font-weight:bold;font-weight:bold;margin-top: 5px;margin-left:130px;font-size:18px;padding-left:17px;color:#fff ">
<small style="font-size:13px;margin-left:-25px;position:absolute;">Rp.</small><?php echo $getprice;?>
</div>	   
<div>
	<?php if($usermode == "vc"){?>    
   <div style="text-align:left;margin-top: 8px; margin-left:5px;">
	<b style="text-align:left;font-size:10px;color:#fff;">  kode aktivasi<br>
   <b style="border: 1px #fff solid; border-radius:3px; solid  #444;background:#fff;text-align:left;font-size:10px;color:#333;"><?= $username ?> 
	 </b>	   
</div>	
<?php }elseif($usermode == "up"){?>	   
   <div style="margin-top: 8px; margin-left:5px;">
	<b style="text-align:left;font-size:10px;color:#fff;">kode aktivasi <br>   
   <b style="border: 1px #fff solid; border-radius:3px; solid  #444;background:#fff;text-align:left;font-size:10px;color:#333;">U : <?= $username ?> - P : <?= $password; ?></b><?php }?>	
   </div> 
	<br>   
<div style="color:#fff; margin-top: -25px; margin-left:5px;">
   <b style="font-size:9px"><?= $validity; ?><br><?= $timelimit; ?><br>Login/logout : <?= $dnsname; ?>
<div style="margin-top: -60px; margin-left:135px;">
  <img style="border: 1px #333 solid; border-radius:4px; solid  #444;width:60px;height:60px;"  <?= $qrcode ?> 
	</div>
<div style="border: 1px #fff solid; border-radius: 3px; solid  #444;background:#fff;color:#333; margin-top: 14px; margin-left:-5px;">
   <b style="font-size:9px"><b><?= $hotspotname; ?><span id="num"><?= " [$num]"; ?></b> 
  </div> 	   

</td>
   </tr>
   </tbody>
   </table>	
