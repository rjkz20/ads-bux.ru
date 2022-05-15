<?php



if(empty($title)) {
    $title = $META_TAG['DEFAULT']['TITLE'];
}

if(empty($description)) {
    $description = $META_TAG['DEFAULT']['DESCRIPTION'];
}

?>
<!DOCTYPE html>
<html lang="ru" class="no-js darkMode">
<head>
	
	<title><?= $title ?></title>
        <meta name="description" content="<?= $description ?>">
     <link href="https://fonts.googleapis.com/css?family=Neucha" rel="stylesheet">  
 <link rel="stylesheet" href="<?= SITE_URL ?>theme/main.css?v=<?php echo time(); ?>">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <link rel="shortcut icon" href="<?= SITE_URL ?><?= FAVICON ?>">
     </head>
<body>
<div id="navbar" class="">
        <div id="navInner">
            <span id="navbarName" onclick="location.href='<?= SITE_URL ?>';"> <?= TITLE ?></span>
        </div>
    </div>

    <div class="backgroundMountain"></div>
    <div class="backgroundMountain" id="blurredMountain"></div>
   <div class="mainContent">




    <div class="player1" style="text-align: center; position: relative; justify-content: center; align-items: center">
        <form action="/search.php">
  <input type="search" name="text" style="width: 70%; background: var(--bg-color); border: none; font-size: 8pt; color: var(--light-text-color); -webkit-border-radius: 15px; -moz-border-radius: 15px; border-radius: 15px;border-left: 0.5px var(--light-text-color) solid; border-right: 0.5px var(--light-text-color) solid; border-top: 0.5px var(--light-text-color) solid; border-bottom: 0.5px var(--light-text-color) solid; height: 25px; margin: 5px; padding-left: 10px;" placeholder="Поиск в Кинопоиске" required> 
		<input type="submit" style="background: var(--bg-color); font-size: 10pt; color: var(--light-text-color);border-radius: 15px; border-left: 0.5px var(--light-text-color) solid; border-right: 0.5px var(--light-text-color) solid; border-top: 0.5px var(--light-text-color) solid; border-bottom: 0.5px var(--light-text-color) solid;cursor: pointer;width: 25%; height: 25px;" value="Искать" >
   </form>
   	</div>
   	<div class="fadeInElement">