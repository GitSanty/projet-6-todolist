<?php

function Get_Afaire()
{

    $data = file_get_contents("todo.json");
    $json = json_decode($data, true);

    foreach ($json[Table] as $key) {
        //echo $key[task];
        //echo "<br>";
        if($key[estate] == "A FAIRE"){
        echo "<div>";
        //echo $key[task] . "<br>";
        echo "<label>";
        echo "<input type='checkbox' value='{$key[estate]}' id='{$key[ID]}'>";
        echo "</label>";
        echo "<label for='{$key[ID]}' class='col-sm-4 control-label>'<span></span>$key[task]</label>";
        echo "</div>";
        echo "<br>";

        }

    }
}

function Get_Archive()
{

    $data = file_get_contents("todo.json");
    $json = json_decode($data, true);

    foreach ($json[Table] as $key) {
        //echo $key[task];
        //echo "<br>";
        if($key[estate] == "ARCHIVE"){
            echo "<div id='strike' >";
            //echo $key[task] . "<br>";
            echo "<label>";
            echo "<input type='checkbox' disabled='true' checked='true' value='{$key[estate]}' id='{$key[ID]}'>";
            echo "</label>";
            echo "<label for='{$key[ID]}' class='col-sm-4 control-label>'<span></span>$key[task]</label>";
            echo "</div>";
            echo "<br>";

        }

    }
}