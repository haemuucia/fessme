<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password pribadi</title>
    <script>
        let remainingAttempts = 3;

        function checkPin() {
            var passwordInput = document.getElementById("pass").value;
            var correctPass = document.getElementById("correctPassword").value;
            var errorElement = document.getElementById("error");
            var buttonElement = document.getElementById("button");

            if (passwordInput.length === 0) {
                alert("Password must not be empty.");
                return;
            }

            if (isNaN(passwordInput)) {
                alert("Password must be numbers.");
                return;
            }

            if (passwordInput.length !== 8) {
                alert("Password must be 8 digits.");
                return;
            }

            if (correctPass === passwordInput) {
                showSuccess("Password is correct.");
                remainingAttempts = 3;
            } else {
                remainingAttempts--;
                if (remainingAttempts === 0) {
                    showError("Account is blocked. You have used 3 attempts.");
                    buttonElement.style.display = "none";
                } else {
                    showError("Password is incorrect. " + remainingAttempts + " attempts remaining.");
                }
            }
        }

        function showError(message) {
            var errorElement = document.getElementById("errorMessage");
            errorElement.innerHTML = message;
            errorElement.classList.remove("success");
            errorElement.classList.add("error");
        }

        function showSuccess(message) {
            var errorElement = document.getElementById("errorMessage");
            errorElement.innerHTML = message;
            errorElement.classList.remove("error");
            errorElement.classList.add("success");
        }
    </script>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: bisque;
        }
        .hidden {
            display: none;
        }
        .h1 {
            text-align: center;
            justify-content: center;
            display: flex;
        }
        .message {
            margin-top: 10px;
        }
        .error {
            color: red;
        }
        .success {
            color: green;
        }
    </style>
</head>
<body>
    <form id="password-form">
        <h1>Password</h1>
        <label for="password">Enter Pin: </label>
        <input type="password" id="pass" name="password">
        <input type="hidden" id="correctPassword" value="14567842">
        <button type="button" id="button" onclick="checkPin()">Confirm</button>
    </form>
    <p id="errorMessage"></p>
</body>
</html>
