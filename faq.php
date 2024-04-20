





<style>
  
@import url(https://fonts.googleapis.com/css?family=Lato);

@import url(https://fonts.googleapis.com/css?family=Open);

.faq-heading {
  font-family: Lato;   
  font-weight: 600;
  font-size: 19px;
   -webkit-transition: text-indent 0.2s;
  text-indent: 20px;
  color: #333;
}

.faq-text {
  font-family: sans-serif;   
  font-weight: 500;
  color:gray;
  width:95%;
  padding-left:20px;
  margin-bottom:30px;
}

.faq {
  width: 90%;
  margin: 0 auto;
  background: #D3D3D3;
  border-radius: 4px;
  position: relative;
  border: 1px solid #E1E1E1;
}
.faq label {
  display: block;
  position: relative;
  overflow: hidden;
  cursor: pointer;
  height: 56px;
  padding-top:1px;
  box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2); 
  background-color: #FAFAFA;
  box-shadow: #333;
  border-bottom: 1px solid #E1E1E1;
}

.faq input[type="checkbox"] {
  display: none;
}

.faq .faq-arrow {
  padding: 5px;
  width: 10px;
  height:10px;
  transition: -webkit-transform 0.8s;
  transition: transform 0.8s;
  transition: transform 0.8s, -webkit-transform 0.8s;
  -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
  border-top: 2px solid rgba(0, 0, 0, 0.33);
  border-right: 2px solid rgba(0, 0, 0, 0.33);
  float: right;
  position: relative;
  top: 0px;
  right: 27px;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}

 .faq input[type="checkbox"]:checked + label > .faq-arrow {
  transition: -webkit-transform 0.8s;
  transition: transform 0.8s;
  transition: transform 0.8s, -webkit-transform 0.8s;
  -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -webkit-transform: rotate(135deg);
          transform: rotate(135deg);
}
 .faq input[type="checkbox"]:checked + label {
  display: block;
  background: rgba(255,255,255,255) !important;
  color: #4f7351;
  height: 125px;
  transition: height 0.8s;
  -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

 .faq input[type='checkbox']:not(:checked) + label {
  display: block;
  transition: height 0.8s;
  height: 60px;
  -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

::-webkit-scrollbar {
  display: none;
}

</style>  
<div class="heading text-center mx-auto">
            <p class="my-3 head" style="font-size: 30px;text-shadow: 2px 2px 5px rgba(58, 91, 210, 0.3);"><b><i>Why We Are</i> </b></p>
            <p class="my-3 head" style="font-size: 30px;text-shadow: 2px 2px 5px rgba(58, 91, 210, 0.3);"> <b ><i>BEST From</i></b> <i style="color:#E91E63">Others?</i></p>
          </div>
<br>
<div class='faq' >
  <input id='faq-a' type='checkbox'>
  <label for='faq-a'>
    <p class="faq-heading">Affordable Price</p>
    <div class='faq-arrow'></div>
      <p class="faq-text">Experience effortless moving <br>at a budget-friendly rate with our comprehensive movers and packers service. We prioritize your satisfaction, providing reliable and efficient solutions for all your relocation needs. Trust our experienced team to handle your move with care, ensuring a seamless transition to your new destination. Say goodbye to the stress of moving and hello to a hassle-free experience with us.</p>
  </label>
  <input id='faq-b' type='checkbox'>
  <label for='faq-b'>
    <p class="faq-heading">Reliability</p>
    <div class='faq-arrow'></div>
      <p class="faq-text">Experience the reliability <br> you deserve with our movers and packers service</p>
  </label>
  <input id='faq-c' type='checkbox'>
  <label for='faq-c'>
    <p class="faq-heading">Safety</p>
    <div class='faq-arrow'></div>
      <p class="faq-text">Experience the reliability <br>you deserve with our movers and packers service. Trust in our expertise to deliver a seamless and secure relocation experience tailored to your needs. With a focus on professionalism and attention to detail, we ensure your belongings are handled with care every step of the way.</p>
  </label>
  <input id='faq-d' type='checkbox'>
  <label for='faq-d'>
    <p class="faq-heading">Well Trained Team</p>
    <div class='faq-arrow'></div>
      <p class="faq-text">Count on our well-trained team <br> for a seamless moving experience. Our dedicated professionals are equipped with the skills and expertise to handle every aspect of your move with precision and care. From packing to transportation and unpacking, we ensure a smooth transition to your new location, giving you peace of mind throughout the process. </p>
  </label>
  <input id='faq-e' type='checkbox'>
  <label for='faq-e'>
    <p class="faq-heading">100% Customer Satisfaction</p>
    <div class='faq-arrow'></div>
      <p class="faq-text">"Delivering 100% <br> customer satisfaction with our movers and packers service. From the moment you entrust us with your relocation to the final delivery, our dedicated team works tirelessly to ensure your complete satisfaction. We prioritize your needs and preferences, striving to make your moving experience smooth, stress-free, and truly satisfying.</p>
  </label>
    
</div>
<br>
<hr>
<?php
    include('location.php');
    ?>