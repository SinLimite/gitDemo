<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            if (isset($_POST['country_id'])) {
                $url = 'http://pereyrateam.com/curso-opencart/ronald/index.php?route=common/api/getFeaturedProducts&api_key=1' ;
                $result = file_get_contents($url);
                $result = json_decode($result, TRUE);

                $result = $result['result'];
                $proc=$result['products'];
                foreach ($zones as $zone) {
                    echo $zone['products']['name'] . '<br/>';
                }
            } else {
                ?>
                <form action="pais.php" method="post">
                    <input name="country_id"/><input type="submit" values="ok"/>
                </form>
                <?php
        }
        
        ?>
    </body>
</html>
