<!DOCTYPE html>
<html>
    <head>
        <link href="IS_stylesheet.css" rel="stylesheet" type="text/css">

    </head>

    <body>
       
     

        <div class="formcontainer">
            <span class="pgheader"><h1 class="databasehead">INFORMATION SCIENCE DATABASE TEST</h1></span>
           <div class="container" id="form">
           <h2 class="formhead" id="formhead" value="HEAD!"></h2>
          <h2 > <?php 
            require("IS_DB_connection.php");
            ?></h2>
           <div class="style"></div> <div class="style1"></div> <div class="style2"></div>
            <form method="POST"  class="dataform">

                <span class="Error"> <u><?php require("formDB.php");?></u></span>
            <span class="Error"> FIELDS WITH * ARE REQUIRED</span>
              
                <h1 class="DBerror" name="DBerror" value="DID NOT CONNECT"></h1>
                <input  type="text" class="textinput" name="regno" placeholder="reg.no e.g P108/1832G/20"><span class="Error" name="regnoErr">*</span><br><br>
                <input   type="text" class="textinput" name="surname" placeholder="sur name e.g Gitonga"><span class="Error" name="surnameErr">*</span><br><br>
                <input   type="text" class="textinput" name="firstname" placeholder="first name e.g Dennis"><span class="Error" name="firstnameErr">*</span><br><br>
                <input   type="text" class="textinput" name="lastname" placeholder="last name e.g Kimanthi"><span class="Error" name="lastnameErr">*</span><br><br>
                    <labe  l class="gender">GENDER <span class="Error" name="genderErr">*</span><br></label>
                  <label class="gender">  MALE:[<input type="radio" value="MALE" checked="true" name="gender">]</label>
                    <label> FEMALE:[<input type="radio" value="FEMALE"  name="gender">]</label>
                    <label> OTHER: [<input type="radio" value="OTHER"  name="gender">]</label><br><br>
                    <input   type="text" class="textinput" name="phone1" placeholder="Tel e.g +254712345678"><span class="Error" name="phone1Err">*</span><br><br>
                    <input type="text" class="textinputop" name="phone2" placeholder="Tel2 e.g +254700000000"><br><br>
                    <input   type="emale" class="textinput" name="schoolEmale" placeholder="School Emaile e.g gitonga.kimanthi@s.karu.ac.ke"><span class="Error" name="schoolEmaleErr">*</span><br><br>
                    <input type="emale" class="textinputop" name="personalEmale" placeholder="Personal Emaile e.g kimanthidennis02@gmale.com"><br><br>
                    <input   type="text" class="textinput" name="YOA" placeholder="year of admission e.g 2020/21"><span class="Error" name="YOAErr">*</span><br><br>
                   <div class="selectinput">
                   <u class="yosH">YEAR OF STUDY:</u>  <u class="sosH">SEMESTER OF STUDY:</u><br>
                   <input   type="number" class="yosinput"  min="1" max="4" name="YOS" ><span class="Error" name="YOSErr">*</span>
                   <input   type="number" class="sosinput" min="1" max="2" name="SOS" ><span class="Error" name="SOSErr">*</span><br><br>
                   </div>



                    <div class="butholder"><button name="submit" class="submit" type="submit">SAVE DATA</button></div>


            </form>
           </div>
        </div>
    </body>
</html>