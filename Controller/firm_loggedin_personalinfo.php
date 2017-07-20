<?php 
  
 
  
  
		$infos=personal_info_firm($id);
		foreach($infos as $info){
		echo'<div class="line">
		<h4><b>Firm Name:</b> '.$info['FirmName'].'</h4>
		</div>';
		
		echo'<div class="line">
		<h4><b>Firm insurance number:</b> '.$info['FirmInsuranceNum'].'</h4>
		</div>';


		echo'<div class="line">
		<h4><b>Firm regular number:</b> '.$info['FirmRegNum'].'</h4>
		</div>';

		echo'<div class="line">
		<h4><b>CEO name:</b> '.$info['Supervisor'].'</h4>
		</div>';
		
		
		echo'<div class="line">
		<h4><b>Activity:</b> '.$info['activity'].'</h4>
		</div>';
		
		echo'<div class="line">
		<h4><b>Skype Account:</b> '.$info['FirmSkypeAccount'].'</h4>
		</div>';
		

	}
	
?>