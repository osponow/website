<!DOCTYPE html>
<html lang="en">

<?php include_once $path . "/shared/head.php"; ?>

<body class="d-flex flex-column h-100">

  <?php include_once $path . '/shared/header.php' ?>

  <main class="w-100 pt-5 d-flex flex-column">
    <div class="container pt-5 px-3 px-md-5">
      <i class="fa fa-arrow-left d-inline" aria-hidden="true"></i>
      <a href="/about.php#team" class="team d-inline">Back to team</a>
    </div>

    <div class="container w-100 px-3 px-md-5 pt-3 pt-sm-0">
      <div class='row justify-content-between flex-row-reverse'>
        <div class='col-12 col-sm-6 text-center text-sm-end align-self-center'>
          <img class='img-team-full' alt="<?php echo $name ?>" src=<?php echo "'/resources/images/team/" . $image . "'" ?>>
        </div>
        <div class='col-12 col-sm-6 text-start align-self-center'>
          <h1><?php echo $name ?></h1>
          <h2 class='text-primary'><?php echo $jobtitle ?></h2>
          <h4 class='text-muted'><?php echo $pronouns ?></h4>
          <span class="">
          <a href=<?php echo "'https://www.linkedin.com/in/" . $linkedin ."'" ?>>
            <img class='me-1 square-25 mb-1' alt="LinkedIn logo." src='/resources/images/logo-li.png' aria-hidden="true"><span class="sr-only"><?php echo "https://www.linkedin.com/in/" . $linkedin ?></span></a>
            <a class="text-dark" href="mailto:<?php echo $email ?>@osponow.com">
              <i class="fa fa-solid fa-envelope square-25" aria-hidden="true"></i>
              <span class="sr-only"><?php echo $email ?>@osponow.com</span>
            </a>
          </span>
        </div>
        </div>
    </div>

    <?php include_once $path . '/resources/svgs/wave2.php' ?>

    <div class="bg-light flex-grow-1 w-100">
      <div class="container w-100 px-3 px-md-5">
        <div class='row-full-width'>
          <p><?php echo $content ?></p>
        </div>
      </div>
    </div>

  </main>

  <?php include_once $path . '/shared/footer.php' ?>

</body>