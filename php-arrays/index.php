<?php
  $company = 'Hasbro';
  $title = 'Arrays';
  $topic = 'TV Series';
  $franchise = 'Transformers Animated Series';

  // Let's create a simple array
  $movies = array(
    'Transformers: Miniseries',
    'Transformers: Season 1',
    'Transformers: Season 2',
    'Transformers: Season 3',
    'Transformers: Season 4'
  );

  $film = array(
    'Transformers Feature Film'
  );
  // Let's create an associative array
  $movieYears = array(
    'Transformers: Miniseries'=>1984,
    'Transformers: Season 1'=>1984,
    'Transformers: Season 2'=>1985,
    'Tansformers Feature Film'=>1986,
    'Transformers: Season 3'=>1986,
    'Transformers: Season 4'=>1987
  );

  // Count how many items are stored in the array $movies
  $moviesLength = count($movies);
  $filmLength = count($film);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php echo $franchise; ?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <main class="container py-4">
      <h1><?php echo $topic; ?>: <em><?php echo $franchise; ?></em></h1>
      <p>There are <?php echo $moviesLength; ?> seasons in the <em><?php echo $franchise; ?></em>.</p>
      <ul class="list-group pb-4" style="max-width: 20rem;">
        <?php
          foreach ($movies as $movie) {
              echo '<li class="list-group-item">'.$movie.'</li>';
          }
          // Let's unset $movie so it can be used again later
          unset($movie);
        ?>
      </ul>

      <p>There is <?php echo $filmLength; ?> feature film in the <em><?php echo $franchise; ?></em>.</p>
      <ul class="list-group pb-4" style="max-width: 20rem;">
        <?php
          foreach ($film as $film) {
              echo '<li class="list-group-item">'.$film.'</li>';
          }
          // Let's unset $movie so it can be used again later
          unset($film);
        ?>
      </ul>


      <p>The <em><?php echo $franchise; ?> Feature Film</em> is the best in <em><?php echo $franchise; ?></em> history.</p>
      <hr>
      <h2 class="h5 mb-4">The <em><?php echo $franchise; ?></em> TV series and film were released in the following years:</h2>
      <ul class="list-group pb-4" style="max-width: 20rem;">
        <?php
          foreach ($movieYears as $movie => $year) {
              echo '<li class="list-group-item justify-content-between"><em>'.$movie.'</em> '.$year.'</li>';
          }
          // Let's unset $movie so it can be used again later
          unset($movie);
        ?>
      </ul>
    </main>
    <footer class="container">
      <hr>
      <?php echo '<p>Copyright&rsquo;s &copy; '.date('Y').' '.$company.'. All rights reserved.</p>'; ?> 
  </body>
</html>