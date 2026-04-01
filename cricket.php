#cricket.xml
<?xml version="1.0"?>
<CricketTeam>
  <Team country="Australia">
    <player>David Warner</player>
    <runs>9000</runs>
    <wicket>0</wicket>
  </Team>

  <Team country="Australia">
    <player>Steve Smith</player>
    <runs>8500</runs>
    <wicket>20</wicket>
  </Team>
</CricketTeam>


#indiateam.php
<?php
// Load existing XML file
$xml = simplexml_load_file("cricket.xml");

// Add new Team (India)
$team1 = $xml->addChild("Team");
$team1->addAttribute("country","India");
$team1->addChild("player","Virat Kohli");
$team1->addChild("runs","12000");
$team1->addChild("wicket","5");

$team2 = $xml->addChild("Team");
$team2->addAttribute("country","India");
$team2->addChild("player","Rohit Sharma");
$team2->addChild("runs","10000");
$team2->addChild("wicket","10");

// Save updated XML
$xml->asXML("cricket.xml");

echo "India team added successfully!";
?>
