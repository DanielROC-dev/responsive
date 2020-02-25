<!DOCTYPE HTML>
<html>
<head>
    <title>Music Houz (i forgot name)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            box-sizing: border-box;
        }
        .row::after {
            content: "";
            clear: both;
            display: table;
        }
        [class*="col-"] {
            float: left;
            padding: 15px;
        }
        .menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        .menu li {
            padding:20px;
            margin-bottom:15px;
            background-color: gray;
            color: white;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        }
        .menu li:hover {
            background-color: purple;
        }
        
        body {
            background-color: yellow;
        }
        [class*="col-"] {
            width: 100%;
        }
        @media only screen and (min-width: 724px) {
            body {
                background-color: red;
                
            }
            .col-25 {
                width: 25%
            }
            .col-50 {
                width: 50%
        
            }
        }
        .header {
            background-color: gray;
            color: #ffffff;
            padding: 15px;
            text-align: center;
        }
        .text {
            text-align: center;
            float: center;

        }
        .side {
            background-color: gray;
            padding: 15px;
            color: white;
            text-align: center;
            font-size: 14px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Music House Instruments</h1>
    </div>
    
    <br>
    

    <div class="row">
  <div class="col-25 menu">
    <ul>
      <li>guitar</li>
      <li>saxophone</li>
      <li>drums</li>
      <li>trumpet</li>
    </ul>
  </div>

  <div class="col-50">
    <h1>Music House</h1>
    <h2>Guitar</h2>
    <img src="gitaar.jpg">
    <p>this is a wacky guitar</p>

    <h2>Saxophone</h2>
    <img src="saxofoon.jpg">
    <p>this is a wacky saxophone</p>

    <h2>Drums</h2>
    <img src="drums.jpg">
    <p>this is a wacky drums</p>

    <h2>Tromput</h2>
    <img src="trompet.jpg">
    <p>this is a wacky trumpet</p>
  </div>

  <div class="col-25 right">
    <div class="side">
      <h2>What is Music House</h2>
      <p>Music House is the place for all your music equipment.</p>
      <h2>Where is Music House located?</h2>
      <p>Music house is located at: jemoeder straat 25</p>
      <h2>Is there customer support?</h2>
      <p>yes, you can call us everyday from 12am to 6pm at (555) 555 55 555.</p>
    </div>
  </div>
</div>




</body>

</html>
