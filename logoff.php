<?php
session_start();
session_destroy();

 if (isset($_SESSION['username'])) {
   unset($_COOKIE['PHPSESSID']);
   setcookie('PHPSESSID', '', time() - 3600, '/'); // empty value and old timestamp
 }
?>


<html>
    <head>
        <title>Logoff DoguinhoFeliz</title>
        <link rel="stylesheet" href="FolhasdeEstilo/FolhadeEstilo.CSS">
        <script language="JavaScript">
        function centralizeWindow() {
            var topPos = (screen.height - 200) / 2;
            var leftPos = (screen.width - 300) / 2;
            window.moveTo(leftPos, topPos);
            setTimeout(() => {parent.window.location.href='login.php'})
    
    
        }
        
        </script>
    </head>
    <body onLoad="centralizeWindow()">
    
    <table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
    <tr><td class="loginMensagens">Aguarde ... realizando logoff.<br></td></tr>
    </table>
    
    <form name="frmLogOut" method="post" action="login.php">
        <input name="logout" type="hidden" id="logout" value="TRUE">
    </form>
    
    
    
    
    
    </body>
    </html>

    