<?php
require __DIR__ . '/db_connect.php';
$pageName = 'ad_connect';

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

$perPage = 3;
$t_sql = "SELECT COUNT(1) FROM address_book";
$totalRows = $pdo->query($t_sql)->fetch()['COUNT(1)'];
$totalPages = ceil($totalRows / $perPage);
if($page<1) $page = 1;
if($page>$totalPages) $page = $totalPages;

$p_sql = sprintf("SELECT * FROM address_book ORDER BY sid DESC LIMIT %s ,%s", ($page-1) * $perPage, $perPage);

$stmt = $pdo->query($p_sql);
// $stmt = $pdo->query("SELECT * FROM address_book");
// $row = $stmt -> fetchAll();

// print_r($row);

// echo json_encode($row, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
?>
<?php include __DIR__ . "/parts/web_room.php"; ?>
<?php include __DIR__ . "/parts/head.php"; ?>
<?php include __DIR__ . "/parts/navbar.php"; ?>

<style>
  .remove-icon a i{
    color:sandybrown;
  }
</style>

<div class="container">

  <div class="row">
    <div class="col">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item <?= $page==1 ? 'disabled' : ''?>"><a class="page-link" href="?page=1"><i class="fas fa-arrow-circle-left"></i></a></li>
          <li class="page-item <?= $page==1 ? 'disabled' : ''?>"><a class="page-link" href="?page=<?= $page-1?>"><i class="far fa-arrow-alt-circle-left"></i></i></a></li>
          <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
            <li class="page-item <?= $page == $i ? 'active' : '' ?>"><a class="page-link" href="?page=<?= $i?>">
              <?= $i ?>
            </a></li>
          <?php endfor ;?>
          <li class="page-item <?= $page==$totalPages ? 'disabled' : ''?>"><a class="page-link" href="?page=<?= $page+1?>"><i class="far fa-arrow-alt-circle-right"></i></i></a></li>
          <li class="page-item <?= $page==$totalPages ? 'disabled' : ''?>"><a class="page-link" href="?page=<?= $totalPages?>"><i class="fas fa-arrow-circle-right"></i></a></li>
        </ul>
      </nav>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <table class="table table-dark">
        <thead>
          <tr>
          <th scope="col">
                <i class="fas fa-minus-circle"></i>
            </th>
            <th scope="col">sid</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">mobile</th>
            <th scope="col">birthday</th>
            <th scope="col">address</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($r = $stmt->fetch()) : ?>
            <tr>
            <th class="remove-icon"><a href="#">
                <i class="fas fa-minus-circle"></i>
            </a></th>
              <td><?= $r['sid'] ?></td>
              <td><?= $r['name'] ?></td>
              <td><?= $r['email'] ?></td>
              <td><?= $r['mobile'] ?></td>
              <td><?= $r['birthday'] ?></td>
              <td><?= $r['address'] ?></td>
            </tr>
          <?php endwhile ?>
        </tbody>
      </table>
    </div>
  </div>
</div>


<?php include __DIR__ . "/parts/script.php"; ?>
<?php include __DIR__ . "/parts/foot.php"; ?>


<!-- foreach as -->