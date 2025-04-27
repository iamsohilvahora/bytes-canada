<?php
$technology_offer_block = get_fields(); // get all fields in array
$technology_offer_title = $technology_offer_block['technology_offer_title'];
$technology_offer_details = $technology_offer_block['technology_offer_details']; 
if(!empty($technology_offer_title) && !empty($technology_offer_details)): ?>
<!-- Technology-inner Benefits Section Start -->
<section class="section-spacing-bg technology-inner-benefits-bg">
    <div class="container">
        <div class="technology-inner-benefits">
            <div class="technology-inner-benefits-top">
                <h2 class="h3"><?php echo $technology_offer_title; ?></h2>
            </div>
            <div class="technology-inner-benefits-bottom">
                <ul class="technology-inner-benefits-bottom-ul">
                    <?php
                    foreach($technology_offer_details as $offer_detail): 
                        $offer = $offer_detail['add_offer_detail'];
                        if(!empty($offer)): ?>
                            <li class="technology-inner-benefits-bottom-list"><?php echo $offer; ?></li>
                    <?php
                        endif;
                    endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Technology-inner Benefits Section End -->
<?php endif; ?>
