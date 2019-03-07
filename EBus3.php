<!DOCTYPE html>
<html>
    <body style="background-color:powderblue;">
      
    <body>
         <h1 style="text-align: center">IOS Ebusiness Receipt</h1>
         <hr  />
                <!--// starting the session to get the session variables from last page-->
               <a href="index.html" class="button" style='float:left'>Finish</a>  
    <center>         
             <?php 
                session_start();
                $totalValue = $_POST['txtTotal'];
                $fullNameValue = $_POST['txtName'];
                echo "The name is : ".$fullNameValue.".";
                echo "<br></br>";
                echo "The total value is : € " .$totalValue.".";
             ?>
    </center>      
               
    
     </body>
</html>








