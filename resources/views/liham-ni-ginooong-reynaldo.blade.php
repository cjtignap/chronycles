<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reynaldo San Pedro</title>
    <style>body { 
        box-sizing: border-box; 
        text-align: center; 
        color: #303030;
        font-family: sans-serif;
      }
      
      .left { text-align: left; }
      
      .bx {
        margin: 1em auto; padding: 1em 2em;
        border: solid 1px #808080; 
        display: inline-block; 
        position: relative; 
        font-size: 18px;  
        max-width: 400px;
      }
      .bx h2 { font-size: 1.1em; margin: 0.5rem; }
      .quoteAuthor { text-align: right; }
      
      .thoughtBubble { 
        max-width: 220px;
        border-radius: 40%;
        border: solid 4px rgba(12,58,168,1.0);
      }
      
      .thoughtBubble::before,
      .thoughtBubble::after {
        content: "";
        position: absolute;
        background: white;;
        border-radius: 50%;
      }
      .thoughtBubble::before {
        bottom: -18px; left: 70%;
        height: 20px; width: 20px; 
        border: solid 4px rgba(12,58,168,0.8);
      }
      .thoughtBubble::after {
        bottom: -28px; left: 74%;
        height: 12px; width: 12px; 
        border: solid 4px rgba(12,58,168,0.6);
      }
      
      
      
      .angledBox { 
        background: #c0d0e0; 
        padding: 18px; 
        border: solid 2px #ffffff;
        box-shadow: 0 0 4px 2px rgba(192,208,244, 0.4)
      }
      .angledBox .inner { 
        background: #fff; 
        padding: 2em; 
        transform: rotate(-4deg); 
        border: solid 1px #808080; 
        box-shadow: 2px 2px 8px 0 rgba(145,145,145, 0.5);
      }
      
      .quoteBox { 
        border-radius: 12px; 
        background: #e6e6fa;
        padding: 0;
      }
      .quoteBox p { padding: 1em; margin: 0; }
      .quoteBox .quoteAuthor { 
        background: #303030;
        color: #e6e6fa;
        border-radius: 0 0 12px 12px;
        position: relative;
        box-shadow: 4px 4px 8px 0 rgba(145,145,145, 0.5);
      }
      
      .quoteBox .quoteAuthor::before {
        content: "";
        position: absolute;
        top: 0; left: 30px; width: 0; height: 0;
        border: solid 16px #e6e6fa;
        border-color: #e6e6fa transparent transparent transparent;
      }
      
      
      .topBottomBox { 
        border: solid 1px #a0a0a0; 
        border-width: 0 1px;
        background: linear-gradient(to bottom, #fafafa, #eaeaea, #fafafa );
      }
      .topBottomBox::before,
      .topBottomBox::after {
        content: "";
        position: absolute;
        top: -19px; left: -1px; right: -1px;
        height: 18px;
        background: linear-gradient(to bottom, #ecedee, #d3d3d3);
        border: solid 1px #a0a0a0;
      }
      
      .topBottomBox::before {
        border-bottom: none;
        border-radius: 8px 8px 0 0;
        
      }
      
      .topBottomBox::after {  
        top: auto; bottom: -19px;
        border-radius: 0 0 8px 8px;
        border-top: none;
        background: linear-gradient(to bottom, #d3d3d3, #ecedee);
      }
      
      .boxTitle { 
        background: #c6d5e4; color: #0c449e;
        border: none;
        text-shadow: 2px 2px 4px rgba(245,245,245, 0.8);
        padding: 6px;
        box-shadow: 3px 3px 8px 0 rgba(30,30,30, 0.3), 6px 6px 16px 0 rgba(30,30,30, 0.4);
      }
      
      .boxTitle > h2 { 
        margin: 0;  padding: 4px;
        font-size: 18px; 
        background: #ccddee;
      }
      .boxTitle > p { 
        background: white; 
        margin: 0; padding: 1em; 
        color: #303030; 
        font-size: 16px;
      }
      .boxTitle > p.quoteAuthor { 
        margin: 0;  padding: 4px;
        font-size: 18px; 
        background: #ccddee;
        color: #0c449e;
      }
      
      .gradientBox {
        background: #f2f4f9; 
        border: solid 3px #848789; 
        box-shadow: -1px -1px 3px 0 rgba(250,250,250, 0.4), 4px 4px 8px 0 rgba(50,50,50, 0.3);
      }
      
      .gradientBox::before {
        content: "";
        position: absolute; 
        z-index: -1;
        left: -12px; top: -12px; right: -12px; bottom: -12px; 
        background: linear-gradient(172deg, #96befa 0%, #ffffff 70%);
        border-radius: 8px;
      }
      
      
      .grayBox { 
        background: #f2f4f9; 
        border: solid 1px #848789; 
        box-shadow: inset 4px 4px 4px 0 rgba(245, 245, 245, 0.8), inset -4px -4px 4px 0 rgba(145, 145, 145, 0.3); 
      }
      
      .grayBox::after {
        content: "";
        position: absolute; 
        z-index: -1;
        left: -12px; top: -12px; right: -12px; bottom: -12px; 
        background: #b0b0b0;
        border: solid 1px #848789;   
        box-shadow: inset -4px -4px 4px 0 rgba(245, 245, 245, 0.3), inset 4px 4px 4px 0 rgba(145, 145, 145, 0.8); 
        border-radius: 4px;
      }
      
      .tripleBox { 
        background: radial-gradient(ellipse at center, rgba(150,190,250, 0.1) 0%, rgba(150,190,250, 0.4) 65%, rgba(150,190,250, 0.9) 95%); 
        border: solid 3px #ffffff; 
        box-shadow: inset 0 0 2px 0 #226399,  0 0 0 1px #226399, 0 0 0 4px #ffffff, 0 0 0 7px #226399, 4px 4px 4px 8px rgba(30,30,30, 0.3); 
      }
      
      .thickBox {
        border: outset 12px #4a4b4f;
        background: linear-gradient(135deg, #f3f7fa, #fcfdfe 15%, #f3f7fa 17%, #e0e4e5 25%, #d4e4fd 70%, #e9f1fc 70%, #e9f1fc 74%, #d4e4fd 74%, #dbe8fb 80%, #d3e3fc 95%, #c1d9ff 95%);
        box-shadow: inset 1px 1px 4px 0 rgba(30,30,30, 0.5), inset -2px -2px 4px 0 rgba(160,150,250, 0.8), 1px 1px 4px 0 rgba(30,30,30, 0.5);
      }
      
      .cornersBox { 
        border: solid 2px rgba(100, 100, 100, 0.8); 
      }
      .cornersBox::before,
      .cornersBox::after { 
        content: ""; 
        position: absolute;
      }
      .cornersBox::before { 
        left: -8px; top: -8px; width: 50px; height: 50px; 
        z-index: -1; 
        background: white; 
        border: solid 4px rgba(100, 100, 150, 0.8); 
        border-width: 4px 0 0 4px; 
        box-shadow: -2px -2px 0 0 #fff, 
                    -5px -5px 4px 0 rgba(100, 100, 100, 0.5); 
      }
      .cornersBox::after { 
        background: white; 
        left: auto; top: auto; right: -8px; bottom: -8px; 
        width: 50px; height: 50px;  z-index: -1;  
        border: solid 4px rgba(100, 100, 150, 0.8); 
        border-width: 0 4px 4px 0;
        box-shadow: 2px 2px 0 0 #fff, 
                    5px 5px 4px 0 rgba(100, 100, 100, 0.5); 
      }
      
      .raisedBox { 
        background: #f0f0f0;
        box-shadow: 1px 1px 6px 1px rgba(30,30,30,0.5);
      }
      .raisedBox::before { 
        content: "";
        position: absolute;
        top: -14px; left: 14px; bottom: -14px; right: 14px; 
        z-index: -1;
        background: rgba(200, 180, 180, 0.5); 
        box-shadow: inset 0 0 10px 5px rgba(80,80,80, 0.2); 
      }
      
      .box-corners { 
        background: radial-gradient(ellipse at center, rgba(150,190,250, 0.1) 0%, rgba(150,190,250, 0.3) 60%, rgba(150,190,250, 0.5) 80%);
        box-shadow: inset 0 0 6px 3px rgba(150,190,250, 0.8); 
      }
      
      .box-corners .corner { 
        position: absolute; 
        top: -21px; left: -21px; width: 40px; height: 40px; 
        background: white; 
        border: solid 1px black; border-radius: 50%; 
        border-color: white white black white; 
        transform: rotate(-45deg) 
      }
      
      .box-corners .corner:nth-child(2) { 
        left: auto; right: -21px; 
        border-color: white white white black; 
      }
      .box-corners .corner:nth-child(3) { 
        left: auto; right: -21px; top: auto; bottom: -21px; 
        border-color: black white white white; 
      }
      .box-corners .corner:nth-child(4) { 
        top: auto; bottom: -21px; 
        border-color: white black white white; 
      }
      
      .box-shadowEffect { 
        background: linear-gradient(to bottom, #e6effd 0%, #b3d0fb 70%, #96befa); 
        text-shadow: 1px 1px 0 #fff;
      }
      
      .box-shadowEffect::before,
      .box-shadowEffect::after {
        content: "";
        position: absolute;
        bottom: 3px; left: 4px; width: 49.0%; height: 20px;
        z-index: -100;
        background: white;
        transform: rotate(-2deg);
        box-shadow: 0 6px 8px 0 rgba(40,40,40, 1.0);
      }
      .box-shadowEffect::after { 
        transform: rotate(2deg);
        left: auto; right: 4px;
      }
      
      .graphpaper { 
        background-color: rgba(220,230,225, 1.0);
        background-image: linear-gradient(to bottom, rgba(120,120,150, 0.3), transparent 1px),linear-gradient(to right, rgba(120,120,150, 0.3), transparent 1px);
        background-size: 26px 26px;
        background-repeat: repeat;
        box-shadow: 
          inset 3px 3px 8px -1px rgba(255,255,255, 0.8), 
          inset -2px -2px 16px 0 rgba(50,50,50, 0.4), 
          0 3px 0 -2px rgba(220,230,225, 1.0), 0 3px 0 -1px #808080, 
          0 8px 0 -5px rgba(220,230,225, 1.0), 0 8px 0 -4px #808080, 
          0 13px 0 -8px rgba(220,230,225, 1.0), 0 13px 0 -7px #808080, 
          0 18px 0 -11px rgba(220,230,225, 1.0), 0 18px 0 -10px #808080, 
          0 23px 0 -14px rgba(220,230,225, 1.0), 0 23px 0 -13px #808080;
        
      }
      .graphpaper h2 { font-size: 1.1em; margin: 0.5rem; }
      
      .handDrawn {
        background-color: rgba(240,230,165, 0.6);
        border-radius: 255px 15px 225px 15px / 12px 225px 15px 225px;
        font-family: 'Indie Flower', cursive; line-height: 1.5; 
        box-shadow: 4px 4px 12px 0 rgba(80,80,80, 0.5);
      }
      
      .handDrawn h2 { font-size: 1.1em; margin: 0.5rem; }
      .handDrawn .quoteAuthor { 
        font-size: 1.2em;
        font-weight: bold;
        margin: 0.5rem; 
      }</style>
</head>
<body>
    <div class="bx handDrawn">
        <h2>Magandang Araw Ginoong Chaves,
        </h2>
        <p class="left">
            
Kamusta po ginoo? Sana po habang binabasa mo itong liham na ito ay nasa mabuti kang kalagayan.
<br /><br />
Maraming salamat po sa pagbibigay kaalaman sa aming mga istudyante, salamat po sa magandang pakikitungo sa amin at higit sa lahat ay pagiging mabait ng propesor. Malaki po ang inyong ambag upang mahubog ang aming kaalaman lalo na sa larangan ng programming. Sana po ay marami pa kayong maturuan at mapasaya na mga istudyante. Palagi po kayong mag iingat at magpakasaya.
<br /><br />
Nagmamamahal,
Boga
        </p>
      </div>
</body>
</html>