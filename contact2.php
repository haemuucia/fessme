<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT US</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="contact.css" rel="stylesheet">
    <script>
        $(document).ready(function () {
            $("#submit-btn").on("click", function () {
            var formData = $("#contact-form").serialize();
            alert("Form submitted!\n" + formData);
        });
    });
    </script>
</head>
<body>
    <div id="contact-form-container">
        <h1>CONTACT US</h1>
        <form action="https://formsubmit.co/metech.company23@gmail.com" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
    
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
    
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
    
            <button type="button" id="submit-btn">Submit</button>
        </form>
    </div>
</body>
</html>