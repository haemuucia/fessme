
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Poetsen+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>RULES AND REGULATION</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
       body {
            background-color: #bac8e1;
            font-family: "Josefin Sans", sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        header {
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        li {
            list-style-type: none;
            font-size: 18px;
        }
      
        p {
            font-size: 25px;
            font-weight: bold;
        }
        h1{
         padding-top: 70px;
         font-size: 37px;
         font-family: "Poetsen One", sans-serif;
         letter-spacing: 3px;
        }
        .box {
         background-color: #d6e4fb;
         width: 50%;
         padding: 1em;
         text-align: center;
         margin: 0 auto; 
         border-radius: 10px; 
}
 
    </style>
<?php include 'nav.php'; ?>
<section class="body">
<div class="box">
    <h1>RULES AND REGULATION</h1>
    <P>1. Anonymity and Privacy:
    <br>
    <ul>
        <li>Users are encouraged to maintain the anonymity of messages.</li>
        <li>No attempts should be made to expose the identity of the sender.</li>
        <li>Respect the privacy of others; refrain from sharing personal information.</li>
    </ul>
    </P>
    <br>
    <p>2. No Harassment or Hate Speech:
        <ul>
            <li>Do not use the platform to harass, threaten, or spread hate speech.</li>
            <li> Offensive language, discriminatory remarks, and personal attacks are strictly prohibited.</li>
        </ul>
    </p>
    <br>
    <p>3. No Illegal Content:
        <ul>
            <li>Users must not share any content that violates local, national, or international laws.</li>
            <li>This includes but is not limited to, illegal activities, violence, or any form of explicit material.</li>
        </ul>
    </p>
    <br>
    <p>4. Respectful Language:
        <ul>
            <li>Maintain a respectful and civil tone in all messages.</li>
            <li>Avoid using language that may be considered offensive or inappropriate.</li>
        </ul>
    </p>
    <br>
    <p>5. No Spamming or Advertising:
        <ul>
            <li>Users are not allowed to use the platform for spamming or unauthorized advertising.</li>
            <li>Promotion of products, services, or external websites is prohibited.</li>
        </ul>
    </p>
    <br>
    <p>6. Moderation and Reporting:
        <ul>
            <li> The platform will be moderated to ensure compliance with the rules.</li>
            <li>Users are encouraged to report any violations promptly.</li>
        </ul>
    </p>
    <br>
    <p>7. False Information:
        <ul>
            <li>Do not spread false information or rumors.</li>
            <li> Users should verify the accuracy of their messages before posting.</li>
        </ul>
    </p>
    <br>
    <p>8. No Impersonation:
        <ul>
            <li>Users must not impersonate others, including public figures or other users.</li>
        </ul>
    </p>
    <br>
       <p>9. Age Restriction:
        <ul>
            <li>Users must be at least 18 years old to use this website.</li>
            <li>If minors are allowed, additional measures to protect their privacy should be implemented.</li>
        </ul>
    </p>
    <br>
        <p>10.User Responsibility:
            <ul>
                <li> Users are responsible for the content they post on the platform.</li>
                <li>The platform is not liable for the actions or consequences resulting from user-generated content.</li>
            </ul>
        </p>
    <br>
    <p>11. Terms of Service:
        <ul>
            <li> Users must agree to and comply with the platform's terms of service.</li>
        </ul>
    </p>
    <br>
    <p>12. Updates and Amendments:
        <ul>
            <li>The rules may be updated or amended as needed, and users are expected to stay informed about any changes.</li>
        </ul>
    </p>
    <br>
    <div> 
    <div><a href="tos.html" target="#customCursorArea">Terms of Service</a></div>
    <br>
    </div>
    </div>
    <div id="customCursorArea" style="cursor: pointer;"></div>
    </section>
    <script>
        $(document).ready(function() {
            // Get a reference to the div
            var customCursorArea = $("#customCursorArea");
    
            // Change the cursor to a custom Mickey Mouse hand
            customCursorArea.on("mouseover", function() {
                customCursorArea.css("cursor", "url('mickey_mouse_hand.png'), auto");
            });
    
            // Reset the cursor when leaving the element
            customCursorArea.on("mouseleave", function() {
                customCursorArea.css("cursor", "pointer");
            });
        });
    </script>    
    </body>
    </html>
