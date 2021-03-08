<?php
namespace ImonesApp;
class Render{
    static public function printData($info){
        echo "<tr>";
        foreach ($info as $i){
            echo "<th>".$i."</th>";
        }
        echo "</tr>";
    }
}