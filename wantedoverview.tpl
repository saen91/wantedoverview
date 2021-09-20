<html>
<head>
<title>{$mybb->settings['bbname']} -  Übersicht der Gesuche</title>
{$headerinclude}
</head>
<body>
{$header}
	<center><h1>Gesucheübersicht</h1>
	Hier findet ihr eine Übersicht unserer Gesuche. Mit Klick auf die Kategorien, könnt ihr die Gesuche ein- und ausklappen. <br>Außerdem könnt ihr das Gesuche mit einem Klick auf den Titel auch anschauen oder gelangt auf das Profil des Suchenden Charakters. <br>
	Bitte beachten!! Das Datum bei "im SG seit" ist das vom ersten eintragen im SG, wird jedoch laufend aktualisiert!</center>
	
		<center><h1>Weibliche Gesuche</h1></center>
		<details>
			<table width="100%">
				<tbody>			
					<summary>Schülerinnen</summary>
					<tr>
						<td width="10%"><h2>im SG seit</h2></td><td width="15%"><h2>Status</h2></td><td width="10%"><h2>Kategorie</h2></td><td width="25%"><h2>Suchende:r</h2></td><td width="40%"><h2>Link zum Gesuch</h2></td>
					</tr>
					{$wantedoverviewsw}
				</tbody>
			</table>	
		</details>		
		<details>
			<table width="100%">
				<tbody>			
					<summary>Erwachsene bis 30 Jahre</summary>
					<tr>
						<td width="10%"><h2>im SG seit</h2></td><td width="15%"><h2>Status</h2></td><td width="10%"><h2>Kategorie</h2></td><td width="25%"><h2>Suchende:r</h2></td><td width="40%"><h2>Link zum Gesuch</h2></td>
					</tr>
					{$wantedovervieww30}
				</tbody>
			</table>	
		</details>		
	<details>
			<table width="100%">
				<tbody>			
					<summary>Erwachsene über 30 Jahre</summary>
					<tr>
						<td width="10%"><h2>im SG seit</h2></td><td width="15%"><h2>Status</h2></td><td width="10%"><h2>Kategorie</h2></td><td width="25%"><h2>Suchende:r</h2></td><td width="40%"><h2>Link zum Gesuch</h2></td>
					</tr>
					{$wantedoverviewwo30}
				</tbody>
			</table>	
		</details>	
	<br>
	<center><h1>Männliche Gesuche</h1></center>
	<details>
			<table width="100%">
				<tbody>			
					<summary>Schüler</summary>
					<tr>
						<td width="10%"><h2>im SG seit</h2></td><td width="15%"><h2>Status</h2></td><td width="10%"><h2>Kategorie</h2></td><td width="25%"><h2>Suchende:r</h2></td><td width="40%"><h2>Link zum Gesuch</h2></td>
					</tr>
					{$wantedoverviewsm}
				</tbody>
			</table>	
		</details>		
		<details>
			<table width="100%">
				<tbody>			
					<summary>Erwachsene bis 30 Jahre</summary>
					<tr>
						<td width="10%"><h2>im SG seit</h2></td><td width="15%"><h2>Status</h2></td><td width="10%"><h2>Kategorie</h2></td><td width="25%"><h2>Suchende:r</h2></td><td width="40%"><h2>Link zum Gesuch</h2></td>
					</tr>
					{$wantedoverviewm30}
				</tbody>
			</table>	
		</details>		
	<details>
			<table width="100%">
				<tbody>			
					<summary>Erwachsene über 30 Jahre</summary>
					<tr>
						<td width="10%"><h2>im SG seit</h2></td><td width="15%"><h2>Status</h2></td><td width="10%"><h2>Kategorie</h2></td><td width="25%"><h2>Suchende:r</h2></td><td width="40%"><h2>Link zum Gesuch</h2></td>
					</tr>
					{$wantedoverviewmo30}
				</tbody>
			</table>	
		</details>	
	<br>
	<center><h1>Gruppen Gesuche</h1></center>
	<details>
			<table width="100%">
				<tbody>			
					<summary>Gruppengesuche</summary>
					<tr>
						<td width="10%"><h2>im SG seit</h2></td><td width="15%"><h2>Status</h2></td><td width="10%"><h2>Kategorie</h2></td><td width="25%"><h2>Suchende:r</h2></td><td width="40%"><h2>Link zum Gesuch</h2></td>
					</tr>
					{$wantedoverviewgroup}
				</tbody>
			</table>	
		</details>		
	<br>
	<center><h1>Unisex Gesuche</h1></center>
	<details>
			<table width="100%">
				<tbody>			
					<summary>Geschlecht offen</summary>
					<tr>
						<td width="10%"><h2>im SG seit</h2></td><td width="15%"><h2>Status</h2></td><td width="10%"><h2>Kategorie</h2></td><td width="25%"><h2>Suchende:r</h2></td><td width="40%"><h2>Link zum Gesuch</h2></td>
					</tr>
					{$wantedoverviewdivers}
				</tbody>
			</table>	
		</details>		
	<br>
	<center><h1>Forengesuche</h1></center>
	<details>
			<table width="100%">
				<tbody>			
					<summary>Canons</summary>
					<tr>
						<td width="10%"><h2>im SG seit</h2></td><td width="15%"><h2>Status</h2></td><td width="10%"><h2>Kategorie</h2></td><td width="25%"><h2>Suchende:r</h2></td><td width="40%"><h2>Link zum Gesuch</h2></td>
					</tr>
					{$wantedoverviewcanons}
				</tbody>
			</table>	
		</details>	
	
	{$footer}
</body>
</html>
