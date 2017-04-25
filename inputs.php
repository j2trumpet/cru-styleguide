<?php $page_title = "Inputs"; ?>
<?php include 'header.php'; ?>

    <?php open_card('Form Fields'); ?>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" />
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
        </div>
    <?php close_card(); ?>

    <?php open_card('Text Field'); ?>
        <div class="form-group">
          <label for="exampleTextarea">Message</label>
          <textarea class="form-control" rows="3" id="exampleTextarea"></textarea>
        </div>
    <?php close_card(); ?>

    <?php open_card('Validation', 'Icon background SVGs'); ?>
        <div class="form-group has-success">
          <label class="form-control-label" for="inputSuccess1">Success</label>
          <input type="text" class="form-control form-control-success" id="inputSuccess1" aria-describedby="helpBlock2" />
          <small id="helpBlock2" class="form-text text-muted">A block of help text that breaks onto a new line and may extend beyond one line.</small>
        </div>
        <div class="form-group has-warning">
          <label class="form-control-label" for="inputWarning1">Warning</label>
          <input type="text" class="form-control form-control-warning" id="inputWarning1" />
        </div>
        <div class="form-group has-danger">
          <label class="form-control-label" for="inputDanger1">Danger</label>
          <input type="text" class="form-control form-control-danger" id="inputDanger1" />
        </div>
    <?php close_card(); ?>

    <?php open_card('Dropdown Open/Closed'); ?>
        <p>Requires custom HTML/CSS - possibly a plugin like <a href="http://mikemaccana.github.io/styleselect/" target="_blank">Style Select</a> or <a href="https://harvesthq.github.io/chosen/" target="_blank">Chosen</a>.</p>
    <?php close_card(); ?>

    <?php open_card('Search Open/Closed', 'Needs revisiting'); ?>
        <input type="text" class="form-control" placeholder="Search" />
    <?php close_card(); ?>

<?php include 'footer.php'; ?>