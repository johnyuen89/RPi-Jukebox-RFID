<?php
/*******************************************
* STUFF
*******************************************/

$debugcol = array("red","blue","green","yellow","black");

/*******************************************
* FUNCTIONS
*******************************************/

function html_bootstrap3_createHeader($lang="en",$title="Welcome",$url_absolute="") {
    /*
    * HTML for the header and body tag
    */
    print "<!DOCTYPE html>
<html lang=\"".$lang."\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>".$title."</title>

        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"".$url_absolute."_assets/bootstrap-3/css/bootstrap.darkly.css\">
        <link rel=\"stylesheet\" href=\"".$url_absolute."_assets/css/circle.css\">
        <link rel=\"stylesheet\" href=\"".$url_absolute."_assets/css/collapsible.css\">
        <!--link rel=\"stylesheet\" href=\"".$url_absolute."_assets/css/viewTree.css\"-->

        <!-- Latest compiled and minified JavaScript -->
        <script src=\"".$url_absolute."_assets/js/jquery.1.12.4.min.js\"></script>
        <script src=\"".$url_absolute."_assets/bootstrap-3/js/bootstrap.min.js\"></script>
        <script src=\"".$url_absolute."_assets/bootstrap-3/js/collapse.js\"></script>
        <script src=\"".$url_absolute."_assets/bootstrap-3/js/transition.js\"></script>

        <!--link rel='stylesheet' href='".$url_absolute."_assets/font-awesome/css/font-awesome.min.css'-->
        <link href='".$url_absolute."_assets/MaterialDesign-Webfont-master/css/materialdesignicons.min.css' media='all' rel='stylesheet' type='text/css' />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src=\"".$url_absolute."_assets/bootstrap-3/js/html5shiv3.7.2.min.js\"></script>
            <script src=\"".$url_absolute."_assets/bootstrap-3/js/respond1.4.2.min.js\"></script>
        <![endif]-->


        <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
        <link rel='stylesheet' href='".$url_absolute."_assets/jQuery-File-Upload-9.22.0/css/jquery.fileupload.css'>
        <link rel='stylesheet' href='".$url_absolute."_assets/jQuery-File-Upload-9.22.0/css/jquery.fileupload-ui.css'>
        <!-- CSS adjustments for browsers with JavaScript disabled -->
        <noscript><link rel='stylesheet' href='".$url_absolute."_assets/jQuery-File-Upload-9.22.0/css/jquery.fileupload-noscript.css'></noscript>
        <noscript><link rel='stylesheet' href='".$url_absolute."_assets/jQuery-File-Upload-9.22.0/css/jquery.fileupload-ui-noscript.css'></noscript>

        <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"".$url_absolute."_assets/icons/apple-icon-57x57.png\">
        <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"".$url_absolute."_assets/icons/apple-icon-60x60.png\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"".$url_absolute."_assets/icons/apple-icon-72x72.png\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"".$url_absolute."_assets/icons/apple-icon-76x76.png\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"".$url_absolute."_assets/icons/apple-icon-114x114.png\">
        <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"".$url_absolute."_assets/icons/apple-icon-120x120.png\">
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"".$url_absolute."_assets/icons/apple-icon-144x144.png\">
        <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"".$url_absolute."_assets/icons/apple-icon-152x152.png\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"".$url_absolute."_assets/icons/apple-icon-180x180.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"".$url_absolute."_assets/icons/android-icon-192x192.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"".$url_absolute."_assets/icons/favicon-32x32.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"".$url_absolute."_assets/icons/favicon-96x96.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"".$url_absolute."_assets/icons/favicon-16x16.png\">
        <link rel=\"manifest\" href=\"".$url_absolute."_assets/icons/manifest.json\">
        <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
        <meta name=\"msapplication-TileImage\" content=\"".$url_absolute."_assets/icons/ms-icon-144x144.png\">
        <meta name=\"theme-color\" content=\"#ffffff\">

        <style type='text/css'>
        .playerControls {
            margin-bottom: 1em;
        }
        .controlPlayer {
            margin-right: 1em;
        }
        .btnFolder, .folderContent {
            max-width: 100%;
            overflow: hidden;
        }
        .btn-player-xl {
            padding:4px 0px;
            font-size:38px;
            line-height:1;
            border-radius:6px;
        }
        .btn-player-l {
            padding:0px 0px;
            font-size:30px;
            line-height:1;
            border-radius:6px;
        }
        .btn-player-m {
            padding:15px 16px;
            font-size:18px;
            line-height:1;
            border-radius:6px;
        }
        .btn-player-s {
            padding:15px 5px;
            font-size:11px;
            line-height:1;
            border-radius:6px;
        }
        .playerWrapper,
        .playerWrapperSub {
            display: block!important;
            clear: both;
            height: auto;
            margin: 0 auto;
            text-align: center;
            margin-top: 1em;
        }
        .playerWrapper a {
            color: #00bc8c!important;
        }
        .playerWrapper a:hover {
            color: #008966!important;
        }
        .playerWrapperCover img {
            max-height: 200px;
        }
        .playerWrapperSub a {
            color: #aaa!important;
        }
        .playerWrapperSub a:hover {
            color: #eee!important;
        }
        .table td.text {
            max-width: 100px;
        }
        .table td.text span {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            display: inline-block;
            max-width: 100%;
        }
        .mdi-72px.mdi-set, .mdi-72px.mdi:before {
          font-size: 72px;
        }
        .mdi-60px.mdi-set, .mdi-60px.mdi:before {
          font-size: 60px;
        }
        .hoverGrey:hover {
            color: #999!important;
        }
        .btn-panel-big {
            font-size: 3em!important;
            margin-right: 0.1em;
        }
        .btn-panel-col {
            /*color: #f39c12!important;*/
        }
        .btn-panel-col:hover {
            /*color: #e45c00!important;*/
        }
        .img-playlist-item {
            max-width: 100px;
            float: left;
            margin-right: 1em;
            border:1px solid white;
        }
        .img-playlist-item-placeholder {
            display: block;
            background-color: transparent;
            width: 100px;
            height: 50px;
            float: left;
            margin-right: 1em
        }
        /* anchor behaviour */

        /* flash briefly on click */
        .panel-heading a.btn-panel-big:active {
            color: #fff!important;
        }
        .panel-heading a.btn-panel-big {
            cursor: pointer;
        }
        </style>

    </head>\n";
}

