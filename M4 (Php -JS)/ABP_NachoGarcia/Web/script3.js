function buscar_filtro(marca,precio_min,precio_max,potencia_min,potencia_max,kilometros_min,kilometros_max,anyo_min,anyo_max,combustible,transmision,tipo,etiqueta){
    var buscar = '1';
    var parametros = {"buscar":buscar,"marca":marca,"precio_min":precio_min,"precio_max":precio_max,"potencia_min":potencia_min,"potencia_max":potencia_max,"kilometros_min":kilometros_min,"kilometros_max":kilometros_max,"anyo_min":anyo_min,"anyo_max":anyo_max,"combustible":combustible,"transmision":transmision,"tipo":tipo,"etiqueta":etiqueta};
    $.ajax({
        data:parametros,
        url:'buscador.php',
        type: 'POST',
        timeout: 10000,
        beforeSend: function () {
            //document.getElementById("resultado_busqueda").innerHTML = '<img src="descarga2.png" style="width:120px;">'
        },
        success: function(response){
            console.log('DENTRO');
            document.getElementById("resultado_busqueda").innerHTML = response;
        },
        error: function (response, error){
            console.log('ERROR');
            documen.getElementById("resultado_busqueda").innerHTML = error;
        }

    });
}