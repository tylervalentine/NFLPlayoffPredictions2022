
<?php
$db_host = 'localhost';
$db_username = 'valentinet02';
$db_password = 'Baseball-19';
$link = mysqli_connect("127.0.0.1", "valentinet02", "Baseball-19", "NFLPlayoffPredictions2022");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if (isset($_GET['Submit1'])) {
  $user_info = sprintf("INSERT INTO UserPredictions (nameFirst, nameLast, AFCWildCardOneWinner, AFCWildCardTwoWinner, AFCWildCardThreeWinner, NFCWildCardOneWinner, NFCWildCardTwoWinner, NFCWildCardThreeWinner, AFCDivisionalOneWinner, AFCDivisionalTwoWinner, NFCDivisionalOneWinner, NFCDivisionalTwoWinner, AFCChampionshipWinner, NFCChampionshipWinner, SuperBowlWinner)
  VALUES ('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",
  mysqli_real_escape_string($link, $_GET['nameFirst']), mysqli_real_escape_string($link, $_GET['nameLast']), mysqli_real_escape_string($link, $_GET['AFCWildCardOne']), mysqli_real_escape_string($link, $_GET['AFCWildCardTwo']), mysqli_real_escape_string($link, $_GET['AFCWildCardThree']), mysqli_real_escape_string($link, $_GET['NFCWildCardOne']),
  mysqli_real_escape_string($link, $_GET['NFCWildCardTwo']),
  mysqli_real_escape_string($link, $_GET['NFCWildCardThree']), mysqli_real_escape_string($link, $_GET['AFCDivisionalOne']), mysqli_real_escape_string($link, $_GET['AFCDivisionalTwo']), mysqli_real_escape_string($link, $_GET['NFCDivisionalOne']), mysqli_real_escape_string($link, $_GET['NFCDivisionalTwo']),
  mysqli_real_escape_string($link, $_GET['AFCChampionship']), mysqli_real_escape_string($link, $_GET['NFCChampionship']), mysqli_real_escape_string($link, $_GET['SuperBowl']));
  $result = mysqli_query($link, $user_info);
  if ($result)
  {
    echo " Your information was added to the database! Thank you for your feedback!";
  }

  mysqli_close($link);
}
else {
  echo "Information not added. Please try again.";
}
?>
