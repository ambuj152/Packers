<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>City Buttons</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.button-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.city-button:hover {
  filter: brightness(90%); /* Adjust brightness for hover effect */
}
.city-button {
  margin: 10px;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  color: #fff;
 width: 200px;
  transition: background-color 0.3s ease;
}

.paris {
  background-color: #FF5733;
}

.london {
  background-color: #0074D9;
}

.new-york {
  background-color: #FFC300;
}

.tokyo {
  background-color: #2ECC71;
}

.dubai {
  background-color: #8E44AD;
}

@media screen and (max-width: 600px) {
  .city-button {
    width: calc(100% - 20px);
    width: 200px;
  }
}

  </style>
</head>
<body>
    <br>
<div class="heading text-center mx-auto">
            
            <p class="my-3 head" style="font-size: 40px; text-shadow: 2px 2px 5px rgba(58, 91, 210, 0.3);"> <b style="color: #E91E63;"><i>AREA</i></b><i> We Serve</i></p>
          </div>
<br>
<br>
  <div class="button-container">
        <a href="contact.php?location=BHADOHI"><button class="city-button paris" type="button"><b>BHADOHI</b></button></a>
        <a href="contact.php?location=CHANDAULI"><button class="city-button new-york"><b>CHANDAULI</b></button></a> 
        <a href="contact.php?location=SONBHADRA"><button class="city-button tokyo"><b>SONBHADRA</b></button></a>
        <a href="contact.php?location=MAU"> <button class="city-button dubai"><b>MAU</b></button></a> 
        <a href="contact.php?location=DEVARIYA"> <button class="city-button london"><b>DEVARIYA</b></button></a> 
        <!-- <a href="contact.php?location=JAUNPUR"> <button class="city-button london"><b>JAUNPUR</b></button></a>  -->
                
              
  </div>
  <br>
</body>
</html>
