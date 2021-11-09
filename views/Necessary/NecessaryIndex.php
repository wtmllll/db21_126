<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="Necessary"/>
    <button type="submit" name="action" value="search">
    search</button>
</form>
new Necessary<a href="?controller=Necessary&action=newNecessary"> click! </a><br>
<table border=2>
    <tr> <td> Patient_id </td>
    <td> NamePeople </td>
    <td> LastnameP </td>
    <td> address_Home </td>
    <td> country_Home </td>
    <td> province_Home </td>
    <td> surgical_mask </td>
    <td> garbage </td>
    <td> medicine </td>
    <td> gel_alcohol </td>
    <td> thermometer </td>
    <td> PulseOximeter </td>
    <td>update</td> 
    <td>delete</td></tr>

    <?php foreach($ness_List as $ness)
    {
        echo "<tr><td>$ness->pid</td> 
        <td> $ness->NamePeople </td>
        <td> $ness->LastnameP </td>
        <td> $ness->address_Home </td>
        <td> $ness->county_Home </td>
        <td> $ness->province_Home </td>
        <td>$ness->smask</td> 
        <td>$ness->garb</td> 
        <td>$ness->med</td> 
        <td>$ness->gel</td> 
        <td>$ness->therm</td> 
        <td>$ness->pulse</td>
        <td><a href=?controller=Necessary&action=updateFormN&pid=$ness->pid>update</td> 
        <td><a href=?controller=Necessary&action=deleteConfirm&pid=$ness->pid>delete</td></tr>";
    }
    echo "</table>";
    ?>