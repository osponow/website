<div class="col-8 d-flex align-items-center text-dark">
  <div>
  <b><?php echo $_POST['date']?></b><br>
  <?php echo "<a class='display-7 updates-link' href='/articles/{$_POST['url']}.php'>"?>
    <?php echo $_POST['name']?>
  </a><br>
  <?php echo "<div class='my-2 badge badge-{$_POST['type']}'>{$_POST['type']}</div>"; ?>
  </div>
</div>
<div class="col-4 d-flex flex-column align-items-end align-self-center pb-4">
  <img class="img-fluid" alt="<?php echo $_POST['imagealt']?>" src="/resources/images/updates/<?php echo $_POST['image']?>"></div>
</div>
<hr>
