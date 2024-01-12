<!DOCTYPE html>
<html lang="en">

<?php include_once $path . "/shared/head.php"; ?>

<body class="d-flex flex-column h-100">

  <?php include_once $path . '/shared/header.php' ?>

  <main class="w-100 pt-5 d-flex flex-column">
    <div class="container pt-5 px-3 px-md-5">
      <i class="fa fa-arrow-left d-inline" aria-hidden="true"></i>
      <a href="/updates.php" class="updates d-inline">Back to updates</a>
    </div>
    <div class="container w-100 px-3 px-md-5 pt-3">
      <div class='row justify-content-between flex-row-reverse'>
        <div class='col-12 col-sm-4 py-3 py-sm-0 text-center text-sm-end align-self-center'>
          <img class='img-fluid' alt="<?php echo $imagealt?>" src=<?php echo "/resources/images/updates/" . $image ?>>
        </div>
        <div class='col-12 col-sm-8 text-start align-self-center'>
          <h2 class="text-danger"><?php echo $datestring ?></h2>
          <h1><?php echo $name ?></h1>
          <a href="https://creativecommons.org/licenses/by/4.0/" class="text-decoration-none">
            <img width="30px" height="30px" alt="Creative commons logo." src="/resources/images/cc.svg">
            <img width="30px" height="30px" alt="CC BY symbol." src="/resources/images/by.svg">
          </a>
        </div>
      </div>
    </div>

    <?php include_once $path . '/resources/svgs/wave.php' ?>

    <div class="flex-grow-1 bg-light">
      <div class="container w-100 px-3 px-md-5 pt-0 mt-0">
        <div class='row-full-width updates-content'>
          <?php echo $content ?>
          <div class="d-flex flex-column justify-content-center align-items-center">
            <h4 class="pt-4 pb-2"><?php echo $cta_text ?></h4>
            <a href="<?php echo $cta_link ?>"><div class="btn btn-primary"><?php echo $cta_label ?></div></a>
          </div>
          <div class="my-4 updates-separator"></div>
          <div class="pb-3">
            <img class='me-2 mb-1 square-25' alt="LinkedIn logo." src='/resources/images/logo-li.png'>
            <a href=<?php echo $linkedin ?>>Join the conversation on LinkedIn.</a>
          </div>

            <p class="pt-4">
              If you use this article in your work, please use the following statement to credit this article:
              <blockquote>
                <?php
                  $url = "https://www.osponow.com/articles/" . preg_replace('/[.,\s]/', '-', strtolower($name));
                  $url = "<a href='{$url}'>{$url}</a>";
                  echo "Content from the OSPO Now article \"{$name}\" is shared/adapted from {$url} and licensed under <a href='https://creativecommons.org/licenses/by/4.0/deed.en'>CC BY 4.0</a>.";
                ?>
              </blockquote>
            </p>
            <p class="pt-5">
              To cite this article in a publication, please use the following citation:
              <blockquote>
                <?php
                  $year = substr($datestring, -4);
                  $today = date("d F Y");
                  echo "\"{$name}\". ({$year}). OSPO Now. Accessed on {$today}, {$url}."
                ?>
              </blockquote>
            </p>
        </div>
      </div>
    </div>
  </main>

  <?php include_once $path . '/shared/footer.php' ?>

</body>
