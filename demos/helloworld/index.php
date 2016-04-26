<?php
$defaultTitle = "The Hello World example";
include("header.php");
?>

					<header>
						<h1>Welcome to the "Hello World" demo of <strong>BLAPY</strong>!</h1>
						<h2>I am the "<b><?php echo basename(__FILE__)?>" file</b> of the "Hello world" demo</h2>
					</header>
					<div style="border:solid 1px green;margin:20px;padding:20px;">
						<div 	id="mainContainer" 
								data-blapy-container="true" 
								data-blapy-container-name="mainContainer" 
								data-blapy-container-content="HelloWorld">
							
							<h1>Hello World!</h1>
							<p>This is a "Hello World" content</p>
							<p>	Click on the <a href="helloworld_2.php" data-blapy-link="true">"How is it going?"</a> link, 
						it will then change the Blapy content of the current page by the one coming from the page of this link</p>
							
						</div>
					</div>	
					<p>	As you click... you will see that the <span style="border: 1px solid green;padding:3px;">green block above</span> is updated<br> 
						and this text is not... neither the title of the page...<br>
						because they are not involved in a Blapy block...</p>
					<p>Meaning that <b>THE PAGE IS NOT RELOADED ;-) but ajaxified...</b></p> 
					

<?php 
include("footer.php");
