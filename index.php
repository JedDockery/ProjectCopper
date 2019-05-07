<?php
	//includes database connection information. SQLi: procedual
	include 'dbh.php';
?>


<!doctype html>

<!--Create a Web Application/Site with the following:
Project should be on a separate sub-domain
Responsive Break Points
- Desktop: > 1024
- Tablet: 1024 to 400
- Mobile: < 400
Have at least two (2) forms on the site (properly validated/collected into a DB)
Have a page to search for results from the form entries that uses AJAX to either auto-complete search text fields or query the data for display
Implement two (2) different API implementations included in your site
This project is designed to pull together everything we have learned during the semester
You should be able to re-use a good bit of material from your Labs/Projects/Midterm, but you should still set aside plenty of time to work on this
You can use PHP/MySQL, Python/SQLite, or C#.NET/MSSQL to complete this project
Submit a link to your site and a zip file containing the entire site. If using MySQL or MSSQL, include an export of the DB structure. If using SQLite, include the SQLite database file.


-->

<html>
	<head>
		<meta charset="utf-8">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
		<title>CSCI 3000 final project</title>
		<link href="breakpoints.css" rel="stylesheet" type="text/css"/>
		<script src="script.js"></script>
				
		
		
		<link rel="stylesheet" href="http://homework.jeddockery.com/hw3/homework3.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		
	</head>
	
	<body>
		
		

		
		
