<?PHP
///////////////////// TEMPLATE 123 /////////////////////
$template_active = <<<HTML
<div style="width:420px; margin-bottom:30px;">
<div></div>

<div>{short-story}</div>

<div style="float: right;">[full-link]Целиком...[/full-link] </div>

<div></div>
</div>
HTML;


$template_full = <<<HTML
<div style="width:420px; margin-bottom:15px;">
<div></div>

<div>{full-story}</div>

<div></div>

<div></div>
</div>
HTML;


$template_comment = <<<HTML

HTML;


$template_form = <<<HTML
 
HTML;


$template_prev_next = <<<HTML
<p align="center">[prev-link]<< Previous[/prev-link] {pages} [next-link]Next >>[/next-link]</p>
HTML;
$template_comments_prev_next = <<<HTML

HTML;
?>
