<br><form method="get" action="">
<label>Date<input type="date" name="Date"
        value="<?php echo $symptom_list->date;?>"/></label><br>
<label> NamePeople <input type="text" name="NamePeople" 
        value="<?php echo $symptom_list->name;?>"/></label><br>
<label> LastnameP <input type="text" name="LastnameP" 
        value="<?php echo $symptom_list->lastname;?>"/></label><br>
<label>Color_name<select name="color_name">
 <?php foreach($Color_list as $c)
     {
         echo "<option value= $c->color_name";
         if($c->color_name==$symptom_list->color) 
         {
             echo " selected='selected'";
         }
         echo "> $c->color_name</option>";
     }?>
</select></label><br>
<label>Symptoms<input type="text" name="Symptom"
        value="<?php echo $symptom_list->symptom;?>"/> </label><br>

<br><input type="hidden" name="controller" value="Symptoms"/>
<input type="hidden" name="Patient_id" value="<?php echo $symptom_list->pid;?>"/>
<button type="submit" name="action" value="index">Back</button>
<button type="submit" name="action" value="updateS"> update </button>
</form>