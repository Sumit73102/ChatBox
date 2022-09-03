<?php
	session_start();
	include_once "config.php";
	$fname=mysqli_real_escape_string($conn,$_POST['fname']);
	$lname=mysqli_real_escape_string($conn,$_POST['lname']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$password=mysqli_real_escape_string($conn,$_POST['password']); 

	if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
		//check user email is valid?
		if(filter_var($email,FILTER_VALIDATE_EMAIL)){
			$sql=mysqli_query($conn,"SELECT email FROM users WHERE email='{$email}'");
			if(mysqli_num_rows($sql)>0){
				echo "$email - This email already exists.";
			}else{
				if(isset($_FILES['image'])){
					$img_name=$_FILES['image']['name'];
					$img_type=$_FILES['image']['type'];
					$tmp_name=$_FILES['image']['tmp_name'];

					$img_explode=explode('.',$img_name);
					$img_ext=end($img_explode); //Here we got the extension type of uploaded file
					$time=time();

					//Now lets move image to our specified Folder
					$new_img=$time.$img_name;
					if(move_uploaded_file($tmp_name, "images/".$new_img)){
						$status="Active now";
						$random_id=rand(time(),10000000);

						$sql2=mysqli_query($conn,"INSERT INTO users (unique_id,fname,lname,email,password,image,status) VALUES ({$random_id},'{$fname}','{$lname}','{$email}','{$password}','{$new_img}','{$status}')");	
						if($sql2){
							$sql3=mysqli_query($conn,"SELECT * FROM users WHERE email='{$email}'");
							if(mysqli_num_rows($sql3)>0){
								$row=mysqli_fetch_assoc($sql3);
								$_SESSION['unique_id']=$row['unique_id'];//using this session we used user unique id in other php file
								echo "Success";
							}
						}else{
							echo "Something went wrong";
						}
					}
				}else{
					echo "Please select an Image file.";
				}
			}
		}else{
			echo "$email - This is not a valid email.";
		}
	}else{
		echo "All input fields are required";
	}
?>