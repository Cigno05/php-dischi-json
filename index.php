<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://kit.fontawesome.com/43ebce74f3.js" crossorigin="anonymous"></script>
    <title>Dischi Json</title>
</head>

<body>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <div id="app">
        <header>
            <nav class="navbar">
                <div class="container">
                    <!-- <div>{{ prova }}</div> -->
                    <div class="logo">
                        <i class="fa-brands fa-spotify"></i>

                    </div>
                </div>
            </nav>
        </header>

        <main>
            <div class="container p-5">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mb-3 px-5 py-3" v-for="album in albums">
                        <div class="card px-5 py-3">
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

<style>
    .navbar{
        background-color: #06131F;
        color: #18D860;
        .logo {
            font-size: 40px;
        }

    }

    main {
        background-color: #1D2D3C;
    }

    .card {
        background-color: #112030;
        color: white;
        height: 100%;

        h6 {
            font-weight: 200;
        }
        
    }
</style>

</html>