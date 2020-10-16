<!-- php to js -->
<?php
$variablePHP = "From PHP to JS."; // Variable PHP
echo "1. $variablePHP"; // Echo variable PHP
?>
<script>
    let variableJS = <?php echo json_encode($variablePHP); ?>; // Variable PHP to JS
    console.log(variableJS); // Output JS variable to console
</script>

<!-- Space -->
<?php echo "<br/>------<br/>"; ?>
<script>console.log("-----");</script>
<!-- Space -->

<!-- js to php  -->
<script>
    let tekst = "From JS to PHP"; // Variable JS
    console.log(tekst); // Output JS variable to console
</script>
<?php
$tekstphp = "<script>document.write(tekst);</script>"; // Variable JS to PHP
echo "2. $tekstphp"; // Echo variable PHP
?>