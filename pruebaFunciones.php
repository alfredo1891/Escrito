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
            $producto['valor'] = $valor;
            break;
        }
    }
    return $arrayproductos;
}


function CalcularValor($arrayproductos,$valor){
$cantidadTotal = count['valor'];

}




function FiltrarPorValor($arrayproductos,$valor){
    foreach ($arrayproductos as $producto) {
        if ($arrayproductos['valor'] >= '0') {
            return "Nombre: " . $producto['nombre'] . "<br>";
        }
    }
    return "Producto no encontrado.<br>";
}


function ListarModelos($arrayproductos,$modelo){
    $modelos = '';
    foreach ($arrayproductos as $producto){
        $modelos .= "Los modelos disponibles son: " . $producto['modelo'] . "<br>";
        
    }
}


function calcularValorPromedio() {
    $valorTotal = 0;
    $cantidadTotal = count['nombre'];
    if ($cantidadTotal == 0) return 0;
    foreach (['nombre'] as $producto) {
        $valorTotal += $producto['valor'];
    }
    return $valorTotal / $cantidadTotal;
    }