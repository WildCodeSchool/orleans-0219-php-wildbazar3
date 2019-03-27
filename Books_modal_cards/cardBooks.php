<div class="col-md-6 col-lg-3 mx-auto card_margin">
    <div class="card card-border w-100 h-100">
        <img class="card-img-top" src="<?php echo $book['image']; ?>" alt="Bathroom Manners">
        <div class="books_card_text align-middle">
            <p class="align-middle"><?php echo $book['price'] . ' €'; ?></p>
        </div>
        <div class="card-body">
            <h4 class="card-title"></h4>
            <p class="card-text card_description"><em><?php echo $book['bookTitle']; ?></em><br/>
                <?php echo $book['bookAuthor']; ?></p>
        </div>
        <div class="card-footer card-footer-border text-center">
            <button type="button" class="btn btn_item" data-toggle="modal"
                    data-target="<?php echo '#' . 'modal_' . $book['id']; ?>">
                Show more
            </button>
        </div>
    </div>
</div>