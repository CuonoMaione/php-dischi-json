<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Bootstrap v5.2.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="./styles/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>


</head>
<body>
    <script src="https://unpkg.com/vue@3"></script>

<div id="app">
    <header>
        <div class="container p-4">
            <img src="./img/logo.png" id="logo" alt=""> 
        </div>
    </header>
    <div class="mycustom container">
        <div class="row">
            <div class="col-4 p-0 d-flex" v-for=" disc in discs" >
                <div class="text-center m-3 p-5 wrapper d-flex justifi-content-center align-items-center flex-column ">
                  <img :src="disc.poster" alt="">
                  <h1> {{ disc.title }} </h1>  
                  <p> {{ disc.author }}</p>
                  <h1>{{ disc.year }}</h1>
                </div>
            </div>
        </div>
    </div>  
</div>

    <script src="./script/main.js"></script>
</body>
</html>