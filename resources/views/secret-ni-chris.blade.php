<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From : Chris John Dela Cruz</title>
    <style>@import url("https://fonts.googleapis.com/css2?family=Silkscreen&display=swap");
        @font-face {
            font-family: "Product Sans";
            font-style: normal;
            font-weight: 400;
            src: local("Open Sans"), local("OpenSans"), url(https://fonts.gstatic.com/s/productsans/v5/HYvgU2fE2nRJvZ5JFAumwegdm0LZdjqr5-oayXSOefg.woff2) format("woff2");
       }
        body {
            -webkit-font-smoothing: none;
            background-color: #a6a6a6;
            height: 100vh;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            user-select: none;
            font-family: Product Sans;
       }
        .flex {
            display: flex;
            justify-content: center;
            gap: 1rem;
       }
        .mb-3 {
            margin-bottom: 1rem;
       }
        button {
            font-family: "Silkscreen", cursive;
            background-color: #d5d3cd;
       }
        .window {
            position: relative;
            padding: 2px;
            width: 98vw;
            max-width: 400px;
            min-width: 340px;
            background-color: #d5d3cd;
            box-shadow: 1px 0px #353535, 0px 1px #353535, -1px 0px #f4f4f4, 0px -1px #f4f4f4;
       }
        .window::before {
            position: absolute;
            z-index: -1;
            content: "";
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            box-shadow: rgba(34, 46, 44, 0.1) 0 2px 2px, rgba(34, 46, 44, 0.1) 0 10px 10px, rgba(34, 46, 44, 0.1) 0 18px 18px, rgba(34, 46, 44, 0.1) 0 26px 26px, rgba(34, 46, 44, 0.1) 0 34px 34px, rgba(34, 46, 44, 0.1) 0 42px 42px;
       }
        .window button {
            font-family: "Silkscreen", cursive;
            cursor: pointer;
       }
        .window .header {
            background-color: #04236b;
            color: #dfeaf2;
            padding: 4px;
            display: flex;
            align-items: center;
            justify-content: space-between;
       }
        .window .header .btn {
            padding: 0 3px 0 0;
            font-size: 16px;
            width: 25px;
            height: 25px;
            border: none;
            border-radius: 0;
            font-weight: bold;
            box-shadow: 0 -1px #353535, inset 2px 2px #f4f4f4, inset -2px -2px #353535;
       }
        .body {
            text-align: center;
            padding: 12px 0;
       }
        .body .icon {
            width: 3rem;
            height: 3rem;
            background-position-x: -11px !important;
            background-position-y: -40px !important;
            background-size: 21rem !important;
       }
        .body button {
            padding: 4px 24px;
            border: 2px #353535 solid;
            position: relative;
       }
        .body button:after {
            content: "";
            position: absolute;
            height: calc(100% - 8px);
            width: calc(100% - 8px);
            left: 3px;
            top: 3px;
            border: 1px #353535 dashed;
            border-radius: 1px;
       }
        </style>
</head>
<body>
    <section class="window">
  <div class="header">
    <span>From : Chris John Dela Cruz</span>
    <button class="btn">x</button>
  </div>
  <div class="body">
    <div class="flex mb-3">
      <div class="icon" style="background: url('https://www.webexmachina.fr/files/blog/2019/2019-04-19_ux03-actions/unexpected-error.jpg') center no-repeat" alt="image"></div>
      <p>The only class where I don't feel sleepy at all, I for one unironically love coding so.<br />
        About sayo naman sir, in my opinion lang naman, One of the if not the best professor when it comes to programming,<br />
        You're able to teach complex topics by using words that we students can relate<br /> e.g. $ugh  😂
    </p>
    </div>

    <button class="btn">Ok</button>
  </div>
</section>
</body>
</html>