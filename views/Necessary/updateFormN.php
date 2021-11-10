<form method="get" action="">
    <label> Patient_id <select name="Patient_id">
        <?php foreach($Home_List as $h) {
            echo "<option value= $h->patient_id"; 
            if($h->patient_id==$ness_List->pid)  
            {echo " selected='selected'";}
            echo "> $h->patient_id</option>";
        }
            ?>
    </select></label><br>
<label> NamePeople <input type="text" name="NamePeople" 
        value="<?php echo $ness_List->NamePeople;?>"/></label><br>
<label> LastnameP <input type="text" name="LastnameP" 
        value="<?php echo $ness_List->LastnameP;?>"/></label><br>
<label> address_Home <input type="text" name="address_Home" 
        value="<?php echo $ness_List->address_Home;?>"/></label><br>
<label> country_Home <input type="text" name="county_Home" 
        value="<?php echo $ness_List->county_Home;?>"/></label><br>
<label> province_Home <input type="text" name="province_Home" 
        value="<?php echo $ness_List->province_Home;?>"/></label><br>
<label> surgical_mask <input type="text" name="surgical_mask" 
        value="<?php echo $ness_List->smask;?>"/></label><br>
<label> garbage <input type="text" name="garbage" 
        value="<?php echo $ness_List->garb;?>"/></label><br>
<label> medicine <input type="text" name="medicine" 
        value="<?php echo $ness_List->med;?>"/></label><br>
<label> gel_alcohol <input type="text" name="gel_alcohol" 
        value="<?php echo $ness_List->gel;?>"/></label><br>
<label> thermometer <input type="text" name="thermometer" 
        value="<?php echo $ness_List->therm;?>"/></label><br>
<label> PulseOximeter <input type="text" name="PulseOximeter" 
        value="<?php echo $ness_List->pulse;?>"/></label><br>
<input type="hidden" name="controller" value="Necessary"/>
<input type="hidden" name="Patient_id" value="<?php echo $ness_List->pid;?>"/>
<button type="submit" name="action" value="index">Back</button>
<button type="submit" name="action" value="updateN">update</button>
</form>