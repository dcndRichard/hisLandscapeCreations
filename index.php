<?php
if(isset($_POST["name"])){
    $name=$_POST["name"];
    $phoneCode=$_POST["phoneCode"];
    $phone3=$_POST["phone3"];
    $phone4=$_POST["phone4"];
    $email=$_POST["email"];
    $re_email=$_POST["re_email"];
    $jobType=$_POST["job_type"];//fixed values. <select> element
    $description=$_POST["description"];
    $upload=$_POST["file"];
    
    //level I filter, strip slashes
    $name=stripcslashes($name);
    $phoneCode=stripcslashes($phoneCode);
    $phone3=stripcslashes($phone3);
    $phone4=stripcslashes($phone4);
    $email=stripcslashes($email);
    $re_email=stripcslashes($re_email);
    $description=stripcslashes($description);
    
     //level II filter, strip tags
    $name=strip_tags($name);
    $phoneCode=strip_tags($phoneCode);
    $phone3=strip_tags($phone3);
    $phone4=strip_tags($phone4);
    $email=strip_tags($email);
    $re_email=strip_tags($re_email);
    $description=strip_tags($description);
    
    //level III filter, replace unwanted characters
    $name=preg_replace('#[^A-Za-z ]#','',$name);
    $phoneCode=preg_replace('#[^0-9]#','',$phoneCode);
    $phone3=preg_replace('#[^0-9]#','',$phone3);
    $phone4=preg_replace('#[^0-9]#','',$phone4);
    $email=preg_replace('#[^A-Za-z0-9\.\@]#','',$email);
    $re_email=preg_replace('#[^A-Za-z0-9\.\@]#','',$re_email);
    $description=preg_replace('#[^A-Za-z0-9 .?!)(]#','',$description);
    
     //connect to database
    //include("include/cxn_2_db.inc.php"); 2018 dr
    
    //checks phone is in the proper format
    $phoneCodePattern = '/[0-9]{3}/';
    $phoneCodeMatch=preg_match($phoneCodePattern,$phoneCode);
    
    //checks phone is in the proper format
    $phone3Pattern = '/[0-9]{3}/';
    $phone3Match=preg_match($phone3Pattern,$phone3);
    
    //checks phone is in the proper format
    $phone4Pattern = '/[0-9]{4}/';
    $phone4Match=preg_match($phone4Pattern,$phone4);
    
    //checks email is in the proper format
    $emailPattern = '/^(\w+\.)*\w+@(\w+\.)+[A-Za-z]+$/';
    $emailMatch=preg_match($emailPattern,$email);
    
    //check if user email is already in database
    $emailChecker=mysqli_real_escape_string($cxn,$email);
    //$queryEmail="SELECT email FROM estimates WHERE email='$emailChecker'";
    $queryEmail="SELECT * FROM estimates WHERE email='$emailChecker'";
    $queryEmailResult=mysqli_query($cxn,$queryEmail) or die(mysqli_error());
    $queryEmailRowCount=mysqli_num_rows($queryEmailResult);
    
    //gets the id if user filled out form before.
        while($row=mysqli_fetch_array($queryEmailResult)){
            $id=$row["id"];   
        }
    
    //check if POST variables are not set or missing data. email not required
    if((!$name)||(!$phoneCode)||(!$phone3)||(!$phone4)||($phoneCodeMatch==0)||($phone3Match==0)||($phone4Match==0)||(!$description)){
        $errorMsg="<u>The following field(s) need correction:</u><br />";
        
        if(!$name){
            $errorMsg.="Your name<br />";
        }
        if(!$phoneCode){
            $errorMsg.="Phone area code is empty<br />";
        }
        if(!$phone3){
            $errorMsg.="Phone prefix is empty<br />";
        }
        if(!$phone4){
            $errorMsg.="Phone suffix is empty<br />";
        }
        if($phoneCodeMatch==0){
            $errorMsg.="Phone area code must be 3 digits <br />";   
        }
        if($phone3Match==0){
            $errorMsg.="Phone preffix must be 3 digits <br />";   
        }
        if($phone4Match==0){
            $errorMsg.="Phone suffix must be 4 digits <br />";   
        }
        if(!$description){
            $errorMsg.="Description is empty<br />";
        }
    }else if(!empty($email) && ($emailMatch==0 || $email!=$re_email)){//if user submits email,script checks for valid format.
        if($emailMatch==0){
            $errorMsg="Please enter a valid email format.";
        }
        else if($email!=$re_email){
            $errorMsg.="The email addresses entered do not match.<br />Please reverify you entered the same email address in both fields.<br />";
        }
    }else{//else enter user info into database
        //level IV filter, escape string ** must be after connection to database**
        $name=mysqli_real_escape_string($cxn,$name);
        $phoneCode=mysqli_real_escape_string($cxn,$phoneCode);
        $phone3=mysqli_real_escape_string($cxn,$phone3);
        $phone4=mysqli_real_escape_string($cxn,$phone4);
        $email=mysqli_real_escape_string($cxn,$email);
        $re_email=mysqli_real_escape_string($cxn,$re_email);
        $description=mysqli_real_escape_string($cxn,$description);
        
        //level V filter, replace `
        $name=preg_replace("[`]","",$name);
        $phoneCode=preg_replace("[`]","",$phoneCode);
        $phone3=preg_replace("[`]","",$phone3);
        $phone4=preg_replace("[`]","",$phone4);
        $email=preg_replace("[`]","",$email);
        $re_email=preg_replace("[`]","",$re_email);
        $description=preg_replace("[`]","",$description);
        
        //combine phone# parts to one variable
        $phoneComplete="(".$phoneCode.") ".$phone3."-".$phone4;

        //add user info into database
        $dbQuery="INSERT INTO estimates(name,phone,email,job_type,description,time)
        VALUES('$name','$phoneComplete','$email','$jobType','$description',now())";
        $dbQueryResult=mysqli_query($cxn,$dbQuery) or die(mysqli_error());
        
        //head them back to index page to prevent refresh and submitting same data to database
        header("location: index.php");
    }
    //upload data here
}else{
    $intlMsg='<span class="red">*</span> = required fields';
    $name="";
    $phone="";
    $description="";     
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>His Landscape Creation</title>
    <link rel="stylesheet" type="text/css" href="./style/stylez.css" /> 
    <!-- <link rel="stylesheet" type="text/css" href="./style/style.css" />  -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Landscaping and design contractor serving the southern California." />
    <meta name="keywords" content="his landscape design, his landscape creation, his creation landscape, creation landscape" /> 
</head>     

<body>
    <?php //include("../../include/duanesMainPage.php") ?>
    <div id="wrapper">
        <!-- HEADER -->
            <?php include("include/header.inc.php"); ?>
        <!-- END HEADER -->
        
        <!-- MENUE -->
            <?php include("include/menu.inc.php"); ?>
        <!-- END MENUE -->
        
        <!-- LEFTCOLMN -->
            <?php include("include/indexLtColmn.inc.php"); ?>
        <!-- END LEFTCOLMN -->
        <!-- MIDCOLMN -->
            <?php include("include/indexMidColmn.inc.php"); ?>
        <!-- END MIDCOLMN-->
        <!-- RIGHTCOLMN -->
            <?php include("include/indexRtColmn.inc.php"); ?>  
        <!-- END RIGHTCOLMN -->
        
        <!-- FOOTER -->
            <?php include("include/footer.inc.php"); ?>   
        <!-- END FOOTER -->
    </div>
</body>
</html>