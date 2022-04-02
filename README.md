# Criptografia de Chave Simples
---

Esse repositório contém uma espécie de "mini biblioteca" que criptografa e decriptografa textos utilizando chave de criptografia simples.

Para testes, foi utilizado o `Docker` para uma melhor visualização e apresentação dos resultados.

### Como Utilizar
---

``` php
<?php

require_once __DIR__ . '/vendor/autoload.php';

// Importação da classe que faz a criptografia e descriptografia.
use App\Services\Crypt;

// A chave que utilizaremos para criptografar (Necessário ser um valor numérico).
$key = 5;

// Criando uma instância da classe de criptografia e descriptografia, é obrigatório passar qual a chave que será utilizada para criptografar ou descriptografar.
$crypt = new Crypt($key);

// Texto utilizado para exemplo.
$text = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi suscipit consequuntur aliquid quidem, repellendus optio quod atque! Nam beatae nesciunt atque voluptatibus optio quaerat excepturi, amet, quam esse ab nemo?';

// Criptografando o texto, o primeiro parâmetro é o texto que desejamos criptografar, o segundo parâmetro indica se queremos remover espaços em branco e o terceiro e último indica se queremos remover a pontuação.
$crypted = $crypt->encryptText($text, false, false);
echo $crypted . PHP_EOL;

// Descriptografando o texto.
$decrypted = $crypt->decryptText($crypted);
echo $decrypted . PHP_EOL;

// Exibindo a relação da criptografia e a descriptografia.
echo "<pre>";
print_r($crypt->getEncryptedRelation());
echo "</pre>";

```

No caso de dúvidas, consulte o arquivo `index.php` na raíz desse repositório.
