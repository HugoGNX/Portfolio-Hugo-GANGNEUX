<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Portfolio-Hugo-GANGNEUX</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
              integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    </head>
    <body>
        
        <?php 
        session_start();
        include 'vues/nav.php';
        include 'config.php';
        
        
        
        if (!isset($_REQUEST['uc'])) {
            $_REQUEST['uc'] = 'accueil';
        }
        $uc = htmlspecialchars($_REQUEST["uc"]);
        switch ($uc) {
            case 'accueil.php':
                include 'vues/accueil.php';
                break;
            case 'BTS_SIO':
                include 'vues/vues-Formations/Bts_sio.php';
                break;
            case 'Parcours':
                include 'vues/vues-Formations/Parcours.php';
                break;
            default:
                include 'vues/accueil.php';
                break;
        }
        
        
        
        include 'includes/footer.php'; 
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
    
</html>