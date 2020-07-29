<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require_once('functions.php');
    buildPage();
    ?>
    <title>Street Motors</title>
</head>

<body>    
    <?php
    buildNav();
    ?>

    <div class="promoImages">
        <br>
        <br>
        <br>
        <br>
        
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="images/stock1.jpg" style="width:100%">
                <div class="text">Welcome Back!</div>
            </div>
            
            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="images/stock2.jpg" style="width:100%">
                <div class="text">Current Deals</div>
            </div>
            
            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="images/stock3.jpg" style="width:100%">
                <div class="text">Special Offers</div>
            </div>
        </div>
        
        <br>
        
        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div>
        
        <script>
            var slideIndex = 0;
            showSlides();
            
            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 3000); 
            }
        </script>
    </div>

    <div class="carCatalogue">
        <?php
        $dbConn = getConnection();
            
        $querySQL = "SELECT carID, carMan, carName, colour, dateRegistered, imageLink FROM CarDatabase ORDER BY carID ASC";
        $queryResult = $dbConn->query($querySQL);

        if($queryResult === false)
        {
            echo "<p>Query failed: ".$dbConn->error."</p>\n</body>\n</html>";
        }
        else
        {
            while($rowObj = $queryResult->fetchObject())
            {
                echo "
                <div class='carContainer'>
                <table>
                    <tr>
                        <th>Name: $rowObj->carName</th>
                    </tr>
                    <tr>
                        <th><div class='carPicture'><img class ='view' src = 'images/$rowObj->imageLink'  style='width:100%'></div></th>
                    </tr>
                    <tr>
                        <th>Manufacturer: $rowObj->carMan</th>
                    </tr>
                    <tr>
                        <th>Colour: $rowObj->colour</th>
                    </tr>
                    <tr>
                        <th><a href='#'>Find Out More</a></th>
                    </tr>
                </table>
                </div>
                ";
            }
        }
        ?>
    </div>
    
    <?php
    buildFooter();
    ?>
</body>

</html>