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
        <div id="accordion" role="tablist" aria-multiselectable="true">
          <div class="accordion-item">
            <div class="accordion-title" role="tab" id="headingZero">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseZero" aria-expanded="true" aria-controls="collapseZero">Title</a>
            </div>
            <div id="collapseZero" class="accordion-content collapse show" role="tabpanel" aria-labelledby="headingZero">Accordion content</div>
          </div>
          <div class="accordion-item">
            <div class="accordion-title" role="tab" id="headingSix">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Title</a>
            </div>
            <div id="collapseSix" class="accordion-content collapse" role="tabpanel" aria-labelledby="headingSix">Accordion content</div>
          </div>

          <div class="card">
            <div class="card-header" role="tab" id="headingFour">
              <h5 class="mb-0">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Collapsible Group Item #4
                </a>
              </h5>
            </div>
            <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
              <div class="card-block">
                Content...
              </div>
            </div>
          </div>






          <div class="card">
            <div class="card-header" role="tab" id="headingOne">
              <h5 class="mb-0">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  Collapsible Group Item #1
                </a>
              </h5>
            </div>
            <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
              <div class="card-block">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
              <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Collapsible Group Item #2
                </a>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="card-block">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" role="tab" id="headingThree">
              <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Collapsible Group Item #3
                </a>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="card-block">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
        </div>
    <?php close_card(); ?>

    <?php open_card('Scroll Bar'); ?>
        <p>Can't find it in Bootstrap.</p>
    <?php close_card(); ?>

<?php include 'footer.php'; ?>