<!--		inport  facebook javascript sdk-->
		<div id="fb-root"> </div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>

	
		<!--HEADER-->
		<div class = "header">
			<h1>Wellcome</h1>
			<p>welcome to moessss!!! </p>  
		</div>
		<hr>
		
		
		
		<!--from csci3000.com--------------------------------------------------------------------->
		<div class="row">
			<div class="col-md-3 col-sm-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed leo odio. Nunc congue varius elit ac venenatis. Nullam non maximus mauris. Pellentesque id sodales sem, non laoreet sapien. Duis hendrerit fringilla mauris, nec lacinia odio cursus ac. Proin purus sapien, aliquam in mi vel, semper faucibus magna. Praesent vel aliquet arcu. Sed aliquet est in nunc efficitur lobortis. Sed laoreet egestas metus vel ornare. Duis arcu magna, dictum quis mi vel, luctus lobortis est. Phasellus faucibus ante id feugiat vestibulum. Vestibulum porta ultrices tincidunt.</div>
			<br>
			
			<div class="col-md-3 col-sm-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin semper ex ut ligula tempus, ac lacinia ante dapibus. Sed mauris urna, pulvinar quis euismod at, posuere in purus. Sed eleifend tellus dolor, vitae dignissim ex consectetur ut. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In nisl tortor, dignissim sit amet ornare eu, elementum vitae velit. Sed aliquet rhoncus lorem ac congue. Ut scelerisque diam ac egestas egestas. Ut tellus justo, aliquet id lectus non, feugiat pellentesque odio. Pellentesque vitae mattis nulla, nec congue quam. Fusce diam arcu, tincidunt id ex a, aliquet suscipit neque. Fusce at sem sed nisi ullamcorper convallis in quis augue. Aliquam sed nisi quis mauris pretium consectetur.</div>
			<br>
			<div class="col-md-3 col-sm-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce bibendum libero augue, vel gravida sem fermentum nec. Vestibulum posuere ligula nisl, eget semper magna dignissim et. Curabitur id cursus ante, ut bibendum odio. In lacus ante, dapibus a justo quis, facilisis congue elit. Nunc porta est purus, in rhoncus justo elementum vitae. Pellentesque in tempor ex. In vel aliquam orci, quis sodales felis. Phasellus bibendum turpis eget mi laoreet interdum. Vivamus luctus lectus posuere efficitur consectetur. Suspendisse malesuada ac mi in posuere. Fusce nisl magna, ultricies sit amet rhoncus sit amet, consequat quis odio. Donec laoreet ipsum felis, nec malesuada mi consequat ut. Mauris venenatis pulvinar ante ac lobortis. Phasellus scelerisque magna neque, eu semper est dignissim nec.</div>
			<br>
			<div class="col-md-3 col-sm-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et dictum urna. Nulla faucibus dui elit, et porta leo luctus quis. Cras libero erat, posuere gravida mollis sed, mollis et mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc dictum eros et massa sodales fermentum et quis purus. Pellentesque vel tincidunt purus. Morbi pellentesque metus ante, at gravida metus malesuada nec. Vivamus vitae tellus ultricies, ullamcorper orci ac, varius erat. Nam eleifend augue et semper sagittis. Donec imperdiet dapibus lacus nec dignissim. Integer magna justo, laoreet sed arcu non, molestie aliquam nulla. Vivamus iaculis massa a ligula laoreet aliquam. Suspendisse potenti. Suspendisse elementum at ex id condimentum. Maecenas tincidunt iaculis sapien, vitae venenatis orci vehicula eget. Duis dolor elit, condimentum vel mauris ut, gravida laoreet tellus.</div>
			<br>
			<div class="col-md-3 col-sm-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nibh dolor, condimentum at enim sed, rhoncus cursus diam. Cras maximus est ex, vitae mattis diam pharetra feugiat. Nullam molestie eleifend ex et sodales. Mauris placerat elit a tempor varius. Nulla facilisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla eget semper purus, quis semper tortor.</div>
			<br>
			<div class="col-md-3 col-sm-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a dolor ut turpis aliquam varius eu non urna. Mauris suscipit ultricies purus, ac molestie turpis sollicitudin in. Mauris non leo tristique massa venenatis cursus. Aenean faucibus dolor eget ex bibendum, in ultricies est dictum. Vestibulum quis ante dignissim, sollicitudin lectus at, malesuada sapien. Ut consectetur leo nec ex tristique, euismod euismod enim porta. Vestibulum varius sapien a mauris suscipit, non varius justo sagittis.</div>
			<br>
			<div class="col-md-3 col-sm-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum risus metus, rhoncus sit amet lacus at, placerat blandit odio. In ac convallis sapien. Integer blandit, odio eu lobortis ultrices, libero arcu laoreet neque, at faucibus lacus eros ut felis. Duis varius dolor a ex ultricies ornare. Nulla interdum odio efficitur, egestas ante at, facilisis sem. Fusce ex magna, venenatis at tempus eget, blandit at magna. Etiam nisl diam, vestibulum eget mauris sed, dapibus vehicula mauris. Vestibulum congue erat at eleifend convallis. Sed fermentum est urna, sit amet scelerisque libero pulvinar ut. Nullam aliquet maximus justo, vitae ultrices nisl gravida vel. Donec efficitur elit ullamcorper massa euismod, sed maximus ipsum aliquam. Duis hendrerit vel dui nec pretium. Aliquam id tortor id dolor condimentum auctor. Morbi vehicula semper sagittis. Suspendisse posuere nec augue ut cursus.</div>
			<br>
			<div class="col-md-3 col-sm-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc varius lorem id libero posuere, a pulvinar nisl commodo. Curabitur pharetra, erat scelerisque mollis venenatis, ligula augue tempor eros, nec maximus ex mauris eu nisi. Nulla in interdum tortor, eu posuere lorem. Donec nec magna rutrum, sodales sapien non, interdum lorem. Nulla pretium convallis quam quis pulvinar. Etiam tempor sit amet diam ac placerat. Etiam malesuada hendrerit nulla non euismod. Morbi commodo sit amet velit in pulvinar. Suspendisse id pellentesque nibh.</div>
			<br>
		</div>
		
		<div class="row">
			<div class="col-md-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eros sem, imperdiet ut porta eget, ullamcorper non quam. Vestibulum sit amet diam nisi. Nunc tempor, ligula eget rutrum mollis, diam dolor lobortis mi, at semper dui sapien sit amet diam. Phasellus rutrum lacus id tellus malesuada volutpat. Cras elementum ipsum sit amet rutrum semper. Donec ac mattis ligula. Maecenas bibendum ut erat a tempor. Nam ex arcu, gravida non luctus eget, luctus eget nulla. Sed sit amet dui feugiat, porta ligula vel, viverra sem. Sed turpis velit, elementum et convallis id, gravida sed magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis accumsan et magna sed finibus. Cras non ante placerat, molestie risus et, interdum enim. Aliquam justo mauris, mattis quis neque vehicula, luctus mattis sapien. Nunc in elit a urna consequat maximus nec ut libero.</div>
			<br>
			<div class="col-md-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet tincidunt justo, eget consectetur dolor suscipit sed. Vivamus facilisis lectus ex, vitae hendrerit risus tincidunt et. Mauris ac eleifend ipsum. Morbi id felis ex. Praesent turpis ex, luctus eget justo vitae, laoreet volutpat purus. Vivamus tincidunt placerat sem vel porttitor. Curabitur et velit a turpis posuere mollis. Donec at dui eu justo imperdiet elementum vitae eget ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</div>
			<br>
			<div class="col-md-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet leo bibendum, malesuada nibh quis, eleifend urna. Nulla laoreet ornare erat ut rhoncus. Aliquam erat volutpat. Curabitur porttitor hendrerit rutrum. Etiam nec vehicula sem, ut fermentum est. Suspendisse dictum mollis sollicitudin. Mauris nec elit sollicitudin, suscipit est in, gravida est. Integer facilisis, tellus vel condimentum iaculis, enim dolor tristique sem, ac facilisis velit eros sed ante. Integer accumsan pretium iaculis. Cras vel libero eros. Mauris lacinia ullamcorper pulvinar. Integer iaculis eleifend dui, a congue orci euismod sed. Sed consectetur nisl ultrices ante dignissim lobortis. Ut in convallis nunc. Praesent ex odio, pretium in orci nec, aliquet tincidunt dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</div>
			<br>
			<div class="col-md-3">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin blandit magna sed felis ullamcorper sagittis. Aliquam gravida felis eget neque accumsan, ac placerat nisl laoreet. Donec cursus sed felis quis semper. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam mollis volutpat posuere. Ut non sem ut ante mollis feugiat. Mauris sed lacus metus. Suspendisse luctus lorem id mauris aliquam, finibus convallis ex tempus. Nullam aliquet porttitor arcu, id lobortis sem vestibulum tincidunt. Donec in augue non augue mattis pellentesque. Suspendisse ut urna sit amet elit aliquet tristique. Praesent ac eros sapien. Suspendisse et risus lorem.</div>
			<br>
		</div>
		<hr>
		<!--------------------------------------------------------------------------------------->

		
	
		<!--slide show based on, https://www.w3schools.com/bootstrap/bootstrap_carousel.asp------>
		<div class="container">
		  <h2>Carousel</h2>  
		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			  <li data-target="#myCarousel" data-slide-to="3"></li>
		      <li data-target="#myCarousel" data-slide-to="4"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			  <div class="item active">
				<img src="https://ung.edu/campuses/_uploads/images/updated-2015/gainesville-971x370.jpg" alt="Martha T. Nesbit building" style="width:100%;">
			  </div>

			  <div class="item">
				<img src="https://ung.edu/campuses/_uploads/images/updated-2015/blue-ridge-971x370.jpg" alt="Blue Ridge Mountains" style="width:100%;">
			  </div>

			  <div class="item">
				<img src="https://ung.edu/campuses/_uploads/images/updated-2015/cumming-971x370.jpg" alt="Campus Academic Building" style="width:100%;">
			  </div>
				
			  <div class="item">
				<img src="https://ung.edu/campuses/_uploads/images/updated-2015/dahlonega-971x370.jpg" alt="Price Memorial Hall" style="width:100%;">
			  </div>
				
			  <div class="item">
				<img src="https://ung.edu/campuses/_uploads/images/updated-2015/oconee-971x370.jpg" alt="UNG Oconee" style="width:100%;">
			  </div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right"></span>
			  <span class="sr-only">Next</span>
			</a>
		  </div>
		</div>
		<hr>
		<!---------------------------------------------------------------------------------------------------------->
		<hr>
		
		
		
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
		
		<center>
		<h2>Survey</h2>
			
			
		<!--html form-->	
		<form action="push.php" method="POST">
			<input type = "text" name = "name" placeholder="Name">
			<br><br>
			<input type = "text" email = "email" placeholder="E-mail"> 
			<br><br>
			<button type="submit" name="submit"> submit survey. </button>
		</form>
		

		<!-- w3 ajax example https://www.w3schools.com/xml/ajax_database.asp -->
		<script>
			function loadXMLDoc() {
			  var xmlhttp = new XMLHttpRequest();
			  xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
				  myFunction(this);
				}
			  };
			  xmlhttp.open("GET", "cd_catalog.xml", true);
			  xmlhttp.send();
			}
			function myFunction(xml) {
			  var i;
			  var xmlDoc = xml.responseXML;
			  var table="<tr><th>name</th><th>email</th></tr>";
			  var x = xmlDoc.getElementsByTagName("data");
			  for (i = 0; i <x.length; i++) {
				table += "<tr><td>" +
				x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue +
				"</td><td>" +
				x[i].getElementsByTagName("email")[0].childNodes[0].nodeValue +
				"</td></tr>";
			  }
			  document.getElementById("demo").innerHTML = table;
			}
		</script>	
					
		
			
		<!-- button to print ajax -->
			
			<script>
				//jquery code here
				$(document).ready(Function(){
						var dataCount = 2;
						$("button").click(function() {
							dataCount = dataCount +2;
							$("#data").load("load-data.php", {
								dataNewCount: dataCount
							});
						});		  
								  
				});
			</script>
			
			<h2>data from table:</h2>
			<div id="data">
				<?php
				
					$sql = "SELECT * FROM User LIMIT 2;";
					$result = mysqli_query($conn, $sql);
					if(mysqli_num_rows($result) > 0){
						while ($row = mysqli_fetch_assoc($result)){
							echo "<p>";
							echo "Name: ";
							echo $row['name'];
							echo "<br>";
							echo "E-mail: ";
							echo $row['email'];
							echo "</p>";
						}
					}
					else{
						echo "no data.";
					}
					
				?>
			</div>
			
			<button> show more data </button>
			
			<h1>all the survey data:</h1>
			<?php

				
				
					$sql = "SELECT * FROM User;";
					$result = mysqli_query($conn, $sql);
					if(mysqli_num_rows($result) > 0){
						while ($row = mysqli_fetch_assoc($result)){
							echo "<p>";
							echo "Name: ";
							echo $row['name'];
							echo "<br>";
							echo "E-mail: ";
							echo $row['email'];
							echo "</p>";
						}
					}
					else{
						echo "no survey data";
					}
					
				?>
			
			
		<hr>
		

			<?php
