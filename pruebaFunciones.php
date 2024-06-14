<?
function agregarProducto($arrayproductos,$nombre,$cantidad,$modelo,$valor){
    $arrayproductos = array(
        "nombre" => $nombre,
        "cantidad" => $cantidad,
        "modelo" => $modelo,
        "valor" => $valor
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
        $result .= "Nombre: " . $producto['nombre'] . ", cantidad: " . $producto['cantidad'] . ", Modelo: " . $producto['modelo'] . ", valor: " . $producto['valor'] . "<br>";
        
   
    }
    return $result;
}

function actualizarProducto($arrayproductos, $cantidad, $nombre, $modelo,$valor) {
    foreach ($arrayproductos as &$producto) {
        if ($producto['modelo'] == $modelo) {
            $producto['nombre'] = $nombre;
            $producto['cantidad'] = $cantidad;
            break;
        }
    }
    return $arrayproductos;
}



