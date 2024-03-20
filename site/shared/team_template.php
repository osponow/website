<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once $path . "/shared/head.php"; ?>
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Person",
      "name": "<?php echo $name ?>",
      "jobTitle": "<?php echo $jobtitle ?>",
      "url": "<?php echo "https://www.linkedin.com/in/" . $linkedin ?>",
      "email": "<?php echo $email ?>@osponow.com",
      "image": "https://osponow.com/resources/images/team/<?php echo $image ?>"
    }
  </script>
</head>


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
            <?php
              if ($email !== "None") {
              echo '<a class="text-dark" href="mailto:' . $email . '@osponow.com">
                <i class="fa fa-solid fa-envelope square-25" aria-hidden="true"></i>
                <span class="sr-only">' . $email . '@osponow.com</span>
              </a>';
              }
            ?>
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


      <!-- <?php $vcard = strtolower(str_replace(' ', '-', preg_replace('/^Dr /', '', $name))); ?>
      <a id="card"></a>
        <div class="contact_card d-inline-block overflow-hidden mb-4 p-3 pe-4 pe-sm-5">
          <div class="row contact_imgs">
            <div class="col-9">
              <img alt="<?php echo $name ?>" src=<?php echo "'/resources/images/team/" . $image . "'" ?>>
            </div>
            <div class="col-3 d-flex justify-content-end align-items-center px-0 mx-0">
              <img class="logo_tws" alt="OSPO Now logo." src="/resources/images/logo_tws.svg">
            </div>
          </div>
          <div class="row">
              <b class="pb-0 mb-0 pt-2"><?php echo $name ?></b>
              <p class='contact_job py-0 my-0 d-inline-block text-primary'>
                <span class="p-0 m-0"><?php echo $jobtitle ?></span>
                <span class='text-muted p-0 m-0 d-inline-block'>(<?php echo $pronouns ?>)</span>
              </p>
          </div>
          <hr>
          <div class="row py-0 my-0">
            <div class="col-12 col-sm-8 d-flex flex-column justify-content-end py-0 my-0" style="z-index: 1000">
              <div class="py-0 my-0">
                <img class='ms-0 ps-0 me-1 square-25 mb-1' alt="LinkedIn logo." src='/resources/images/logo-li.png' aria-hidden="true"><a class="p-0 m-0" href=<?php echo "'https://www.linkedin.com/in/" . $linkedin ."'" ?>><?php echo $linkedin ?></a>
              </div>
              <?php
              if ($email !== "None") {
                echo'<div class="py-0 my-0 ps-1">
                  <i class="fa fa-solid fa-envelope square-25 d-inline-block" aria-hidden="true"></i><a class="p-0 m-0" href="mailto:' . $email .'@osponow.com?subject=Swapping details&body=Now you have my email!">' . $email .'@osponow.com</a>
                </div>';
              }
              ?>
              <div>
                <i class="fa fa-solid fa-globe square-25 d-inline-block ps-1" aria-hidden="true"></i>
                <a class="p-0 m-0" href="https://osponow.com">osponow.com</a>
              </div>
              <div>
                <i class="fa fa-download square-25 d-inline-block ps-1" aria-hidden="true"></i>
                <a class="p-0 m-0" href="/resources/vcards/<?php echo $vcard ?>.vcf" download="<?php echo $vcard ?>.vcf">Download vCard</a>
              </div>
            </div>
            <div class="col-12 col-sm-4 d-block text-center text-sm-end p-0 m-0">
              <img class="contact_qr pt-2 pt-sm-0" alt="<?php echo $name ?>" src="/resources/images/team/qrs/<?php echo $vcard ?>.png">
              <p class="m-0 p-0" style="font-size: 12px">Download vCard</p>
            </div>
          </div>
          <img class="texture_card" src="/resources/images/texture_maroon_1.svg">
      </div> -->
      </div>
    </div>
  </main>

  <?php include_once $path . '/shared/footer.php' ?>

</body>