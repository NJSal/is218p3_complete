<?php

$userId = filter_input(INPUT_GET,'id');//email do the same
$emailval = filter_input(INPUT_GET,'email'); //if you do not send something here then everything messed up
?>


<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <title> Question Form </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type = "text/css" href="../css/question.css">
</head>


<body>
<section class="container-fluid bg">
    <section class="row justify-content-center">
        <section class = "col-12 col-sm-6 col-md-3">


            <form action ="questionform.php" method = "post" class = "form-container">
                <h2>Question Form</h2>
                <br>
                <br>
                <div class="form-group">
                    <label for="name">Question Title</label>
                    <input id="name" type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <input id="about" type="text" name="about" class="form-control">
                </div>

                <div class="form-group">
                    <label for="skills">Skills: </label>
                    <input id="skills" type="text" name="skills" class="form-control">
                </div>

                <button class="btn btn-primary btn-block">
                    <input type = "submit" value = "Submit Responses" class = "btn btn-primary bt-block">
                </button>

                <input type="hidden" name="userId" value="<?php echo $userId; ?>">
                <input type="hidden" name="email"  value="<?php echo $emailval; ?>">

            </form>
        </section>
    </section>
</section>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


