<?php echo "<br>Are you sure to delete this id?<br>
            <br>Patient_id: $ness_List->pid";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="Necessary"/>
    <input type="hidden" name="Patient_id" value="<?php echo $ness_List->pid;?>"/>
    <button type="submit" name="action" value="index"> Back </button>
    <button type="submit" name="action" value="delete"> Delete </button>
</form>