<?php $page_title = "Buttons"; ?>
<?php include 'header.php'; ?>

    <?php open_card('Dark Buttons'); ?>
        <a href="#" role="button" class="btn btn-primary">Primary</a>
        <a href="#" role="button" class="btn btn-secondary">Secondary</a>
        <a href="#" role="button" class="btn btn-success">Success</a>
        <a href="#" role="button" class="btn btn-info">Info</a>
        <a href="#" role="button" class="btn btn-warning">Warning</a>
        <a href="#" role="button" class="btn btn-danger">Danger</a>
        <a href="#" role="button" class="btn btn-link">Link</a>
        <a href="#" role="button" class="btn btn-primary disabled">Disabled</a>
    <?php close_card(); ?>

    <?php open_card('Light Buttons'); ?>
        <div style="background-color: #05699B; padding: 5px;">
          <a href="#" role="button" class="btn btn-primary btn-light">Light Primary</a>
          <a href="#" role="button" class="btn btn-secondary btn-light">Light Secondary</a>
        </div>
    <?php close_card(); ?>

    <?php open_card('Radio Buttons'); ?>
        <div class="form-group">
          <div class="form-check">
            <label class="custom-control custom-radio">
              <input class="custom-control-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" />
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description">Phone</span>
            </label>
          </div>
          <div class="form-check">
            <label class="custom-control custom-radio">
              <input class="custom-control-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" />
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description">Text</span>
            </label>
          </div>
          <div class="form-check">
            <label class="custom-control custom-radio">
              <input class="custom-control-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" checked />
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description">Email</span>
            </label>
          </div>
        </div>
    <?php close_card(); ?>

    <?php open_card('Checkboxes'); ?>
        <div class="form-group">
          <div class="form-check">
            <label class="custom-control custom-checkbox">
              <input class="custom-control-input" type="checkbox" value="" />
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description">Label</span>
            </label>
          </div>
          <div class="form-check">
            <label class="custom-control custom-checkbox">
              <input class="custom-control-input" type="checkbox" value="" checked />
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description">Longer label</span>
            </label>
          </div>
          <div class="form-check">
            <label class="custom-control custom-checkbox">
              <input class="custom-control-input" type="checkbox" value="" checked />
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description">Label</span>
            </label>
          </div>
        </div>
    <?php close_card(); ?>

    <?php open_card('File Selector', 'Needs revisiting'); ?>
        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
        <small id="fileHelp" class="form-text text-muted">Example block-level help text here.</small>
    <?php close_card(); ?>

    <?php open_card('Switch'); ?>
        <p>Can't find it in Bootstrap.</p>
    <?php close_card(); ?>   

<?php include 'footer.php'; ?>