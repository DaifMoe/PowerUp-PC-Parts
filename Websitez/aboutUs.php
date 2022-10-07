<html>
<head>
    <style>
        body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: rgb(240, 10, 20);
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}
button{
  margin: 0 auto;
    padding: 12px 20px;
    font-family: poppins, sans-serif;
    align-items: center;
    font-weight: 800;
    border-radius: 10px;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
     </style>
</head>
<body>
    <right>
<div class="about-section">
<button type="submit" value="return"><a href="index.php">Go Back</a></button>
  <h1>About Us Power Up Pc Parts</h1>
  <p>We are a local Pc Part Business that was Established in 2021.</p>
  <p>Our Mission: Our goal is to create a user friendly online shopping experience for our customers.
       We will be selling the best quality Pc parts at the best prices. We beat our competitors every 
       way whether its price, customer service or satisfaction guarantee.
       Ultimately PowerUp will be the best online PC part shopping experience in the world.
</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="drip1.jpg" alt="Moe" style="width:100%">
      <div class="container">
        <h2>Moe Daif</h2>
        <p class="title">CEO & Founder</p>
        <p>Hello I'm Moe Daif, a software engineering student at Drew University. 
            I co-founded Power Up Pc Parts with my friend Omar Nasser. My favorite languages
            are JavaScript, HTML, CSS, and PHP.
        </p>
        <p>mdaif@drew.edu</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="drip2.jpg" alt="Omar" style="width:100%">
      <div class="container">
        <h2>Omar Nasser</h2>
        <p class="title">CFO & Founder</p>
        <p>Hello I'm Omar Nasser, a computer engineering student at Drew University.
            I co-founded Power Up Pc Parts with my friend Moe Daif. My favorite languages
            are Python, and C++.
        </p>
        <p>onasser@drew.edu</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</right>
</body>
</html>