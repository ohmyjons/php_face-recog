<?php 
    $fileFoto = (object) @$_FILES['foto'];
    // $command = escapeshellcmd("face_detection.py ".$fileFoto);
    // $output = shell_exec($command);

    echo shell_exec("C:/xampp/htdocs/tugas-pweb/upload_files/process/face_detection.py" . "-i" . $fileFoto);
    
    // $m = array('msg' => $output);
    // echo json_encode($m);
    


    if(isset($_FILES['foto'])){
        $errors= array();
        $file_name = $_FILES['foto']['name'];
        $file_size =$_FILES['foto']['size'];
        $file_tmp =$_FILES['foto']['tmp_name'];
        $file_type=$_FILES['foto']['type'];
        // $file_ext=strtolower(end(explode('.',$_FILES['foto']['name'])));
        
        // echo $file_name;

        // $face_amount = shell_exec('cd detector; python3 detector.py ' . '../file/' . $filename);
        // $face_detec =  shell_exec("C:\xampp\htdocs\tugas-pweb\upload_files\process\face_recognition.py" . "-i" . $file_name);
        // echo $face_detec;
        
        $tmp = explode('.',$file_name);
        $file_ext = end($tmp);

        $extensions= array("jpeg","jpg","png");
        
        if(in_array($file_ext,$extensions)=== false){
            $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }
        
        if($file_size > 2097152){
            $errors[]='File size must be excately 2 MB';
        }
        
        if(empty($errors)==true){
            move_uploaded_file($file_tmp,"images/".$file_name);
            echo "Success";
        }else{
            print_r($errors);
        }
    }
   

     
?>
