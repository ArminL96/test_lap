<div class="container-fluid main-content login-container">

    <div class="wrong-login-data" style="display:none;">
        <div class="container-wrong-login-data-text">
            <h2>Error</h2>
            <span>Wrong username or password have been entered!</span>
        </div>
    </div>

    <h2>Login</h2>
    <form id="loginForm" action="private/php/login.php" method="post">
        <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username:</label>
            <div class="col-sm-10">
                <input type="text" id="username" name="username" required pattern="[A-Za-z0-9]{1,}">
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password:</label>
            <div class="col-sm-10">
                <input type="password" id="password" name="password" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#loginForm').submit(function(event) {
            event.preventDefault();

            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function(response) {
                    if (response === 'success') {
                        window.location.href = 'index.php';
                    } else {
                        $('.wrong-login-data').show();
                    }
                }
            });
        });
    });
</script>
