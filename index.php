<?php 
    declare(strict_types = 1);
    require_once 'jsotoca/providers/mysql/database.php';
    require_once 'jsotoca/providers/mssql/database.php';
    require_once 'jsotoca/helpers/iva.helper.php';
    require_once 'jsotoca/helpers/math.helper.php';

    use jsotoca\providers\mysql\Database as Mysql,
        jsotoca\providers\mssql\Database as Mssql;

    use jsotoca\helpers\{IvaHelper, MathHelper};

    $obj = new Mysql();
    $price = 100;
    echo IvaHelper::calculateIva($price) . "\n";
    echo MathHelper::hacerAlgo();