function tailShell($filepath, $lines = 1) {
	ob_start();
	passthru('tail -'  . $lines . ' ' . escapeshellarg($filepath));
	return trim(ob_get_clean());
}

function arrayPregDiff($a, $p) {
    # added function to use regular expressions to remove multiple files
    # e.g. all of the same file type from the array forming the later playlist.
    # Idea originates from http://php.net/manual/en/function.array-diff.php#117219
	foreach ($a as $key => $value) {
		if (preg_match($p, $value)) {
			unset($a[$key]);
		}
	}
	return $a;
}

function startsWith($haystack, $needle) {
     $length = strlen($needle);
     return (substr($haystack, 0, $length) === $needle);
}
function endsWith($haystack, $needle) {
     $length = strlen($needle);
     return (substr($haystack, ($length * -1), $length) === $needle);
}

function replaceUmlaute($string) {
    $searchreplace = array(
        "/Ä/" => "Ae",
        "/Ö/" => "Oe",
        "/Ü/" => "Ue",
        "/ä/" => "ae",
        "/ö/" => "oe",
        "/ü/" => "ue",
        "/ß/" => "ss",
    );
    $search = array_keys($searchreplace);
    $replace = array_values($searchreplace);
    return(preg_replace($search, $replace, $string));
}

function getFiles() {
    $result = array();
    foreach($_FILES as $name => $fileArray) {
        if (is_array($fileArray['name'])) {
            foreach ($fileArray as $attrib => $list) {
                foreach ($list as $index => $value) {
                    $result[$name][$index][$attrib]=$value;
                }
            }
        } else {
            $result[$name][] = $fileArray;
        }
    }
    return $result;
}


function dir_list_recursively($rootdir = "") {
  /*
  * Get directory tree recursively.
  * The dir path will end without '/'.
  */

    try{
        $iter = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($rootdir, RecursiveDirectoryIterator::SKIP_DOTS + RecursiveDirectoryIterator::FOLLOW_SYMLINKS),
            RecursiveIteratorIterator::SELF_FIRST,
            RecursiveIteratorIterator::CATCH_GET_CHILD // Ignore "Permission denied"
        );  
    }
    catch (UnexpectedValueException $e) {        
        global $debug;
        if($debug == "true") {      
            file_put_contents("../logs/debug.log", "\n  # Directory ".$rootdir." is a directory we can not recurse into. Please check permissions. "  , FILE_APPEND | LOCK_EX);
        }    
    }

    $paths = array($rootdir);
    foreach ($iter as $path => $dir) {
        if ($dir->isDir()) {
            $paths[] = $path;
        }
    }

    return $paths;
}

