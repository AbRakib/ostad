<?php
function fibonacci() {
    $f1 = 0;
    $f2 = 1;
    $n = 10;

    for($i = 0; $i < $n; $i++) {
        
        $f3 = $f1 + $f2;
        $f1 = $f2;
        $f2 = $f3;

        if($f3 >= 100){
            break;
        }
        echo "<span class='badge bg-success mx-1'> $f3 </span>";
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <section class="container">
        <h4 class="py-2 text-center">Task 4: Fibonacci Series printing using a Function</h4>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">
              <div class="border border-success rounded bg-light p-2">
                <div> <?php fibonacci();?></div>
              </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>