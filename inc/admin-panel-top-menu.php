<?php
if (isset($_GET['settings-updated'])) {
    if ($_GET['settings-updated'] == true) {
        ?>

        <div class="updated below-h2" id="message"><p>Settings Saved!</p></div>

    <?php
    }
} ?>


<div class="message">


</div>
<div class="options break">
    <button type="button" class="button-primary" onclick="optionsPage('cloud-top-level-handle');">Usage Instructions
    </button>
    <button type="button" class="button-primary" onclick="optionsPage('logo-options');">Logo &amp; Branding Options
    </button>
    <button type="button" class="button-primary" onclick="optionsPage('social-options');">Social Network Options
    </button>
    <button type="button" class="button-primary" onclick="optionsPage('custom-options');">Custom CSS &amp; JS Options
    </button>

</div>
