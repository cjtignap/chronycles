<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jervie Coronel</title>
    <style>body{
        background-color:#141934;
        color:#fff;
      }
      button{
        background-color:#e6f9f6;
        border:dotted 5px #535959;
        color:#154545;
        }
      button:hover{
        background-color:#154545;
        border:dotted 5px #535959;
        color:#e6f9f6;
         cursor: pointer; 
      }
      .middle{
        text-align:center;
        position:relative;
        color:white;
        font-size:22px;
      }
      
      #secret{
        background-color:#1b2025;
        overflow:hidden;
        display: none;
      }
      </style>
</head>
<body>
    <body>
        <div class="middle">
        <p>Click the button to display secret message.</p>
        
        <button onclick="displayText()">The secret message</button>
        
        <p>The secret is:</p>
        <p id="secret">
            Dear Professor Engr. Chavez,
            
            I just wanted to take a moment to express my gratitude for the incredible work you do as a programming professor. Your dedication to helping your students succeed is truly inspiring. Your expertise and guidance have not only taught us the technical skills we need, but have also instilled in us a love for learning and a curiosity for exploring new possibilities.
            
            Thank you for all that you do, not just in the classroom, but also in your research and contributions to the programming community. I feel grateful to have the opportunity to learn from you. Although sometimes it's hard to keep up with your activities because while you're discussing, we need to both understand and type the codes at the same time.
            
            With sincere appreciation,
            Jerv :></p>
        
        </div>
        </body>
</body>
<script>function displayText() {
    document.getElementById("secret").style.display = "flex";
}


</script>
</html>