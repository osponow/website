<!DOCTYPE html>
<html lang="en">

<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $title = "OSPO Now Services";
  $header = "secondary";
?>

<head>
  <?php include_once $path . "/shared/head.php"; ?>
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "ItemList",
      "name": "OSPO Now Services",
      "description": "Services offered by OSPO Now",
      "url": "https://osponow.com/services",
      "itemListElement": [
        {
          "@type": "Service",
          "provider": {
            "@type": "Organization",
            "name": "OSPO Now",
            "url": "https://osponow.com"
          },
          "serviceType": "Retainer",
          "name": "Experts on Retainer",
          "description": "If you don't need support on a specific project but want an expert on hand for ad-hoc advice, then our retainer is the best option for you. In an initial scoping call we will identify the best package for you, with a fixed monthly cost and no hidden fees."
        },
        {
          "@type": "Service",
          "provider": {
            "@type": "Organization",
            "name": "OSPO Now",
            "url": "https://osponow.com"
          },
          "serviceType": "Contracts",
          "name": "Bespoke Contracts",
          "description": "Bespoke contracts are suitable when you have a fixed, long-term project in mind. We will learn what you need in a free, initial consultation, and will use that to plan deliverables against realistic timelines and to put together the optimal team for you."
        },
        {
          "@type": "Service",
          "provider": {
            "@type": "Organization",
            "name": "OSPO Now",
            "url": "https://osponow.com"
          },
          "serviceType": "Training",
          "name": "Training Courses",
          "description": "Whether you have an in-house OSPO or you're only just learning about open source, we have the training program to upskill your staff. Talk to us today to find out which of our courses are most suitable for your company."
        }
      ]
    }
  </script>
</head>

