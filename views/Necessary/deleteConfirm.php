<br><?php echo "<br>Do you want to delete this patient?<br>
            Patient_id : $ness_List->pid 
            <br>name : $ness_List->NamePeople   $ness_List->LastnameP"
            
            ;?><br>
<br><form method="get" action="">
    <input type="hidden" name="controller" value="Necessary"/>
    <input type="hidden" name="Patient_id" value="<?php echo $ness_List->pid;?>"/>
    <button type="submit" name="action" value="index"> Back </button>
    <button type="submit" name="action" value="deleteN"> Yes </button>
</form>