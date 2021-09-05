<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert/Remove Card</title>
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="form_modal" id="form_modal">
        <form method="POST" action="includes/contactForm_handler.php">
        <div class="close_btn" onclick="closeForm()">&#10060;</div>
            <input class="userinput" type="text" name="name" placeholder="NAME" required><br>
            <input class="userinput" type="text" name="email" placeholder="EMAIL" required><br>
            <input class="userinput" type="text" name="address" placeholder="ADDRESS" required><br>
            <input class="userinput" type="text" name="mobile" placeholder="MOBILE NO..." required><br>
            <textarea class="userinput" name="message" id="message" cols="30" rows="10" placeholder="ENTER YOUR MESSAGE HERE....[OPTIONAL]"></textarea><br>
            <input class="submit" type="submit" name="submit" value="SUBMIT">
        </form>
    </div>
    <div class="card_container" id="card_container">
        <div class="add_card btn" onclick="formDisplay()">&#10011;</div>
        <?php
            include_once "includes/displayCard.php";
        ?>
        <!-- <div class="cards">
            <div class="remove_card btn" onclick="removeCard(this.parentElement)">−</div>
            <div class="img"></div>
            <div class="info">
                <h3>SEEJN</h3>
                <p>seejnmaharjan@gmail.com</p>
                <p>Balaju,Kathmandu</p>
                <p>+977 9810010398</p>
            </div>
        </div> -->
    </div>

    <script>
        function formDisplay()
        {
            document.querySelector('.form_modal').className = 'form form_modalActive';
        }

        //ADDCARD FUNCTION
        // function addCard(userName, userEmail, userAddress, userMobile)
        // {
        //     var removeBtn = document.createElement('div'); //creating a div for remove buttond
        //     removeBtn.className = "remove_card btn"; //add class to to the remove button
        //     removeBtn.innerHTML = "&minus;"; //adding content to the button [—]
        //     removeBtn.setAttribute('onclick','removeCard(this.parentElement)'); //adding attribute to the remove butotn d

        //     var node = document.createElement('div'); //creating a div
        //     node.className = "cards"; //adding class to the div

        //     //adding the content to the div
        //     var img = document.createElement('div');
        //     var info = document.createElement('div');
        //     img.className = "img";
        //     info.className = "info";

        //     var name = document.createElement('h3');
        //     var email = document.createElement('p');
        //     var address = document.createElement('p');
        //     var mobile = document.createElement('p');

        //     name.innerText = userName;
        //     email.innerText = userEmail;
        //     address.innerText = userAddress;
        //     mobile.innerText = userMobile;

        //     info.appendChild(name);
        //     info.appendChild(email);
        //     info.appendChild(address);
        //     info.appendChild(mobile);

        //     node.appendChild(removeBtn); //appending the node to removebtn -> node: parent div -> removeBtn: child div
        //     node.appendChild(img); //appending the node to removebtn -> node: parent div -> removeBtn: child div
        //     node.appendChild(info); //appending the node to removebtn -> node: parent div -> removeBtn: child div
        //     document.getElementById('card_container').appendChild(node); //appending the card_container to node ->
        //     // card_container: parent div -> node : child div
        // }


        function removeCard(removeCard)
        {
            removeCard.remove();
        } 
        function closeForm()
        {
            document.querySelector('.form_modalActive').className = 'form form_modal';
        }
    </script>
</body>
</html>