<?php
require_once '../functions/db.php';
require_once '../featch/collect_home_items.php';
?>





<table border="1" style="color: red;">
  <tr>
    <th>title</th>
    <th>description</th>
    <th>image</th>
    <th>url</th>
  </tr>
  <?php

$hsql1 = "SELECT * FROM section_1";
$result = mysqli_query($dbcon, $hsql1);

while($row = mysqli_fetch_array($result))
{

?>
  <tr>
    <td><?php  echo  ". $row[title] . ";?></td>
    <td><?php  echo  ". $row[description] . ";?></td>
    <td><?php  echo  ". $row[image] . ";?></td>
    <td><?php  echo  ". $row[url] . ";?></td>
  </tr>
  <?php } ?>
  <?php
  $hsql1 = "SELECT * FROM section_home WHERE section = 'section_1'";
$result = mysqli_query($dbcon, $hsql1);

while($row = mysqli_fetch_array($result))
{
?>
  <button ><?php  echo  "$row[enable] ";?></button>
  <?php } ?>
</table>
