 <?php

include 'dbcon.php';

if(isset($_POST['submit'])){

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $birth=$_POST['birth'];
    $email=$_POST['email'];
    $phone=$_POST['txtEmpPhone'];
    $jobpost=$_POST['jobpost'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $postal=$_POST['postal'];
    $file=$_FILES['resume'];
    // $file=$_FILES['pan'];
    // $file=$_FILES['aadhar'];


    
    //print_r($file);
    // print_r($phone);

    $filename=$file['name'];
    $filepath=$file['tmp_name'];
    $fileerror=$file['error'];

    if($fileerror==0){

        $destfile='upload/'.$filename;
        // // echo "$destfile";
        move_uploaded_file( $filepath,$destfile );


        $insertquery = "insert into data(firstname,lastname,birth,email,phone,jobpost,address,city,state,postal,resume) values('$firstname','$lastname','$birth','$email','$phone','$jobpost','$address','$city','$state','$postal','$destfile')";

        $query=mysqli_query($con,$insertquery);

        if($query){
            echo "INSERTED";

        }else{
            echo "NOT INSERTED";

        }
        header('location:thankyou.php');

    }


}else{
    echo "No CliCk";
}




?>

