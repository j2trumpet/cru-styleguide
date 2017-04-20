<?php $page_title = "Buttons"; ?>
<?php include 'header.php'; ?>

    <div class="card">
      <h2 class="card-header">Dark Buttons</h2>
      <div class="card-block">
        <!-- <button type="button" class="btn btn-default">Default</button> -->
        <a href="#" role="button" class="btn btn-primary">Primary</a>
        <a href="#" role="button" class="btn btn-secondary">Secondary</a>
        <a href="#" role="button" class="btn btn-success">Success</a>
        <a href="#" role="button" class="btn btn-info">Info</a>
        <a href="#" role="button" class="btn btn-warning">Warning</a>
        <a href="#" role="button" class="btn btn-danger">Danger</a>
        <a href="#" role="button" class="btn btn-link">Link</a>
        <a href="#" role="button" class="btn btn-primary disabled">Disabled</a>
      </div>
    </div>

    <div class="card">
      <h2 class="card-header">Light Buttons</h2>
      <div class="card-block">
        <div style="background-color: #05699B; padding: 5px;">
          <a href="#" role="button" class="btn btn-primary btn-light">Light Primary</a>
          <a href="#" role="button" class="btn btn-secondary btn-light">Light Secondary</a>
        </div>
      </div>
    </div>

    <div class="card">
      <h2 class="card-header">Radio Buttons</h2>
      <div class="card-block">
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios1" value="option1" />
            <span></span>
            Phone
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios2" value="option2" />
            <span></span>
            Text
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios3" value="option3" checked />
            <span></span>
            Email
          </label>
        </div>
      </div>
    </div>

    <div class="card">
      <h2 class="card-header">Checkboxes</h2>
      <div class="card-block">
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="" />
            <span></span>
            Label
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="" checked />
            <span></span>
            Longer label
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="" checked />
            <span></span>
            Label
          </label>
        </div>
      </div>
    </div>

    <div class="card">
      <h2 class="card-header">File Selector</h2>
      <div class="card-block">
        <div class="upload">
          <button class="btn btn-primary">
            <label for="uploadBtn">Choose file</label>
            <input type="file" id="uploadBtn" />
          </button>
          <input id="uploadFile" placeholder="No file chosen" disabled="disabled" />
          <p class="help-block">Example block-level help text here.</p>
        </div>
      </div>
      <script>
      document.getElementById("uploadBtn").onchange = function () {
          document.getElementById("uploadFile").value = this.value;
      };
      </script>
    </div>

    <div class="card">
      <h2 class="card-header">Switch</h2>
      <div class="card-block">
        <p>Can't find it in Bootstrap.</p>
      </div>
    </div>   

<?php include 'footer.php'; ?>