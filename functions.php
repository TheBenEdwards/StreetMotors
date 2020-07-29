<?php
function getConnection() { //Connects to the database, throws an exemption if there is a connection issue.
    try {
        $connection = new PDO("mysql:host=localhost;dbname=unn_w17004394",
            "unn_w17004394", "PASSWORDHERE");
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
    } catch (Exception $e) {
        throw new Exception("Connection error ". $e->getMessage(), 0, $e);
    }
}

function log_error($e) //Logs errors to a file.
{
    $fileHandle = fopen("error_log_file.log", "ab");
    $errorDate = date('D M j G:i:s T Y');
    $errorMessage = $e->getMessage();
    fwrite($fileHandle, "$errorDate, $errorMessage /n");
    fclose($fileHandle);
}

function buildPage()
{
    echo"<link rel=meta charset='UTF-8' />";
    echo"<link rel='stylesheet' type='text/css' href='stylesheet.css' />"; 
    echo"<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />";
}


// BUILDS NAVIGATION BAR
function buildNav()
{
     echo 
        "
        <script>
        function showDivNewCar() {
            document.getElementById('newCar').style.display = 'block';
            document.getElementById('usedCar').style.display = 'none';
            document.getElementById('motability').style.display = 'none';
            document.getElementById('vans').style.display = 'none';
            document.getElementById('service').style.display = 'none';
        }
        
        function closeDivNewCar() {
            document.getElementById('newCar').style.display = 'none';
            document.getElementById('usedCar').style.display = 'none';
            document.getElementById('motability').style.display = 'none';
            document.getElementById('vans').style.display = 'none';
            document.getElementById('service').style.display = 'none';
        }

        function openNewCar() {
            if (document.getElementById('newCar').style.display === 'block') {
                closeDivNewCar()
            } else {
                showDivNewCar()
            }
        }

        function showDivUsedCar() {
            document.getElementById('usedCar').style.display = 'block';
            document.getElementById('newCar').style.display = 'none';
            document.getElementById('motability').style.display = 'none';
            document.getElementById('vans').style.display = 'none';
            document.getElementById('service').style.display = 'none';
        }
        
        function closeDivUsedCar() {
            document.getElementById('newCar').style.display = 'none';
            document.getElementById('usedCar').style.display = 'none';
            document.getElementById('motability').style.display = 'none';
            document.getElementById('vans').style.display = 'none';
            document.getElementById('service').style.display = 'none';
        }

        function openUsedCar() {
            if (document.getElementById('usedCar').style.display === 'block') {
                closeDivUsedCar()
            } else {
                showDivUsedCar()
            }
        }

        function showDivMotability() {
            document.getElementById('motability').style.display = 'block';
            document.getElementById('newCar').style.display = 'none';
            document.getElementById('usedCar').style.display = 'none';
            document.getElementById('vans').style.display = 'none';
            document.getElementById('service').style.display = 'none';
        }
        
        function closeDivMotability() {
            document.getElementById('newCar').style.display = 'none';
            document.getElementById('usedCar').style.display = 'none';
            document.getElementById('motability').style.display = 'none';
            document.getElementById('vans').style.display = 'none';
            document.getElementById('service').style.display = 'none';
        }

        function openMotability() {
            if (document.getElementById('motability').style.display === 'block') {
                closeDivMotability()
            } else {
                showDivMotability()
            }
        }

        function showDivVans() {
            document.getElementById('vans').style.display = 'block';
            document.getElementById('newCar').style.display = 'none';
            document.getElementById('usedCar').style.display = 'none';
            document.getElementById('motability').style.display = 'none';
            document.getElementById('service').style.display = 'none';
        }
        
        function closeDivVans() {
            document.getElementById('newCar').style.display = 'none';
            document.getElementById('usedCar').style.display = 'none';
            document.getElementById('motability').style.display = 'none';
            document.getElementById('vans').style.display = 'none';
            document.getElementById('service').style.display = 'none';
        }

        function openVans() {
            if (document.getElementById('vans').style.display === 'block') {
                closeDivVans()
            } else {
                showDivVans()
            }
        }

        function showDivService() {
            document.getElementById('service').style.display = 'block';
            document.getElementById('newCar').style.display = 'none';
            document.getElementById('usedCar').style.display = 'none';
            document.getElementById('motability').style.display = 'none';
            document.getElementById('vans').style.display = 'none';
        }
        
        function closeDivService() {
            document.getElementById('newCar').style.display = 'none';
            document.getElementById('usedCar').style.display = 'none';
            document.getElementById('motability').style.display = 'none';
            document.getElementById('vans').style.display = 'none';
            document.getElementById('service').style.display = 'none';
        }

        function openService() {
            if (document.getElementById('service').style.display === 'block') {
                closeDivService()
            } else {
                showDivService()
            }
        }

    </script>

    <div class = 'navigation'>

        <div class='nav'>
            <ul>
                <li class='navLogoText'><a href='index.html'>Street Motors</a></li>
                <li><button class='button' type='button' onclick='openNewCar();'>New Cars</button></li>
                <li><button class='button' type='button' onclick='openUsedCar()'>Used Cars</button></li>
                <li><button class='button' type='button' onclick='openMotability()'>Motability</button></li>
                <li><button class='button' type='button' onclick='openVans()'>Vans</button></li>
                <li><button class='button' type='button' onclick='openService()'>Servicing & Parts</button></li>
            </ul>
        </div>

        <div class ='newCars' id='newCar'>
            <ul>
                <li><button class='button' type='button'>Citroen</button></li>
                <li><button class='button' type='button'>Hyundai</button></li>
                <li><button class='button' type='button'>Renault</button></li>
                <li><button class='button' type='button'>CUPRA</button></li>
                <li><button class='button' type='button'>Jeep</button></li>
                <li><button class='button' type='button'>SEAT</button></li>
                <li><button class='button' type='button'>Dacia</button></li>
                <li><button class='button' type='button'>Mazda</button></li>
                <li><button class='button' type='button'>Skoda</button></li>
                <li><button class='button' type='button'>DS</button></li>
                <li><button class='button' type='button'>Nissan</button></li>
                <li><button class='button' type='button'>Toyota</button></li>
                <li><button class='button' type='button'>Ford</button></li>
                <li><button class='button' type='button'>Peugeot</button></li>
                <li><button class='button' type='button'>Buy Online</button></li>
                <li><button class='button' type='button'>Find a Dealer</button></li>
                <li><button class='button' type='button'>View All Cars</button></li>
            </ul>
        </div>

        <div class='usedCars' id='usedCar'>
            <ul>
                <li><button class='button' type='button'>Alfa Romeo</button></li>
                <li><button class='button' type='button'>DS</button></li>
                <li><button class='button' type='button'>Infiniti</button></li>
                <li><button class='button' type='button'>Renault</button></li>
                <li><button class='button' type='button'>Volkswagen</button></li>
                <li><button class='button' type='button'>Audi</button></li>
                <li><button class='button' type='button'>Fiat</button></li>
                <li><button class='button' type='button'>Jeep</button></li>
                <li><button class='button' type='button'>SEAT</button></li>
                <li><button class='button' type='button'>Volvo</button></li>
                <li><button class='button' type='button'>BMW</button></li>
                <li><button class='button' type='button'>Ford</button></li>
                <li><button class='button' type='button'>Mazda</button></li>
                <li><button class='button' type='button'>Skoda</button></li>
                <li><button class='button' type='button'>Toyota</button></li>
                <li><button class='button' type='button'>Buy Online</button></li>
                <li><button class='button' type='button'>Find a Dealer</button></li>
                <li><button class='button' type='button'>All Stock</button></li>
            </ul>
        </div>

        <div class='motability' id='motability'>
            <ul>
                <li><button class='button' type='button'>Citroen</button></li>
                <li><button class='button' type='button'>Jeep</button></li>
                <li><button class='button' type='button'>SEAT</button></li>
                <li><button class='button' type='button'>Dacia</button></li>
                <li><button class='button' type='button'>Mazda</button></li>
                <li><button class='button' type='button'>Skoda</button></li>
                <li><button class='button' type='button'>DS</button></li>
                <li><button class='button' type='button'>Nissan</button></li>
                <li><button class='button' type='button'>Toyota</button></li>
                <li><button class='button' type='button'>Ford</button></li>
                <li><button class='button' type='button'>Peugeot</button></li>
                <li><button class='button' type='button'>Vauxhall</button></li>
                <li><button class='button' type='button'>Hyundai</button></li>
                <li><button class='button' type='button'>Renault</button></li>
                <li><button class='button' type='button'>Buy Online</button></li>
                <li><button class='button' type='button'>Find a Dealer</button></li>
                <li><button class='button' type='button'>Other Accessible Vehicles</button></li>
            </ul>
        </div>

        <div class='vans' id='vans'>
            <ul>
                <li><button class='button' type='button'>Citroen</button></li>
                <li><button class='button' type='button'>Toyota</button></li>
                <li><button class='button' type='button'>Ford</button></li>
                <li><button class='button' type='button'>Vauxhall</button></li>
                <li><button class='button' type='button'>Nissan</button></li>
                <li><button class='button' type='button'>Peugeot</button></li>
                <li><button class='button' type='button'>Renault</button></li>
                <li><button class='button' type='button'>Buy Online</button></li>
                <li><button class='button' type='button'>Find a Dealer</button></li>
            </ul>
        </div>

        <div class='service' id='service'>
            <ul>
                <li><button class='button' type='button'>Book a Service</button></li>
                <li><button class='button' type='button'>Bodyshops</button></li>
                <li><button class='button' type='button'>Book an MOT</button></li>
                <li><button class='button' type='button'>Accident & Repairs</button></li>
                <li><button class='button' type='button'>Priority Service Plan</button></li>
                <li><button class='button' type='button'>Tyres</button></li>
                <li><button class='button' type='button'>Parts & Accessories</button></li>
                <li><button class='button' type='button'>Seasonal Offers</button></li>
                <li><button class='button' type='button'>Buy Online</button></li>
                <li><button class='button' type='button'>Find a Dealer</button></li>
            </ul>
        </div>

    </div>
    ";
}

function buildFooter()
{
    echo
    "
        <div class='footer'>
            <ul>
                <li><button class='button' type='button'>Local Used Cars</button></li>
                <li><button class='button' type='button'>Ex Demonstartors</button></li>
                <li><button class='button' type='button'>FCA</button></li>
                <li><button class='button' type='button'>Terms & Conditions</button></li>
                <li><button class='button' type='button'>Status Disclosure</button></li>
                <li><button class='button' type='button'>Cookie Policy</button></li>
                <li><button class='button' type='button'>Privacy Policy</button></li>
            </ul>
        </div>
    ";

}
?>


