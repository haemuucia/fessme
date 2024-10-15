
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,300&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <style>
   body {
        font-family: "Oswald", sans-serif;
        font-optical-sizing: auto;
        font-weight: 20px;
        font-style: normal;
        margin: 0;
        padding: 0;
        background: url(bgabout.png);
        color: #333;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        min-height: 100vh;
        background-size: 100% 100%;
        }
    div {
        margin-left: 51%; 
        max-width: 50%; 
        }
    h1{
        margin-left: 950px; 
        max-width: 50%;
    }
    </style>
    <?php include 'nav.php'; ?> 
<section class="body">
    <h1>ABOUT</h1>
    <div>
        <b>Welcome to Fessme: Unveil Your Story, Embrace the Community</b>
        <p>Fessme, an innovative creation by Me Tech, stands as a beacon for individuals seeking a unique and liberating space for
        self-expression. In this distinctive digital haven, users are empowered to share their stories openly and authentically, 
        liberated from the shackles of judgment or societal expectations.</p> 
    </div>
    <br>
    <div>
        <b>Empowering Your Voice</b>
        <p>At the heart of Fessme lies the empowering concept of anonymity. Users can boldly share their experiences, thoughts, and 
        emotions without the burden of revealing their identities. This commitment to privacy fosters a genuine and open exchange, 
        encouraging users to be their true selves and share their narratives without inhibition.</p>
    </div>
    <br>
    <div>
    <b>Building a Supportive Community: Interactive Engagement</b>
    <p>Fessme goes beyond being a platform; it's a community of empathetic individuals. Through interactive engagement features, users 
    can not only share their stories but actively participate in a supportive dialogue. The platform facilitates connections by allowing 
    users to respond, empathize, and support each other, fostering a sense of camaraderie and understanding.</p>
    </div>
    <br>
    <div>
    <b>Daily Quotes: Elevating Your Day with Positivity</b>
    <p>Adding an extra layer of positivity, Fessme delivers daily quotes curated to uplift and inspire its users. These quotes serve as 
        daily reminders of strength, resilience, and the shared human experience, creating a space where individuals can find motivation 
        and solace.</p>
    </div>
    <br>
    <div>Fessme, under the guidance of Me Tech, envisions a digital landscape where every voice is heard, every story is valued, and 
    individuals find strength in their shared experiences. By prioritizing anonymity, community, and positivity, Fessme seeks to 
    redefine the online narrative, proving that in the digital realm, empathy and support can flourish.
    </div>
    <br/>
    <br/>
    <div>Join us on Fessme, where your story matters, your voice resonates, and a global community stands ready to embrace your journey.</div>
     <div style="text-align: center; margin-top: 20px;">
            <a href="contact2.php" class="contact-btn">Contact Us</a>
        </div>
</section>
<script>
        // JavaScript to dynamically display a different quote every day
        const quotes = [
            "Embrace the journey, and let your voice be the guide.",
            "Your story is powerful—share it bravely.",
            "Community is built one story at a time.",
            "In sharing our struggles, we find strength.",
            "Your words matter, your story matters."
        ];
        const quoteElement = document.getElementById('dailyQuote');
        const randomIndex = new Date().getDate() % quotes.length;
        quoteElement.textContent = quotes[randomIndex];
    </script>
