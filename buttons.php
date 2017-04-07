<?php include 'header.php'; ?>

    <h1>Buttons</h1>

    <h2>Dark Buttons</h2>
    <!-- <button type="button" class="btn btn-default">Default</button> -->
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-secondary">Secondary</button>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <!-- <button type="button" class="btn btn-link">Link</button> -->
    <button type="button" class="btn btn-primary" disabled="disabled">Disabled Button</button>

    <h2>Light Buttons</h2>
    <div class="row" style="background-color: #05699B; padding-top: 5px; padding-bottom: 5px; margin-top: 5px;">
      <div class="col-xs-12">
        <button type="button" class="btn btn-primary btn-light">Light Primary</button>
        <button type="button" class="btn btn-secondary btn-light">Light Secondary</button>
      </div>
    </div>

    <h2>Radio Buttons</h2>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" />
        <span></span>
        Phone
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" />
        <span></span>
        Text
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" checked />
        <span></span>
        Email
      </label>
    </div>

    <h2>Checkboxes</h2>
    <div class="checkbox">
      <label>
        <input type="checkbox" value="" />
        <span></span>
        Label
      </label>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox" value="" checked />
        <span></span>
        Longer label
      </label>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox" value="" checked />
        <span></span>
        Label
      </label>
    </div>

    <h2>File Selector</h2>
    <div class="upload">
      <button class="btn btn-primary">
        <label for="uploadBtn">Choose file</label>
        <input type="file" id="uploadBtn" />
      </button>
      <input id="uploadFile" placeholder="No file chosen" disabled="disabled" />
      <p class="help-block">Example block-level help text here.</p>
    </div>

    <script>
    document.getElementById("uploadBtn").onchange = function () {
        document.getElementById("uploadFile").value = this.value;
    };
    </script>

    <h2>Switch</h2>
    <p>Can't find it in Bootstrap.</p>

<?php include 'footer.php'; ?>