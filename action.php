<?php $page_title = "Action"; ?>
<?php include 'header.php'; ?>

    <?php open_card('Alerts'); ?>
        <div class="alert alert-success" role="alert">Heads up or well done, this is a successful color.</div>
        <div class="alert alert-info" role="alert">This is just some handy info.</div>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="mdi mdi-close"></i></span></button>
          Warning, better check yourself, you're not looking too good.
        </div>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="mdi mdi-close"></i></span></button>
          No good, change a few things up and try submitting again.
        </div>
    <?php close_card(); ?>

    <?php open_card('Tool Tip'); ?>
        <script>
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        });
        </script>
        <button type="button" class="btn btn-primary" data-toggle="tooltip" data-html="true" data-placement="right" title="<h4>Hey you!</h4><p>This is a tool tip or pop over, arrow tip can be top, bottom, left or right.</p>">Tooltip with HTML</button>
    <?php close_card(); ?>

    <?php open_card('Progress Bars'); ?>
        <div class="progress">
          <div class="progress-bar bg-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
            <span class="sr-only">40% Complete (success)</span>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar bg-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
            <span class="sr-only">20% Complete (info)</span>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
            <span class="sr-only">60% Complete (warning)</span>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
            <span class="sr-only">80% Complete (danger)</span>
          </div>
        </div>
    <?php close_card(); ?>

    <?php open_card('Accordion'); ?>
        <p>Coming in Bootstrap 4 - <a href="https://v4-alpha.getbootstrap.com/components/collapse/" target="_blank">link</a></p>
    <?php close_card(); ?>

    <?php open_card('Scroll Bar'); ?>
        <p>Can't find it in Bootstrap.</p>
    <?php close_card(); ?>

<?php include 'footer.php'; ?>