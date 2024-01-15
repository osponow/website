<!DOCTYPE html>
<html lang="en">

<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $title = "OSPO Now Updates";
  $header = "light";
  include_once $path . "/shared/head.php";
?>

<body class="d-flex flex-column h-100">

  <?php include_once $path . '/shared/header.php' ?>

  <main class="w-100">
    <div class="bg-light py-0 my-0">
      <div class="container-md pt-5 px-3 px-md-5 text-dark">
        <h1 class="py-3 display-5">Updates</h1>
        <h5 class="pb-4">In these articles we have collected all OSPO Now news, including partnership announcements, new hires, blog posts and other important updates.
        In the spirit of Open Source, all articles in these pages are completely free for anyone to read, adapt, and redistribute in any way that you like, you will see these symbols: <img width="20px" height="20px" alt="Creative commons logo." src="/resources/images/cc.svg"> <img width="20px" height="20px" alt="CC BY symbol." src="/resources/images/by.svg"> on the page of each article, which indicates they are licenced under a <a href="https://creativecommons.org/licenses/by/4.0/">CC BY 4.0</a> licence.
        </h5>
      </div>
      <div class="w-100 m-0 p-0">
        <svg id="wave" viewBox="0 0 1200 77" version="1.1" xmlns="http://www.w3.org/2000/svg"><path fill="#FFFFFF" d='M0 59L50 55C100 51 200 44 300 30C400 15 500 -6 600 1C700 8 800 44 900 59C1000 73 1100 66 1150 62L1200 59V80H1150C1100 80 1000 80 900 80C800 80 700 80 600 80C500 80 400 80 300 80C200 80 100 80 50 80H0V59Z'></path></svg>
      </div>
    </div>
    <div class="container-md pt-5 px-3 px-md-5 text-light">

    <nav aria-label="Page navigation" class="pt-5">
      <ul class="pagination justify-content-center" id="pagination"></ul>
    </nav>

    <div class="row d-flex justify-content-between pb-5" id="updates_list"></div>

    <nav aria-label="Page navigation" id="pagination-copy" class="pb-5">
    </nav>

  </main>

  <?php include_once $path . '/shared/footer.php' ?>

  <script src="/resources/js/getUpdates.js"></script>
  <script>
    updates = getUpdates();

    const itemsPerPage = 5;
    const totalItems = updates.length;
    const totalPages = Math.ceil(totalItems / itemsPerPage);

    function showPage(pageNumber) {
      currentPage = pageNumber;
      $('.item').hide();
      const startIndex = (pageNumber - 1) * itemsPerPage;
      const endIndex = startIndex + itemsPerPage;
      $('.item').slice(startIndex, endIndex).show();

      if (currentPage == 1) {
        $(".previous-page").each(function(i) { console.log(this); $(this).addClass("disabled") });
        $(".first-page").each(function() { $(this).addClass("disabled") });
      } else {
        $(".previous-page").each(function() { $(this).removeClass("disabled") });
        $(".first-page").each(function() { $(this).removeClass("disabled") });
      }

      if (currentPage == totalPages) {
        $(".next-page").each(function() { $(this).addClass("disabled") });
        $(".last-page").each(function() { $(this).addClass("disabled") });
      } else {
        $(".next-page").each(function() { $(this).removeClass("disabled") });
        $(".last-page").each(function() { $(this).removeClass("disabled") });
      }
    }

    function previousPage() {
      showPage(currentPage - 1);
    }

    function nextPage() {
      showPage(currentPage + 1);
    }

    function generatePagination() {
      $('#pagination').append('<li class="page-item first-page"><a class="page-link" href="#" aria-label="First" onclick="showPage(1)"><span aria-hidden="true">&laquo;</span></a></li>')
      $('#pagination').append('<li class="page-item previous-page"><a class="page-link" href="#" aria-label="Previous" onclick="previousPage()"><span aria-hidden="true">&lsaquo;</span></a></li>')
      for (let i = 1; i <= totalPages; i++) {
        $('#pagination').append(`<li class="page-item"><a class="page-link" href="#" onclick="showPage(${i})">${i}</a></li>`);
      }
      $('#pagination').append('<li class="page-item next-page"><a class="page-link" href="#" aria-label="Next" onclick="nextPage()"><span aria-hidden="true">&rsaquo;</span></a></li>')
      $('#pagination').append(`<li class="page-item last-page"><a class="page-link" href="#" aria-label="Last" onclick="showPage(${totalPages})"><span aria-hidden="true">&raquo;</span></a></li>`)
    }

    updates.forEach(x => {
      const id = x.name.replace(/[.,\s]/g, '');
      const url = "/articles/" + x.name.replace(/[.,\s]/g, '-').toLowerCase() + ".php";
      $("#updates_list").append(`
        <div class="item row pt-4 d-flex flex-row-reverse">
          <div class="col-12 col-sm-4 d-flex flex-column align-items-end align-self-center">
            <a href='${url}'><img class="img-fluid" alt="${x.imagealt}" src="/resources/images/updates/${x.image}"></a>
          </div>
          <div class="col-12 col-sm-8 d-flex align-items-center text-dark pb-4">
            <div>
              <b>${x.datestring}</b>
              <br>
              <a class='display-7 updates-link' href='${url}'>${x.name}</a>
              <br>
              <div class='my-2 badge badge-${x.type}'>${x.type}</div>
            </div>
          </div>
        </div>
        <hr>`)
    });

    generatePagination();
    $("#pagination").clone().appendTo("#pagination-copy");
    currentPage = 1;
    showPage(currentPage);
  </script>

</body>
</html>
