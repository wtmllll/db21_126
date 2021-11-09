echo("tablenaa")
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
    <td> PulseOximeter </td>
    <td> PulseOximeter </td>
    <td>update</td> 
    <td>delete</td></tr>

    <?php foreach($ness_List as $ness)
    {
        echo "<tr><td>$ness->pid</td> 
        <td> $ness->NamePeople </td>
        <td> $ness->LastnameP </td>
        <td> $ness->address_Home </td>
        <td> $ness->country_Home </td>
        <td> $ness->province_Home </td>
        <td>$ness->smask</td> 
        <td>$ness->garb</td> 
        <td>$ness->med</td> 
        <td>$ness->gel</td> 
        <td>$ness->therm</td> 
        <td>$ness->pulse</td>
        <td>update</td> 
        <td>delete</td></tr>";
    }
    echo "</table>";
    ?>