<!DOCTYPE html>
<html lang="en">

<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $title = "Contact OSPO Now";
  $header = "primary";
?>

<head>
  <?php include_once $path . "/shared/head.php"; ?>
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "ContactPage",
      "breadcrumb": "Home > Contact",
      "mainEntity": {
        "@type": "ContactPoint",
        "email": "hello@osponow.com"
      }
    }
  </script>
</head>

<body class="d-flex flex-column h-100">

  <?php include_once $path . '/shared/header.php' ?>

  <main class="w-100 d-flex flex-column">

  <div class="container-md d-flex flex-column px-3 px-md-5 pb-0 my-0 text-dark flex-grow-1">
    <div class="row h-100 flex-grow-1">
      <div class="col-12 col-md-6 col-lg-7 col-xl-8 col-xxl-9 py-0 pt-5" id="contact-col">
          <h1 class="py-3 display-5">Contact Us</h1>
          <h5>Get in touch today to get started on your open source journey. We're happy to offer a <strong>free</strong> no-obligation 30-minute consultation to find out how we can help optimize your company with open source.</h5>
          <h5 class="pb-4">Fill in the form below or email us at <a href="mailto:hello@osponow.com">hello@osponow.com</a> and we will get back to you as soon as possible.</h5>

          <form class="needs-validation pt-3" novalidate method="post">
            <div class="form-group">
              <label for="yourName">Name</label>
              <input type="text" class="form-control" id="yourName" name="yourName" placeholder="👤 Name" required>
              <div class="invalid-feedback feedback-pos">
                Invalid name
              </div>
            </div>
            <div class="form-group">
              <label for="yourEmail">Email</label>
              <input type="email" class="form-control" id="yourEmail" name="yourEmail" placeholder="✉ Email" required>
              <div class="invalid-feedback feedback-pos">
                Invalid email
              </div>
            </div>
            <div class="form-group">
              <label for="yourMessage">Message</label>
              <textarea class="form-control" id="yourMessage" name="yourMessage" rows="5" placeholder="Your message" required></textarea>
              <div class="invalid-feedback feedback-pos">
                Please type your message above
              </div>
            </div>
            <div class="form-group">
              <input class="form-check-input" type="checkbox" value="" id="privacyCheck" required>
              <label class="form-check-label d-inline" for="privacyCheck">
                I have read and agree to the OSPO Now <a href="/privacy.php">privacy policy</a>.
              </label>
              <div class="invalid-feedback feedback-pos">
                We are only able to process this form if you agree to our privacy policy.
              </div>
            </div>
            <button type="submit" class="btn btn-primary mt-4 w-100">Send message</button>
          </form>
          <?php
            error_reporting(-1);
            ini_set('display_errors', 'On');
            set_error_handler("var_dump");

            if (isset($_GET['status'])) {
              if ($_GET['status'] == 'success') {
                echo "<p class='success'>Thank you for your message, we will aim to get back to you within 48 hours.</p>";
              } else {
                echo "<p class='failure'>Your message could not be sent, please check the provided details or try again later.</p>";
              }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

              function sanitizeInput($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

              $name = sanitizeInput($_POST["yourName"]);
              $name = str_replace(array("\r", "\n", "%0a", "%0d"), '', $name);

              $email = sanitizeInput($_POST["yourEmail"]);
              $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $email);
              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo '<script>window.location.href = "/contact.php?status=failure";</script>';
                exit();
              }

              $content = sanitizeInput(str_replace("\n.", "\n..", $_POST["yourMessage"]));
              $message = "Name: " . $name . "\nEmail: " . $email . "\nMessage: " . $content;

              $subject = "Contact form enquiry";
              $toEmail = "hello@osponow.com";

              $headers = "From: " . $name . " <" . $email . ">\r\n";
              $headers .= "Reply-To: " . $email . "\r\n";
              $headers .= "MIME-Version: 1.0\r\n";
              $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

              if (mail($toEmail, $subject, $message, $headers)) {
                echo '<script>window.location.href = "/contact.php?status=success";</script>';
                exit();
              } else {
                echo '<script>window.location.href = "/contact.php?status=failure";</script>';
                exit();
              }
            }
          ?>
      </div>
      <div class="col d-none d-md-inline-block py-0 my-0 px-0 mx-0">
        <img id="texture-col" class="texture" alt="Red dotted texture" src="/resources/images/texture_maroon_2.svg">
      </div>
    </div>
  </div>
  </main>

  <?php include_once $path . '/shared/footer.php' ?>

</body>


<script>
  $("#texture-col").height($("#contact-col").height() + 100);

  (function() {
    'use strict';
    window.addEventListener('load', function() {
      var forms = document.getElementsByClassName('needs-validation');
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  </script>

</html>
