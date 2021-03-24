<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php require_once 'app/config.php'; ?>
    <?php require_once 'app/dependencias.php'; ?>
</head>
<body>
    <?php
    /**isset: ¿Esta colocado algun valor?
     * $_GET:variable de un conjunto de variables que son globales que ya existen, todas son arreglos, pocen una llave 
     * y por cada llave va a tener un valor
     * vista_solicitada: que vista salicidad escribio el usuario en el navegador
     * el if y el else nos van ayudar a verificar que todo vaya bien osea que no haya errores
     */
    if(isset($_GET['vista_solicitada'])){ //se va a encargar de manipular cada uno de los destinos que puedamos visitar
        
        switch($_GET['vista_solicitada']){
            case 'cap1':{
                require_once 'view/capitulo1.php';
                break;
            }
            case 'cap2':{
                require_once 'view/capitulo2.php';
                break;
            }
            case 'cap3':{
                require_once 'view/capitulo3.php';
                break;
            }
        
            }default:{
                require_once 'view/defaul.php';
                break;
            }
        }
    }else{ //se encarga cuando el usuario no escriba nada
        require_once 'view/defaul.php';
    }
    ?>
</body>
</html>