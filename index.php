<?php

require_once './Movie.php';

$movies = [
    new Movie('Il Cavaliere Oscuro', 'The Dark Knight', 2008, ['Azione', 'Giallo', 'Drammatico']),
    new Movie('Il Padrino', 'The Godfather', 1972, ['Giallo', 'Drammatico'])
];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <main>
            <ul>

                <?php foreach ($movies as $movie) : ?>

                    <li>
                        <h2>
                            <?= $movie->getTitle() ?>
                        </h2>

                        <h3>
                            <?= $movie->getOriginalTitle() ?>
                        </h3>

                        <p>
                            <small>
                                <?= $movie->getYear() ?>
                            </small>
                        </p>

                        <ul>

                            <?php foreach ($movie->getGenres() as $genre) : ?>

                                <li>
                                    <p>
                                        <?= $genre ?>
                                    </p>
                                </li>

                            <?php endforeach; ?>

                        </ul>
                    </li>

                <?php endforeach; ?>

            </ul>
        </main>
    </body>
</html>