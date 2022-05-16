<?php
$covid = 'https://data.covid19.go.id/public/api/update.json';
$vaksin = 'https://data.covid19.go.id/public/api/pemeriksaan-vaksinasi.json';
$kontenc = file_get_contents($covid);
$kontenv = file_get_contents($vaksin);
$datac = json_decode($kontenc, true);
$datav = json_decode($kontenv, true);
//var_dump($data);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Roboto:ital,wght@0,400;1,500&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Website Covid 19</title>
  </head>
  <body>
      <style>
          body{
            font-family: 'Lora', serif;
            font-family: 'Roboto', sans-serif;
          }
      </style>
    
      @include('partials.navbar')
    <div class="container-fluid pb-5">

        @include('pages.about')
        
        {{-- @include('pages.carousel') --}}

        <?php foreach ($datac['update'] as $row)?>
        @include('pages.covidindo')
        
        <?php foreach ($datav['vaksinasi'] as $row)?>
        @include('pages.vaksinindo')


    </div>

    @include('partials.footer')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>