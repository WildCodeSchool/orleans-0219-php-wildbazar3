
<!-- Modal -->
            <div class="modal fade" id="<?php echo $data-target ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle"><?php echo $name ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-6">
                          <div>
                            <img class="modalphoto" src="<?php echo $image ?>" alt="Photo of USB key">
                          </div>
                          <div>
                            <p class="characteristics">Characteristics:</P>
                            <p>-size: <?php echo $size ?>GB</p>
                          </div>
                      </div>
                      <div class="col-sm-6">
                        <p><?php echo $modalText ?></p>
                        <p class="usbprice">$<?php echo $price ?>.00</p>
                      </div>
                    </div>
                  </div>

                  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to cart</button>
                  </div>

                </div>
              </div>
            </div>