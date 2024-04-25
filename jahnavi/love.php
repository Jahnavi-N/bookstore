<!DOCTYPE html>
<html>
    <head>
		<title>LOVE</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.js"></script>
        <style>

*{
    margin:0;
    padding:0;
    box-sizing: border-box;
}
body{
    min-height:100vh;
    display:grid;
    place-items:center;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

       .card-item{
               height:250px;
               width:250px;
               background-color:white;
               text-align:center;
               border-radius:8px;
               padding:20px;
               margin: 15px;
               
       
           }
           .image{
               height: 250px;
               width:250px;
               margin:5%;
               border-radius:100%;
           }
	 .back a{
                width:100px;
                float:right;
                height:100%;
                background-color:white;
                border:0px;
                color:black;
                text-transform:uppercase;
                text-decoration:none;
                font-size:25px;
                margin-top:20px;
                margin-right:20px;     


            }

.download-btn{
    background-color: DodgerBlue;
    color: white;
    padding: 0.1rem 0.1rem;
    font-size: 1rem;
    text-decoration: none;
    border-radius:1px;
}
.download-btn:hover {
    background-color: RoyalBlue;
  }
           
         </style>
	</head>
   
    <body>
		<div class="container-fluid ps-5">
			<div class="d-flex flex-row ">
				 
                <div class="card-item">
                    <img src="l1.jpg" class="image">
			<a href="l1.jpg" download="image" class="download-btn">Download
        <i class="fa fa-download"></i></a>
                    <p class="card-text"><b>IT ENDS WITH US PRICE:$60</b></p>
                </div>
				<div class="card-item">
                     <img src="l2.jpg" class="image">
	<a href="l2.jpg" download="image" class="download-btn">Download
        <i class="fa fa-download"></i></a>
                    <p class="card-text"><b>THE NOTEBOOK PRICE:$560</b></p>
                </div>
				<div class="card-item">
                    <img src="l3.jpg" class="image">
		<a href="l3.jpg" download="image" class="download-btn">Download
        <i class="fa fa-download"></i></a>
                    <p class="card-text"><b>THE TIME TRAVELER'S WIFE PRICE:$760</b></p>
                </div>
				<div class="card-item">
                    <img src="l4.jpg" class="image">
		<a href="l4.jpg" download="image" class="download-btn">Download
        <i class="fa fa-download"></i></a>
                    <p class="card-text"><b>THE PROPOSAL PRICE:$590</b></p>
                </div>
			</div>	
				<div class="d-flex flex-row mt-5">
					<div class="mt-3 d-flex flex row">
				<div class="card-item">
                    <img src="l5.jpg" class="image">
		<a href="l5.jpg" download="image" class="download-btn">Download
        <i class="fa fa-download"></i></a>
                    <p class="card-text"><b>PRIDE AND PREJUDICE PRICE:$590</b></p>
                </div>
				<div class="card-item">
                    <img src="l6.jpg" class="image">
			<a href="l6.jpg" download="image" class="download-btn">Download
        <i class="fa fa-download"></i></a>
                    <p class="card-text"><b>A HALF BAKED LOVE STORY PRICE:$390</b></p>
                </div>
				<div class="card-item">
                    <img src="l7.jpg" class="image">
		<a href="l7.jpg" download="image" class="download-btn">Download
        <i class="fa fa-download"></i></a>
                    <p class="card-text"><b>VISION WHITE PRICE:$560</b></p>
                </div>
				<div class="card-item">
                    <img src="l8.jpg"class="image">
			<a href="l8.jpg" download="image" class="download-btn">Download
        <i class="fa fa-download"></i></a>
                    <p class="card-text"><b>THE KISS QUOTIENT PRICE:$499</b></p>
                </div>
				</div>
                </div>
		
       
    </body>  
    <div class="back">
        <a href="project.php">BACK TO HOME</a>
    </div>       
</html>