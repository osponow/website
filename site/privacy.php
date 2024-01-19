<!DOCTYPE html>
<html lang="en">

<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $title = "Privacy Policy";
  $header = "light";
?>

<head>
  <?php include_once $path . "/shared/head.php"; ?>
</head>

<body class="d-flex flex-column h-100">

  <?php include_once $path . '/shared/header.php' ?>

  <main class="w-100">
    <div class="container-md pt-5 px-3 px-md-5">
      <h1 class="py-3 display-5">Privacy Policy</h1>
      <p>Click on the tabs below to read our Privacy Policy.
        If you have any questions about this Policy please do not hesitate to <a href="/contact.php">contact us</a>.
        This Policy was last updated on 12 January 2024.</p>
      <div id="accordion" class="pb-5">
        <?php include_once $path . '/shared/definitions.php' ?>
        <div class="card">
          <div class="card-header" id="headingWhat">
            <h5 class="mb-0">
              <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseWhat" aria-expanded="false" aria-controls="collapseWhat">
                Your Personal Data
              </button>
            </h5>
          </div>
          <div id="collapseWhat" class="collapse" aria-labelledby="headingWhat" data-bs-parent="#accordion">
            <div class="card-body">
              We may collect and process Your data in different ways, depending how You interact with Us. All Personal Data We process is provided to Us directly by You either by using Our <a href="/contact.php">contact form</a> or by emailing an employee of OSPO Now. The table below outlines how Your data may be used.
              <table class="table table-striped table-bordered table-hover mt-3">
              <tr>
                <th>How do we get your Personal Data?</th>
                <th>Information Type</th>
                <th>Purposes for which we process Personal Data</th>
              </tr>
              <tr>
                <td>You use Our online <a href="/contact.php">contact form</a> and agree to Our privacy policy.</td>
                <td><ul><li>Full name</li><li>Email address</li></ul></td>
                <td>We rely on <b>your consent</b> supplied when you agree to Our privacy policy to allow us to respond to your enquiry. You can withdraw your consent at any time by emailing <a href="mailto:dataprotection@osponow.com?subject=Withdraw%20Consent">dataprotection@osponow.com</a>.</td>
              </tr>
              <tr>
                <td>You email an employee of OSPO Now.</td>
                <td><ul><li>Full name</li><li>Email address</li></ul></td>
                <td>We have a <b>legitimate interest</b> in fulfilling Your requests and replying to your email.</td>
              </tr>
              <tr>
                <td>Collected via cookies through use of the Website.</td>
                <td>IP Address</td>
                <td>We rely on <b>your consent</b> supplied when you accept our use of analytics and/or marketing cookies, full details of these cookies are below.
                You can withdraw consent by clearing cookies in your browser.
              </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingRights">
            <h5 class="mb-0">
              <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseRights" aria-expanded="false" aria-controls="collapseRights">
                Your Data Protection Rights
              </button>
            </h5>
          </div>
          <div id="collapseRights" class="collapse" aria-labelledby="headingRights" data-bs-parent="#accordion">
            <div class="card-body">
              <p>
                Under Data Protection Legislation, you have rights including:
                <ul class="pt-2">
                  <li><b>Your right of access</b> - You have the right to ask us for copies of your personal information.</li>
                  <li><b>Your right to rectification</b> - You have the right to ask us to rectify personal information you think is inaccurate. You also have the right to ask us to complete information you think is incomplete.</li>
                  <li><b>Your right to erasure</b> - You have the right to ask us to erase your personal information in certain circumstances.</li>
                  <li><b>Your right to restriction of processing</b> - You have the right to ask us to restrict the processing of your personal information in certain circumstances.</li>
                  <li><b>Your right to object to processing</b> - You have the right to object to the processing of your personal information in certain circumstances.</li>
                  <li><b>Your right to data portability</b> - You have the right to ask that we transfer the personal information you gave us to another organisation, or to you, in certain circumstances.</li>
                </ul>
                You are not required to pay any charge for exercising Your rights. If You make a request, We have one month to respond to You.
              </p>
              <p>
                Please contact Us at <a href="mailto:dataprotection@osponow.com?subject=Data%20Protection%20Request">dataprotection@osponow.com</a> if You wish to make a request.
              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingShare">
            <h5 class="mb-0">
              <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseShare" aria-expanded="false" aria-controls="collapseShare">
                Sharing Your Personal Information
              </button>
            </h5>
          </div>
          <div id="collapseShare" class="collapse" aria-labelledby="headingShare" data-bs-parent="#accordion">
            <div class="card-body">
              We may share your Personal Information with other employees in the Company as well as professionals we engage with to perform Our services for You, including but not limited to external legal expertise and providers of accounting and other technical software such as Microsoft SharePoint and Notion.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingStore">
            <h5 class="mb-0">
              <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseStore" aria-expanded="false" aria-controls="collapseStore">
                How we store and retain Your Personal Information
              </button>
            </h5>
          </div>
          <div id="collapseStore" class="collapse" aria-labelledby="headingStore" data-bs-parent="#accordion">
            <div class="card-body">
              <p>Your information is securely stored on Microsoft SharePoint and Notion.</p>
              <p>
                We keep Your Personal Information for 10 years after Your last communication with Us. We will then dispose of Your information by permanently deleting this information from Microsoft SharePoint and Notion.
              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingCookies">
            <h5 class="mb-0">
              <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseCookies" aria-expanded="false" aria-controls="collapseCookies">
                How we use Cookies
              </button>
            </h5>
          </div>
          <div id="collapseCookies" class="collapse" aria-labelledby="headingCookies" data-bs-parent="#accordion">
            <div class="card-body">
              <p>
                Cookies are small text files that are placed on your device when you visit a website. They are commonly used to make websites work more efficiently and provide information to the website owners.
              </p>
              <p>
                Cookies used on our website:
                <ol class="pt-2">
                  <li><b>Strictly necessary cookies</b><br>We use one cookie to store your preferences for third-party cookies from Google. Without this we cannot save your cookie preferences. You can change your preferences by clearing cookies in your browser.
                  </li>
                  <li><b>Analytics cookies</b><br>We use Google Analytics to learn how visitors interact with our website by collecting and reporting information anonymously. Collected data includes (but may not be limited to), the number of (unique) visitors, the pages visited, and the time spent on the website.
                  Google Analytics cookies are typically retained for up to 26 months.
                  <li><b>Marketing cookies</b><br>We use Google Ads to promote our services. Google Ads cookies help us track the effectiveness of our advertising campaigns and may be used to personalize the ads you see based on your interests and online behaviour. Google Ads cookies vary in their retention period but may be stored for up to 13 months.
                  </li>
                </ol>
              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingComplain">
            <h5 class="mb-0">
              <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseComplain" aria-expanded="false" aria-controls="collapseComplain">
                Your Right to Complain
              </button>
            </h5>
          </div>
          <div id="collapseComplain" class="collapse" aria-labelledby="headingComplain" data-bs-parent="#accordion">
            <div class="card-body">
              <p>
                If You have any concerns about Our use of Your Personal Information, You can make a complaint to Us at <a href="mailto:dataprotection@osponow.com?subject=Complaint">dataprotection@osponow.com</a>.
              </p>
              <p>
                You can also complain to the ICO if You are unhappy with how We have used Your data.
                The ICO's address:
              </p>
              <p>
                Information Commissioner's Office<br>
                Wycliffe House<br>
                Water Lane<br>
                Wilmslow<br>
                Cheshire<br>
                SK9 5AF
              </p>
              <p>
                Helpline number: 0303 123 1113<br>
                ICO website: <a href="https://www.ico.org.uk">https://www.ico.org.uk</a>
              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingChange">
            <h5 class="mb-0">
              <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseChange" aria-expanded="false" aria-controls="collapseChange">
                Changes to this Privacy Policy
              </button>
            </h5>
          </div>
          <div id="collapseChange" class="collapse" aria-labelledby="headingChange" data-bs-parent="#accordion">
            <div class="card-body">
              We may, at any time and at our discretion, vary this Privacy Policy by publishing the varied Privacy Policy on the Website.
              We recommend you check the Website regularly to ensure you are aware of the current Privacy Policy.
              <ul class="list-unstyled pt-4">
                <li><b>January 2024</b><br>Privacy Policy created.</li>
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
