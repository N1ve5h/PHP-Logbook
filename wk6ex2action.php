<?php
  //connect to server and select databse
  $link = mysqli_connect('127.0.0.1', 'root', '', 'db1_21706089');
  $sql = "SELECT * from test where ID = '$_GET[id]'";
  //Execute query
  $result = mysqli_query($link,$sql);
  $row = mysqli_fetch_assoc($result);
?>
<html>
<body>
  <form action="wk6ex3action.php" method = "get">
    Name:
    <input type=text name = txtname value = "<?php echo $_GET['id'] ?>" readonly />
    </br>
    Phone number:
    <input type = text name = txttelno value = "<?php echo $_GET['phone_number'] ?>"/>
    </br>
    Email:
    <input type = text name = txtemail value = "<?php echo $_GET['email']?>"/>
    </br>
    <input type=submit name=btnsubmit value="save"/>
    </br>
    <input type=submit name=btnsubmit value="delete"/>
  </form>
</body>
