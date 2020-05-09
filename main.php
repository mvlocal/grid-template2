<?php
//header("Content-Type: text/plain");
//phpinfo();
//exit();
//include("functions.php");
$br = '<br>';
date_default_timezone_set("America/Chicago");
$dtime = date("Y-m-d_H:i:s");
$dtime1 = date("Y-m-d H:i:s");
//echo "in compare.php".$br;
$style1 = 'style="background-color:gray;color:white;"';
//echo "<div $style1>Current Date and Time: ".$dtime1."</div>";

//exit();

$html_o = <<<EOT
<!DOCTYPE html>
<html>
<head>
<style>
</style>
<link rel="stylesheet" type="text/css" href="main.css">
<script  src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/MathJax.js?config=TeX-AMS-MML_HTMLorMML'></script>
<script type="text/x-mathjax-config"> 
    MathJax.Hub.Config({ 
        "HTML-CSS": { scale: 100, linebreaks: { automatic: true }, noReflows: false }, 
        SVG: { linebreaks: { automatic:true } }, 
        TeX: { equationNumbers: { autoNumber: "AMS" }},
        displayAlign: "left" });
</script>
<script src="main.js"></script>
</head>
<body>
<div style="height: 15px;"></div>
<div class="grid-container"> <!-- Start grid-container -->
EOT;

$html_c = <<<EOT
\n</div> <!-- End grid-container -->
</body>
</html>
EOT;

echo $html_o;


$div_item_1 = <<<EOT
\n <div class="grid-item item-1"> <!-- Start div item-1 (row 1) -->
<h1>grid item 1 \(x^3\)</h1>
</div>
EOT;
echo $div_item_1;

$div_item_2 = <<<EOT
\n <div class="grid-item item-2"> <!-- Start div item-2 (column 1 in row 2)-->
<h1>grid item 2</h1>
</div>
EOT;
echo $div_item_2;

$div_item_3 = <<<EOT
\n<div class="grid-item item-3"> <!-- Start div item-3 (column 2 in row 2)-->
<h1>grid item 3</h1>
</div>
EOT;
echo $div_item_3;

$div_item_4 = <<<EOT
\n
<div class="grid-item item-4"> <!-- Start div item-4 (row 3)-->
  <div class="grid-subitem item-4h"><h1>grid item 1 of grid area 4</h1></div>
  <div class="grid-subitem item-4a">4a</div>
  <div class="grid-subitem item-4b">4b</div>
  <div class="grid-subitem item-4c">4c</div>
</div>
EOT;
echo $div_item_4;

$div_item_5 = <<<EOT
\n
<div class="grid-item item-5"> <!-- Start div item-5 (row 3)-->
  <div class="grid-subitem item-5h"><h1>grid item 1 of grid area 5</h1></div>
  <div class="grid-subitem item-5a">5a</div>
  <div class="grid-subitem item-5b">5b</div>
</div>
EOT;
echo $div_item_5;


echo $html_c;
exit();
?>
