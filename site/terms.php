<!DOCTYPE html>
<html lang="en">

<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $title = "Terms of Use";
  $header = "light";
  include_once $path . "/shared/head.php";
?>

<body class="d-flex flex-column h-100">

  <?php include_once $path . '/shared/header.php' ?>

  <main class="w-100">
    <div class="container-md pt-5 px-3 px-md-5">
      <h1 class="py-3 display-5">Terms of Use</h1>
      <p>Click on the tabs below to read our Terms of Use.
        If you have any questions about these Terms, please do not hesitate to <a href="/contact.php">contact us</a>.
        These Terms were last updated on 12 January 2024.</p>
      <div id="accordion" class="pb-5">
        <?php include_once $path . '/shared/definitions.php' ?>
        <div class="card">
          <div class="card-header" id="headingIPR">
            <h5 class="mb-0">
              <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseIPR" aria-expanded="false" aria-controls="collapseIPR">
                Intellectual Property
              </button>
            </h5>
          </div>
          <div id="collapseIPR" class="collapse" aria-labelledby="headingIPR" data-bs-parent="#accordion">
            <div class="card-body">
              <p>
                Unless otherwise stated, all Content of the Website, including but not limited to text, graphics, logos, images, and software, are the property of OSPO Now and are protected by copyright and any other intellectual property laws.
                'OSPO Now' and the 'OSPO' logo are (unregistered) trademarks of OSPO Now.
                Unless otherwise stated, you may not use, reproduce, distribute, or modify any content from the Website without our written consent.
              </p>
              <p>
                All articles listed on the <a href="/updates.php">Updates</a> page are licensed under a <a href="https://creativecommons.org/licenses/by/4.0/legalcode.en">CC BY 4.0</a> licence, this means you can share and adapt these articles in any way you see fit, as long as you clearly credit the original article including a link to the CC BY 4.0 licence and indicate changes you have made, we have suggested credit and citation statements on each article page.
              </p>
              <p>
                The code used to develop this site is available at <a href="https://github.com/osponow/website">https://github.com/osponow/website</a> under an <a href="https://github.com/osponow/website/blob/main/LICENSE.md">Apache 2.0 license</a>, which means you can adapt and redistribute all code however you like for free, as long as you cite the repository and make clear if you have modified the original code.
              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingConduct">
            <h5 class="mb-0">
              <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseConduct" aria-expanded="false" aria-controls="collapseConduct">
                User Conduct
              </button>
            </h5>
          </div>
          <div id="collapseConduct" class="collapse" aria-labelledby="headingConduct" data-bs-parent="#accordion">
            <div class="card-body">
            You agree not to engage in any of the following activities:
            <ol class="pt-3">
              <li>Using our Site for any illegal or unauthorized purpose.</li>
              <li>Violating any laws in your jurisdiction.</li>
              <li>Interfering with or disrupting the security or functionality of the Website, including but not limited to hacking this Website, transmitting malicious code, or changing information on this Website.</li>
              <li>Attempting to gain unauthorized access to any portion of the Website.</li>
              <li>Posting or transmitting any material that is offensive, defamatory, or violates the rights of others.</li>
            </ol>
            <p>
              You agree to the <a href="https://github.com/osponow/website/blob/main/CODE_OF_CONDUCT.md">code of conduct</a> in the <a href="https://github.com/osponow/website">ospownow/website</a> GitHub repository, should you contribute in any way (e.g., by opening issues) to the repository.
            </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingPrivacy">
            <h5 class="mb-0">
              <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapsePrivacy" aria-expanded="false" aria-controls="collapsePrivacy">
                Personal Data and Privacy
              </button>
            </h5>
          </div>
          <div id="collapsePrivacy" class="collapse" aria-labelledby="headingPrivacy" data-bs-parent="#accordion">
            <div class="card-body">
            Your use of the Website is also governed by our <a href="/privacy.php">Privacy Policy</a>, which is incorporated by reference.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingDisclaimer">
            <h5 class="mb-0">
              <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseDisclaimer" aria-expanded="false" aria-controls="collapseDisclaimer">
                Disclaimers
              </button>
            </h5>
          </div>
          <div id="collapseDisclaimer" class="collapse" aria-labelledby="headingDisclaimer" data-bs-parent="#accordion">
            <div class="card-body">
              <p>
                We are not responsible if any Content on the Website is not accurate, complete, or current.
                All Content is provided for general information only and should not be relied upon or used solely for making decisions without consulting primary, more accurate, more complete, or more timely sources of information.
                Reliance on the Content on this Website is at your own risk.
                We are under no obligation to update any information on our site.
              </p>
              <p>
                You expressly agree that your use of, or inability to use, the Website is at your sole risk.
                The content on the Website is provided "as is," without warranties of any kind, either express or implied.
                We do not warrant that the Website will be error-free or uninterrupted.
              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingLiability">
            <h5 class="mb-0">
              <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseLiability" aria-expanded="false" aria-controls="collapseLiability">
                Limitation of Liability
              </button>
            </h5>
          </div>
          <div id="collapseLiability" class="collapse" aria-labelledby="headingLiability" data-bs-parent="#accordion">
            <div class="card-body">
              In no event shall OSPO Now, or any of our employees and contractors, be liable for any loss or damage of any kind (including consequential loss, indirect loss, loss of profit, loss of benefit, loss of opportunity or loss of reputation) whether under statute, contract, equity, tort (including negligence), indemnity or otherwise arising out of or in connection with the Website or the Content.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThird">
            <h5 class="mb-0">
              <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseThird" aria-expanded="false" aria-controls="collapseThird">
                Third-Party Links
              </button>
            </h5>
          </div>
          <div id="collapseThird" class="collapse" aria-labelledby="headingThird" data-bs-parent="#accordion">
            <div class="card-body">
              The Website may include links to third-party websites, services, or content that are not owned or controlled by OSPO Now.
              The inclusion of any link does not imply an endorsement by OSPO Now.
              We have no control over, and assume no responsibility for, the content, privacy policies, or practices of any third-party websites.
              You acknowledge and agree that OSPO Now shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with the use of or reliance on any such content, goods, or services available on or through any such third-party websites.
              It is your responsibility to review and comply with any Terms of Use or Privacy Policies associated with third-party websites.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingLaw">
            <h5 class="mb-0">
              <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseLaw" aria-expanded="false" aria-controls="collapseLaw">
                Governing Law
              </button>
            </h5>
          </div>
          <div id="collapseLaw" class="collapse" aria-labelledby="headingLaw" data-bs-parent="#accordion">
            <div class="card-body">
              These Terms are governed by and construed in accordance with the laws of England and Wales, without regard to its conflict of law principles.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingChange">
            <h5 class="mb-0">
              <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseChange" aria-expanded="false" aria-controls="collapseChange">
                Changes to these Terms
              </button>
            </h5>
          </div>
          <div id="collapseChange" class="collapse" aria-labelledby="headingChange" data-bs-parent="#accordion">
            <div class="card-body">
              We may, at any time and at our discretion, vary these Terms by publishing the varied terms on the Website.
              We recommend you check the Website regularly to ensure you are aware of the current Terms.
              <ul class="list-unstyled pt-4">
                <li><b>January 2024</b><br>Terms of Use created.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php include_once $path . '/shared/footer.php' ?>

</body>
</html>
