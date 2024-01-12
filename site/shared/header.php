<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WR329FJ8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
  $navclass = "navbar fixed-top navbar-expand-sm py-0 header-" . $header;
?>
<header>
  <nav id='header-nav' class = '<?php echo $navclass ?>'>
    <div class="container-md px-3 px-md-0 py-0">
    <a class="navbar-brand py-0" href="/"><img id="logo-full" height="100px" alt="OSPO Now logo" src="/resources/images/logo.svg"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarNav" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="/" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/about.php">About</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/updates.php">Updates</a>
        </li>
          <li class="nav-item">
              <a class="nav-link" href="/contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<div class="spacer"> &nbsp; </div>
<?php include_once $path . '/shared/cookies.php' ?>