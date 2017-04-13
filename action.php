<?php $page_title = "Action"; ?>
<?php include 'header.php'; ?>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Alerts</h2>
      </div>
      <div class="panel-body">
        <div class="alert alert-success" role="alert">Heads up or well done, this is a successful color.</div>
        <div class="alert alert-info" role="alert">This is just some handy info.</div>
        <div class="alert alert-warning alert-dismissable" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="mdi mdi-close"></i></span></button>
          Warning, better check yourself, you're not looking too good.
        </div>
        <div class="alert alert-danger alert-dismissable" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="mdi mdi-close"></i></span></button>
          No good, change a few things up and try submitting again.
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Tool Tip</h2>
      </div>
      <div class="panel-body">
        <p>Coming in Bootstrap 4 - <a href="https://v4-alpha.getbootstrap.com/components/tooltips/" target="_blank">link</a></p>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Progress Bars</h2>
      </div>
      <div class="panel-body">
        <div class="progress">
          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
            <span class="sr-only">40% Complete (success)</span>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
            <span class="sr-only">20% Complete (info)</span>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
            <span class="sr-only">60% Complete (warning)</span>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
            <span class="sr-only">80% Complete (danger)</span>
          </div>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Accordion</h2>
      </div>
      <div class="panel-body">
        <p>Coming in Bootstrap 4 - <a href="https://v4-alpha.getbootstrap.com/components/collapse/" target="_blank">link</a></p>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Scroll Bar</h2>
      </div>
      <div class="panel-body">
        <p>Can't find it in Bootstrap.</p>
      </div>
    </div>

<?php include 'footer.php'; ?>