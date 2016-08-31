<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
//$hostname_cn = "localhost";
//$database_cn = "medline";
//$username_cn = "root";
//$password_cn = "";

  //$conn = new mysqli("localhost", "root", "", "dukweadmin");

//$cn = mysql_connect($hostname_cn,$username_cn,$password_cn,$database_cn);

//$cn = mysql_pconnect($hostname_cn, $username_cn, $password_cn) or trigger_error(mysql_error(),E_USER_ERROR); 
//$db = mysql_select_db('medline');
?>
<?php
$cn = mysqli_connect("localhost","root","1nigeria","medline");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>