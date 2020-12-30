<!-- PHP to JS -->
<?php
$variablePHP = "From PHP to JS."; // Variable PHP
echo "1. $variablePHP"; // Echo variable PHP
?>
<script>
    let variableJS = <?php echo json_encode($variablePHP); ?>; // Variable PHP to JS
    console.log(variableJS); // Output JS variable to console
</script>

<!-- JS to PHP  -->
<script>
    let tekst = "From JS to PHP"; // Variable JS
    console.log(tekst); // Output JS variable to console
</script>
<?php
$tekstphp = "<script>document.write(tekst);</script>"; // Variable JS to PHP
echo "2. $tekstphp"; // Echo variable PHP
?>

<!-- Console for PHP -->
function _c($var)
{
?>
    <script>
        console.log(<?= json_encode($var) ?>)
    </script>
<?php
}
