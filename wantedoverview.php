<?php
define("IN_MYBB", 1);
define('THIS_SCRIPT', 'wantedoverview.php');

require_once "./global.php";

add_breadcrumb("Gesucheübersicht", "wantedoverview.php");



//GESUCHE SCHÜLERINNEN!
$wanted_schoolw = $db->query ("
	SELECT *
	FROM mybb_threadfields_data td
	LEFT JOIN mybb_threads t
	on (td.tid = t.tid)
	LEFT JOIN mybb_users u
    on (t.uid = u.uid)
	LEFT JOIN mybb_threadprefixes tp
	on (tp.pid=t.prefix)
	WHERE t.fid = 787
	AND t.visible = '1' 
	");
	
	 while($result=$db->fetch_array($wanted_schoolw)) {
		 
		//Wir leeren die Variable
		 $wanted_prefix = '';
		
		//Wir basteln uns den Userlink
		$username = format_name($result['username'], $result['usergroup'], $result['displaygroup']);
		$result['username']= build_profile_link($username, $result['uid']);
		
		//Wir basteln uns den Link zum Gesuch		
		$wanted_id = $result['tid'];
		$wanted_link = "https://ridethelightning.de/showthread.php?tid=".$wanted_id."";
		$wanted_name = $result['subject'];				
		
		$sgdatum = $result['sg']; //Wir basteln uns die Ausgabe vom Datum
		$wanted_prefix = $result['displaystyle'];//Wir basteln uns Reserviert, Frei etc.
		$wanted_desc = $result['description'];//Wir basteln uns die Beschreibung
		$wanted_kategorie = $result['kategorie']; //Wir basteln uns die Ausgabe von der Kategorie 
		
		$wantedoverviewsw .= "<tr><td >$sgdatum</td> <td>$wanted_prefix</td> <td>$wanted_kategorie</td><td>$result[username]</td> <td><a href=\"".$wanted_link."\" alt=\">Link zum Gesuche\">" . $wanted_name . "</a><br><i>$wanted_desc</i></td></tr>";
	}


//GESUCHE WEIBLICH BIS 30!
$wanted_w30 = $db->query ("
	SELECT *
	FROM mybb_threadfields_data td
	LEFT JOIN mybb_threads t
	on (td.tid = t.tid)
	LEFT JOIN mybb_users u
    on (t.uid = u.uid)
	LEFT JOIN mybb_threadprefixes tp
	on (tp.pid=t.prefix)
	WHERE t.fid = 786
	AND t.visible = '1' 
	");
	
	 while($result=$db->fetch_array($wanted_w30)) {
		 
		//Wir leeren die Variable
		 $wanted_prefix = '';
		
		//Wir basteln uns den Userlink
		$username = format_name($result['username'], $result['usergroup'], $result['displaygroup']);
		$result['username']= build_profile_link($username, $result['uid']);
		
		//Wir basteln uns den Link zum Gesuch		
		$wanted_id = $result['tid'];
		$wanted_link = "https://ridethelightning.de/showthread.php?tid=".$wanted_id."";
		$wanted_name = $result['subject'];				
		
		$sgdatum = $result['sg']; //Wir basteln uns die Ausgabe vom Datum
		$wanted_prefix = $result['displaystyle'];//Wir basteln uns Reserviert, Frei etc.
		$wanted_desc = $result['description'];//Wir basteln uns die Beschreibung
		$wanted_kategorie = $result['kategorie']; //Wir basteln uns die Ausgabe von der Kategorie
		
		$wantedovervieww30 .= "<tr><td >$sgdatum</td> <td>$wanted_prefix</td> <td>$wanted_kategorie</td><td>$result[username]</td> <td><a href=\"".$wanted_link."\" alt=\">Link zum Gesuche\">" . $wanted_name . "</a><br><i>$wanted_desc</i></td></tr>";
	}


//GESUCHE WEIBLICH ÜBER 30!
$wanted_wo30 = $db->query ("
	SELECT *
	FROM mybb_threadfields_data td
	LEFT JOIN mybb_threads t
	on (td.tid = t.tid)
	LEFT JOIN mybb_users u
    on (t.uid = u.uid)
	LEFT JOIN mybb_threadprefixes tp
	on (tp.pid=t.prefix)
	WHERE t.fid = 785
	AND t.visible = '1' 
	");
	
	 while($result=$db->fetch_array($wanted_wo30)) {
		 
		//Wir leeren die Variable
		 $wanted_prefix = '';
		
		//Wir basteln uns den Userlink
		$username = format_name($result['username'], $result['usergroup'], $result['displaygroup']);
		$result['username']= build_profile_link($username, $result['uid']);
		
		//Wir basteln uns den Link zum Gesuch		
		$wanted_id = $result['tid'];
		$wanted_link = "https://ridethelightning.de/showthread.php?tid=".$wanted_id."";
		$wanted_name = $result['subject'];				
		
		$sgdatum = $result['sg']; //Wir basteln uns die Ausgabe vom Datum
		$wanted_prefix = $result['displaystyle'];//Wir basteln uns Reserviert, Frei etc.
		$wanted_desc = $result['description'];//Wir basteln uns die Beschreibung
		$wanted_kategorie = $result['kategorie']; //Wir basteln uns die Ausgabe von der Kategorie 
		
		$wantedoverviewwo30 .= "<tr><td >$sgdatum</td> <td>$wanted_prefix</td> <td>$wanted_kategorie</td><td>$result[username]</td> <td><a href=\"".$wanted_link."\" alt=\">Link zum Gesuche\">" . $wanted_name . "</a><br><i>$wanted_desc</i></td></tr>";
	}




//GESUCHE SCHÜLER!
$wanted_schoolm = $db->query ("
	SELECT *
	FROM mybb_threadfields_data td
	LEFT JOIN mybb_threads t
	on (td.tid = t.tid)
	LEFT JOIN mybb_users u
    on (t.uid = u.uid)
	LEFT JOIN mybb_threadprefixes tp
	on (tp.pid=t.prefix)
	WHERE t.fid = 782
	AND t.visible = '1' 
	");
	
	 while($result=$db->fetch_array($wanted_schoolm)) {
		 
		//Wir leeren die Variable
		 $wanted_prefix = '';
		
		//Wir basteln uns den Userlink
		$username = format_name($result['username'], $result['usergroup'], $result['displaygroup']);
		$result['username']= build_profile_link($username, $result['uid']);
		
		//Wir basteln uns den Link zum Gesuch		
		$wanted_id = $result['tid'];
		$wanted_link = "https://ridethelightning.de/showthread.php?tid=".$wanted_id."";
		$wanted_name = $result['subject'];				
		
		$sgdatum = $result['sg']; //Wir basteln uns die Ausgabe vom Datum
		$wanted_prefix = $result['displaystyle'];//Wir basteln uns Reserviert, Frei etc.
		$wanted_desc = $result['description'];//Wir basteln uns die Beschreibung
		$wanted_kategorie = $result['kategorie']; //Wir basteln uns die Ausgabe von der Kategorie
		
		$wantedoverviewsm .= "<tr><td >$sgdatum</td> <td>$wanted_prefix</td> <td>$wanted_kategorie</td><td>$result[username]</td> <td><a href=\"".$wanted_link."\" alt=\">Link zum Gesuche\">" . $wanted_name . "</a><br><i>$wanted_desc</i></td></tr>";
	}


//GESUCHE MÄNNLICH BIS 30!
$wanted_m30 = $db->query ("
	SELECT *
	FROM mybb_threadfields_data td
	LEFT JOIN mybb_threads t
	on (td.tid = t.tid)
	LEFT JOIN mybb_users u
    on (t.uid = u.uid)
	LEFT JOIN mybb_threadprefixes tp
	on (tp.pid=t.prefix)
	WHERE t.fid = 783
	AND t.visible = '1' 
	");
	
	 while($result=$db->fetch_array($wanted_m30)) {
		 
		//Wir leeren die Variable
		 $wanted_prefix = '';
		
		//Wir basteln uns den Userlink
		$username = format_name($result['username'], $result['usergroup'], $result['displaygroup']);
		$result['username']= build_profile_link($username, $result['uid']);
		
		//Wir basteln uns den Link zum Gesuch		
		$wanted_id = $result['tid'];
		$wanted_link = "https://ridethelightning.de/showthread.php?tid=".$wanted_id."";
		$wanted_name = $result['subject'];				
		
		$sgdatum = $result['sg']; //Wir basteln uns die Ausgabe vom Datum
		$wanted_prefix = $result['displaystyle'];//Wir basteln uns Reserviert, Frei etc.
		$wanted_desc = $result['description'];//Wir basteln uns die Beschreibung
		$wanted_kategorie = $result['kategorie']; //Wir basteln uns die Ausgabe von der Kategorie
		
		$wantedoverviewm30 .= "<tr><td >$sgdatum</td> <td>$wanted_prefix</td> <td>$wanted_kategorie</td><td>$result[username]</td> <td><a href=\"".$wanted_link."\" alt=\">Link zum Gesuche\">" . $wanted_name . "</a><br><i>$wanted_desc</i></td></tr>";
	}


//GESUCHE MÄNNLICH ÜBER 30!
$wanted_mo30 = $db->query ("
	SELECT *
	FROM mybb_threadfields_data td
	LEFT JOIN mybb_threads t
	on (td.tid = t.tid)
	LEFT JOIN mybb_users u
    on (t.uid = u.uid)
	LEFT JOIN mybb_threadprefixes tp
	on (tp.pid=t.prefix)
	WHERE t.fid = 784
	AND t.visible = '1' 
	");
	
	 while($result=$db->fetch_array($wanted_mo30)) {
		 
		//Wir leeren die Variable
		 $wanted_prefix = '';
		
		//Wir basteln uns den Userlink
		$username = format_name($result['username'], $result['usergroup'], $result['displaygroup']);
		$result['username']= build_profile_link($username, $result['uid']);
		
		//Wir basteln uns den Link zum Gesuch		
		$wanted_id = $result['tid'];
		$wanted_link = "https://ridethelightning.de/showthread.php?tid=".$wanted_id."";
		$wanted_name = $result['subject'];				
		
		$sgdatum = $result['sg']; //Wir basteln uns die Ausgabe vom Datum
		$wanted_prefix = $result['displaystyle'];//Wir basteln uns Reserviert, Frei etc.
		$wanted_desc = $result['description'];//Wir basteln uns die Beschreibung
		$wanted_kategorie = $result['kategorie']; //Wir basteln uns die Ausgabe von der Kategorie 
		
		$wantedoverviewmo30 .= "<tr><td >$sgdatum</td> <td>$wanted_prefix</td> <td>$wanted_kategorie</td><td>$result[username]</td> <td><a href=\"".$wanted_link."\" alt=\">Link zum Gesuche\">" . $wanted_name . "</a><br><i>$wanted_desc</i></td></tr>";
	}


//GESUCHE GRUPPEN!
$wanted_group = $db->query ("
	SELECT *
	FROM mybb_threadfields_data td
	LEFT JOIN mybb_threads t
	on (td.tid = t.tid)
	LEFT JOIN mybb_users u
    on (t.uid = u.uid)
	LEFT JOIN mybb_threadprefixes tp
	on (tp.pid=t.prefix)
	WHERE t.fid = 16
	AND t.visible = '1' 
	");
	
	 while($result=$db->fetch_array($wanted_group)) {
		 
		//Wir leeren die Variable
		 $wanted_prefix = '';
		
		//Wir basteln uns den Userlink
		$username = format_name($result['username'], $result['usergroup'], $result['displaygroup']);
		$result['username']= build_profile_link($username, $result['uid']);
		
		//Wir basteln uns den Link zum Gesuch		
		$wanted_id = $result['tid'];
		$wanted_link = "https://ridethelightning.de/showthread.php?tid=".$wanted_id."";
		$wanted_name = $result['subject'];				
		
		$sgdatum = $result['sg']; //Wir basteln uns die Ausgabe vom Datum
		$wanted_prefix = $result['displaystyle'];//Wir basteln uns Reserviert, Frei etc.
		$wanted_desc = $result['description'];//Wir basteln uns die Beschreibung
		$wanted_kategorie = $result['kategorie']; //Wir basteln uns die Ausgabe von der Kategorie 
		
		$wantedoverviewgroup .= "<tr><td >$sgdatum</td> <td>$wanted_prefix</td> <td>$wanted_kategorie</td><td>$result[username]</td> <td><a href=\"".$wanted_link."\" alt=\">Link zum Gesuche\">" . $wanted_name . "</a><br><i>$wanted_desc</i></td></tr>";
	}

//GESUCHE DIVERS!
$wanted_divers = $db->query ("
	SELECT *
	FROM mybb_threadfields_data td
	LEFT JOIN mybb_threads t
	on (td.tid = t.tid)
	LEFT JOIN mybb_users u
    on (t.uid = u.uid)
	LEFT JOIN mybb_threadprefixes tp
	on (tp.pid=t.prefix)
	WHERE t.fid = 1126
	AND t.visible = '1' 
	");
	
	 while($result=$db->fetch_array($wanted_divers)) {
		 
		//Wir leeren die Variable
		 $wanted_prefix = '';
		
		//Wir basteln uns den Userlink
		$username = format_name($result['username'], $result['usergroup'], $result['displaygroup']);
		$result['username']= build_profile_link($username, $result['uid']);
		
		//Wir basteln uns den Link zum Gesuch		
		$wanted_id = $result['tid'];
		$wanted_link = "https://ridethelightning.de/showthread.php?tid=".$wanted_id."";
		$wanted_name = $result['subject'];				
		
		$sgdatum = $result['sg']; //Wir basteln uns die Ausgabe vom Datum
		$wanted_prefix = $result['displaystyle'];//Wir basteln uns Reserviert, Frei etc.
		$wanted_desc = $result['description'];//Wir basteln uns die Beschreibung
		$wanted_kategorie = $result['kategorie']; //Wir basteln uns die Ausgabe von der Kategorie 
		
		$wantedoverviewdivers .= "<tr><td >$sgdatum</td> <td>$wanted_prefix</td> <td>$wanted_kategorie</td><td>$result[username]</td> <td><a href=\"".$wanted_link."\" alt=\">Link zum Gesuche\">" . $wanted_name . "</a><br><i>$wanted_desc</i></td></tr>";
	}

//CANONS
$wanted_canons = $db->query ("
	SELECT *
	FROM mybb_threadfields_data td
	LEFT JOIN mybb_threads t
	on (td.tid = t.tid)
	LEFT JOIN mybb_users u
    on (t.uid = u.uid)
	LEFT JOIN mybb_threadprefixes tp
	on (tp.pid=t.prefix)
	WHERE t.fid = 15
	AND t.visible = '1' 
	");
	
	 while($result=$db->fetch_array($wanted_canons)) {
		 
		//Wir leeren die Variable
		 $wanted_prefix = '';
		
		//Wir basteln uns den Userlink
		$username = format_name($result['username'], $result['usergroup'], $result['displaygroup']);
		$result['username']= build_profile_link($username, $result['uid']);
		
		//Wir basteln uns den Link zum Gesuch		
		$wanted_id = $result['tid'];
		$wanted_link = "https://ridethelightning.de/showthread.php?tid=".$wanted_id."";
		$wanted_name = $result['subject'];				
		
		$sgdatum = $result['sg']; //Wir basteln uns die Ausgabe vom Datum
		$wanted_prefix = $result['displaystyle'];//Wir basteln uns Reserviert, Frei etc.
		$wanted_desc = $result['description'];//Wir basteln uns die Beschreibung
		$wanted_kategorie = $result['kategorie']; //Wir basteln uns die Ausgabe von der Kategorie 
		
		$wantedoverviewcanons .= "<tr><td >$sgdatum</td> <td>$wanted_prefix</td> <td>$wanted_kategorie</td><td>$result[username]</td> <td><a href=\"".$wanted_link."\" alt=\">Link zum Gesuche\">" . $wanted_name . "</a><br><i>$wanted_desc</i></td></tr>";
	}
	
	eval("\$page = \"".$templates->get("wantedoverview")."\";");
	output_page($page);

?>
