<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
    /* Popup box style */
    .popup {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.4);
    }
    
    .popup-content {
        background-color: #232323;
        margin: 15% auto;
        padding: 20px;
        border-radius: 1.5vmin;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        width: 20%;
        height: 20%;
        align-items:flex-start ;
        color: white;
        font-family: 'Antonio',sans-serif;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    }
    
    /* Close button style */
    .close {
        color: #fff;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }
    
    .close:hover,
    .close:focus {
        color: #aaa;
        text-decoration: none;
        cursor: pointer;
    }
</style>
</head>
<body>
    <?php
    session_start();
    ?>
    <div id="particles-js"></div>
    <div id="wrapper">
    
        <div class="conatiner">
            <div class="top">
                <label class="title">Nullcrum.win</label>
                <img src="bb.png" alt="" class="skull">
                <?php
                    if(!isset($_SESSION["sessionid"])){
                        echo "<a href='login.php' class='acc'>Login</a>";
                    }
                    else{
                        echo "<a href='logout.php' class='acc'>Logout</a>";
                    }
                ?> 
            </div>
            <div class="bottom">
                <div class="left">
                    <h1>The Gamsense of <span>VALORANT</span></h1>
                    <h2> We believe you deserve that Rank</h2>
                    <div class="btn">
                    <a href="https://discord.gg/FzNDWxRnzA" target="_blank"><button class="disc" id="btn">Discord</button></a>
                    <?php
                    if(!isset($_SESSION["sessionid"])){
                        echo "<button class='dw' id='btn'>Download</button>";
                    }
                    else{
                        echo "<button class='dw' id='btn' onclick='openPopup()'>Download</button>";
                    }
                    ?>
                    </div>
                </div>
                <div class="right">
                    <img src="Agent_Omen_Half.png" alt="" class="omen">
                </div>
            </div>
            
        </div>
    </div>
    <script>
    
    function openPopup() {
    document.getElementById("myPopup").style.display = "block";
    }

    function closePopup() {
    document.getElementById("myPopup").style.display = "none";
    }

    
    window.onclick = function(event) {
    if (event.target == document.getElementById("myPopup")) {
    document.getElementById("myPopup").style.display = "none";
    }
    }
    </script>
    <div id="myPopup" class="popup">
    <div class="popup-content">
    <span class="close" onclick="closePopup()">&times;</span>
    <p>Choose the Software as per your Subscription.</p>
    <div class="radio">
    <a href="nullcrum_private_client.zip"><button class="dw" style="padding:2vmin 4vmin">Private</button></a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <a href="nullcrum_public_client.zip"><button class="dw" style="padding:2vmin 4vmin">Public</button></a>
</div>
    </div>
    </div>

<script src="particles.js"></script>
<script src="app.js"></script>
</body>
</html>