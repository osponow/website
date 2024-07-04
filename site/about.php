<!DOCTYPE html>
<html lang="en">

<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $title = "About OSPO Now";
  $header = "primary";
?>

<head>
  <?php include_once $path . "/shared/head.php"; ?>
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebPage",
      "name": "About Us",
      "description": "Information about our company and team",
      "url": "https://osponow.com/about",
      "breadcrumb": "Home > About Us",
      "mainEntity": {
        "@type": "Organization",
        "name": "OSPO Now",
        "url": "https://osponow.com/",
        "description": "OSPO Now provides virtual open source program offices to help you implement open-source solutions.",
        "foundingDate": "October 2023",
        "sameAs": [
          "https://www.linkedin.com/company/ospo-now/"
        ]
      }
    }
  </script>
</head>

<body class="d-flex flex-column h-100">

  <?php include_once $path . '/shared/header.php' ?>

  <main class="w-100">
    <div class="bg-primary py-0 my-0">
    <div class="container-md pt-5 px-3 px-md-5 text-light">
      <h1 class="py-3 display-5">About OSPO Now</h1>
      <h5 class="pb-4 col-12 col-lg-9">Our <strong>mission</strong> is to empower organizations to thrive through the strategic use of open-source solutions, fostering sustainability, and maximizing impact. We are committed to providing tailored strategies and solutions that elevate the adoption of open-source best practices.</h5>
      <div class="d-flex flex-row-reverse">
        <h5 class="pb-4 col-12 col-lg-9 text-end">We <strong>envision</strong> a world where organizations achieve peak efficiency using open-source best practice guided by in-house and virtual open source program offices (OSPOs).</h5>
    </div>

    </div>
    <div class="w-100 m-0 p-0">
      <svg id="wave" viewBox="0 0 1200 77" version="1.1" xmlns="http://www.w3.org/2000/svg"><path fill="#F2F2F2" d='M0 59L50 55C100 51 200 44 300 30C400 15 500 -6 600 1C700 8 800 44 900 59C1000 73 1100 66 1150 62L1200 59V80H1150C1100 80 1000 80 900 80C800 80 700 80 600 80C500 80 400 80 300 80C200 80 100 80 50 80H0V59Z'></path></svg>
    </div>
  </div>
    <div class="container-md px-3 px-md-5 w-100 h-100">
      <div class="row row-full-width bg-light">
        <div class="col-12 d-md-inline-block d-flex flex-column">
            <h2 class="text-secondary display-6 pb-3">Open Source</h2>
            <img class="img-thumbnail img-about ms-5 mb-3 float-none float-lg-end align-self-center" alt="AI generated image of an arch with rain resembling green code in the background." src="/resources/images/about.png">
            <p>
            <strong>What is open source?</strong>
            Open-source code is any computer code that has been publicly released under an open-source license, which means you can freely access, use, adapt, and share the <em>code</em>.
            At OSPO Now, we also talk a lot about <em>Open Source</em> (capitalized 'OS'), which refers to best practice principles that have evolved over time in communities developing and using open-source code.
            These principles focus on transparency, accessibility, findability, reusability, user-centered design, and more.
          </p>
          <p>
            <strong>Why should you care about open source?</strong>
            Whether you are creating or using software, there is a very high chance that you are engaging with open source.
            Open source can save development costs, provide more transparency over important software you depend on, and allow your clients to feel more connected to your product.
            Even if you don't produce software, Open Source principles can maximize efficiency within your company by reducing duplicative work, increasing internal transparency, and helping to bring the positive and collaborative nature of open source into your own company.
          </p>
          <p>
            Look through <a href="/services.php">our services</a> to see how open source can help your company today.
          </p>
        </div>
      </div>
      <div class="row row-full-width">
        <div class="col-12 d-md-inline-block d-flex flex-column text-start text-md-end">
          <h2 class="text-secondary display-6 pb-3">A Virtual OSPO</h2>
          <img class="img-thumbnail img-about me-5 mb-3 float-none float-lg-start align-self-center" alt="AI generated image of an office overlooking green scenery with clouds resembling green code in the background." src="/resources/images/services.png">
          <p>
            <strong>What is an OSPO?</strong>
            There are a huge number of benefits to using open source, but we won't pretend it is risk free.
            Commonly cited reasons not to depend on open-source software are fears around competition seeing your code, depending on code that could be abandoned at any time, or not understanding the legal complexities behind all the licenses.
            To tackle these risks, companies may create an in-house open source program office or 'OSPO', to oversee internal open-source policies and standards and to be the point of contact for any questions around open source.
          </p>
          <p>
            <strong>Why should you use a virtual OSPO?</strong>
            Your open source needs are likely to vary significantly over time, from auditing internal processes, to developing Open Source strategies, or even releasing your own open-source software.
            While an in-house OSPO can help you along this path, our virtual solution may provide a more <a href="/services.php#working">flexible</a> alternative that can be quickly adapted to your needs, without you having to worry about growing or shrinking your own OSPO.
            And when you don't need an in-house office full-time, our team are available on retainer so you can tap into our expertise at any time.
            If an in-house OSPO is for you, then we're happy to help you hire and grow your team, and to supplement your OSPO with extra resources when required.
          </p>
        </div>
      </div>
    <div class="row row-full-width bg-light d-flex py-5">
      <a id="team"><h2 class="text-secondary display-6">Our team</h2></a>
      <div class="row d-flex justify-content-left pb-5" id="team_list"></div>
    </div>
    </div>
  </main>

  <?php include_once $path . '/shared/footer.php' ?>

  <script src="/resources/js/getTeam.js"></script>
  <script>
    team = getTeam();
    team.forEach(x => {
      const name = x.name.replace('Dr ', '').replace(/\s/g, '-').toLowerCase();
      const url = "/team/" + name + ".php";
      $("#team_list").append(`
        <div itemscope itemtype="http://schema.org/Person" class="col-12 col-sm-3 team_member">
          <a class="d-flex flex-column" href="${url}">
            <img class="mb-3 img-thumbnail align-self-center img-team" alt="${x.name}" src="/resources/images/team/${x.image}">
          </a>
            <div class="text-center">
              <a itemprop="url" class="d-flex flex-column" href="https://osponow.com/${url}">
                <h5 itemprop="name" class='h5 text-center'>${x.name}</h5>
              </a>
              <div itemprop="jobTitle" class="text-primary h6">${x.jobtitle}</div>
            </div>
          </a>
      </div>`);
    });
  </script>

</body>
</html>
