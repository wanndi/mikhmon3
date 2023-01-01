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
if($mks ) { $mks = "border:none; width: 217px; height:143px; background: url('http://192.168.77.2/mikhmonV3/img/bg-vc.png') no-repeat; background-size:contain;";}
else{ $mks = "border:none; width: 217px; height:141px; background: 
url('http://192.168.77.2/mikhmonV3/img/bg-vc.png') no-repeat; background-size:contain;";}?> 	
<table style="display:inline-block;border-collapse:collapse;border-radius: 3px;border: 1px solid #00bcd4;
width: 140px;overflow:hidden;position:relative;padding: 1px;margin: 0px;border: 1px solid #00bcd4; background:<?php echo $mks ?>; ">		
<tbody>
 <tr>  
   <td> 
<div style="font-weight:bold;font-weight:bold;margin-top: 5px;font-size:18px;padding-left:125px;color:#fff ">
<small style="font-size:13px;margin-left:-25px;position:absolute;"></small><?php echo $price;?>
</div>	   
<div>
	<?php if($usermode == "vc"){?>    
   <div style="text-align:left;margin-top: 8px; margin-left:5px;">
	<b style="text-align:left;font-size:10px;color:#fff;">  Voucher<br>
   <b style="border: 1px #ddd solid; border-radius:3px; solid  #444;background:#fff;text-align:left;font-size:12px;color:#333;padding:3px"><?= $username ?> 
	 </b>	   
</div>	
<?php }elseif($usermode == "up"){?>	   
   <div style="margin-top: 8px; margin-left:5px;">
	<b style="text-align:left;font-size:10px;color:#fff;">Login/Member <br>   
   <b style="border: 1px #ddd solid; border-radius:3px; solid  #444;background:#fff;text-align:left;font-size:12px;color:#333;padding:2px">U : <?= $username ?><br> P : <?= $password; ?></b><?php }?>	
   </div> 
	<br>   
<div style="color:#fff; margin-top: -25px; margin-left:5px;">
   <b style="font-size:9px"><?= $validity; ?><br><?= $timelimit; ?><br>Login/logout : <?= $dnsname; ?>
<div style="margin-top: -60px; margin-left:135px;">
  <img style="border: 1px #333 solid; border-radius:4px; solid  #444;width:60px;height:60px;"  <?= $qrcode ?> 
	</div>
<div style="padding:3px;border: 1px blue #fff; border-radius: 3px; solid  #444;background:#ffffff;color:#000; margin-top: 14px; margin-left:-5px;">
   <b style="font-size:9px"><b><?= $hotspotname; ?><span id="num"><?php echo $comment." [$num]"; ?></b>
  </div> 	   
</td>
   </tr>
   </tbody>
   </table>	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        