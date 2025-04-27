<?php
$app_feature_block = get_fields(); // get all fields in array
$features_details = $app_feature_block['add_features_details'];
if(!empty($features_details)): ?>
<!-- Solution-inner Table Section Start -->
<section class="section-spacing">
    <div class="container">
        <div class="solution-inner-table">
            <div class="solution-inner-table-data">
                <?php echo $features_details; ?>
            </div>
        </div>
    </div>
</section>
<!-- Solution-inner Table Section End -->
<?php endif; ?>
