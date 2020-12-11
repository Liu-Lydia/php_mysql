<?php
require __DIR__.'/db_connect.php';

$stmt = $pdo -> query("SELECT * FROM address_book");
// $row = $stmt -> fetchAll();

// print_r($row);

// echo json_encode($row, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
?>
<?php include __DIR__ ."/parts/web_room.php";?>
<?php include __DIR__ ."/parts/head.php";?>
<?php include __DIR__ ."/parts/navbar.php";?>

<div class="container">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">sid</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
      <th scope="col">birthday</th>
      <th scope="col">address</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($stmt as $rows):?>
    <tr>
     <td><?php echo $rows['sid'];?></td>
     <td><?php echo $rows['name'];?></td>
     <td><?php echo $rows['email'];?></td>
     <td><?php echo $rows['mobile'];?></td>
     <td><?php echo $rows['birthday'];?></td>
     <td><?php echo $rows['address'];?></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</div>


<?php include __DIR__ ."/parts/script.php";?>
<?php include __DIR__ ."/parts/foot.php";?>


<!-- foreach as -->


