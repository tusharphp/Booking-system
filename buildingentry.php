<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
<label>Enter Building No.</label><input type="text" name="bno"  />
<input type="submit" name="bsave" value="Save" />
</form>
<?php
include "connection.php";
if (isset($_POST['bsave']))
{
	$bn=$_POST['bno'];
	$bntry=mysql_query("insert into bentry values(null,'$bn')");
							if ($bntry)
							{
								?><script> alert ("Subject Entry successfully");</script>
                                <?php
							}
							}
					?>

</body>
</html>