<body class="d-flex flex-column h-100">

  <?php include_once $path . '/shared/header.php' ?>

  <main class="w-100">
    <div class="bg-secondary">
      <div class="container-md pt-5 px-3 px-md-5 text-dark">
        <h1 class="py-3 display-5">Our Services</h1>
        <h5 class="pb-4">We want to provide a service that meets <strong>your</strong> needs. Our experts cover a range of sectors and experience, and we have a few different ways you can work with them. As well as our in-house expertise, we have a network of open-source consultants who are on-hand to help.</h5>
      </div>
      <div class="w-100 m-0 p-0">
        <svg id="wave" viewBox="0 0 1200 77" version="1.1" xmlns="http://www.w3.org/2000/svg"><path style="transform:translate(0, 0px); opacity:1" fill="#F2F2F2" d='M0 59L50 55C100 51 200 44 300 30C400 15 500 -6 600 1C700 8 800 44 900 59C1000 73 1100 66 1150 62L1200 59V80H1150C1100 80 1000 80 900 80C800 80 700 80 600 80C500 80 400 80 300 80C200 80 100 80 50 80H0V59Z'></path></svg>
      </div>
    </div>
      <div class="container-md px-3 px-md-5 w-100 h-100 py-0 my-0">
      <div class="row row-full-width bg-light pt-0 mt-0">
        <h2 class="text-secondary display-6 pt-0 mt-0">Our Sectors</h2>
        <p class="pb-4">We have experience working across all sectors, including...</p>
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="service-card">
            <i class="fa fa-industry fa-4x" aria-hidden="true"></i>
            <h5 class="text-primary pt-2">For-profits</h5>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 pt-4 pt-sm-0">
          <div class="service-card">
            <i class="fa fa-bank fa-4x" aria-hidden="true"></i>
            <h5 class="text-primary pt-2">Governments</h5>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 pt-4 pt-lg-0">
          <div class="service-card">
            <i class="fa fa-globe fa-4x align-self-center" aria-hidden="true"></i>
            <h5 class="text-primary pt-2">NGOs</h5>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 pt-4 pt-lg-0">
          <div class="service-card">
            <i class="fa fa-mortar-board fa-4x" aria-hidden="true"></i>
            <h5 class="text-primary text-center pt-2">Research Institutions</h5>
          </div>
        </div>
        <p class="pt-4">If you're a research institute and want to cost us into your research proposal, please let us know ASAP and we will help you write your proposal for <strong>free</strong>.</p>
      </div>
    </div>
    <div class="container-md px-3 px-md-5 w-100 h-100 pb-5">
        <h2 class="text-secondary display-6 pt-5">Our Expertise</h2>
        <p>Click through the cards below to see the expertise covered in OSPO Now.</p>
        <div class="row pt-4 d-flex justify-content-center g-0 gx-xxl-2 gy-md-3" id="expertise">
            <div class="col-12 col-sm-6 col-lg-5 col-xxl-3">
              <div class="flipcard front-active flipcard-imp mx-4 mx-sm-1 mx-xl-5 mx-xxl-2">
                <div class="flipcard_inner">
                  <div class="flipcard_front">
                    <i class="fa fa-check-square-o fa-2x mb-3" aria-hidden="true"></i>
                    <h4 class="card-title">Implementation</h4>
                    <p class="old-text">
                      Whether you're using or deploying open-source tools, we can help ensure your policies and practices are optimal.
                    </p>
                    <ul class="new-text">
                      <li onclick="rotateCard('flipcard-imp', 'back-lic')">Licensing</li>
                      <li onclick="rotateCard('flipcard-imp', 'back-sta')">Standards and Policies</li>
                      <li onclick="rotateCard('flipcard-imp', 'back-bui')">Building OSPOs</li>
                      <li onclick="rotateCard('flipcard-imp', 'back-inn')">Inner source</li>
                    </ul>
                  </div>
                  <div class="flipcard_back" onclick="rotateCard('flipcard-imp')">
                    <div id="back-lic" class="back-content">
                      <i class="fa fa-certificate fa-4x align-self-center pb-2" aria-hidden="true"></i>
                      <h5>Licensing</h5>
                      <p>
                        There's over 100 licenses approved for open source, we'll find the right ones to fit your needs.
                      </p>
                    </div>
                    <div id="back-sta" class="back-content">
                      <i class="fa fa-files-o fa-4x align-self-center pb-2" aria-hidden="true"></i>
                      <h5>Standards and policies</h5>
                      <p>
                        From using open-source software internally, to external deployment, we'll ensure your policies are always up-to-date.
                      </p>
                    </div>
                    <div id="back-bui" class="back-content">
                      <i class="fa fa-users fa-4x align-self-center pb-2" aria-hidden="true"></i>
                      <h5>Building an in-house OSPO</h5>
                      <p>
                        Ready for an internal OSPO? We can write job descriptions, interview candidates, and onboard new recruits.
                      </p>
                    </div>
                    <div id="back-inn" class="back-content">
                      <i class="fa fa-recycle fa-4x align-self-center pb-2" aria-hidden="true"></i>
                      <h5>Inner-source</h5>
                      <p>
                        We can identify inefficiencies in internal software and use best-practice Open Source principles to streamline your workflows and processes.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-5 col-xxl-3 pt-4 pt-sm-0">
              <div class="flipcard front-active flipcard-des mx-4 mx-sm-1 mx-xl-5 mx-xxl-2">
                  <div class="flipcard_inner">
                    <div class="flipcard_front">
                      <i class="fa fa-sitemap fa-2x mb-3" aria-hidden="true"></i>
                      <h4 class="card-title">Design & Security</h4>
                      <p class="old-text">
                        Open-source software depends on code and data that is open and easy to use, we can design, appraise, and find security flaws in your code.
                      </p>
                      <ul class="new-text">
                        <li onclick="rotateCard('flipcard-des', 'back-dat')">Data and infrastructure</li>
                        <li onclick="rotateCard('flipcard-des', 'back-end')">End-user mapping</li>
                        <li onclick="rotateCard('flipcard-des', 'back-wik')">Front-end design</li>
                        <li onclick="rotateCard('flipcard-des', 'back-sec')">Security</li>
                      </ul>
                    </div>
                    <div class="flipcard_back" onclick="rotateCard('flipcard-des')">
                    <div id="back-dat" class="back-content">
                      <i class="fa fa-database fa-4x align-self-center pb-2" aria-hidden="true"></i>
                      <h5>Data and infrastructure</h5>
                      <p>
                        Open-source software often includes open data, we can ensure your data infrastructure is truly accessible and FAIR.
                      </p>
                    </div>
                    <div id="back-end" class="back-content">
                    <i class="fa fa-map fa-4x align-self-center pb-2" aria-hidden="true"></i>
                    <h5>End-user mapping</h5>
                    <p>
                      We'll use user-centered design to map and engage key stakeholders to gather feedback and optimize your software for your users.
                    </p>
                    </div>
                    <div id="back-wik" class="back-content">
                    <i class="fa fa-code fa-4x align-self-center pb-2" aria-hidden="true"></i>
                    <h5>Front-end design</h5>
                    <p>
                      Designing and implementing open-source front ends, from APIs to docs, ensure streamlined user engagement.
                    </p>
                    </div>
                    <div id="back-sec" class="back-content">
                    <i class="fa fa-lock fa-4x align-self-center pb-2" aria-hidden="true"></i>
                    <h5>Security</h5>
                    <p>
                      We can investigate your code and ensure you're not exposing any security flaws or vulnerabilities when deploying open-source software.
                    </p>
                    </div>
                  </div>
                  </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-5 col-xxl-3 pt-4 pt-sm-0">
              <div class="flipcard front-active flipcard-sus mx-4 mx-sm-1 mx-xl-5 mx-xxl-2">
                <div class="flipcard_inner">
                  <div class="flipcard_front">
                    <i class="fa fa-bar-chart fa-2x mb-3" aria-hidden="true"></i>
                    <h4 class="card-title">Sustainability</h4>
                    <p class="old-text">
                      Sustaining open-source products requires sustaining community, code, and revenue. We have experience with all three.
                    </p>
                    <ul class="new-text">
                      <li onclick="rotateCard('flipcard-sus', 'back-com')">Community building</li>
                      <li onclick="rotateCard('flipcard-sus', 'back-mai')">Maintenance</li>
                      <li onclick="rotateCard('flipcard-sus', 'back-rev')">Revenue strategy</li>
                      <li onclick="rotateCard('flipcard-sus', 'back-gra')">Grant writing</li>
                    </ul>
                  </div>
                  <div class="flipcard_back" onclick="rotateCard('flipcard-sus')">
                    <div id="back-com" class="back-content">
                    <i class="fa fa-handshake-o fa-4x align-self-center pb-2" aria-hidden="true"></i><h5>Community building</h5>
                    <p>
                      User communities may be depended on to maintain software.
                      We can build and maintain communities from user-mapping to long-term management.
                    </p>
                    </div>
                    <div id="back-mai" class="back-content">
                    <i class="fa fa-code-fork fa-4x align-self-center pb-2" aria-hidden="true"></i>
                    <h5>Maintenance</h5>
                    <p>
                      Maintaining code is essential if you want happy customers.
                      We can maintain public repositories, including working through pull requests and issues.
                    </p>
                    </div>
                    <div id="back-rev" class="back-content">
                    <i class="fa fa-line-chart fa-4x align-self-center pb-2" aria-hidden="true"></i>
                    <h5>Revenue Strategy</h5>
                    <p>
                      There are several strategies for monetising open-source, from subscriptions to dual-licensing. We'll write the strategy that fits your product best.
                    </p>
                    </div>
                    <div id="back-gra" class="back-content">
                    <i class="fa fa-pencil fa-4x align-self-center pb-2" aria-hidden="true"></i>
                    <h5>Grant writing</h5>
                    <p>
                      We can write grant applications to maintain existing open-source software or for development of new software.
                    </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-5 col-xxl-3 pt-4 pt-sm-0">
              <div class="flipcard front-active flipcard-exp mx-4 mx-sm-1 mx-xl-5 mx-xxl-2">
                <div class="flipcard_inner">
                  <div class="flipcard_front">
                    <i class="fa fa-superpowers fa-2x mb-3" aria-hidden="true"></i>
                    <h4 class="card-title">Experts</h4>
                    <p class="old-text">
                      Just need to talk to an open-source expert? Our team is on-hand and ready to provide our expertise whenever you need it.
                    </p>
                    <ul class="new-text">
                      <li onclick="rotateCard('flipcard-exp', 'back-exad')">Expert advisors</li>
                      <li onclick="rotateCard('flipcard-exp', 'back-exwi')">Expert witnesses</li>
                    </ul>
                </div>
                <div class="flipcard_back" onclick="rotateCard('flipcard-exp')">
                    <div id="back-exad" class="back-content">
                      <i class="fa fa-phone fa-4x align-self-center pb-2" aria-hidden="true"></i>
                      <h5>Expert advisors</h5>
                      <p>
                        We can join steering committees, advisory boards, or provide other ad-hoc advice outside of our fixed models.
                      </p>
                    </div>
                    <div id="back-exwi" class="back-content">
                      <i class="fa fa-balance-scale fa-4x align-self-center pb-2" aria-hidden="true"></i>
                      <h5>Expert witnesses</h5>
                      <p>
                        We're not lawyers but if you need an expert to support a case related to open source, we're happy to provide our perspective.
                      </p>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="container-md px-3 px-md-5 w-100 h-100">
    <div class="row pb-5 row-full-width bg-light">
      <h2 class="text-secondary display-6"><a id="working">Ways of Working</a></h2>
      <p>Depending on your needs we offer a few different ways of working together.</p>
      <div class="row pt-4 pb-5">
        <div class="col-12 col-sm-4 d-flex flex-column">
          <div class="service-card">
            <i class="fa fa-clock-o fa-4x align-self-center pb-3" aria-hidden="true"></i>
            <h5 class="text-primary">Experts on Retainer</h5>
            <p>
              If you don't need support on a specific project but want an expert on hand for ad-hoc advice, then our retainer is the best option for you. In an initial scoping call we will identify the best package for you, with a fixed monthly cost and no hidden fees.
            </p>
          </div>
        </div>
        <div class="col-12 col-sm-4 pt-4 pt-sm-0 d-flex flex-column">
          <div class="service-card">
            <i class="fa fa-list fa-4x align-self-center pb-3" aria-hidden="true"></i>
            <h5 class="text-primary">Bespoke Contracts</h5>
            <p>
              Bespoke contracts are suitable when you have a fixed, long-term project in mind. We will learn what you need in a <strong>free</strong>, initial consultation, and will use that to plan deliverables against realistic timelines and to put together the optimal team for you.
            </p>
          </div>
        </div>
        <div class="col-12 col-sm-4 pt-4 pt-sm-0 d-flex flex-column">
          <div class="service-card">
            <i class="fa fa-train fa-4x align-self-center pb-3" aria-hidden="true"></i>
            <h5 class="text-primary">Training Courses</h5>
            <p>
              Whether you have an in-house OSPO or you're only just learning about open source, we have the training program to upskill your staff.
              Talk to us today to find out which of our courses are most suitable for your company.
            </p>
          </div>
        </div>
      </div>
      <a class="btn btn-secondary" href="/contact.php">Contact us now to start building your virtual OSPO</a>
    </div>
  </div>
  </main>

  <?php include_once $path . '/shared/footer.php' ?>

</body>
</html>
