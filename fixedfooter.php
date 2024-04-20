<style>
.share-bar {
  position: fixed;
  bottom: 0;
  height: 51px;
  border: none;
  background: #ffffff;
  z-index: 4999991;
  transform: translateZ(0) translate3d(0, 0, 0);
  -webkit-transform: translateZ(0) translate3d(0, 0, 0);
  -moz-transform: translateZ(0) translate3d(0, 0, 0);
  transition: all 0.5s ease;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  display: flex;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  flex-direction: row;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -webkit-flex-direction: row;
  -ms-flex-direction: row;
  align-items: flex-start;
  -webkit-box-align: start;
  -webkit-align-items: flex-start;
  -ms-flex-align: start;
  width: 100%;
  box-shadow: 0px -3px 3px 0px rgba(0, 0, 0, 0.12);
}

.share-bar--list {
  padding: 0;
  list-style: none;
}

.share-bar .share-bar--list {
  flex: 1 1 auto;
  -webkit-box-flex: 1;
  -webkit-flex: 1 1 auto;
  -ms-flex: 1 1 auto;
  overflow: hidden;
  text-align: left;
  font-size: 0;
}

.share-bar .share-bar--item {
  display: inline-block;
  width: 20%;
  /*  max-width: 71px; */
  height: 60px;
  line-height: 50px;
}

.share-bar--item {
  float: left;
  display: block;
  font-size: 1.3rem;
  height: 1.875rem;
  width: 1.875rem;
  line-height: 1.875rem;
  text-decoration: none;
  text-align: center;
  color: #ffffff;
  overflow: hidden;
}

/* Colours */
.facebook .share-bar--item,
.share-bar .facebook .share-bar--item-link,
.twitter .share-bar--item,
.share-bar .twitter .share-bar--item-link,
.whatsapp .share-bar--item,
.share-bar .whatsapp .share-bar--item-link,
.reddit .share-bar--item,
.share-bar .reddit .share-bar--item-link,
.linkedin .share-bar--item,
.share-bar .linkedin .share-bar--item-link,
.linkedin .share-bar--item,
.share-bar .linkedin .share-bar--item-link {
  cursor: pointer;
  width: 100%;
  min-width: 100%;
  display: block;
}

/* Facebook */
.facebook .share-bar--item,
.share-bar .facebook .share-bar--item-link {
  background-color: #3b5999;
  color: #fff;
}

/* instagram */
.twitter .share-bar--item,
.share-bar .twitter .share-bar--item-link {
  /* background-color: #55acef; */
  background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
  color: #fff;
}

/* What's App */
.whatsapp .share-bar--item,
.share-bar .whatsapp .share-bar--item-link {
  background-color: #61be4f;
  color: #fff;
}

/* youtube */
.reddit .share-bar--item,
.share-bar .reddit .share-bar--item-link {
  background-color: #ff0000;
  color: #fff;
}

/* call */
.linkedin .share-bar--item,
.share-bar .linkedin .share-bar--item-link {
  background-color: #4875b4;
  color: #fff;
}


/* Icons */
.share-bar--item-link:before {
  display: inline-block;
  color: #ffffff;
}

/* Facebook */
.share-bar .facebook .share-bar--item-link:before {
  /* content: "\f09a"; */
  font-family: "FontAwesome";
  font-style: normal;
  text-rendering: optimizeLegibility;
  text-transform: none;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
}

.share-bar .facebook .share-bar--item-link:hover {
  background-color: #fff;
  color: #3b5999;
  padding-left: 30px;
}

/* Twitter */
.share-bar .twitter .share-bar--item-link:before {
  /* content: "\f099"; */
  font-family: "FontAwesome";
  font-style: normal;
  text-rendering: optimizeLegibility;
  text-transform: none;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
}

.share-bar .twitter .share-bar--item-link:hover {
  background: #fff;
  color: #bc1888;
  padding-left: 30px;

}

/* What's App */
.share-bar .whatsapp .share-bar--item-link:before {
  /* content: " \F618"; */
  font-family: "FontAwesome";
  font-style: normal;
  text-rendering: optimizeLegibility;
  text-transform: none;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
}

.share-bar .whatsapp .share-bar--item-link:hover {
  background-color: #fff;
  color: #61be4f;
  padding-left: 30px;

}

/* Reddit */
.share-bar .reddit .share-bar--item-link:before {
  /* content: "\f281"; */
  font-family: "FontAwesome";
  font-style: normal;
  text-rendering: optimizeLegibility;
  text-transform: none;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
}

.share-bar .reddit .share-bar--item-link:hover {
  background-color: #fff;
  color: #ff0000;
  padding-left: 30PX;

}

/* LinkedIn */
.share-bar .linkedin .share-bar--item-link:before {
  /* content: "\f0e1"; */
  font-family: "FontAwesome";
  font-style: normal;
  text-rendering: optimizeLegibility;
  text-transform: none;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
}

.share-bar .linkedin .share-bar--item-link:hover {
  background-color: #fff;
  color: #4875b4;
  padding-left: 30px;

}
@media(max-width:600px){
  .txt1{
    display: none;
  }
  .rule{
    font-size: 14px;
    line-height: 10px;
  }
}

</style>


<div class="share-bar">
        <ul class="share-bar--list">
          <li class="whatsapp share-bar--item">
            <a class="share-bar--item-link" href="tel:+919696367540" title="whatsapp"><span class="txt1">Call us</span>
              <i class="fa fa-phone"></i>
            </a>
          </li>
          <li class="facebook share-bar--item">
            <a class="share-bar--item-link"
              href="https://www.facebook.com/profile.php?id=61557982571059" title="Share on Facebook."
              target="_self"><span class="txt1">Facebook</span> 
              <i class="fa fa-facebook"></i>
            </a> 
          </li>
          <li class="twitter share-bar--item">
            <a class="share-bar--item-link" href="https://www.instagram.com/pushkar_packersmovers_varanasi/?hl=en"
              title="instagram" target="_self"><span class="txt1">Instagram</span> 
              <i class="fa fa-instagram"></i>
            </a>
          </li>

          <li class="reddit share-bar--item">
            <a class="share-bar--item-link" href="https://www.youtube.com/@PushkarPackersAndMoversVaranas" title="view map"
              target="_self"><span class="txt1">Youtube</span> 
              <i class="fa fa-youtube"></i>
            </a>
          </li>
          <li class="linkedin share-bar--item">
            <a class="share-bar--item-link" href="contact.php" title="Call now" target="_self"><span class="rule">Enquiry</span> 
              <i class="fa fa-question-circle"></i>
            </a>
          </li>
        </ul>
      </div>