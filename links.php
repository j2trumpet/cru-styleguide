<?php $page_title = "Links"; ?>
<?php include 'header.php'; ?>

    <?php open_card('Pagination'); ?>
        <nav aria-label="Page navigation">
          <ul class="pagination justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true"><i class="mdi mdi-chevron-left"></i></span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item active"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">6</a></li>
            <li class="page-item"><a class="page-link" href="#">7</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span class="sr-only">Next</span>
                <span aria-hidden="true"><i class="mdi mdi-chevron-right"></i></span>
              </a>
            </li>
          </ul>
        </nav>
    <?php close_card(); ?>

    <?php open_card('Text Link'); ?>
        <a href="">Text Link Example</a>
      </div>
    </div>

    <?php open_card('Tags'); ?>
        <a href="#" class="badge badge-pill badge-default">Default</a>
        <a href="#" class="badge badge-pill badge-primary">Primary</a>
        <a href="#" class="badge badge-pill badge-success">Success</a>
        <a href="#" class="badge badge-pill badge-info">Info</a>
        <a href="#" class="badge badge-pill badge-warning">Warning</a>
        <a href="#" class="badge badge-pill badge-danger">Danger</a>
    <?php close_card(); ?>

    <?php open_card('Pager'); ?>
        Test
    <?php close_card(); ?>

    <?php open_card('Tabs'); ?>
        Test
    <?php close_card(); ?>

    <?php open_card('Labels'); ?>
        Test
    <?php close_card(); ?>

<?php include 'footer.php'; ?>