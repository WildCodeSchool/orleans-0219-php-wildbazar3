<div class="modal fade" id="<?php echo $book['dataTarget']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle"><?php echo $book['bookTitle']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body w-100">
                <div class="row ">
                    <div class="col-sm-12 col-md-6 justify-content-center">
                        <img src="<?php echo $book['image']; ?>">
                    </div>
                    <div class="col-sm-12 col-md-6 justify-content-center">
                        <p class="p_descriptif_modal"><?php echo $book['bookresume']; ?></p>
                    </div>
                </div>
                <div class="row ">
                    <div class="col">
                        <p class="p_caract_modal"><span style="font-weight:700">Caractéristiques</span><br/>
                            <?php echo $book['bookYear']; ?><br/>
                            <?php echo $book['bookPage']; ?><br/>
                            <?php echo $book['bookShaping']; ?><br/>
                            <?php echo $book['bookSize']; ?></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn_item">Add to cart</button>
            </div>
        </div>
    </div>
</div>