<?php


$regno =$regnoPM = $surname = $firstname =$lastname = $gender =$tel1= $tel2 = $schoolemale =$personalemale =$YOA=$YOS = $SOS="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $regno = $_POST['regno'];
    $surname = $_POST["surname"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $gender = $_POST["gender"];
    $tel1 = $_POST["phone1"];
    $tel2 = $_POST["phone2"];
    $schoolemale = $_POST["schoolEmale"];
    $personalemale = $_POST["personalEmale"];
    $YOA = $_POST["YOA"];
    $YOS = $_POST["YOS"];
    $SOS = $_POST["SOS"];

    $regnoPM = "/^(p|P)108\/\d{4}(G|g)\/\d{2}$/";
    $namePM = "/^[a-zA-Z]{3,}+$/";
    $telPM="/^[\+]\d{1,3}[1|7]\d{8}$/";
    $schoolemalePM = "/^[a-z]+\.[a-z0-9]+@s\.karu\.ac\.ke$/";
    $personalemalePM = "/^[a-z0-9]+@[a-z]+\.[a-z]$/";
    $YOAPM = "/\d{4}\/(\d{2}|\d{4})$/";
    $YOSPM = "/\d{1,4}$/";
    $SOSPM =  "/\d{1,2}$/";



    $htmlhd = file_get_contents("IS_form.php");

    function Errfunction(){
global$Err;
        $Conntainer= "<div style='background-color:yellow;height:30vh;width:67vw;border-radius:3vw;
      border:0.5vw solid black;padding:0.5vh;text-align:center;'><h1 style='margin-top:-1vh;font-family:serif;'>FAILED TO ADD DATA!</h1>
       <h4>REASON: <i style='color:black;'>($Err)</i></h4>
      <button style='background-color:red;
      margin-top:1vh;border-radius:1vw;font-weight:bolder;' onClick='document.location.href='';'>back</button></div> <br>";
        echo $Conntainer;
    }
  
    if (empty($regno)) {
        $regEmpErr="no value entered in REG NO!";
            $Err=$regEmpErr;
        eval(Errfunction());
    
   
      die;
    }
    elseif(!preg_match($regnoPM, $regno)){
        $regPttErr="REG NO entered is invalid!";

        $Err =$regPttErr;
        eval(Errfunction());
          die;
      }
    
      else if(empty($surname)){
          $surEmpErr="no name entered in SUR NAME!";
          $Err = $surEmpErr;
          eval(Errfunction());
          die;
      }
      elseif(!preg_match($namePM,$surname)){
          $surPttErr = "The name entered IN SUR NAME is too short !";
          $Err =$surPttErr;
          eval(Errfunction());
          die;
      }
      else if(empty($firstname)){
        $firstEmpErr="no name entered in FIRST NAME!";
        $Err = $firstEmpErr;
        eval(Errfunction());
        die;
    }
    elseif(!preg_match($namePM,$firstname)){
        $firstPttErr = "The name entered in FIRST NAME is too short !";
        $Err = $firstPttErr;
        eval(Errfunction());
        die;
    }
    else if(empty($lastname)){
        $lastEmpErr="no name entered in LAST NAME!";
        $Err = $lastEmpErr;
        eval(Errfunction());
        die;
    }
    elseif(!preg_match($namePM,$lastname)){
        $lastPttErr = "The name entered in LAST NAME is too short !";
        $Err =$lastPttErr;
        eval(Errfunction());
        die;
    }
    else if(empty($tel1)){
        $tel1EmpErr="no phone number available in TEL 1!";
        $Err = $tel1EmpErr;
        eval(Errfunction());
        die;
    }
    elseif(!preg_match($telPM,$tel1)){
        $tel1PttErr = "A phone number in tel1 is not valid!";
        $Err =$tel1PttErr;
        eval(Errfunction());
        die;
    }
    else if(!empty($tel2) && !preg_match($telPM,$tel2)){
        $tel2PttErr = "phone number in tel2 is not valid!";
        $Err =$tel2PttErr;
        eval(Errfunction());
        die;
    }
    else if(empty($schoolemale)){
        $schoolemaleEmpErr="no Email adress availabe in SCHOOL EMAILE";
        $Err = $schoolemaleEmpErr;
        eval(Errfunction());
        die;
    }
    elseif(!preg_match($schoolemalePM,$schoolemale)){
        $schoolemalePttErr = "school emaile adress is invalid !";
        $Err =$schoolemalePttErr;
        eval(Errfunction());
        die;
    }
    else if(!empty($personalemale) && !preg_match($personalemalePM,$personalemale)){
        $personalemalePttErr = "PERSONAL EMAILE address not valid !";
        $Err =$personalemalePttErr;
        eval(Errfunction());
        die;
    }
    else if(empty($YOA)){
        $YOAEmpErr="year of admission is missing !";
        $Err = $YOAEmpErr;
        eval(Errfunction());
        die;
    }
    elseif(!preg_match($YOAPM,$YOA)){
        $YOAPttErr = "the year of admission entered does not follow the format";
        $Err =$YOAPttErr;
        eval(Errfunction());
        die;
    }
    else if(empty($YOS)){
        $YOSEmpErr="year of study is missing!";
        $Err = $YOSEmpErr;
        eval(Errfunction());
        die;
    }
    elseif(!preg_match($YOSPM,$YOS)){
        $YOSPttErr = "the year of study entered is out of range!";
        $Err =$YOSPttErr;
        eval(Errfunction());
        die;
    }
    else if(empty($SOS)){
        $SOSEmpErr="semester of study is missing!";
        $Err = $SOSEmpErr;
        eval(Errfunction());
        die;
    }
    elseif(!preg_match($SOSPM,$SOS)){
        $SOSPttErr = "the semester of study entered is out of range!";
        $Err =$SOSPttErr;
        eval(Errfunction());
        die;
    }
    
    $query ="insert into InformationScience(regno,surname,firstname,lastname,gender,tel1,tel2,schoolemale,personalemale,YOA,YOS,SOS) 
    values ('$regno','$surname','$firstname','$lastname','$gender','$tel1','$tel2','$schoolemale','$personalemale','$YOA','$YOS','$SOS')";

   $seddata= mysqli_query($conn,$query);
   if(!$seddata){
       $CONNerror = mysqli_error($conn);
       echo "<h1>DATA NOT SENT!</h1><br>";
       echo "<h2>REASON:</h2> <h3><i>( $CONNerror )</i></h3>";
   }
   else {
       echo "<script>
                function jsf(){
                    alert('DATA SENT SUCCESSFULY')
                }
                </sript>";
   }

}