<?php
    include_once 'db_conn.php';
    $sql = 'SELECT * FROM generalinfo;';
    $result = $conn -> query($sql);

    if($result -> num_rows > 0)
    {
        while($row = $result->fetch_assoc()) {
            echo"<script>";
            echo"addCard('" . $row["NAME"] . "','" . $row["EMAIL"]. "','" . $row["ADDRESS"] . "','" . $row["MOBILE"] . "');";
            echo "
                function addCard(userName, userEmail, userAddress, userMobile)
                {
                    var removeBtn = document.createElement('div'); //creating a div for remove buttond
                    removeBtn.className = 'remove_card btn'; //add class to to the remove button
                    removeBtn.innerHTML = '&minus;'; //adding content to the button [—]
                    removeBtn.setAttribute('onclick','removeCard(this.parentElement)'); //adding attribute to the remove butotn d
        
                    var node = document.createElement('div'); //creating a div
                    node.className = 'cards'; //adding class to the div
        
                    //adding the content to the div
                    var img = document.createElement('div');
                    var info = document.createElement('div');
                    img.className = 'img';
                    info.className = 'info';
        
                    var name = document.createElement('h3');
                    var email = document.createElement('p');
                    var address = document.createElement('p');
                    var mobile = document.createElement('p');
        
                    name.innerText = userName;
                    email.innerText = 'Email: ' + userEmail;
                    address.innerText = 'Address: ' + userAddress;
                    mobile.innerText = 'Mobile No.: ' + userMobile;
        
                    info.appendChild(name);
                    info.appendChild(email);
                    info.appendChild(address);
                    info.appendChild(mobile);
        
                    node.appendChild(removeBtn); //appending the node to removebtn -> node: parent div -> removeBtn: child div
                    node.appendChild(img); //appending the node to removebtn -> node: parent div -> removeBtn: child div
                    node.appendChild(info); //appending the node to removebtn -> node: parent div -> removeBtn: child div
                    document.getElementById('card_container').appendChild(node); //appending the card_container to node ->
                    // card_container: parent div -> node : child div
                }
            ";
            echo "</script>";
        }
    }
    else
        echo "0 Results";
?>