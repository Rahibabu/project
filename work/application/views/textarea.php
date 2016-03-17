<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Notes</title>
</head>

<body bgcolor="#CCCCCC" style="margin:0px; padding:0px;">

		<form action="<?php echo base_url();?>index.php/menu/insert" method="post">
        	<div style=" width:1024px; margin:auto;"> 
            	<textarea cols="80" rows="10" id="txtarea" name="txtarea"></textarea>
                <br/>
                <input type="submit"  name="add" value="Add"/ style="margin-left:450px; background:#06F; color:#fff; width:80px; height:30px; border-radius:5px; ">
                <a  style=" display: inline-block; height: 25px; width: 70px; text-decoration: none; color: #fff; background: #06F; border: 0px solid; border-radius: 5px; text-align: center; line-height: 20px;" href="<?php echo base_url()?>index.php/login/logout">Log Out</a>
            
            </div>
            </form>
            <table>
            <?php $i=1;
            foreach($data as $row)
            {


            ?>
            	<tr>
            	<td>
            <div style=" border:1px solid #090; width:600px; height:100px; float:right; background:#fff; margin-right:5px;"> 
            	<?php 
            	echo $row->data;
            	?>
            
            </div>
           <div style="float:right; margin-top:100px; margin-right:-400px;  width:205px;"> 
           <a  style=" display: inline-block; height: 25px; width: 60px; text-decoration: none; color: #fff; background: #09F; border: 1px solid; border-radius: 10px; text-align: center; line-height: 20px;" href="<?php echo base_url();?>index.php/menu/delete/<?php echo $row->id;?>">Delete</a>&nbsp; &nbsp;<a style=" display: inline-block; height: 25px; width: 60px; text-decoration: none; color: #fff; background: #09F; border: 1px solid; border-radius: 5px; text-align: center; line-height: 20px;" href="<?php echo base_url();?>index.php/menu/edit/<?php echo $row->id;?>">Edit</a>
        </div>
        </td></tr>


        <?php $i++;
        } ?>
        </table>

</body>
</html>
