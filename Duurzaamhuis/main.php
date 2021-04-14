<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        session_start();
        if(!isset($_SESSION['username'])){
            echo"U bent uitgelogd, klik <a>hier</a> om terug te gaan naar login";
            exit();
        }
        ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="style.css">
        <title>Duurzaamhuis</title>
        <script src="js/apparaten.js" defer></script>
        <script src="js/tijd.js" defer></script>
        <script src="js/grafiek.js" defer></script>
        <script src="js/weerlive.js" defer></script>
        <script src="js/tempratuur.js" defer></script>
        <script src="https://rawgithub.com/darkskyapp/skycons/master/skycons.js" defer></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js" defer></script>
    </head>
        <body>

        <div id="header">
            <img class="logo" src="images/logo.png" alt="Logo">
            <a href="inlog/logout.php">UITLOGGEN</a>
        </div>

            <h1 class="title">DASHBOARD</h1>

        <div id="main-container">
            
            <div id="stat-container">
               
                <div id="grafiek">
                
                </div>
        </div>
            
            <div id="in-temp-container">
                <svg width="300px" height="300px" viewBox="0 0 42 42">
                <circle cx="20" cy="20" r=" 15.91549430918954" fill="transparent" stroke="rgba(200, 200, 200, 0.5)" stroke-width="4"></circle>
                <circle cx="20" cy="20" r=" 15.91549430918954" fill="transparent" stroke="#38D430" stroke-width="4" stroke-dasharray="15 85" stroke-dashoffset="75" id="cirkelBoog"></circle>
                <g class="temp">
                <text id="temperatuur" x="30%" y="51%"></text>
                <text id="eenheid" x="52%" y="50%">&deg;C</text>
                </g>
                </svg>
                <input type="range" min="1" max="30" value="18" id="thermostaat">
            </div>

            <div id="DTL-container"><p>
                
                <span id="daytime" class="lineOne">...</span>
                <span id="MDtime" class="lineOne">...</span>
                <span id="monthtime" class="lineOne">...</span>
                <span id="yeartime" class="lineOne">...</span></br>
                <span id="hourtime" class="lineTwo">...</span>
                <span class="lineTwo">:</span>
                <span id="minutetime" class="lineTwo">...</span></br>
                <span class="lineThree">Amsterdam, Nederland</span>
            </p>
                
                
                    </div>
            <div id="out-temp-container">
                <div id="dashboard">
            <div id="weather" class="item">
                <div id="live">
                    <select id="city">
                        <option value="Amsterdam">Amsterdam</option>
                        <option value="Leiden">Leiden</option>
                        <option value="Rotterdam">Rotterdam</option>
                        <option value="Utrecht">Utrecht</option>
                        <option value="Friesland">Friesland</option>
                        <option value="Den-haag">Den-haag</option>
                    </select>
        <img src="images/loading.gif" alt="loading">
        <p> Momenteel is het:  </p>
        <h2></h2>
            <h1></h1>
        </div>
    </div>
            </div>
    </div>
            <div id="Prof-container">
                <svg class="profile-pic" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 172.487 172.487">
                    <path id="ic_perm_identity_24px" d="M86.744,23.652a21.72,21.72,0,1,1-21.72,21.72,21.718,21.718,0,0,1,21.72-21.72m0,93.087c30.719,0,63.092,15.1,63.092,21.72v11.377H23.652V138.458c0-6.619,32.373-21.72,63.092-21.72M86.744,4a41.372,41.372,0,1,0,41.372,41.372A41.36,41.36,0,0,0,86.744,4Zm0,93.087C59.128,97.087,4,110.946,4,138.458v31.029H169.487V138.458C169.487,110.946,114.359,97.087,86.744,97.087Z" transform="translate(-0.5 -0.5)" fill="#fff" stroke="#1b0942" stroke-width="7"/>
                  </svg>

                  <h1 class="prof-name"><?php echo $_SESSION['username'];
                  ?></h1>
                  
            </div>
            <div id="stat-container-show">
                <div class="apparaat" data-id="VER">
                    <h1>Titel apparaat</h1>
                    <div>
                        <p>minuten per dag: <span>0</span></p>
                        <input class="slider" type="range" min="0" max="240" step="10" value="15" />
                        </div>
                    <h2>Verbruik of kosten</h2>
                    <button>Toon verbruik</button>
                </div>
            </div>
        </div>
        <div>
            
        </div>
        <footer>© COPYRIGHT 2021 ECOLOGIC</footer>
    
    </body>
</html>