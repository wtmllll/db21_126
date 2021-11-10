<br><form method="get" action="">
<label>Date<input type="date" name="Date"/></label><br>
<label>Patient_id<select name="Patient_id">
    <option value=""> choose </option>
    <?php foreach($HomeList as $s)
        {echo "<option value= $s->patient_id>$s->patient_id</option>";}?>
        </select></label><br>
<label>Color<select name="color">
    <option value=""> choose </option>
    <?php foreach($Color_list as $c)
        {echo "<option value= $c->color_name>$c->color_name</option>";}?>
        </select></label><br>
<label>Symptoms<input type="text" name="Symptom"/></label><br>
<input type = "hidden" name="controller" value="Symptoms"/>
<button type="submit" name="action" value="index">Back</button>
<button type="submit" name="action" value="addSymptoms">Save</button>
</form>