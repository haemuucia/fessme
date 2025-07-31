<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI/tZ1a9l3/8zIUVNow7qFqd6BeRUUxFq5P1kFII=" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100px;
            display: block; 
            margin: 0 auto; 
        }
        .message {
            margin-top: 16px;
            color: #4caf50;
        }
    </style>
</head>
<body>

<div id="forgot-password-form-container">
    <form id="forgot-password-form">
        <label for="email">Enter your email:</label>
        <input type="email" id="email" name="email" required>
        <button type="button" id="submit-btn">Submit</button>
        <div class="message" style="display: none;">Password reset email has been sent to your email address.</div>
    </form>
</div>

<script>
    $(document).ready(function () {
        $("#submit-btn").on("click", function () {
            var email = $("#email").val();
            if (email) {
                $(".message").show();
            }
        });
        $(document).ready(function() {
            $("#resetPassword").click(function() {
                var email = $("#email").val();
            })
        })
        $.ajax({
                type: "POST",
                url: "/your-server-reset-endpoint",
                data: { email: email },
                success: function(response) {
                console.log(response);
                },
                error: function(error) {
                console.error(error);
                }
        });
    });
</script>

</body>
</html>
