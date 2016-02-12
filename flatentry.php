<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php include("connection.php");?>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
                            <table style="margin-top:5%;">
                                                 
                            <?php
                            $subd=mysql_query("select * from bentry");
							
                            ?>
                            <tr>
                         
                            <td>
                            
                             <select name="subselect" class="styled-select">
                             <option>----Select Subject----</option>
                             <?php
                             while($row=mysql_fetch_array($subd))
							{
								$bn=$row['buildno'];
								$bid=$row['id'];
								?>
                             	 <option value="<?php echo $bid; ?>"> <?php echo $bn; ?></option>  
								<?php  $subsel++; 
								
								}?>
                              </select><br /><br />
                              </td>
                            </tr>
                            <tr>
                            <th> Enter Topic Name:</th>
                            </tr>
                            <tr>
                            <td><input type="text" name="flatno"></td>
                             </tr>
                             
                             <tr>
                             
								<td><input type="submit" name="flatsave" value="Submit"></td>
                                </tr>
                                </table>
                         </form>       
                                
                                
                                
                                
				<?php
							
							if (isset($_POST['flatsave']))
							{
								$buid=$_POST['subselect'];
								$fno=$_POST['flatno'];
								
								
						
								
							$subentry=mysql_query("insert into flatentry values(null,'$buid','$fno','yes')");
							if ($subentry)
							{
								?><script> alert ("Flat Entry successfully");</script>
                                <?php
							}
							}
					?>
                    

</body>
</html>