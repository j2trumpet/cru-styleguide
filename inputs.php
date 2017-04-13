<?php $page_title = "Inputs"; ?>
<?php include 'header.php'; ?>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Form Fields</h2>
      </div>
      <div class="panel-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" />
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Text Field</h2>
      </div>
      <div class="panel-body">
        <div class="form-group">
          <label for="exampleTextarea">Message</label>
          <textarea class="form-control" rows="2" id="exampleTextarea"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Validation</h2>
      </div>
      <div class="panel-body">
        <div class="form-group has-success has-feedback">
          <label class="control-label" for="inputSuccess1">Success</label>
          <input type="text" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" />
          <i class="form-control-feedback mdi mdi-check"></i>
          <span id="helpBlock2" class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
        </div>
        <div class="form-group has-warning has-feedback">
          <label class="control-label" for="inputWarning1">Warning</label>
          <input type="text" class="form-control" id="inputWarning1" />
          <i class="form-control-feedback mdi mdi-alert-circle"></i>
        </div>
        <div class="form-group has-error has-feedback">
          <label class="control-label" for="inputError1">Danger</label>
          <input type="text" class="form-control" id="inputError1" />
          <i class="form-control-feedback mdi mdi-close"></i>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Dropdown Open/Closed</h2>
      </div>
      <div class="panel-body">
        <p>Requires custom HTML/CSS - possibly a plugin like <a href="http://mikemaccana.github.io/styleselect/" target="_blank">Style Select</a> or <a href="https://harvesthq.github.io/chosen/" target="_blank">Chosen</a>.</p>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Search Closed</h2>
      </div>
      <div class="panel-body">
        <input type="text" class="form-control" placeholder="Search" />
      </div>
    </div>

<?php include 'footer.php'; ?>