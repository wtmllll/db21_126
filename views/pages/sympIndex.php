<br><table border=2>
<tr> <td>Date</td>
<td>Patient_id</td>
<td>NamePeople</td>
<td>LastnameP</td>
<td>color_name</td>
<td>symptom</td> </tr>

<?php foreach($symptom_list as $s) {
    echo "<tr><td>$s->date</td>
    <td>$s->pid</td>
    <td>$s->name</td>
    <td>$s->lastname</td>
    <td>$s->color</td>
    <td>$s->symptom</td>
    </tr>";
}

echo "</table>";

?>
<form>
    <input type="hidden" name="controller" value="pages"/><br>
    <button type="submit" name="action" value="home">Back</button>
</form>