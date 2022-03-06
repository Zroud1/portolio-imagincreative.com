<?php
	session_start();
	
	if(isset($_POST['nmpr']) && isset($_POST['mail']) && isset($_POST['tel']) && isset($_POST['sce']) && isset($_POST['msg'])){
		$x1 = $_POST['nmpr']; $x3 = $_POST['tel']; $x2 = $_POST['mail']; $x4 = $_POST['sce']; $x5 = $_POST['msg'];
		if($x1 != "" && $x2 != "" && $x3 != "" && $x4 != "" && $x5 != ""){
			if(filter_var($x2, FILTER_VALIDATE_EMAIL)){
				
				$to      = 'othmane.metate@gmail.com';
				$subject = 'Demande devis | '.$x4;
				$message =  '<table cellspacing=0 cellpading=0 width=100%>'.
								'<tr>'.
									'<td style="font: 14px fantasy; width: 25%; padding: 8px 5px; border-top: 2px solid #000; border-right: 2px solid #000; background-color: #ff0313; color: #FFF;">Client </td>'.
									'<td style="font: 14px fantasy; width: 75%; padding: 8px 5px; border-top: 2px solid #000;">'.$x1.'</td>'.
								'</tr>'.
								'<tr>'.
									'<td style="font: 14px fantasy; padding: 8px 5px; border-top: 2px solid #000; border-right: 2px solid #000; background-color: #ff0313; color: #FFF;">Email </td>'.
									'<td style="font: 14px fantasy; padding: 8px 5px; border-top: 2px solid #000;" color: #000;>'.$x2.'</td>'.
								'</tr>'.
								'<tr>'.
									'<td style="font: 14px fantasy; padding: 8px 5px; border-top: 2px solid #000; border-right: 2px solid #000; background-color: #ff0313; color: #FFF;">N Tél </td>'.
									'<td style="font: 14px fantasy; padding: 8px 5px; border-top: 2px solid #000;">'.$x3.'</td>'.
								'</tr>'.
								'<tr>'.
									'<td style="font: 14px fantasy; padding: 8px 5px; border-top: 2px solid #000; border-right: 2px solid #000; background-color: #ff0313; color: #FFF;">Service </td>'.
									'<td style="font: 14px fantasy; padding: 8px 5px; border-top: 2px solid #000;">'.$x4.'</td>'.
								'</tr>'.
								'<tr>'.
									'<td style="font: 14px fantasy; padding: 8px 5px; border-top: 2px solid #000; border-right: 2px solid #000; border-bottom: 2px solid #000; background-color: #ff0313; color: #FFF;">Détail </td>'.
									'<td style="font: 14px fantasy; padding: 8px 5px; border-top: 2px solid #000; border-bottom: 2px solid #000;">'.$x5.'</td>'.
								'</tr>'.
							'</table>';
				
				$headers  = 'MIME-Version: 1.0' ."\r\n";
				$headers .= 'Content-type: text/html; charset=UTF-8' ."\r\n";
				$headers .= "From: ".$x2." \r\n" .
							"Reply-To: ".$x2." \r\n" .
							"X-Mailer: PHP/" . phpversion();

				mail($to, $subject, $message, $headers);
				
				header('location:../demande-devis.php');
			} else { header('location:../demande-devis.php'); }
		} else { header('location:../demande-devis.php'); }
	} else { header('location:../demande-devis.php'); }
?>