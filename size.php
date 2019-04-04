<?php
  session_start();
  $_SESSION['widgetquantity'] = $_POST['selqty'];
?>
<html>
 <head>
   <title>Select Widget Size Page</title>
 </head>
 <body>
   <form action = "selectcolour.php" method = "post">
     Select the size for the <?php echo $_POST['selqty'] ?> widgets you are ordering
     <select name = "selsize">
       <option>Small</option>
       <option>Medium</option>
       <option>Large</option>
       <option>Extra Large</option>
     </select>
     <br/><br/>
     <input type = "submit" value = "Buy"/>
   </form>
 </body>
</html>