function index_folders_print($item, $key)
{
    global $lang;
    global $contentTree;
    global $shortcuts;
    global $debugcol;
/**/
    // get files from array
    foreach($contentTree as $tempkey => $values) {
        $allFiles = $values['files'];
    }
    //print_r($contentTree);//???
    // get mp3 files from files list
    $filesMp3 = array();
    foreach($allFiles as $allFile) {
        if(endsWith($allFile, ".mp3")) {
            //print "<br>this is:".$file." ";//???
            $filesMp3[] = $allFile;
        }
    }
    $playlist = $contentTree[$key]['path_rel'];
    $id = $contentTree[$key]['id'];
/**/
    //print "<pre>\nkey:".$key." id:".$contentTree[$key]['id']." path_rel:".$contentTree[$key]['path_rel']; print_r($contentTree); print "</pre>"; //???
    //print "<pre>\nfiles:"; print_r($files); print "</pre>"; //???
    //print "<pre>\nfilesMp3:"; print_r($filesMp3); print "</pre>"; //???
    //print "<pre>\nshortcuts:"; print_r($shortcuts); print "</pre>"; //???
    /*
    * Special style for level 0 (top level) panels
    */
    $panelStyle = "panel-default";
    if($contentTree[$key]['level'] == 0) {
        $panelStyle = "panel-default";
    }
    /*
    if(file_exists($contentTree[$key]['path_abs'].'/cover.jpg')) {
        print '<img class="img-playlist-item img-responsive" src="image.php?img='.$contentTree[$key]['path_abs'].'/cover.jpg" alt=""/>';
    } else {
        print '<img class="img-playlist-item-placeholder" src="" alt=""/>';
    }
    */
	
	/* filter */
	if (in_array($contentTree[$key]['path_abs']."/spotify.txt", $contentTree[$key]['files'])) {
		print "
      <div class='filterDiv spotify col-md-12'>";

	} elseif (in_array($contentTree[$key]['path_abs']."/audiobookshelf.txt", $contentTree[$key]['files'])) {
		print "
      <div class='filterDiv audiobookshelf col-md-12'>";
	  
	} elseif (in_array($contentTree[$key]['path_abs']."/livestream.txt", $contentTree[$key]['files'])) {
		print "
      <div class='filterDiv livestream col-md-12'>";

	} elseif (in_array($contentTree[$key]['path_abs']."/podcast.txt", $contentTree[$key]['files'])) {
		print "
      <div class='filterDiv podcast col-md-12'>";

	} elseif (in_array($contentTree[$key]['path_abs']."/youtube.txt", $contentTree[$key]['files'])) {
		print "
      <div class='filterDiv youtube col-md-12'>";
	  
	} else {
		print "
      <div class='filterDiv file col-md-12'>";
	}

    print "
      <div class='panel ".$panelStyle."'>";

    print "
        <div class='panel-heading' id='heading".$id."'>";

    print "
            <h4>";
/*
	$conf['settings_abs'] = realpath(getcwd().'/../settings/');
	$ShowCover = trim(file_get_contents($conf['settings_abs'].'/ShowCover'));
	if ($ShowCover == "ON" && file_exists($contentTree[$key]['path_abs'].'/cover.jpg')) {
	$cover = $contentTree[$key]['path_abs']."/cover.jpg";
	print  "<img class='img-responsive img-thumbnail' src='data:image/jpg;base64,".base64_encode(file_get_contents("$cover"))."' alt='' style='float: right; max-width: 85px'/>";
	}
*/
    if($contentTree[$key]['count_files'] > 0) {
        print "
              <a onclick='playPlaylist(\"$playlist\", \"false\");' class='btn-panel-big btn-panel-col pb-plist-play' title='Play folder' style='cursor: pointer'><i class='mdi mdi-play-circle-outline'></i></a>";
    }
    if($contentTree[$key]['count_subdirs'] > 0) {
        print "
              <a onclick='playPlaylist(\"$playlist\", \"true\");' class='btn-panel-big btn-panel-col pb-plist-play' title='Play (sub)folders'><i class='mdi mdi-animation-play-outline'></i></a>";
    }
	if (!in_array($contentTree[$key]['path_abs']."/livestream.txt", $contentTree[$key]['files']) && !in_array($contentTree[$key]['path_abs']."/spotify.txt", $contentTree[$key]['files']) && !in_array($contentTree[$key]['path_abs']."/audiobookshelf.txt", $contentTree[$key]['files']) && !in_array($contentTree[$key]['path_abs']."/podcast.txt", $contentTree[$key]['files']) && !in_array($contentTree[$key]['path_abs']."/youtube.txt", $contentTree[$key]['files']) ) {

	    print "
				  <span class='mb-0 playlist_headline' data-toggle='collapse' data-target='#collapse".$id."' aria-expanded='true' aria-controls='collapse".$id."' style='cursor:pointer;' title='Show contents'>";
		print "<i class='mdi mdi-folder-outline mdi-36px'></i> ";
		print $contentTree[$key]['basename'];
		//print "\n              <i class='mdi mdi-eye-settings-outline'></i> ";
		print "\n              <i class='mdi mdi-arrow-down-drop-circle-outline' ></i> ";

        if($contentTree[$key]['count_subdirs'] > 0) {
            print "            <span class='badge' title='Show folders'><i class='mdi mdi-folder-multiple'></i> ".$contentTree[$key]['count_subdirs']."</span>";
        }
    print "            <span class='badge' title='Show files'><i class='mdi mdi-library-music'></i> ".$contentTree[$key]['count_files']."</span>";
    print "
              </span>";
	} elseif (in_array($contentTree[$key]['path_abs']."/spotify.txt", $contentTree[$key]['files'])) {
		print '<i class="mdi mdi-spotify mdi-36px"></i> ';
		if (file_exists($contentTree[$key]['path_abs']."/title.txt")) {
		print file_get_contents($contentTree[$key]['path_abs']."/title.txt");
		} else {
		print $contentTree[$key]['basename'];
		}
	} elseif (in_array($contentTree[$key]['path_abs']."/audiobookshelf.txt", $contentTree[$key]['files'])) {
		print '<i class="mdi mdi-book-open-variant mdi-36px"></i> ';
		if (file_exists($contentTree[$key]['path_abs']."/title.txt")) {
		print file_get_contents($contentTree[$key]['path_abs']."/title.txt");
		} else {
		print $contentTree[$key]['basename'];
		}
	} elseif (in_array($contentTree[$key]['path_abs']."/livestream.txt", $contentTree[$key]['files'])) {
		print "<i class='mdi mdi-radio mdi-36px'></i> ";
		print $contentTree[$key]['basename'];

	} elseif (in_array($contentTree[$key]['path_abs']."/podcast.txt", $contentTree[$key]['files'])) {
		print "<i class='mdi mdi-cast-audio mdi-36px'></i> ";
		print $contentTree[$key]['basename'];

	} elseif (in_array($contentTree[$key]['path_abs']."/youtube.txt", $contentTree[$key]['files'])) {
		print "<i class='mdi mdi-youtube mdi-36px'></i> ";
		print $contentTree[$key]['basename'];

	} else {
		print $contentTree[$key]['basename'];
	}
	print "
            </h4>";
    /*
    * settings buttons
    */
    // we show the buttons only if there are actual audio files in the folder
    if($contentTree[$key]['count_audioFiles'] == 0) {
    } else {
        print "\n                <div><!-- settings buttons -->";
        // RESUME BUTTON
        // Live streams have no position. Audiobookshelf stores its own.
        if (!in_array($contentTree[$key]['path_abs']."/livestream.txt", $contentTree[$key]['files']) && !in_array($contentTree[$key]['path_abs']."/audiobookshelf.txt", $contentTree[$key]['files']) ) {
            $foundResume = "OFF";
            if(
                file_exists($contentTree[$key]['path_abs']."/folder.conf")
                && strpos(file_get_contents($contentTree[$key]['path_abs']."/folder.conf"),'RESUME="ON"') !== false
            ) {
                $foundResume = "ON";
            } else {
            }
            if( $foundResume == "OFF" ) {
                // do stuff
                print "<a playlist=\"$playlist\" resume='false' onclick='toggleResume(this);' class='btn btn-warning '>".$lang['globalResume'].": ".$lang['globalOff']." <i class='mdi mdi-toggle-switch-off-outline' aria-hidden='true'></i></a> ";
            } elseif($foundResume == "ON") {
                print "<a playlist=\"$playlist\" resume='true' onclick='toggleResume(this);' class='btn btn-success '>".$lang['globalResume'].": ".$lang['globalOn']." <i class='mdi mdi-toggle-switch' aria-hidden='true'></i></a> ";
            }
        }

        // SHUFFLE BUTTON
        // do not show any if there is a live stream in the folder
        if (!in_array($contentTree[$key]['path_abs']."/livestream.txt", $contentTree[$key]['files']) ) {
            $foundShuffle = "OFF";
            if(
                file_exists($contentTree[$key]['path_abs']."/folder.conf")
                && strpos(file_get_contents($contentTree[$key]['path_abs']."/folder.conf"),'SHUFFLE="ON"') !== false
            ) {
                $foundShuffle = "ON";
            }
            if( $foundShuffle == "OFF" ) {
                // do stuff
                print "<a playlist=\"$playlist\" shuffle='false' onclick='toggleShuffle(this);' class='btn btn-warning '>".$lang['globalShuffle'].": ".$lang['globalOff']." <i class='mdi mdi-toggle-switch-off-outline' aria-hidden='true'></i></a> ";
            } elseif($foundShuffle == "ON") {
                print "<a playlist=\"$playlist\" shuffle='true' onclick='toggleShuffle(this);'  class='btn btn-success '>".$lang['globalShuffle'].": ".$lang['globalOn']." <i class='mdi mdi-toggle-switch' aria-hidden='true'></i></a> ";
            }
        }

        // SINGLE TRACK PLAY BUTTON
        // do not show any if there is a live stream in the folder
        if (!in_array($contentTree[$key]['path_abs']."/livestream.txt", $contentTree[$key]['files']) ) {
            $foundSinglePlay = "OFF";
            if(
                file_exists($contentTree[$key]['path_abs']."/folder.conf")
                && strpos(file_get_contents($contentTree[$key]['path_abs']."/folder.conf"),'SINGLE="ON"') !== false
            ) {
                $foundSinglePlay = "ON";
            }
            if( $foundSinglePlay == "OFF" ) {
                // do stuff

                print "<a playlist=\"$playlist\" single='false' onclick='toggleSingle(this);' class='btn btn-warning '>".$lang['globalSingle'].": ".$lang['globalOff']." <i class='mdi mdi-toggle-switch-off-outline' aria-hidden='true'></i></a> ";
            } elseif($foundSinglePlay == "ON") {
                print "<a playlist=\"$playlist\" single='true' onclick='toggleSingle(this);' class='btn btn-success'>".$lang['globalSingle'].": ".$lang['globalOn']." <i class='mdi mdi-toggle-switch' aria-hidden='true'></i></a> ";
            }
        }

        // RSS link
/*
        if (count($filesMp3) > 0) {
            print "<a href='rss-mp3.php?title=".urlencode($contentTree[$key]['basename'])."&rss=".serialize($filesMp3)."' class='btn btn-info '>";
            print "<i class='mdi mdi-rss'></i>Podcast RSS ";
            print "</a>";
        }
*/
        print "
                </div><!-- / settings buttons -->";
    }


    // get all IDs that match this folder
    $IDchips = ""; // print later
    //$ids = $contentTree[$key]['path_rel']; // print later
    if(in_array($contentTree[$key]['path_rel'], $shortcuts)) {
        foreach ($shortcuts as $IDkey => $IDvalue) {
            if($IDvalue == $contentTree[$key]['path_rel']) {
                $IDchips .= " <a href='cardEdit.php?cardID=$IDkey'>".$IDkey." <i class='mdi mdi-wrench'></i></a> | ";
            }
        }
        $IDchips = rtrim($IDchips, "| "); // get rid of trailing slash
        if($IDchips != "") {
            print "\n                ".$lang['globalCardId'].": ".$IDchips;
        }
    }
    print "
        </div><!-- ./ .panel-heading -->
        <div id='collapse".$id."' class='collapse' aria-labelledby='heading".$id."' data-parent='#accordion'>
          <div class='panel-body'>";
    //print $id; //???

    printPlaylistHtml($contentTree[$key]['files']);

    if(is_array($item)) {
        array_walk($item, 'index_folders_print');
    }
    print "
          </div><!-- ./ class='panel-body' -->
        </div><!-- ./ class='collapse' -->
      </div><!-- ./ class='panel' -->
	 </div><!-- ./ class='filterDiv' -->";

}
function getSubDirectories( $path = '.', $level = 0, $showfiles = 0 ){

    $return = array();

    // Directories to ignore when listing output. Many hosts
    // will deny PHP access to the cgi-bin.
    $ignore = array( '.', '..', '.git', '.github' );

    // Open the directory to the handle $dh
    $dh = @opendir($path);

    while( false !== $dh && false !== ( $file = readdir( $dh ) ) ){
    // Loop through the directory

        if( !in_array( $file, $ignore ) ){
        // Check that this file is not to be ignored

            //$spaces = str_repeat( '&nbsp;', ( $level * 4 ) );
            // Just to add spacing to the list, to better
            // show the directory tree.

            if(is_dir("$path/$file") ){
            // Its a directory, so we need to keep reading down...
                $return[$path."/".$file] = getSubDirectories("$path/$file",($level+1));

            } elseif($showfiles == "1") {
                //$return[$path."/".$file]['files'] = $file;
            }
        }
    }

    closedir( $dh );

    uksort($return, 'strnatcasecmp');
    return $return;
}

