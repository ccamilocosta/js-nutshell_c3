
<?php 
  require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/config.php';
  require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/header.inc.php';
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link href="../libs/prism/prism.css" rel="stylesheet" />
    
</head>
<body>
    <?php
        include "pages/topic.D-claudia.php";
        include "pages/topic.K-claudia.php";
    ?>
</body>
<script src="../c3.js"></script>

<?php include $_SERVER['Home'].'/projects/js_nutshell/inc/footer.inc.php'; ?>

</html>