<!DOCTYPE html>

<style>

body {
  background-image: url("lombardi-trophy.png");
  background-size: cover;
  opacity: 0.9;
}

h1 {

  font-size: 5000;
  font-weight: bolder;
  color:rgba(255,255,255,1.0);
  font-family: inherit;
}

h2 {
  font-size: 500;
  font-style: oblique;
  font-family: fantasy;
  color: black;
}

</style>

<main>
  <h1> Super Bowl Predictions </h1>
  <form action= "info.php" method=”get”>
    <h2> <font style= "color: rgba(255,255,255,1.0)"> Name: </font> <input type="text" name= "nameFirst" placeholder="First Name" required> <input type="text" name= "nameLast" placeholder="Last Name" required> </h2>
    <h2> <font style= "color: rgba(220,20,60,1.0)"> (2) Kansas City Chiefs (12-5)  </font> VS <font style= "color: rgba(255,255,0,1.0)"> (7) Pittsburgh Steelers (9-7-1) </font>:  <input type="text" name= "AFCWildCardOne" placeholder="Winner" required> </h2>
    <h2> <font style= "color: rgba(0,0,255,1.0)"> (3) Buffalo Bills (11-6) </font> VS <font style= "color: rgba(0,0,128,1.0)"> (6) New England Patriots (10-7) </font>:  <input type="text" name= "AFCWildCardTwo" placeholder="Winner" required> </h2>
    <h2> <font style= "color: rgba(255,140,0,1.0)"> (4) Cincinnati Bengals (10-7) </font> VS <font style= "color: rgba(169,169,169,1.0)"> (5) Las Vegas Raiders (10-7) </font>:  <input type="text" name= "AFCWildCardThree" placeholder="Winner" required> </h2>
    <h2> <font style= "color: rgba(255,0,0,1.0)"> (2) Tampa Bay Buccaneers (13-4) </font> VS <font style= "color: rgba(0,128,128,1.0)"> (7) Philadelphia Eagles (9-8) </font>:  <input type="text" name= "NFCWildCardOne" placeholder="Winner" required> </h2>
    <h2> <font style= "color: rgba(0,0,139,1.0)"> (3) Dallas Cowboys (12-5) </font> VS <font style= "color: rgba(218,165,32,1.0)"> (6) San Francisco 49ers (10-7) </font>:  <input type="text" name= "NFCWildCardTwo" placeholder="Winner" required> </h2>
    <h2> <font style= "color: rgba(0,0,205,1.0)"> (4) Los Angeles Rams (12-5) </font> VS <font style= "color: rgba(178,34,34,1.0)"> (5) Arizona Cardinals (11-5) </font>:  <input type="text" name= "NFCWildCardThree" placeholder="Winner" required> </h2>
    <h2> <font style= "color: rgba(255,255,255,1.0)"> (Lowest Remaining AFC Seed) </font> VS <font style= "color: rgba(30,144,255,1.0)"> (1) Tennessee Titans (12-5) </font>:  <input type="text" name= "AFCDivisionalOne" placeholder="Winner" required> </h2>
    <h2> <font style= "color: rgba(255,255,255,1.0)"> (AFC Wild Card Winner) </font> VS <font style= "color: rgba(255,255,255,1.0)"> (AFC Wild Card Winner) </font>:  <input type="text" name= "AFCDivisionalTwo" placeholder="Winner" required> </h2>
    <h2> <font style= "color: rgba(255,255,255,1.0)"> (Lowest Remaining NFC Seed) </font> VS <font style= "color: rgba(0,100,0,1.0)"> (1) Green Bay Packers (13-4) </font>:  <input type="text" name= "NFCDivisionalOne" placeholder="Winner" required> </h2>
    <h2> <font style= "color: rgba(255,255,255,1.0)"> (NFC Wild Card Winner) </font> VS <font style= "color: rgba(255,255,255,1.0)"> (NFC Wild Card Winner) </font>:  <input type="text" name= "NFCDivisionalTwo" placeholder="Winner" required> </h2>
    <h2> <font style= "color: rgba(255,255,255,1.0)"> (AFC Divisional Winner) </font> VS <font style= "color: rgba(255,255,255,1.0)"> (AFC Divisional Winner) </font>:  <input type="text" name= "AFCChampionship" placeholder="Winner" required> </h2>
    <h2> <font style= "color: rgba(255,255,255,1.0)"> (NFC Divisional Winner) </font> VS <font style= "color: rgba(255,255,255,1.0)"> (NFC Divisional Winner) </font>:  <input type="text" name= "NFCChampionship" placeholder="Winner" required> </h2>
    <h2> <font style= "color: rgba(255,255,255,1.0)"> Super Bowl Winner: </font> <input type="text" name= "SuperBowl" placeholder="Winner" required>
    <button type="submit" name="Submit1">Submit</button> </h2>
  </form>
</main>
