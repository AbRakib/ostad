<?php

if(isset($_POST['avg_btn'])){
    $score1 = $_POST['score1'];
    $score2 = $_POST['score2'];
    $score3 = $_POST['score3'];

    if (($score1 <= 100 && $score1 >= 0) && ($score2 <= 100 && $score2 >= 0) && ($score3 <= 100 && $score3 >= 0) && is_numeric($score1) && is_numeric($score2) && is_numeric($score3)) {
        $arrayScore = [$score1, $score2, $score3];
        $scoreLength = count($arrayScore);

        if(is_numeric($score1) && is_numeric($score2) && is_numeric($score3)){
            $total = $score1 + $score2 + $score3;
            $avg = $total/$scoreLength;
            if ($avg >= 80 && $avg <=100) {
                $avg = $avg . " A";
            } elseif ($avg >= 70 && $avg <=79) {
                $avg = $avg . " B";
            } elseif ($avg >= 60 && $avg <=69) {
                $avg = $avg . " C";
            } elseif ($avg >= 33 && $avg <=59) {
                $avg = $avg . " D";
            } else {
                $avg = $avg . " F";
            }
        }
    } else {
        $errorAvg = "Please input Valid Data";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container my-5">

        <div class="row mt-3">
            <h5 class="text-center">Task 3: Grade Calculator</h5>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card p-3">
                    <div class="p-3 text-center text-danger">
                        <?php echo (!empty($errorAvg)) ? $errorAvg : "" ?>
                    </div>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="score1" class="form-label">Score 1</label>
                            <input type="number" name="score1" class="form-control" id="score1" required>
                        </div>
                        <div class="mb-3">
                            <label for="score2" class="form-label">Score 2</label>
                            <input type="number" name="score2" class="form-control" id="score2" required>
                        </div>
                        <div class="mb-3">
                            <label for="score3" class="form-label">Score 3</label>
                            <input type="number" name="score3" class="form-control" id="score3" required>
                        </div>
                        <div class="mb-3 text-center">
                            <button name="avg_btn" class="btn btn-success">Average</button>
                        </div>
                    </form>
                    <div class="p-3 bg-light">
                        <code>
                            Score 80-100 = A | Score 70-79 = B | Score 60-69 = C | Score 33-59 = D | Score 0-32 = F 
                        </code>
                        <br>
                        <b>Result: </b><?php echo ( !empty( $avg ) ) ? $avg : "No Result Found!" ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>