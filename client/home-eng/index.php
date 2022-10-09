<?php
include('../lib/connect.php');
include('../lib/header.php');
?>

<body>
    <?php
    include('../lib/nav-top.php');
    include('../lib/nav-sticky.php');
    if (isset($_GET['view'])) {
        switch ($_GET['view']) {
            case 'eng':
                include('./home-eng/view-eng.php');
                break;
            case 'vie':
                include('./home-vie/view-vie.php');
                break;
            default:
                include('./home-vie/view-vie.php');
                break;
        }
    }
    ?>
</body>