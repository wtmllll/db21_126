<br><p> ยินดีต้อนรับ!!! </p><br>

<a href="?controller=pages&action=Nindex">[ตารางสิ่งของจำเป็นสำหรับ Home Isolation]</a><br>
<a href="?controller=pages&action=Sindex">[ตารางข้อมูลจากการ Video Call]</a><br>
<br><form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="pages">
    <button type="submit" name="action" value="searchN">
    ค้นหา</button>
</form>
<br><table border=2>
    <tr> <td> รหัสผู้ป่วย </td>
    <td> ชื่อ </td>
    <td> นามสกุล </td>
    <td> ที่อยู่ </td>
    <td> อำเภอ </td>
    <td> จังหวัด </td>
    <td> หน้ากากอนามัย(ชุด) </td>
    <td> ถุงขยะติดเชื้อ(ชุด) </td>
    <td> ยารักษา(ชุด) </td>
    <td> เจลแอลกอฮอล์(ชุด) </td>
    <td> ปรอทวัดไข้(ชิ้น) </td>
    <td> เครื่องวัดค่าออกซิเจนปลายนิ้ว(ชิ้น) </td></tr>

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
        <td>$ness->pulse</td>";
    }
    echo "</table>";
    ?>

