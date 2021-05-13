<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Panel-Sign up</title>
    <link rel="stylesheet" href="../CSS SCRIPTS/user signup.css">
    <link rel="stylesheet" href="../CSS SCRIPTS/bootsrapcosmo.css">
    <link rel="shortcut icon" type="image/x-icon" href="../ICONS/worker.png">
</head>

<body>
    <div class="size">
        <form>
            <div class="header">
                <h1>Sign Up</h1>
            </div>
            <div>
                <p>Fill up the form to create an account</p>
                <hr>
            </div>
            <div class="username">
                <label for="username"></label>
                <input type="text" id="username" name="username" placeholder="Full Name" required>
            </div>
            <div class="email">
                <label for="email"></label>
                <input type="email" id="email" name="number" placeholder="Phone Number eg. 017xxxxxx98" required>
            </div>
            <div class="password">
                <label for="password"></label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="repeat-password">
                <label for="password-repeat"></label>
                <input type="password" id="password" name="confirm" placeholder="Repeat Password" required>
            </div>
            <div class="agreement">
                <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a
                        href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
            </div>
            <div style="padding-top: 16px;">
                <button type="submit" name="submit" class="sign-up">Sign up</button>
                <button type="submit" name="cancel" class="cancel">Cancel </button>
            </div>
        </form>
    </div>
</body>

</html>