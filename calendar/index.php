<!DOCTYPE html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Calendar</title>
  <link rel="stylesheet" href="calendar.css">
</head>
<body>

<?php
require_once 'calendar.php';
?>


<div class="text-align-center">
  <?= "<p class='text-center'>{$thisYear}年{$thisMonth}月</p>"?>
</div>

  <div class='container'>
    <div class='row'>
      <div class='col text-center'>
        <a href="<?= e("?Ym={$lastMonth}") ?>">前月</a>
      </div>
      <div class='col text-center'>
        <a href="./">今月</a>
      </div>
      <div class='col text-center'>
        <a href="<?= e("?Ym={$nextMonth}") ?>">来月</a>
      </div>
    </div>
  </div>

  <table class='table container table-bordered'>
    <tr>
      <?php
      dispWeek();
      ?>
    </tr>
  
    <?php
    require_once 'makeCalendar.php';
    ?>

  </table>

    
  <div class='text-center'>
    <p><?= $now->format('今日はY年n月j日です');  ?></p>
  </div>



<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>