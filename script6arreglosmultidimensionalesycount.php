<?php
//crea un arreglo multidemensional que guarde la información de un listado de amigos y sus teléfonos

const AGENDA = [  // array multidimensional
    ['nombre' => 'Rebeca González', 'telf' => '655908367'],  // array asociativo
    ['nombre' => 'Borja Tenreiro', 'telf' => '615908367'],  // array asocitativo
    ['nombre' => 'Andres Pajares', 'telf' => '815908367'], // array asociativo
];

//muestra con count() el número de amigos que tiene tu listado


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda telefónica</title>
</head>
<body>

<style>

    table,th,td {
        border-style: solid;
        border-collapse: collapse;
    }
    th, td {
        padding: .2rem;
    }
    caption {
        padding: .5rem 0;
        text-transform: uppercase;
        color: tomato;
        font-size: .5rem;
    }
    tfoot {
        text-align: center;
        font-size: .4rem;
        font-weight: bold;
    }
</style>

<table>
    <caption>Agenda de amigos</caption>
    <tfoot>
        <tr>
            <td colspan="2">
                Número de personas <?=count(AGENDA)?>
            </td>
        </tr>
    </tfoot>
    <tr>
        <th>Nombre</th>
        <th>Teléfono</th>
    </tr>

    <?php foreach(AGENDA as $amigo):?>
        <tr>
            <td>
                <?=$amigo['nombre']?> 
            </td>
            <td>
            <?=$amigo['telf']?> 
            </td>
        </tr>
    <?php endforeach;?>


</table>



    <pre>
<?php
var_dump(AGENDA);
?>
    </pre>
    
</body>
</html>