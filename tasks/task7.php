<?php

add_action('init','generate_shortcode');

function generate_shortcode()
{
    add_shortcode('quotes', 'get_quotes');
}

function get_quotes()
{
?>
<form>
<input type='submit' id='button1' value='Get Quote'>
<p id='output1'></p>
<p id='output2'></p>
<p id='output3'></p>
<p id='output4'></p>
<p id='output5'></p>
</form>
<?php
}
