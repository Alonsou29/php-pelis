
<?php
const API_URL = "https://dev.whenisthenextmcufilm.com/api";

$ch = curl_init(API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$rs = curl_exec($ch);
$data = json_decode($rs, true); 
curl_close($ch);


$name = "Alonso";
$age = 18;
$ara = [1,2,3,4,5];

$out = match(true){
    $age < 2 => "Eres un baby",
    $age < 10 => "Eres un niño",
    default => "viejoooo"
};


?>

<head>
    <meta charset="UFT-8"/>
    <title>La proxima peli de marvel</title>
    <link rel="stylesheet" href="css/pico.classless.min.css">
</head>


<main>
    <section>
        <img src=<?= $data["poster_url"];?> alt="<?= $data["title"];?>" width="300" style="border-radius: 8px;" >
    </section>
    <hgroup>
        <h3><?=$data["title"];?></h3>
        <p> Se estrena en <?= $data['days_until']?> dias</p>
        <p>Fecha de estreno <?= $data["release_date"]?> </p>
        <p>La siguiente pelicula es <?= $data["following_production"]["title"]?></p>
    </hgroup>
</main>

<style>
    :root {
        color-scheme: dark;
    }
    body{
        display: grid;
        place-content: center;
    }
    section{
        display: flex;
        justify-content: center;
        /* text-align: center; */
    }
    hgroup{
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
    img{
        margin: 0;
    }
</style>