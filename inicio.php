<?php
$nombre = "Fabian";
$isDev = true;
$age =  23;


define('LOGO_URL','https://www.php.net/images/logos/new-php-logo.svg');

$output = "Hola " . $nombre . " tu edad  es ".$age;
$outputAge =  match (true){
 $age < 2   => "Eres un bebé $nombre 👶",
 $age <10   => "Eres un niño, $nombre 🧒",
 $age <18   => "Eres un adolescente, $nombre 🧔",
 $age == 18 => "Eres mayor de edad, $nombre 🍺",
 $age < 40  => "Eres un adulto joven $nombre 🧑",
 $age < 60  => "Eres un adulto viejo $nombre 👴",
 default    => "F  de $nombre ❌",
};


$bestLanguages    = ["PHP","JavaScripr","Python"];
$bestLanguages[] = "Java";
$bestLanguages[]  = "TypeScript"





?>
<?php foreach ($bestLanguages as  $key => $language) : ?>
    <li><?= $key." ". $language?></li>
<?php endforeach; ?>
</ul>

<h2><?= $outputAge?></h2>

<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200">

<h1>
<?= $output?>
</h1>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>