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
  color: rgba(255,255,255,1.0);
  font-family: inherit;
}

h2 {
  font-size: 500;
  font-style: oblique;
  font-family: fantasy;
  color: black;
}

#chiefs {
  color: rgba(220,20,60,1.0);
}

#steelers {
  color: rgba(255,255,0,1.0);
}

#bills {
  color: rgba(0,0,255,1.0);
}

#patriots {
  color: rgba(0,0,128,1.0);
}

#bengals {
  color: rgba(255,140,0,1.0);
}

#raiders {
  color: rgba(169,169,169,1.0);
}

#wildcard1 {
  visibility: hidden;
}

#wildcard2 {
  visibility: hidden;
}

#wildcard3 {
  visibility: hidden;
}

#wildcard4 {
  visibility: hidden;
}

#wildcard5 {
  visibility: hidden;
}

#wildcard6 {
  visibility: hidden;
}

#divisional1 {
  visibility: hidden;
}

#divisional2 {
  visibility: hidden;
}

#divisional3 {
  visibility: hidden;
}

#divisional4 {
  visibility: hidden;
}

#championship1 {
  visibility: hidden;
}

#championship2 {
  visibility: hidden;
}

#superbowl {
  visibility: hidden;
}

</style>
<script>
        function showRound(roundNum)
        {
          const wildcardElements = document.getElementById(roundNum);
          wildcardElements.style.visibility = "visible";
        }

        function WildCardWinners()
        {
          let afcwildCardOne = document.getElementById("AFCWildCardOne").value;
          let afcwildCardTwo = document.getElementById("AFCWildCardTwo").value;
          let afcwildCardThree = document.getElementById("AFCWildCardThree").value;
          let afcTeamSeedOne = 0;
          let afcTeamSeedTwo = 0;
          let afcTeamSeedThree = 0;
          let lowestAFCSeed = 0;

          let nfcwildCardOne = document.getElementById("NFCWildCardOne").value;
          let nfcwildCardTwo = document.getElementById("NFCWildCardTwo").value;
          let nfcwildCardThree = document.getElementById("NFCWildCardThree").value;
          let nfcTeamSeedOne = 0;
          let nfcTeamSeedTwo = 0;
          let nfcTeamSeedThree = 0;
          let lowestNFCSeed = 0;


          const wildcardElements = document.getElementById("divisional1");
          wildcardElements.style.visibility = "visible";

          if(afcwildCardOne.includes("Chiefs") || afcwildCardOne.includes("chiefs"))
          {
            afcTeamSeedOne = 2;
          }

          else if(afcwildCardOne.includes("Steelers") || afcwildCardOne.includes("steelers"))
          {
            afcTeamSeedOne = 7;
          }

          if(afcwildCardTwo.includes("Bills") || afcwildCardTwo.includes("bills"))
          {
            afcTeamSeedTwo= 3;
          }

          else if(afcwildCardTwo.includes("Patriots") || afcwildCardTwo.includes("patriots"))
          {
            afcTeamSeedTwo = 6;
          }

          if(afcwildCardThree.includes("Bengals") || afcwildCardThree.includes("bengals"))
          {
            afcTeamSeedThree = 4;
          }

          else if(afcwildCardThree.includes("Raiders") || afcwildCardThree.includes("raiders"))
          {
            afcTeamSeedThree = 5;
          }

          lowestAFCSeed = Math.max(afcTeamSeedOne, Math.max(afcTeamSeedTwo, afcTeamSeedThree));

          if(lowestAFCSeed == afcTeamSeedOne)
          {
            document.getElementById('AFCLowest').innerHTML = document.getElementById("AFCWildCardOne").value;
            document.getElementById('AFCOne').innerHTML = document.getElementById("AFCWildCardTwo").value;
            document.getElementById('AFCTwo').innerHTML = document.getElementById("AFCWildCardThree").value;
          }

          else if(lowestAFCSeed == afcTeamSeedTwo)
          {
            document.getElementById('AFCLowest').innerHTML = document.getElementById("AFCWildCardTwo").value;
            document.getElementById('AFCOne').innerHTML = document.getElementById("AFCWildCardOne").value;
            document.getElementById('AFCTwo').innerHTML = document.getElementById("AFCWildCardThree").value;
          }

          else if(lowestAFCSeed == afcTeamSeedThree)
          {
            document.getElementById('AFCLowest').innerHTML = document.getElementById("AFCWildCardThree").value;
            document.getElementById('AFCOne').innerHTML = document.getElementById("AFCWildCardOne").value;
            document.getElementById('AFCTwo').innerHTML = document.getElementById("AFCWildCardTwo").value;
          }

          if(nfcwildCardOne.includes("Buccaneers") || afcwildCardOne.includes("buccaneers"))
          {
            nfcTeamSeedOne = 2;
          }

          else if(nfcwildCardOne.includes("Eagles") || nfcwildCardOne.includes("eagles"))
          {
            nfcTeamSeedOne = 7;
          }

          if(nfcwildCardTwo.includes("Cowboys") || nfcwildCardTwo.includes("bills"))
          {
            nfcTeamSeedTwo= 3;
          }

          else if(nfcwildCardTwo.includes("49ers"))
          {
            nfcTeamSeedTwo = 6;
          }

          if(nfcwildCardThree.includes("Rams") || nfcwildCardThree.includes("rams"))
          {
            nfcTeamSeedThree = 4;
          }

          else if(nfcwildCardThree.includes("Cardinals") || nfcwildCardThree.includes("cardinals"))
          {
            nfcTeamSeedThree = 5;
          }

          lowestNFCSeed = Math.max(nfcTeamSeedOne, Math.max(nfcTeamSeedTwo, nfcTeamSeedThree));

          if(lowestNFCSeed == nfcTeamSeedOne)
          {
            document.getElementById('NFCLowest').innerHTML = document.getElementById("NFCWildCardOne").value;
            document.getElementById('NFCOne').innerHTML = document.getElementById("NFCWildCardTwo").value;
            document.getElementById('NFCTwo').innerHTML = document.getElementById("NFCWildCardThree").value;
          }

          else if(lowestNFCSeed == nfcTeamSeedTwo)
          {
            document.getElementById('NFCLowest').innerHTML = document.getElementById("NFCWildCardTwo").value;
            document.getElementById('NFCOne').innerHTML = document.getElementById("NFCWildCardOne").value;
            document.getElementById('NFCTwo').innerHTML = document.getElementById("NFCWildCardThree").value;
          }

          else if(lowestNFCSeed == nfcTeamSeedThree)
          {
            document.getElementById('NFCLowest').innerHTML = document.getElementById("NFCWildCardThree").value;
            document.getElementById('NFCOne').innerHTML = document.getElementById("NFCWildCardOne").value;
            document.getElementById('NFCTwo').innerHTML = document.getElementById("NFCWildCardTwo").value;
          }

        }

        function DivisionalWinners()
        {
          const wildcardElements = document.getElementById("championship1");
          wildcardElements.style.visibility = "visible";

          document.getElementById('AFCChampOne').innerHTML = document.getElementById("AFCDivisionalOne").value;
          document.getElementById('AFCChampTwo').innerHTML = document.getElementById("AFCDivisionalTwo").value;
          document.getElementById('NFCChampOne').innerHTML = document.getElementById("NFCDivisionalOne").value;
          document.getElementById('NFCChampTwo').innerHTML = document.getElementById("NFCDivisionalTwo").value;
        }

        function ChampionshipWinners()
        {
          const wildcardElements = document.getElementById("superbowl");
          wildcardElements.style.visibility = "visible";

          document.getElementById('AFCSuperBowl').innerHTML = document.getElementById("AFCChampionship").value;
          document.getElementById('NFCSuperBowl').innerHTML = document.getElementById("NFCChampionship").value;
        }
