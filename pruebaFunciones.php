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
    foreach ($arrayproductos as $producto) {
        if ($arrayproductos['modelo'] == $modelo) {
            return "Nombre: " . $producto['nombre'] . "<br>";
        }
    }
    return "Producto no encontrado.<br>";
}
function mostrarProductos($arrayproductos) {
    $result = '';
    foreach ($arrayproductos as $producto) {
        $result .= "Nombre: " . $producto['nombre'] . ", cantidad: " . $prducto['modelo'] . "<br>";
        
   
    }
    return $result;
}


