<?php

require "./home.html";

require_once "./class/Manipulador.php";

if (isset($_POST['FILE'])){
    $file = $_POST['FILE'];

    $data = $_POST['DATA'];

    $option = $_POST['OPTION'];

    $manipulador = new Manipulador($file, $data);

    if ($option == 'delete'){
        $return = $manipulador->clear();
        echo "<table border=1>
        <tr>
            <td>$return</td>
        </tr>
    </table> <br><a href='$file' download>Clique aqui para fazer o download</a> ";
    }

    if ($option == 'modify'){
        $return = $manipulador->textModify();
        echo "<table border=1>
        <tr>
            <td>$return</td>
        </tr>
    </table> <br><a href='$file' download>Clique aqui para fazer o download</a> ";
    }

    if ($option == 'line'){
        $return = $manipulador->setEndOfLine();
        echo "<table border=1>
        <tr>
            <td>$return</td>
        </tr>
    </table> <br><a href='$file' download>Clique aqui para fazer o download</a> ";
    }

    if ($option == 'see'){
        $return = $manipulador->seeFile();
        print_r($return);
    }
}