function printPlaylistHtml($files)
{
    global $lang;
    $counter = 1;

/*
    print "
            <dl class='dl-horizontal'>";
    foreach($files as $file) {
        print "
                    <dt>".$counter++."</dt>
                    <dd>".basename($file);
        if(basename($file) != "livestream.txt" && basename($file) != "podcast.txt") {
            print"
                    <a href='trackEdit.php?folder=".dirname($file)."&filename=".basename($file)."'><i class='mdi mdi-wrench'></i> ".$lang['globalEdit']."</a>";
        }
        print "
                </dd>";
    }
    print "
            </dl>";
*/

    print "
            <ol class='list-group'>";
    foreach($files as $file) {
        print "
                <li class='list-group-item'>".$counter++." :
                <a onclick='playSingleFile(\"".htmlspecialchars($file,ENT_QUOTES)."\");' class='btn-panel-small btn-panel-col pb-plist-play' title='Play song' style='cursor: pointer'><i class='mdi mdi-play-circle-outline'></i></a>
                <a onclick='appendFileToPlaylist(\"".htmlspecialchars($file,ENT_QUOTES)."\");' class='btn-panel-small btn-panel-col pb-plist-play' title='Append song to playlist' style='cursor: pointer'><i class='mdi mdi-plus-circle-outline'></i></a>
                    <strong>".htmlspecialchars(basename($file),ENT_QUOTES)."</strong>";
        if(basename($file) != "livestream.txt" && basename($file) != "podcast.txt" && basename($file) != "spotify.txt" && basename($file) != "audiobookshelf.txt") {
            print"
                    &nbsp;&nbsp; <a href='trackEdit.php?folder=".htmlspecialchars(dirname($file),ENT_QUOTES)."&filename=".htmlspecialchars(basename($file),ENT_QUOTES)."' class='pb-plist-play'><i class='mdi mdi-text'></i> ".$lang['globalEdit']."</a>";
        }
        print "
                </li>";
    }
    print "
            </ol>";
}

