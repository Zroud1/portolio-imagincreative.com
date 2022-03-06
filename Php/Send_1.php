<?php
	session_start();
	
	ini_set('display_errors','on');
	
	if(isset($_POST['nmpr']) && isset($_POST['mail']) && isset($_POST['tel']) && isset($_POST['sce']) && isset($_POST['msg'])){
		$x1 = $_POST['nmpr']; $x3 = $_POST['tel']; $x4 = $_POST['sce']; $x5 = $_POST['msg']; $x6 = $_POST['spc']; $x7 = $_POST['obj'];
		$x2 = $_POST['mail']; $x8 = $_POST['sex'];
		if($x1 != "" && $x2 != "" && $x3 != "" && $x4 != "" && $x5 != "" && $x6 != "" && $x7 != "" && $x8 != ""){
			if(filter_var($x2, FILTER_VALIDATE_EMAIL)){
			
				echo 'Nom Prn 	 | '.$x1.'<br />';
				echo 'Mail 		 | '.$x2.'<br />';
				echo 'Tel 		 | '.$x3.'<br />';
				echo 'Service 	 | '.$x4.'<br />';
				echo 'Sms 		 | '.$x5.'<br />';
				echo 'Specialite | '.$x6.'<br />';
				echo 'Objet		 | '.$x7.'<br />';
				echo 'Genre		 | '.$x8.'<br />';
				echo 'File Name  | '.$_FILES['f1']['name'].'<br />';
				echo 'File Size	 | '.$_FILES['f1']['size'].'<br />';
				echo 'File Type	 | '.$_FILES['f1']['type'];
				
				/*
				$to       = 'othmane.metate@gmail.com';
				$subject  = 'Demande devis | '.$x4;
				$boundary =  md5(uniqid(microtime(), TRUE));
			
			
				$message  = '--'.$boundary."\r\n";
				$message .= 'Content-type: text/html; charset=UTF-8' ."\r\n";
				$message .= '<table cellspacing=0 cellpading=0 width=100%>'.
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
									'<td style="font: 14px fantasy; padding: 8px 5px; border-top: 2px solid #000; border-right: 2px solid #000; background-color: #ff0313; color: #FFF;">Niv Scolaire </td>'.
									'<td style="font: 14px fantasy; padding: 8px 5px; border-top: 2px solid #000;">'.$x4.'</td>'.
								'</tr>'.
								'<tr>'.
									'<td style="font: 14px fantasy; padding: 8px 5px; border-top: 2px solid #000; border-right: 2px solid #000; background-color: #ff0313; color: #FFF;">Spécialité </td>'.
									'<td style="font: 14px fantasy; padding: 8px 5px; border-top: 2px solid #000;">'.$x6.'</td>'.
								'</tr>'.
								'<tr>'.
									'<td style="font: 14px fantasy; padding: 8px 5px; border-top: 2px solid #000; border-right: 2px solid #000; background-color: #ff0313; color: #FFF;">Objectif </td>'.
									'<td style="font: 14px fantasy; padding: 8px 5px; border-top: 2px solid #000;">'.$x7.'</td>'.
								'</tr>'.
								'<tr>'.
									'<td style="font: 14px fantasy; padding: 8px 5px; border-top: 2px solid #000; border-right: 2px solid #000; background-color: #ff0313; color: #FFF;">Genre </td>'.
									'<td style="font: 14px fantasy; padding: 8px 5px; border-top: 2px solid #000;">'.$x8.'</td>'.
								'</tr>'.
								'<tr>'.
									'<td style="font: 14px fantasy; padding: 8px 5px; border-top: 2px solid #000; border-right: 2px solid #000; border-bottom: 2px solid #000; background-color: #ff0313; color: #FFF;">École </td>'.
									'<td style="font: 14px fantasy; padding: 8px 5px; border-top: 2px solid #000; border-bottom: 2px solid #000;">'.$x5.'</td>'.
								'</tr>'.
							'</table>';
				
				
					$file_type = $_FILES['f1']['type'];
					$file_size = $_FILES['f1']['size'];
					$file_name = $_FILES['f1']['name'];
				 
					$handle  = fopen($file_name, 'r') or die('File '.$file_name.'can t be open');
					$content = fread($handle, $file_size);
					$content = chunk_split(base64_encode($content));
					$f       = fclose($handle);
				 
					$message .= '--'.$boundary."\r\n";
					$message .= 'Content-type:'.$file_type.';name='.$file_name."\r\n";
					$message .= 'Content-transfer-encoding:base64'."\r\n\r\n";
					$message .= $content."\r\n";
				
					$headers  = 'MIME-Version: 1.0' ."\r\n";
					$headers .= 'Content-Type: multipart/mixed;boundary='.$boundary."\r\n";
					$headers .= "From: ".$x2." \r\n" .
								"Reply-To: ".$x2." \r\n" .
								"X-Mailer: PHP/" . phpversion();
					
					$message .= '--'.$boundary."\r\n";
					
					mail($to, $subject, $message, $headers);
				
					// header('location:../carriere.php');
				*/
				}
			} else { header('location:../carriere.php'); }
		} else { header('location:../carriere.php');  }
	} else { header('location:../carriere.php');  }
?>