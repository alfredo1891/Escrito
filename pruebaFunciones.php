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


function buscarProductoporModelo($arrayproductos, $modelo) {
    foreach ($arrayproductos as $arrayproductos) {
        if ($arrayproductos['modelo'] == $modelo) {
            return "Nombre: " . $arrayproductos['nombre'] . "<br>";
        }
    }
    return "Producto no encontrado.<br>";
}