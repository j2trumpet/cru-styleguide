<?php $page_title = "Buttons"; ?>
<?php include 'header.php'; ?>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Dark Buttons</h2>
      </div>
      <div class="panel-body">
        <!-- <button type="button" class="btn btn-default">Default</button> -->
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <!-- <button type="button" class="btn btn-link">Link</button> -->
        <button type="button" class="btn btn-primary" disabled="disabled">Disabled</button>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Light Buttons</h2>
      </div>
      <div class="panel-body">
        <div class="row" style="background-color: #05699B; padding-top: 5px; padding-bottom: 5px; margin-top: 5px;">
          <div class="col-xs-12">
            <button type="button" class="btn btn-primary btn-light">Light Primary</button>
            <button type="button" class="btn btn-secondary btn-light">Light Secondary</button>
          </div>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Radio Buttons</h2>
      </div>
      <div class="panel-body">
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
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Checkboxes</h2>
      </div>
      <div class="panel-body">
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
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">File Selector</h2>
      </div>
      <div class="panel-body">
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

    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Switch</h2>
      </div>
      <div class="panel-body">
        <p>Can't find it in Bootstrap.</p>
      </div>
    </div>   

<?php include 'footer.php'; ?>