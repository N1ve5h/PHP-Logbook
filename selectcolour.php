<?php
  session_start();
  $_SESSION['widgetsize'] = $_POST['selsize'];
?>
<html>
 <head>
   <title>Select Colour Page</title>
 </head>
 <body>
   <form action = "confirmation.php" method = "post">
     Select the colour for the <?php echo $_SESSION['widgetquantity'] ?> widgets you are ordering
     <select name = "selcolour">
       <option>white</option>
       <option>red</option>
       <option>yellow</option>
       <option>green</option>
       <option>blue</option>
     </select>
     <br/><br/>
     <input type = "submit" value = "Buy"/>
   </form>
 </body>
</html>