/*			//sql section

				//DATABASE STRUCTURE:------------------------------------------- 
/*				CREATE TABLE User (
					UserID int NOT NULL AUTO_INCREMENT,
					name varchar(50) NOT NULL,
					email varchar(100) NOT NULL,
					PRIMARY KEY (UserID)
				);
				----------------------------------------------------------------
				
				//DUMMY DATA INSIDE DB TABLE:-----------------------------------
				/*INSERT INTO User (name, email)
				VALUES ('Jed', 'jeddockery@outlook.com');
				
				INSERT INTO User (name, email)
				VALUES ('Jay', 'jay@outlook.com');

				INSERT INTO User (name, email)
				VALUES ('chase', 'chase@outlook.com');

				INSERT INTO User (name, email)
				VALUES ('jane', 'jane@gmail.com');

				INSERT INTO User (name, email)
				VALUES ('joe', 'joe@gmail.com');

				INSERT INTO User (name, email)
				VALUES ('dark knight', 'darknesslover02@hotmail.com');

				INSERT INTO User (name, email)
				VALUES ('pink princess', 'dankmemelover@gmail.com');

				INSERT INTO User (name, email)
				VALUES ('john', 'justjohn@outlook.com');

				INSERT INTO User (name, email)
				VALUES ('bill', 'superhero89@outlook.com');

				INSERT INTO User (name, email)
				VALUES ('sonic', 'fastestalive@yahoo.com');
				----------------------------------------------------------------*/
		?>
	
			<hr>

		<br><br><br>
		</center>
		
		
		
		<!-- twitter -->
		<div style="float: left; box-shadow: 4px 4px 8px dimgray; padding: 20px">
			<a class="twitter-timeline" data-width="300" data-height="400" data-theme="light" data-link-color="#2B7BB9" href="https://twitter.com/NASAJPL?ref_src=twsrc%5Etfw">Tweets by NASAJPL</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>
			
		<div style="float: right; box-shadow: 4px 4px 8px dimgray; padding: 20px">
			<br><br><br>
			<!-- facebook comments -->
			<div class="fb-comments" data-href="https://www.jeddockery.com" data-numposts="5"></div>

			<br>
			<!-- facebook like -->
			<div class="fb-like" data-href="http://www.jeddockery.com" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true">
			</div>
		</div>
		
		<br><br><br>
		<!--FOOTER-->
		<div class="footer" style = "clear:both; padding: 20px">
 			<p>goodbye, hope you enjoyed your stay.</p>
		</div>
	</body>
</html>


