<br><form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="Symptoms"/>
    <button type="submit" name="action" value="search">
    search</button>
</form>
new Symptoms<a href="?controller=Symptoms&action=newSymptoms"> click! </a><br>
<br><table border=2>
<tr> <td>Date</td>
<td>Patient_id</td>
<td>NamePeople</td>
<td>LastnameP</td>
<td>color_name</td>
<td>symptom</td>
<td>update</td>
<td>delete</td> </tr>

<?php foreach($symptom_list as $s) {
    echo "<tr><td>$s->date</td>
    <td>$s->pid</td>
    <td>$s->name</td>
    <td>$s->lastname</td>
    <td>$s->color</td>
    <td>$s->symptom</td>
    <td><a href=?controller=Symptoms&action=updateFormS&Patient_id=$s->pid> update </a></td>
    <td><a href=?controller=Symptoms&action=deleteConfirmS&Patient_id=$s->pid> delete </a></td>
    </tr>";
}

echo "</table>";

?>

