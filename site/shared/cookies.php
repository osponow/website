<div class="cookies card bg-warning p-2">
  <i class="fa fa-close" onclick="cookies_accept()" aria-hidden="true"></i>
  <span class="sr-only" onclick="cookies_accept()">Close box</span>
  <b>Use of Cookies</b>
  <p>We use cookies that are strictly necessary to log your response to this form, all other cookies are optional and are used for analytics or marketing.
    You can read our <a href="/privacy.php">full cookie policy here</a>.
  </p>
  <div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" id="switchNecessary" checked disabled>
    <label class="form-check-label" for="switchNecessary">Strictly necessary</label>
  </div>
  <div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" id="switchAnalytics">
    <label class="form-check-label" for="switchAnalytics">Analytics</label>
  </div>
  <div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" id="switchMarketing">
    <label class="form-check-label" for="switchMarketing">Marketing</label>
  </div>
  <div class="row pt-2 g-1">
    <div class="col-4">
      <button class="btn btn-primary w-100 p-0 py-1" onclick="cookies_accept()">Accept All</button>
    </div>
    <div class="col-4">
      <button class="btn btn-primary w-100 p-0 py-1" onclick="cookies_reject()">Reject All</button>
    </div>
    <div class="col-4">
      <button class="btn btn-primary w-100 p-0 py-1" onclick="savecookies()">Save and Exit</button>
    </div>
  </div>
</div>
