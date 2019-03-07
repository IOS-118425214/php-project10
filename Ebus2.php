
<?php

session_start();
$fullnamevalue = "";
$totalValue = "";

/*
 * create a session variable for the mobile number 
 */

/* @var $totalValue type */
$totalValue = $_POST['txtTotal'];
/* @var $fullNameValue type */
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue
        
/*
 * Allocate the mobile number session variable to a text box 
 */

?>

<!DOCTYPE html>
<html>
    <body style="background-color:powderblue;">
    <head>
        <title>IOS Ebusiness 2</title>  
    </head>
    <body>
        <div class ="form">
              <h1 style="text-align: center">IOS Ebusiness: Please enter your Details:</h1> 
              <hr  />
            <form name="Details" method="post" action="EBus3.php">
                <center>
                    <table cellspacing="10"
                       
                        <tr>
                            <td>Name</td>
                            <td><input type ="text" id= "txtName" name="txtName" value="" /></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td><input type ="text" id= "txtNum" name="txtNum" value="" /></td>
                        </tr>
                        
                        <tr>
                            <td>Password</td>
                            <td><input type ="text" id= "txtPassword" name="txtPassword" value="" /></td>
                        </tr>
                    <tr>
                        <td><input type ="hidden" id="txtTotal" name="txtTotal" value= <?php echo $totalValue;?> /></td>
                    </tr>
                   </table>
                </center>
                                
            <center>
               
                <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
                
            </center>
        </div>
    </form>               
  </body>
</html>
