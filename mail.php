<?php
if($_POST["message"]) {
    mail("rwilliams01101@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>