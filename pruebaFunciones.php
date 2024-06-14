<?
function agregarProducto($arrayproductos,$nombre,$cantidad,$modelo){
    $arrayproductos = array(
        "nombre" => $nombre,
        "cantidad" => $cantidad,
        "modelo" => $modelo
    );
}
$arrayproductos = [];
$arrayproductos= agregarProducto($arrayproductos,"Heladera","1","James");
return $arrayusuarios;