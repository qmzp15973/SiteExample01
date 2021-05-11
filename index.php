<?php include("header.php");?>
<div class="container">
<?php include("menu.php");?>
<?php
include("database.php");

$sql = "SELECT * FROM news";
$result = $conn->query($sql);
?>
<form action="addtitle.php" method="POST">
  新聞標題：<input type=text name=title><br/>
  <input type=submit value="送出">
<?php
if ($result->num_rows > 0) {
  // output data of each row
	echo "<table class='table table-striped'>";
	echo "<tr><td>消息</td><td>張貼日期</td><td>管理</td></tr>";
  while($row = $result->fetch_assoc()) {
  	echo "<tr>"; 
   	 	echo "<td>" . $row["title"]."</td>" ;
    	echo "<td>" . $row["created"]. "</td>";
      echo "<td><a class='btn btn-warning btn-sm' href='delete.php?target=" . $row["id"] ."'>刪除</a></td>";
  	echo "</tr>";
  }
  echo "</table>" ;
} else {
  echo "0 results";
}
$conn->close();
?>
</div>
<?php include("footer.php");?>