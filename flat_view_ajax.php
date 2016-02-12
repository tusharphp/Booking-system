<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Select topic</title>

</head>

<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
		<select id="fsel" name="topname" >
                              <?php
							  
								if($_POST['id'])
								{
									$id=$_POST['id'];							  
							   		$fsel=mysql_query("select * from flatentry where bid='$id'"); 

                            	
                            
                            
							while ($frow=mysql_fetch_array($fsel))
							{
								$fid=$frow['id'];
								$fno=$frow['flatno'];
								
								?>
							
							<option value="<?php echo $fid ?>" ><?php echo $fno;?></option>
                            <?php $fno++;
							}
							
							}
							?> 
                              </select>
                              
                              </form >
                             <?php echo $fid;?>
                             <?php echo $fno;?>
                             
                              
</body>
</html>