<?php 

if (isset($_GET['lunghezza']) && $_GET['lunghezza'] != '' && filter_var($_GET['lunghezza'], FILTER_VALIDATE_INT) ) {
    $lunghezza = $_GET['lunghezza'];
    echo $lunghezza;

    function generaStringa($lunghezza) {
        $num = "0123456789";
        $let = "abcdefghijklmnopqrstuvwxyz";
        $special = "ωώωtΐtöÕõËéèäåắ";
    
        $caratteri = $num . $let .$special ;
    
        $pwd = '';
        for ($i = 0; $i < $lunghezza; $i++) {
            $pwd .= $caratteri[rand(0, $lunghezza)];
        }
    
        return $pwd;
    };
    
}else{
    
} 

 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <h1>PASSWORD GENERATOR</h1>
            </div>
            <form action="index.php" method="GET">
                <div class="col-6  py-3">
                    <input type="text" id="lunghezza" name="lunghezza" class="form-control" placeholder="INSERISCI LA LUNGHEZZA DELLA PASSWORD">
                </div>
                <div class="col-4 py-3">
                    <button class="btn btn-success">INVIA</button>
                </div>
                <div class="col-12">
                        <?php echo generaStringa($lunghezza) ?>
                </div>
            </form>
        </div>
    </div>
</body>
</html>