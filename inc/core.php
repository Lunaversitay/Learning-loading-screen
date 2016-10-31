<!-- Now this is where the magic happens. We will start our PHP session now -->

<?php

//Alright, we need to include our config.php in this file so it can read our API key and whatever else may be added in the future.

//Include config.php
include('config.php') // This will include our config file from the root folder

// There may be errors so we want to turn those off before we continue
error_reporting(0); // I'd recommend keeping this at 0

// Now we need to call our Steam 64 ID
if(!isset($_GET['steamid'])){
	// If you're not in-game, use this to define a default steam id.
	$steam64 = '76561198074425791';
} else {
	// If you are in-game, then this will fetch the steam id from the loading screen.
	$steam64 = $_GET['steamid'];
}

// Now let's point our code in the right direction
$steamdirect = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $SteamAPIKey . "&steamids=" . $iamsteam; // This will point our code in the right direction for our loading screen to sync the information on steam

// We're gonna use this to gather content from our steamid 64
$json = file_get_contents($iamsteam);
// Now we're going to have our program decode that content
$steamdecoded1 = json_decode($json, true);
// Finally let's finish off our information grabbing with this
$steamcoded = $steamcoded2["response"]["players"][0];

// Now that we have grabbed all our information from steam we are now free to start using it
// Everything you need to know is here https://developer.valvesoftware.com/wiki/Steam_Web_API this is where you will use things such as a username or image. I'm going to deminstrate an image and a username sync with steam.

$steamprofileimg = $steamdecoded['avatarfull']; // This will use the full image such as the one on the main page of someone's community profile

//Now let's start our persona username with steam.
// This is the Steam Username that will display in text pretty self explanitory.
$username = $steamdecoded['personaname'];

//Now let's close off our session
?>
