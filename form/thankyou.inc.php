<style>
body {
  margin: 0;
  left:0;
  font-family: 'Raleway', sans-serif;
}
.topnav {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  width: 100%;
  top:0;
}
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: #ddd;
  color: green;
}
.topnav a.active {
  background-color: skyblue;
  color: white;
}

.topnav .icon {
  display: none;
}
.contain{
  text-align: center;
  margin-top: 100px;

}
footer {
text-align: center;
padding: 3px;
background-color: Skyblue;
color: white;
  bottom: 0;
  position: fixed;
  width: 100%;
}
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display:none;}
  .topnav a.icon {
    float: right;
    display: block;
    background-color: white;
    background-image: url('../images/mickey.jpg');
    width: 5px;
    height: 5px;
    background-size: contain;
    background-repeat: no-repeat;
  }
}
@media screen and (max-width: 600px) {
  .topnav.responsive {position: fixed;}
  .topnav.responsive .icon {
    position: fixed;
  }
  .topnav.responsive a {
    display: block;
    text-align: left;
    text-align: left;
    float: right;
    background-repeat: no-repeat;
  }
footer {
  text-align: center;
  padding: 3px;
  background-color: Skyblue;
  color: white;
    bottom: 0px;
    font-size: 12px;
}
}
</style>
<body>
 <div class="topnav" id="myTopnav">
    <a href="index.html" class="active">Riverbelle Terrace</a>
    <a href="order.html">Order Now</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
    </a>
  </div>
  <div class="contain">
<h1>Thank you for your order. </h1>
<p>Thanks for your interest. We will be in contact shortly</p>
</div>
</body>
<footer>
  <h4>Kathy's Cakes inc. /Maya Multimedia LLC</h4><br>
</footer>
