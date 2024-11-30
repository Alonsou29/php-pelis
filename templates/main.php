<main>
    <section>
        <img src=<?= $poster_url;?> alt="<?= $title; ?>" width="300" style="border-radius: 8px;" >
    </section>
    <hgroup>
        <h3><?=$title;?> - <?= $until_message; ?></h3>
        <p>Fecha de estreno <?= $release_date?> </p>
        <p>La siguiente pelicula es <?= $following_production?></p>
    </hgroup>
</main>