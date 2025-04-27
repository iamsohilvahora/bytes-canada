<?php
$we_are_rated_blocks = get_fields(); // get all fields in array
// left group
$typing_text = $we_are_rated_blocks['we_are_rated']['left_group']['typing_text']; // Typing text
$typing_text_val = !empty($typing_text) ? $typing_text : "";
// right group
$title = $we_are_rated_blocks['we_are_rated']['right_group']['title'];
$description = $we_are_rated_blocks['we_are_rated']['right_group']['description']; ?>
<!-- About-typing Section Start -->
<section class="section-spacing">
    <div class="container">
        <div class="About-typing">
            <div class="About-typing-left">
                <h2 class="h3"><span class="ityped"></span></h2>
            </div>
            <div class="About-typing-right">
                <?php if (!empty($title)): ?>
                    <h2 class="h3">
                        <?php echo $title; ?>
                    </h2>
                <?php endif;
                if (!empty($description)): ?>
                    <p class="h6">
                        <?php echo $description; ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- About-typing Section End -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"
    integrity="sha512-BdHyGtczsUoFcEma+MfXc71KJLv/cd+sUsUaYYf2mXpfG/PtBjNXsPo78+rxWjscxUYN2Qr2+DbeGGiJx81ifg=="
    crossorigin="anonymous"></script>
<script>
    setTimeout(() => {
        var typing = new Typed(".ityped", {
            strings: ['<?php echo $typing_text_val; ?>'],
            typeSpeed: 100,
            backSpeed: 40,
            loop: true,
        });
    }
        , 1000);
</script>