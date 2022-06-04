<html> 
    <head>
        <title>PHP site 2</title>

        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>

        <style type="text/css">
            .linha {
                font-weight: 600;
                color: green;
                padding-left: 10px;
                line-height: 50px;
            }
        </style>

    </head>
    <body>
        <?php
            for ($i = 0; $i < 10; $i++){
                print("<span class=\"linha\"> Linha n° ".$i. "</span><br/>");
            }
        ?>
    </body>

    <script type="text/javascript">$(document).ready(function(){
        alert("Alerta");
    });
    </script>

</html>

