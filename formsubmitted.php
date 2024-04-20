
<html>
  <head>
    <title>Form Submited</title>
    <script type="text/javascript" src="script.js"></script>
    <link type="text/css" rel="stylesheet" href="stylesheet.css"/>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="https://s3.amazonaws.com/codecademy-content/courses/hour-of-code/js/alphabet.js"></script>
  </head>
  <body>
    
    <center>
    <canvas id="myCanvas"></canvas>
    <script type="text/javascript" src="https://s3.amazonaws.com/codecademy-content/courses/hour-of-code/js/bubbles.js"></script>
    <script type="text/javascript" src="main.js"></script>
  </center>
<script>
    //CODE FOR ANIMATING NAME
var myName = "form submited";

var red = [0, 100, 63];
var orange = [40, 100, 60];
var green = [75, 100, 40];
var blue = [196, 77, 55];
var purple = [280, 50, 60];
var letterColors = [red, orange, green, blue, purple];

drawName(myName, letterColors);

if(10 < 3)
{
    bubbleShape = 'square';
}
else
{
    bubbleShape = 'circle';
}

bounceBubbles();
</script>

</body>
</html>