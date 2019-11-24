<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Anirudh Sai</title>
    
    </head>
    <body>
        <h1>Welcome to the guessing game</h1>
        <?php
            
            $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            if (parse_url($url, PHP_URL_QUERY))
            {
                $url_components = parse_url($url); 
                parse_str($url_components['query'], $params);
                $g=$params['guess'];
                $correct=54;
                if (!$g) 
                    echo "<p>Your guess is too short</p>"; 
                else if( $correct==$g )
                    echo "<p>Congratulations you are right</p>"; 
                else if( $g<$correct )
                    echo "<p>Your guess is too low</p>"; 
                else if( $g>$correct )
                    echo "<p>Your guess is too high</p>"; 
            }

            else 
                echo "<p>Missing guess parameter</p>"
        ?>
    
    </body>
</html>

