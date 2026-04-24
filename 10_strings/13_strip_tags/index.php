<?php

$txtHtml = 
"<p>Testando parágrafo.</p>
<div>Uma div</div>
<p>Outro parágrafo</p>";

echo $txtHtml;

echo $salvarTxtBanco = strip_tags($txtHtml);