</script>

<main>
  <h1> Super Bowl Predictions </h1>
  <form action= "info.php" method=”get”>
    <h2> <font style= "color: rgba(255,255,255,1.0)"> Name: </font> <input type="text" name= "nameFirst" placeholder="First Name" required> <input type="text" name= "nameLast" placeholder="Last Name" required> <button type="submit" name="Submit" onclick= "showRound('wildcard1');">Submit</button> </h2>
    <h2 id= "wildcard1"> <font id = 'chiefs'> (2) Kansas City Chiefs (12-5) </font> VS <font id = 'steelers'> (7) Pittsburgh Steelers (9-7-1) </font>:<input type="text" id= "AFCWildCardOne" name= "AFCWildCardOne" placeholder="Winner" required> <button type="submit" name="Submit" onclick= "showRound('wildcard2');">Submit</button> </h2>
    <h2 id= "wildcard2"> <font id= "bills"> (3) Buffalo Bills (11-6) </font> VS <font id= "patriots"> (6) New England Patriots (10-7) </font>:  <input type="text" id= "AFCWildCardTwo" name= "AFCWildCardTwo" placeholder="Winner" required> <button type="submit" name="Submit" onclick= "showRound('wildcard3');">Submit</button> </h2>
    <h2 id= "wildcard3"> <font id= "bengals"> (4) Cincinnati Bengals (10-7) </font> VS <font id= "raiders"> (5) Las Vegas Raiders (10-7) </font>: <input type="text" id= "AFCWildCardThree" name= "AFCWildCardThree" placeholder="Winner" required> <button type="submit" name="Submit" onclick= "showRound('wildcard4');">Submit</button> </h2>
    <h2 id= "wildcard4"> <font style= "color: rgba(255,0,0,1.0)"> (2) Tampa Bay Buccaneers (13-4) </font> VS <font style= "color: rgba(0,128,128,1.0)"> (7) Philadelphia Eagles (9-8) </font>:  <input type="text" id= "NFCWildCardOne" name= "NFCWildCardOne" placeholder="Winner" required> <button type="submit" name="Submit" onclick= "showRound('wildcard5');">Submit</button> </h2>
    <h2 id= "wildcard5"> <font style= "color: rgba(0,0,139,1.0)"> (3) Dallas Cowboys (12-5) </font> VS <font style= "color: rgba(218,165,32,1.0)"> (6) San Francisco 49ers (10-7) </font>:  <input type="text" id= "NFCWildCardTwo" name= "NFCWildCardTwo" placeholder="Winner" required> <button type="submit" name="Submit" onclick= "showRound('wildcard6');">Submit</button> </h2>
    <h2 id= "wildcard6"> <font style= "color: rgba(0,0,205,1.0)"> (4) Los Angeles Rams (12-5) </font> VS <font style= "color: rgba(178,34,34,1.0)"> (5) Arizona Cardinals (11-5) </font>:  <input type="text" id= "NFCWildCardThree" name= "NFCWildCardThree" placeholder="Winner" required> <button type="submit" name="Submit" onclick= "WildCardWinners();">Submit</button> </h2>
    <h2 id= "divisional1"> <font id= "AFCLowest" style= "color: rgba(255,255,255,1.0)"> </font> VS <font style= "color: rgba(30,144,255,1.0)"> (1) Tennessee Titans (12-5) </font>:  <input type="text" id= "AFCDivisionalOne" name= "AFCDivisionalOne" placeholder="Winner" required> <button type="submit" name="Submit" onclick= "showRound('divisional2');">Submit</button> </h2>
    <h2 id= "divisional2"> <font id= "AFCOne" style= "color: rgba(255,255,255,1.0)" >  </font> VS <font id= "AFCTwo" style= "color: rgba(255,255,255,1.0)"> </font>:  <input type="text" id= "AFCDivisionalTwo" name= "AFCDivisionalTwo" placeholder="Winner" required> <button type="submit" name="Submit" onclick= "showRound('divisional3');">Submit</button> </h2>
    <h2 id= "divisional3"> <font id= "NFCLowest" style= "color: rgba(255,255,255,1.0)"> </font> VS <font style= "color: rgba(0,100,0,1.0)"> (1) Green Bay Packers (13-4) </font>:  <input type="text" id= "NFCDivisionalOne" name= "NFCDivisionalOne" placeholder="Winner" required> <button type="submit" name="Submit" onclick= "showRound('divisional4');">Submit</button> </h2>
    <h2 id= "divisional4"> <font id= "NFCOne" style= "color: rgba(255,255,255,1.0)"> </font> VS <font id= "NFCTwo" style= "color: rgba(255,255,255,1.0)"> </font>:  <input type="text" id= "NFCDivisionalTwo" name= "NFCDivisionalTwo" placeholder="Winner" required> <button type="submit" name="Submit" onclick= "DivisionalWinners();">Submit</button> </h2>
    <h2 id= "championship1"> <font id= "AFCChampOne" style= "color: rgba(255,255,255,1.0)"> </font> VS <font id= "AFCChampTwo" style= "color: rgba(255,255,255,1.0)"> </font>:  <input type="text" id="AFCChampionship" name= "AFCChampionship" placeholder="Winner" required> <button type="submit" name="Submit" onclick= "showRound('championship2');">Submit</button> </h2>
    <h2 id= "championship2"> <font id= "NFCChampOne" style= "color: rgba(255,255,255,1.0)"> </font> VS <font id= "NFCChampTwo" style= "color: rgba(255,255,255,1.0)"> </font>:  <input type="text" id="NFCChampionship" name= "NFCChampionship" placeholder="Winner" required> <button type="submit" name="Submit" onclick= "ChampionshipWinners();">Submit</button> </h2>
    <h2 id= "superbowl"> <font id="AFCSuperBowl" style= "color: rgba(255,255,255,1.0)"> </font> VS <font id="NFCSuperBowl" style= "color: rgba(255,255,255,1.0)"> </font> (Super Bowl Winner): <input type="text" name= "SuperBowl" placeholder="Winner" required> <button type="submit" name="Submit1">Submit</button> </h2>
  </form>

</main>