function mopidyJsonRpc($method, $params) {
    /*
    * JSON-RPC via PHP streams. Safe for user-supplied params, unlike mopidyApiCall().
    */
    $payload = json_encode(array(
        "jsonrpc" => "2.0",
        "id" => 1,
        "method" => $method,
        "params" => $params,
    ));
    $context = stream_context_create(array(
        "http" => array(
            "method" => "POST",
            "header" => "Content-Type: application/json\r\n",
            "content" => $payload,
            "timeout" => 15,
            "ignore_errors" => true,
        ),
    ));
    $raw = @file_get_contents("http://localhost:6680/mopidy/rpc", false, $context);
    if($raw === false) {
        return null;
    }
    $decoded = json_decode($raw, true);
    if(!is_array($decoded)) {
        return null;
    }
    return $decoded;
}

function absRegisterCard($audioRoot, $shortcutsDir, $cardId, $folderName, $uri) {
    /*
    * Create the card folder in PHP. Book titles often contain apostrophes,
    * which break the shell mkdir/echo used for other stream types.
    */
    $folderName = str_replace("\0", "", (string) $folderName);
    $uri = trim((string) $uri);
    if ($folderName === "" || $uri === "" || strpos($folderName, "..") !== false) {
        return false;
    }
    $folder = rtrim($audioRoot, "/\\") . "/" . $folderName;
    if (!is_dir($folder) && !mkdir($folder, 0777, true)) {
        return false;
    }
    $written = file_put_contents($folder . "/audiobookshelf.txt", $uri . "\n");
    if ($written === false) {
        return false;
    }
    $folderConf = "CURRENTFILENAME=\"filename\"\n"
        . "ELAPSED=\"0\"\n"
        . "PLAYSTATUS=\"Stopped\"\n"
        . "RESUME=\"OFF\"\n"
        . "SHUFFLE=\"OFF\"\n"
        . "LOOP=\"OFF\"\n"
        . "SINGLE=\"OFF\"\n";
    file_put_contents($folder . "/folder.conf", $folderConf);
    if (!absWriteShortcut($shortcutsDir, $cardId, $folderName)) {
        return false;
    }
    @chmod($folder, 0777);
    @chmod($folder . "/audiobookshelf.txt", 0777);
    @chmod($folder . "/folder.conf", 0777);
    absWriteTitleAndCover($folder, $uri);
    return true;
}

