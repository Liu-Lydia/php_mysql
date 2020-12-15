<?php
if (!isset($pageName)) $pageName = '';
?>
<style>
  .navbar .nav-item.active {
    background-color: #86cbee;
    border-radius: 5px;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="<?= WEB_ROOM ?>index_.php">Index</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?= $pageName == 'ad_connect' ? 'active' : '' ?>">
          <a class="nav-link" href="<?= WEB_ROOM ?>ad_connect.php">通訊錄</a>
        </li>
        <li class="nav-item <?= $pageName == 'ad_new' ? 'active' : '' ?>">
          <a class="nav-link" href="<?= WEB_ROOM ?>ad_new.php">新增通訊錄</a>
        </li>
      </ul>
      <ul class="navbar-nav">

        <?php if (isset($_SESSION['admin'])) : ?>
          <li class="nav-item">
            <a class="nav-link"><?= $_SESSION['admin']['account'] ?></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= WEB_ROOM ?>logout.php">登出</a>
          </li>
        <?php else : ?>
          <li class="nav-item <?= $pageName == 'login' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= WEB_ROOM ?>login.php">登入</a>
          <?php endif; ?>

      </ul>

      <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
          Search
        </button>
      </form> -->
    </div>
  </div>
</nav>