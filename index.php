<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="/buildingflats/js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
	{
		$("#bsel").change(function()
		{
			var id=$(this).val();
			var dataString = 'id='+ id;

			$.ajax
			({
				type: "POST",
				url: "flatview.php",
				data: dataString,
				cache: false,
				success: function(html)
			{
				$("#fsel").html(html);
			} 
		});

	});

});

</script>

</head>

<body>
	<?php include("connection.php");?>
           
            
            
			<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
             <table border="1px" border="1px" width="800px">
             <tr>
             <th> Name</th>
             <td> <input type="text" name="cname" />
             </td>
             </tr>
             <tr>
             <th>Email id</th>
             <td> <input type="email" name="cemail" /> </td>
             </tr>
            <tr>
            <th>Building No</th>
         
            
       
            
                             <?php
                            $subd=mysql_query("select * from bentry");
							?>
                            
                            
                             
                             <td><select name="bno" id="bsel">
                             <option value=""> select building </option>
                             <?php
                             while($row=mysql_fetch_array($subd))
							{
								$bn=$row['buildno'];
								$id=$row['id'];
								
								?>
                                
                             	 <option value="<?php echo $id; ?>"> <?php echo $bn; ?></option>
                                   
								<?php  $bn++; 
								
							}?>
                             
                              </select></td>
                           
                      			</tr>			
					
                           <tr>
                           <th> Select Flat</th>
                              
							<td><select name="fno" id="fsel">
							<option selected="selected" value="">--Select Flat--</option>
							</select></td>
                            </tr>
                            
                            <tr>
                            <th></th>
                            <td><input type="submit" name="csave" value="Register" /></td>
                            </tr>
                            
                                              
                            </table>
                              </form>
                                <?php
								if (isset($_POST['csave']))
								{
									$cn=$_POST['cname'];
									$ce=$_POST['cemail'];
									$bid=$_POST['bno'];
									$fid=$_POST['fno'];
									$centry=mysql_query("insert into cusreg values(null,'$cn','$ce','$bid','$fid')");
									$fstatus=mysql_query("update flatentry set status='no' where id='$fid'");
							if ($centry && $fstatus)
							{
								?><script> alert ("Entry successfully");</script>
                                
                                <?php
							}
								}
								?>
                                                                
              
</body>
</html>