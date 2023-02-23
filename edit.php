<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href ="css/mysingUPstyle.css" />
        <title>Formulari i Regjistrimit</title>
    </head>
    <body>
        <div id="formulari">
        <h3>Shto te dhenat ne Formularin e Regjistrimit</h3>
            <form action='' method="POST">
                <label>Emri</label>
                <input type="text" class="inp" name="emri"
                    value ="<?php echo $records['emri'];?> "/>
                <label>Mbiemri</label>
                <input type="text" class="inp" name="mbiemri"
                    value ="<?php echo $records['mbiemri'];?> "/>
                <label>Email</label>
                <input type="email" class="inp" name="email"
                    value ="<?php echo $records['email'];?> "/>
                <label>Password</label>
                <input type="password" class="inp" name="password"
                     value ="<?php echo $records['password'];?> "/>
                     
                <button name='edit'>Save</button>
            </form>
        </div>
    </body>
</html>