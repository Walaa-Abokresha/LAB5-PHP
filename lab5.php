<?php
session_start();
/*Difference between include and require:

    require:will cause fatal error and the execution will not continue

    include:a warning will be issued,but the execution will continue

Diffrence between include()/require() and inculde_once/ require_once:

    include()/require():will call a file more than once within the same file 

    inculde_once/ require_once: will check first if it's already included it will not call it again 
    so it's better in development 
*/
?>

<!doctype html>
    <html>
        <head>
            <meta charset="UTF-8"/>
            <title> Technical Road-Map</title>
            <meta name="description" content="CMS ITI Road map syllabus"/>
            <link rel="stylesheet" type="text/css" href="css.css" />

        </head> 
        <body>
            <header>
              <nav>
                <img style="float:right;border:1px solid black"  src="ITI_logo.png" alt="Logo" width="25%" height="79px">
                <ul>
                  <li><a href="index1.html" target="_self"> Home </a>
                  <li><a href="index2.html" target="_blank"> Road Map </a>
                  <li><a href="Form.html" target="_blank">Registration Form</a>
                  <li><a href="https://www.iti.gov.eg/iti/home" target="_blank"> Contact </a> 
              </ul>
              </nav>
            </header>
        <div>
              <h1 style="text-align:center;color:#F72B58;">Technical Road-Map Syllabus</h1>
        </div>

            <p>
                Product oriented approach that gives you the skills to
                build a <span style="color:#F72B58; text-decoration:underline;font-weight: bold;">
                          Web site for Business Company.
                        </span>
            </p>
            <?php
            if(isset ($_SESSION['page_count'])){
    $_SESSION['page_count']+=1;
}else{
    $_SESSION['page_count']=1;
}
$message="You have viewed my page <span style='color:red'>" . $_SESSION['page_count'];
$message.="</span> in this session.";
    if ($_SESSION['page_count'] > 10)
    {
        echo "<br>Thank you for visiting our website <span style='color:green'> 10 </span> times ";
    }
 ?>
     <?php 
     echo"<br>";
     echo($message); 
     ?>

<?php
 include 'links.php';
 ?>
               <hr>
                  <footer>
                  <p style="color:forestgreen;text-align: center;font-weight: bold;">
                    Copyright 2021 by Noha Salah &reg;. All Rights Reserved.
                  </p>
                  </footer>

                  <?php 
                      setcookie("name","Walaa Elsayed", time()+60);
                      setcookie("course","PHP");
                      setcookie("category","ITI");

                        setcookie("name","Dina");
                echo "set Cookies <br>";
                if( isset($_COOKIE["name"]))
                 echo "welcome ". $_COOKIE["name"] . "<br>";
                 echo "This is  " .$_COOKIE["course"] . " Course </br>";
                 echo "Under the category " .$_COOKIE["category"];
                 ?>

        </body>
    </html>