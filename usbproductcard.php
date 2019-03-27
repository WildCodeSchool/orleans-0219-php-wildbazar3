
<div class="col-lg-3 col-md-4 col-sm-6">
              <div class="card">
                <img src="<?php echo $image ?>" class="card-img-top" alt="Photo of USB key">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $name ?></h5>
                  <p class="card-text"><?php echo $text ?></p>
                  <!--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
                  <button type="button" class="btn btn-primary down" data-toggle="modal" data-target="<?php echo '#usb'.$target ?>">
              Details
            </button>
                </div>
              </div>
            </div>
