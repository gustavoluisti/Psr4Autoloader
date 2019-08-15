<?php 
spl_autoload_register(function ($class) {
    $base_dir = __DIR__.'/pacotes/';

    $file = $base_dir.str_replace('\\', '/', $class).'.php';
   
    // echo "FILE: ".$file;

    if(file_exists($file)) {
        require($file);
    }
});

$clientinfo = new LojaB7Web\Clients\ClientInfo;
$clientorders = new LojaB7Web\Clients\ClientOrders;
$po = new LojaB7Web\Products\ProductInfo;

echo "Product: ".$po->getName();

echo " NAME: ".$clientinfo->getName();
echo " AGE: ".$clientinfo->getAge();

echo '<hr />';

print_r($clientorders->getAll());

//Teoria
// Vendor Name
// Subnamespace 1+