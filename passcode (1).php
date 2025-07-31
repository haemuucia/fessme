<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Pak Edi</title>
    <style>
        form {
            display: inline-block;
            border: black solid 2px;
            padding: 10px;
        }
        .text {
            visibility: hidden;
        }
    </style>
    <script>
        let counter = 0;
        function confirm(){
            event.preventDefault();
            let pin = document.getElementById("pin").value;
            let pin2 = document.getElementById("pin");
            let incorrect = document.getElementById("wrongpin")
            let correct = document.getElementById("success")
            let blocked = document.getElementById("blocked")
            let master = "07082020"
            
            if (pin == master) {
                pin2.style.borderColor = "green"; 
                correct.style.visibility = "visible"
            }

            if (pin == "") {
                pin2.style.borderColor = "red"; 
                alert("You must enter PIN")
            }

            else if (isNaN(pin))  {
                pin2.style.borderColor = "red"; 
                alert("Pin must be number!")
            }

            else if (pin.length < 8 || pin.length > 8) {
                pin2.style.borderColor = "red"; 
                alert("PIN must be 8 digits")
            }

            else if (pin != master) {
                pin2.style.borderColor = "red"; 
                alert("Wrong PIN")
                counter++;
                incorrect.style.visibility = "visible"
                document.getElementById("mistake").innerHTML = counter
            }

            if (counter>3) {
                let button = document.getElementById("button")
                let mistake = document.getElementById("mistake")
                incorrect.style.display ="none"
                mistake.style.display ="none"
                button.style.display = "none"
                blocked.style.visibility = "visible"
            }

            return false;
        }
    </script>
</head>

<body>
    <form>
        <label class="enterpin"> Enter PIN: </label>
        <input id="pin" type="pin">
        <button id="button" onclick="confirm()">Confirm</button>
        <br>
        <span id="mistake"></span> 
        <span id="wrongpin" class="text"> out of 3 mistakes</span> 
        <span id="blocked" class="text" style="color: red;">You are blocked</span>
        <span id="success" class="text" style="color: green;">Correct!</span>
    </form>
    <br>
</body>
</html>
