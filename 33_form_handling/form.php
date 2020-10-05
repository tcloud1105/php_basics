<?php
// submit data:user name and password to process.php

?>
<form action="./process.php" method="post">
  user name: <input type="text" name="user_name" value=""/>
  password: <input type="password" name="password" value=""/>
  <input type="submit" name="submit" value="submit"/>
</form>
<hr/>
<!--mostly get used for hyperlinks-->
<!--<form action="./process.php" method="get">
  user name: <input type="text" name="user_name" value=""/>
  password: <input type="password" name="password" value=""/>
  <input type="submit" name="submit" value="submit"/>
</form>-->
<a href="./process.php?user_name=cedric&password=123&submit=submit">Click Here</a>