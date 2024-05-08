<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <title>Dischi Json</title>
</head>

<body>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <div id="app">
        <header>
            <nav class="navbar bg-body-tertiary">
                <div class="container">
                    <!-- <div>{{ prova }}</div> -->
                    <h5>Elenco Dischi</h5>
                </div>
            </nav>
        </header>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12" v-for="album in albums">
                        <div class="card mb-5">
                            <img :src=album.poster class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ album.title }}</h5>
                                <h6 class="card-text">{{ album.author }}</h6>
                                <h5 class="card-text">{{ album.year }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>




    <script src="./js/app.js"></script>
</body>

</html>