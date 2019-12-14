<?php include('views/abstract-views/header.php'); ?>
    <form action ="index.php" method = "post" class = "form-container">
        <input type="hidden" name="action" value="register">
        <div class = "registration">
        <h2>Registration</h2>
        <br>
        <br>

        <div class="form-group">
            <label for="firstname">First Name</label>
            <input id="firstname" type="text" name="fname" class="form-control">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input id="lastname" type="text" name="lname" class="form-control">
        </div>
        <div class="form-group">
            <label for="birthday">Birthday</label>
            <input id="birthday" type="date" name="birthday" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" class="form-control">
        </div>
        <!---
        <button class="btn btn-default btn-block">
            <a href = "../Registrationform/registrationform.html">Register Account</a>
        </button>
        --->
        <br>
        <button class="btn btn-primary btn-block">
            <input type = "submit" value = "Submit Responses" class = "btn btn-primary bt-block">
        </button>
        </div>
    </form>

<?php include('views/abstract-views/footer.php'); ?>