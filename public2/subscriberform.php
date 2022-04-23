<?php
if($_POST["Message"]) {
mail("sayidrukkie@gmail.com", "Here is the sample subject line",
$_POST["Insert Your Message"]. "From: sayidrukkie@gmail.com");
}
?>