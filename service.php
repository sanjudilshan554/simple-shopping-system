<?php include("./navbar.php");
include("./footer.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        div.gallery {
          border: 1px solid #bb1f1f;
        }
        
        div.gallery:hover {
          border: 1px solid #e26868;
        }
        
        div.gallery img {
          width: 100%;
          height: auto;
        }
        
        div.desc {
          padding: 20px;
          text-align: center;
        }
        
        * {
          box-sizing: border-box;
        }
        
        .responsive {
          padding: 0 6px;
          float: left;
          width: 24.99999%;
        }
        
        @media only screen and (max-width: 700px) {
          .responsive {
            width: 49.99999%;
            margin: 6px 0;
          }
        }
        
        @media only screen and (max-width: 700px) {
          .responsive {
            width: 100%;
          }
        }
        
        .clearfix:after {
          content: "";
          display: table;
          clear: both;
        }
        </style>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="styleservice.css">
</head>
<body>

    <div class="main">
        <!-- <div class="navbar">
            <div class="icon">
                <h2 class="logo">Hand Made Gift</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="service.html">SERVICE</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </div> -->

            
                <div class="responsive">
                    <div class="gallery">
                      <a target="_blank" href="logo.png">
                        <img src="logo.png" alt="Cinque Terre" width="600" height="400">
                      </a>
                    </div>
                  </div>

                  <div class="responsive">
                    <div class="gallery">
                      <a target="_blank" href="items/1.jpg">
                        <img src="items/1.jpg" alt="Cinque Terre" width="600" height="400">
                      </a>
                      <div class="desc">WOODEN ART  price 750/-</div>
                    </div>
                  </div>

                  <div class="responsive">
                    <div class="gallery">
                      <a target="_blank" href="items/6.jpeg">
                        <img src="items/6.jpeg" alt="Cinque Terre" width="600" height="400">
                      </a>
                      <div class="desc">PAPER MADE GIFTBOX Price 700/-</div>
                    </div>
                  </div>

                  <div class="responsive">
                    <div class="gallery">
                      <a target="_blank" href="items/3.jpeg">
                        <img src="items/3.jpeg" alt="Cinque Terre" width="600" height="400">
                      </a>
                      <div class="desc">DOLL Price 300/-</div>
                    </div>
                  </div>

                  <div class="responsive">
                    <div class="gallery">
                      <a target="_blank" href="items/4.jpeg">
                        <img src="items/4.jpeg" alt="Cinque Terre" width="600" height="400">
                      </a>
                      <div class="desc">PHOTO FRAME  Price 900/-</FRAME></FRAME></div>
                    </div>
                  </div>

                  <div class="responsive">
                    <div class="gallery">
                      <a target="_blank" href="items/2.jpg">
                        <img src="items/2.jpg" alt="Cinque Terre" width="8000" height="800">
                      </a>
                      <div class="desc">BAG & BAND 1500/-</div>
                    </div>
                  </div>

                  <div class="responsive">
                    <div class="gallery">
                      <a target="_blank" href="items/6.jpeg">
                        <img src="items/6.jpeg" alt="Cinque Terre" width="600" height="400">
                      </a>
                      <div class="desc">WALL HANGER Price 400/-</div>
                    </div>
                  </div>


                  <div class="responsive">
                    <div class="gallery">
                      <a target="_blank" href="items/7.jpeg">
                        <img src="items/7.jpeg" alt="Cinque Terre" width="600" height="400">
                      </a>
                      <div class="desc">DECORATED MUG PRICE 600/-</div>
                    </div>
                  </div>

                  <div class="responsive">
                    <div class="gallery">
                      <a target="_blank" href="items/8.jpeg">
                        <img src="items/8.jpeg" alt="Cinque Terre" width="600" height="400">
                      </a>
                      <div class="desc">PHOTO FRAME Price 500/-</div>
                    </div>
                  </div>

                  
                  
                  
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>