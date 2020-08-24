<?php

require("../testPHP_mail/phpmailer/PHPMailerAutoload.php");
header('Content-Type: text/html; charset=utf-8');

$mail = new PHPMailer;
$mail->CharSet = "utf-8";
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;


$gmail_username = "cirwunb@gmail.com"; // gmail ที่ใช้ส่ง
$gmail_password = "unitomu1500"; // รหัสผ่าน gmail
// ตั้งค่าอนุญาตการใช้งานได้ที่นี่ https://myaccount.google.com/lesssecureapps?pli=1


$sender = "ผู้สมัครงาน"; // ชื่อผู้ส่ง
$email_sender = "noreply@ibsone.com"; // เมล์ผู้ส่ง 
$email_receiver = "unit.gg.co@gmail.com"; // เมล์ผู้รับ ***

$subject = "สมัครงาน"; // หัวข้อเมล์


$mail->Username = $gmail_username;
$mail->Password = $gmail_password;
$mail->setFrom($email_sender, $sender);
$mail->addAddress($email_receiver);
$mail->Subject = $subject;

$email_content = "
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset=utf-8'/>
			<title>ทดสอบการส่ง Email</title>
		</head>
			
		<body>
			<div style='background: #144f9d;padding: 10px 0 20px 10px;margin-bottom:10px;font-size:50px;color:white;' >
				UNIT
			</div>
          <div style='font-size:20px'>name : ".$name = $_POST['name']."<br>
		  Lastname : ".$lastname = $_POST['lastname']."<br>
		  Birth date : ".$birthday = $_POST['birthday']."<br>
		  Gender : ".$male = $_POST['male'].$female = $_POST['female']."<br>
          Nationality : ".$nationality = $_POST['nationality']."<br>
          Ethnicity : ".$ethnicity = $_POST['ethnicity']."<br>
          Religion : ".$religion = $_POST['religion']."<br>
          ID Card : ".$IDcard = $_POST['IDcard']."<br>
          E-mail : ".$email = $_POST['email']."<br>
          Posttion : ".$position_dropdown = $_POST['position_dropdown']."<br>
          Work experience : ".$workexperience = $_POST['workexperience']."<br>
          Address : ".$address = $_POST['address']."<br>
          Degree : ".$Degree = $_POST['degree']."<br>
          Department : ".$department = $_POST['department']."<br>
          Faculty : ".$faculty = $_POST['faculty']."<br>
          University : ".$university = $_POST['university']."<br>
          Graduation date : ".$graduationDate = $_POST['graduationDate']."<br>
          GPA : ".$GPA = $_POST['GPA']."<br></div>
			<div style='background: #144f9d;padding: 10px 0 20px 10px;margin-bottom:10px;' >
			</div>
		</body>
	</html>
";

//  ถ้ามี email ผู้รับ
if($email_receiver){
	$mail->msgHTML($email_content);


	if (!$mail->send()) {  // สั่งให้ส่ง email

		// กรณีส่ง email ไม่สำเร็จ
		echo "<h3 class='text-center'>ระบบมีปัญหา กรุณาลองใหม่อีกครั้ง</h3>";
		// ข้อความ รายละเอียดการ error echo $mail->ErrorInfo;
	}else{
		// กรณีส่ง email สำเร็จ
		// echo "ระบบได้ส่งข้อความไปเรียบร้อย";
		// return null;
		echo "<script language=\"JavaScript\">";
        echo "alert('Hello : ระบบได้ส่งข้อความไปเรียบร้อย');";
        echo "</script>";
	}	
}



?>
