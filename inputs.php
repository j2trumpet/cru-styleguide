<?php include 'header.php'; ?>

    <h1>Inputs</h1>

    <h2>Form Fields</h2>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" />
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

    <h2>Text Field</h2>
    <div class="form-group">
      <label for="exampleTextarea">Message</label>
      <textarea class="form-control" rows="2" id="exampleTextarea"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

    <h2>Validation</h2>
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

    <h2>Dropdown Open/Closed</h2>
    <p>Requires custom HTML/CSS - possibly a plugin like <a href="http://mikemaccana.github.io/styleselect/" target="_blank">this</a>.</p>

    <h2>Search Closed</h2>
    <input type="text" class="form-control" placeholder="Search" />

<?php include 'footer.php'; ?>