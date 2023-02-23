<?php
require_once('modeliUser.php');

$dhenat=new useri();
//$dhenat->lexoDhenat();

?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href ="css/display.css" />
        <title>Shfaq dhenat</title>
    </head>
    <body>
        <div id="a1">
            <header>
                <h3>Ju lutem shtype per te regjistruar te dhenat ne Sistem</h3>
                <a href="insert.php"><Button id='r'>Regjistrohu</Button></a>
            </header>
            <table>
            <hr>
            <p>Lista e te dhenave:</p>
                    <tr>
                        <th>Emri</th>
                        <th>Mbiemri</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                      
                        <td>Dea</td>
                        <td>Fetahu</td>
                        <td>Deafetahu1@gmail.com</td>
                        <td>*******</td>
                        <td id='de'><a href=""><button id="d">DELETE</button></a>
                           <a  href=""><button id='e'>EDIT</button></td></a>
                    </tr>
                  
            </table>
        </div>
    </body>
</html>