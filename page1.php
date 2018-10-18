<?php
    session_start();
    require 'logout.php';
?>

<html>
<head>
    <script language="JavaScript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function () {
            let token=getCookie("token");
            $('#csrf_token').val(token);
        });

        function getCookie(cname) {
            let name=cname+"=";
            let dc=decodeURIComponent(document.cookie);
            let ca=dc.split(';');
            for(let i=0;i<ca.length;i++){
                let c=ca[i];
                while (c.charAt(0)==' '){
                    c=c.substring(1);
                }
                if(c.indexOf(name) == 0){
                    return c.substring(name.length,c.length);
                }
            }
            return "";
        }
    </script>
</head>
<body>

<div style="text-align: center;">
    <form action="page1_load.php" method="post">
        Name   : <input type="text" name="na"><br>
        phone no : <input type="text" name="pn"><br>
        Job   : <input type="text" name="job"><br>
        <input type="hidden" id="csrf_token" name="csrf_token" value="" ><br>
        <input type="submit" name="submit" value="Submit Form">
    </form>

</div>
</body>
</html>