function absWriteShortcut($shortcutsDir, $cardId, $folderName) {
    /*
    * Point shared/shortcuts/<cardId> at the folder that holds audiobookshelf.txt.
    *
    * The RFID reader creates that file on the first swipe, owned by pi, containing
    * only the card id (rfid_trigger_play.sh). It is often mode 644, so www-data
    * cannot open it for writing and file_put_contents leaves the card id in place.
    * The book folder is still created, and a swipe looks for audiofolders/<cardId>.
    * Unlink needs write permission on the directory, not on the file, then create
    * the shortcut again with the human folder name.
    */
    $cardId = str_replace("\0", "", (string) $cardId);
    $folderName = str_replace("\0", "", (string) $folderName);
    if ($cardId === "" || $folderName === ""
        || strpos($cardId, "/") !== false || strpos($cardId, "\\") !== false
        || strpos($folderName, "..") !== false
    ) {
        return false;
    }
    $dir = rtrim((string) $shortcutsDir, "/\\");
    if ($dir === "") {
        return false;
    }
    if (!is_dir($dir) && !mkdir($dir, 0777, true)) {
        return false;
    }
    $shortcut = $dir . "/" . $cardId;
    if (is_file($shortcut) && !@unlink($shortcut)) {
        @chmod($shortcut, 0666);
        if (!@unlink($shortcut)) {
            return false;
        }
    }
    if (file_put_contents($shortcut, $folderName . "\n") === false) {
        return false;
    }
    @chmod($shortcut, 0777);
    return trim((string) file_get_contents($shortcut)) === $folderName;
}

