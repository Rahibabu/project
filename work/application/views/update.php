<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#CCCCCC" style="margin:0px; padding:0px;">

		<form action="<?php echo base_url();?>index.php/menu/update" method="post">
        	<div style=" width:1024px; margin:auto;"> 
            	<textarea cols="80" rows="10" id="txtarea" name="txtarea"> <?php echo $edit->data;?> </textarea>
                <br/>
                <input type="submit"  name="add" value="Add"/ style="margin-left:450px; background:#06F; color:#fff; width:80px; height:30px; border-radius:5px; ">
            <input type="hidden" name="ID" value="<?php echo $edit->id;?>">
            </div>
            </form>
            

</body>
</html>
