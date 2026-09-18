MCJIM CYBERWORKS
www.mcjim-server.com

Voting System using PHP and MySQL

 
The Voting System web application using PHP/MySQL is a project that 
serves as the automated voting system of an organization or school. 

This system works like the common manual system of election voting system whereas 
this system must be populated by the list of the positions, candidates, and voters.
 
This system can help a certain organization or school to minimize the voting time 
duration because aside they can provide the voters an online platform to vote, 
the system will automatically count the votes for each candidate.
 
The system has 2 sides of the user interface which are the administrator and voters’ side. 
The admin user is in charge to populate and manage the data of the system and the voter side 
which is where the voters will choose their candidate and submit their votes.

Features:
	• Vote preview
	• Multiple votes
	• Result tally via Horizontal Bar Chart
	• Print voting results in PDF
	• Changeable order of positions to show in the ballot
	• CRUD voters
	• CRUD candidates
	• CRUD positions

Plugins:
	• AdminLTE
	• TCPDF
	• Backup

Installation:
	1. Download the source code (available to subscribers only): www.mcjim-server.com/download/voting-system.zip 
	2. Extract the downloaded file to your server (localhost) root folder ex. www for WAMP or htdocs on XAMMP. 
	3. Import the included .sql file located in db folder which is the database of the system using phpMyAdmin. 
	4. After a successful import, open the extracted folder and open conn.php in both the includes folder and in the admin/includes folder. 
	5. Edit the database name in the connection depending on the name of the database you created in importing the included .sql file.

How to Use:
	1. First login as administrator by adding /admin/ in the URL example: http://localhost/admin. You should be redirected to the admin login page.
	2. Use this administrator credential to login: 
		• Username: admin 
		• Password: admin
	3. Add the important data such as positions, candidates, and voters.
	4. Change the title of the election by clicking the Election Title menu.
	5. Rearrange the order of positions depending on the desired order to show in the ballot using the Ballot Position menu.
	6. Note: Voter IDs should be distributed appropriately to participating voters to avoid mix-ups.
	7. Click Print for election results.

 