function absWriteTitleAndCover($folder, $uri) {
    /*
    * Save the book title and cover next to audiobookshelf.txt.
    * Lookup goes through Mopidy so this PHP app never stores the ABS token.
    */
    if($uri === "" || !is_dir($folder)) {
        return;
    }
    $lookup = mopidyJsonRpc("core.library.lookup", array("uris" => array($uri)));
    $title = "";
    if(isset($lookup["result"][$uri][0]["album"]["name"])) {
        $title = trim($lookup["result"][$uri][0]["album"]["name"]);
    }
    if($title !== "") {
        file_put_contents($folder."/title.txt", $title);
    }
    $images = mopidyJsonRpc("core.library.get_images", array("uris" => array($uri)));
    $imageUri = "";
    if(isset($images["result"][$uri][0]["uri"])) {
        $imageUri = $images["result"][$uri][0]["uri"];
    }
    if($imageUri !== "") {
        $image = @file_get_contents($imageUri);
        if($image !== false && $image !== "") {
            file_put_contents($folder."/cover.jpg", $image);
        }
    }
}

function mopidyApiCall($method, $params){
    // this function simplifies making Mopidy API requests (HTTP JSON-RPC API)
    // used e.g. for getting title and cover images from Spotify
    $exec = "curl --location --request POST 'http://localhost:6680/mopidy/rpc' \
    --header 'Content-Type: application/json' \
    --data-raw '{
        \"jsonrpc\": \"2.0\",
        \"id\": 1,
        \"method\": \"".$method."\",
        \"params\": ".$params."
    }'";
    exec($exec, $response);

    $json  = json_decode($response[0], true);

    unset($response); //otherwise responses of later executions will add to the array $response

    return $json;
}

?>
