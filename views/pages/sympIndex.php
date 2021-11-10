<br><p> ยินดีต้อนรับ!!! </p><br>

<a href="?controller=pages&action=Nindex">[ตารางสิ่งของจำเป็นสำหรับ Home Isolation]</a><br>
<a href="?controller=pages&action=Sindex">[ตารางข้อมูลจากการ Video Call]</a><br>
<br><form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="pages">
    <button type="submit" name="action" value="searchS">
    ค้นหา</button>
</form>
<br><table border=2>
<tr> <td>วันที่</td>
<td>รหัสผู้ป่วย</td>
<td>ชื่อ</td>
<td>นามสกุล</td>
<td>กลุ่มสี</td>
<td>อาการ</td> </tr>

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

