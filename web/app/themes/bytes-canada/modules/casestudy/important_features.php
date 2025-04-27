<?php
// Features section
$feature_title = get_sub_field('feature_title');
$features = get_sub_field('add_features');
if(!empty($features)): ?>
<!-- Case Study Feature Section Start -->
<section class="section-spacing">
    <div class="container">
        <div class="case-study-feature">
            <?php if(!empty($feature_title)): ?>
                <h2 class="h4"><?php echo $feature_title; ?></h2>
            <?php endif; ?>
            <ul>
                <?php foreach($features as $feature): ?>
                    <li><?php echo $feature['feature']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>
<!-- Case Study Feature Section End -->
<?php endif; ?>
