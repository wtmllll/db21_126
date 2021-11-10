<br><?php echo "<br>Are you sure to delete this patient?<br>
            <br>Patient_id: $symptom_list->pid
            <br>Name : $symptom_list->name   $symptom_list->lastname"
            ;?><br>
<br><form method="get" action="">
    <input type="hidden" name="controller" value="Symptoms"/>
    <input type="hidden" name="Patient_id" value="<?php echo $symptom_list->pid;?>"/>
    <button type="submit" name="action" value="index"> Back </button>
    <button type="submit" name="action" value="deleteS"> Delete </button>
</form>