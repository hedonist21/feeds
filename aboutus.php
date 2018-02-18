<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>News Aggregator</title>
	<link rel="stylesheet" href="style_signup.css" type="text/css" charset="utf-8" />
</head>
<script type="text/javascript">
function validate()
{
		var name=document.getElementById("un").value;
		var pwd=document.getElementById("pw").value;
		
		 
		if(name=="")
		{
					alert("Enter User Name");
					return false;
		}
		else if(pwd=="")
		{
					alert("Enter password");
					return false;
		}
		
		 
		return true;
}
</script>
<body>
<form id="signin" action="admin.php" method="post">

  <div id="wrapper">
    <h1>...The <strong>Worldwide</strong> News...</h1>
    <div id="top-nav">
      <ul>
        <li><a href="signin.php">sign in</a> &nbsp;&nbsp;|&nbsp;&nbsp; </li>
        <li><a href="index.php">sign out</a></li>
      </ul>
    </div>
    <div id="mmagic"> </div>
    <div id="header"> </div>
    <div id="spacer"> </div>
    <div id="body">
      <div id="left" style="width:730px">
        <div id="nav">
          <ul>
            <li style=" border-left-color:#646C79;" ><a href="index.php">Home</a></li>
            <li style=" border-left-color:#646C79;"><a href="aboutus.php">About Us</a></li>
            <li style=" border-left-color:#646C79;"><a href="signup.php">Registration</a></li>
            <li style=" border-left-color:#646C79;"><a href="news.php">News</a></li>
            <li style=" border-left-color:#646C79;"><a href="contactus.php">Contact us</a></li>
               <li style=" border-left-color:#646C79;"></li>
              <li style=" border-left-color:#646C79; border-left-width:7px"></li>
            
          </ul>
          <div class="clear"> </div>
        </div>
        <div id="visit" style="height:400px; padding-left:220px">
         	
              <h2><strong><br><br>This site is for news lovers.....</strong></h2>
           
          <br>
         <h4> DESIGNED BY:</h4>
          <table>
             <tr>
                
              <td>divyanshsingh2@gmail.com</td>
           </tr>
          </table>       
        </div>
        <div id="subs"></div>
      </div>
      <div class="clear"> </div>
    </div>
  </div>
</form>
</body>
</html>
