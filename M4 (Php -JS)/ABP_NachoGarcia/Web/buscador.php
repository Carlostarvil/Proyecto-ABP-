<?php include('connection.php');

if ($_POST["buscar"] == '1'){
    $query = "SELECT * FROM vehiculos WHERE id !='' ";

    if ($_POST["marca"] != ''){
        $query .= "AND marca = '".$_POST["marca"]."' ";
    }

    if($_POST["precio_min"] != ''){
        $query .= "AND precioVenta >= ".$_POST["precio_min"]." ";
    }

    if($_POST["precio_max"] != ''){
        $query .= "AND precioVenta <= ".$_POST["precio_max"]." ";
    }

    if($_POST["potencia_min"] != ''){
        $query .= "AND potencia >= ".$_POST["potencia_min"]." ";
    }

    if($_POST["potencia_max"] != ''){
        $query .= "AND potencia <= ".$_POST["potencia_max"]." ";
    }

    if($_POST["kilometros_min"] != ''){
        $query .= "AND kilometros >= ".$_POST["kilometros_min"]." ";
    }

    if($_POST["kilometros_max"] != ''){
        $query .= "AND kilometros <= ".$_POST["kilometros_max"]." ";
    }

    if($_POST["anyo_min"] != ''){
        $query .= "AND anyo >= ".$_POST["anyo_min"]." ";
    }

    if($_POST["anyo_max"] != ''){
        $query .= "AND anyo <= ".$_POST["anyo_max"]." ";
    }

    if ($_POST["combustible"] != 'Todos'){
        $query .= "AND combustible = '".$_POST["combustible"]."' ";
    }

    if ($_POST["transmision"] != 'Todos'){
        $query .= "AND transmision = '".$_POST["transmision"]."' ";
    }

    if ($_POST["tipo"] != 'Todos'){
        $query .= "AND tipo = '".$_POST["tipo"]."' ";
    }

    if ($_POST["etiqueta"] != 'Todos'){
        $query .= "AND etiquetas = '".$_POST["etiqueta"]."' ";
    }

    $result = $con->query($query);
    
    if ($result && $result->num_rows > 0) {
        // Mostrar resultados
        while ($row = $result->fetch_assoc()) {
            echo '
                <div class="cartelCatalogo" onclick="location.href=\'coche.php?id='.$row['id'].'\'">
                    <img class="fotosCat" src="'.$row['foto_delantera'].'">
                    <div class="textCat">
                        <h3>'.$row['marca'].' '.$row['modelo'].' '.$row['anyo'].'</h3>
                        <h3>'.$row['transmision'].' '.$row['potencia'].' cv</h3>
                        <h3>'.$row['kilometros'].' km</h3>
                        <h3>'.$row['precioVenta'].' €</h3>
                    </div>
                </div>
            ';
        }
    } else {
        echo '
            <div class="cartelCatalogo">
                <div class="textCat">
                    <h3>No se han encontrado resultados para tu busqueda</h3>
                    
                </div>
            </div>
        ';
    }
}
?>