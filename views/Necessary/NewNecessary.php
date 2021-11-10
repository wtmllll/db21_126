<br><form method="get"action="">
    <label> Patient_id<select name="Patient_id">
        <option value="">choose</option>
        <?php foreach($Home_List as $h) {
            echo "<option value=$h->patient_id>$h->patient_id</option>"; }?>
        </select></label><br>
    <label> surgical_mask <input type="text" name="surgical_mask"></label><br>
    <label> garbage <input type="text" name="garbage"></label><br>
    <label> medicine <input type="text" name="medicine"></label><br>
    <label> gel_alcohol<input type="text" name="gel_alcohol"></label><br>
    <label> thermometer<input type="text" name="thermometer"></label><br>
    <label> PulseOximeter<input type="text" name="PulseOximeter"></label><br>
    <input type="hidden" name="controller" value="Necessary"/><br>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addNecessary">Save</button>
</form>