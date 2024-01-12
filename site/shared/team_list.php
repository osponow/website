<a class="d-flex flex-column" href=<?php echo "/team/{$_POST['url']}.php" ?>>
  <img class="mb-3 img-thumbnail align-self-center img-team" alt="<?php echo $_POST['name'] ?>" src=<?php echo "/resources/images/team/{$_POST['image']}"?> >
</a>
  <div class="text-center">
    <a class="d-flex flex-column" href=<?php echo "/team/{$_POST['url']}.php" ?>>
      <h5 class='h5 text-center'><?php echo $_POST['name']?></h5>
    </a>
    <div class="text-primary h6"><?php echo $_POST['jobtitle']?></div>
  </div>
</a>