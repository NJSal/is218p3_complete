<?php include('views/abstract-views/header.php'); ?>
            <form action ="index.php" method = "post" class = "form-container">
                <input type="hidden" name="action" value="createquestion">
                <div class = "question">
                <h2>Question Form</h2>
                <br>
                <br>
                <div class="form-group">
                    <label for="questioname">Question Title</label>
                    <input id="questioname" type="text" name="questioname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="questionbody">About</label>
                    <input id="questionbody" type="text" name="questionbody" class="form-control">
                </div>

                <div class="form-group">
                    <label for="questionskills">Skills: </label>
                    <input id="questionskills" type="text" name="questionskills" class="form-control">
                </div>

                <button class="btn btn-primary btn-block">
                    <input type = "submit" value = "Submit Responses" class = "btn btn-primary bt-block">
                </button>

                <input type="hidden" name="userId" value="<?php echo $userId; ?>">
                </div>
            </form>
<?php include('views/abstract-views/footer.php'); ?>