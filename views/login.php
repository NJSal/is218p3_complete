<?php include ('views/abstract-views/header.php'); ?>
            <form action ="index.php" method = "post" class = "form-container">
                <input type = "hidden" name = "action" value = "validate_login">
                <div class = "login">
                <h2>Account Login</h2>
                <br>
                <br>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input id="email" type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" class="form-control">
                </div>

                <button class="btn btn-default btn-block">
                    <a href = ".?action = display_registration">Register</a>
                </button>

                <button class="btn btn-primary btn-block">
                    <input type = "submit" class = "btn btn-primary bt-block">
                </button>
                </div>
            </form>

<?php include ('views/abstract-views/footer.php'); ?>
