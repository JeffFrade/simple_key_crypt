<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Services\Crypt;

$key = 5;
$crypt = new Crypt($key);

$text = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi suscipit consequuntur aliquid quidem, repellendus optio quod atque! Nam beatae nesciunt atque voluptatibus optio quaerat excepturi, amet, quam esse ab nemo?';

// If you want remove spaces, change second parameter to true
// If you want remove punctation, change third parameter to true
$crypted = $crypt->encryptText($text, false, false);

$decrypted = $crypt->decryptText($crypted);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Simple Key Crypt</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <h1 class="text-center">Simple Key Crypt</h1>
                <hr/>

                <div class="col-sm-12">
                    <p><strong>Original Text: </strong><?= $text; ?></p>
                </div>

                <hr/>

                <div class="col-sm-12">
                    <p><strong>Crypted Text (Key = <?= $key; ?>): </strong><?= $crypted; ?></p>
                </div>

                <hr/>

                <div class="col-sm-12">
                    <p><strong>Decrypted Text (Key = <?= $key; ?>): </strong><?= $decrypted; ?></p>
                </div>

                <hr/>

                <div class="col-sm-12">
                    <p><strong>Crypted Alphabet (Key = <?= $key; ?>): </strong></p>
                    <?php
                        echo "<pre>";
                        print_r($crypt->getEncryptedRelation());
                        echo "</pre>";
                    ?>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>

