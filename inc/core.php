<!-- Now this is where the magic happens. We will start our PHP session now -->

<?php

//Alright, we need to include our config.php in this file so it can read our API key and whatever else may be added in the future.

//Include config.php
include('config.php') // This will include our config file from the root folder

// Steam will output errors that we don't need to worry about cause of the method
error_reporting(0);

// Grab steamid from the url
if(!isset($_GET['steamid'])){
	// this will be defined as the default steamid if you're not in-game
	$steam64 = '76561198074425791';
} else {
	// If you're in-game then use =%s and it will fetch the id from there
	$steam64 = $_GET['steamid'];
}

// get our url to the steam api
$steamdirect = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $SteamAPIKey . "&steamids=" . $iamsteam; // This will point our code in the right direction for our loading screen to sync the information on steam

// Get our contents
$json = file_get_contents($iamsteam);
// Decode the contents cause the api is automatically in json format
$steamdecoded1 = json_decode($json, true);
// Make a handle to easily echo the api information we want to display
$steamcoded = $steamcoded2["response"]["players"][0];

// Now that we have grabbed all our information from steam we are now free to start using it
// Everything you need to know is here https://developer.valvesoftware.com/wiki/Steam_Web_API this is where you will use things such as a username or image. I'm going to deminstrate an image and a username sync with steam.

$steamprofileimg = $steamdecoded['avatarfull']; // This will use the full image such as the one on the main page of someone's community profile

//Now let's start our persona username with steam.
// This is the Steam Username that will display in text pretty self explanitory.
$username = $steamdecoded['personaname'];
