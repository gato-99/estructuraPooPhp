<!DOCTYPE html>
<html lang='es'>
  <head>
    <meta charset='UTF-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title><?php echo $data['titulo'] ?></title>
  </head>
  <body>
  <h1><?php echo $data['content'] ?></h1>
  <h2><?php echo $data['subonten'] ?></h2>
  <?php
    print_r($data);
  ?>
  </body>
</html>