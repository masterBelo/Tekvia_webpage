<?php 

/* 

File: whois-example.php
Purpose: heavily commented example of using the sams whois php scripts to include a whois lookup service on
your own website.

Copyright (c) 2004, 2008 Sam Yapp
http://www.phpace.com/scripts/sams-whois

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

	Read the comments and change the variables to alter the behaviour of the SamsWhois script.

*/

/*
	To Require the user to enter a randomly generated "security" code for each lookup
	set $swSecure = true;

	This works by generating a random code each time the lookup form is displayed,
	storing it in a session variable, displaying an image containing the code and asking
	the user to enter the code displayed when they submit the lookup form. The code they
	enter is then compared with the generated code and if they match, then the lookup is done.

	Its purpose is to stop people from abusing your whois lookup script through scripting
	100's or 1000's of lookups per minute, and possibly getting you banned for excessive 
	lookups.

	You MUST uncomment the code "session_start();" code for this to work.

	You MUST upload the swsecureimage.php file to your document root (so it can be 
	accessed at http://www.yoursite.com/swsecureimage.php). This is the file that
	generates the image.

	Your server MUST have the php gd image module active for this to work.

	You MUST make sure that the $m_font variable contains the FULL path to the ttf font to
	use to create the image. By default, a font should be included with this script and this
	variable should already be set for you.
	
	Additional options (font, size, number of characters, whether to use lower and upper
	case characters, and settings for the extra paranoid can be modified by editing the
	variables at the top of the secureimagecode.class.php file.

*/

/* you line below must be uncommented if using the secure code image option */


$swSecure = false;
$swCacheLifetime = 0;
$swClean = 'optional';
$swHilite = 'optional';
$swAuth = true;
$swOnlyShowAuth = false;
$swTlds = '';
$swListTlds = false;
$swTldOptions = true;
$swAlphabeticalTlds = false;
$swAvailableMessage = '{domain} is <span style="color: green;">Available.</span><br><br><a href=#><input type="submit" class="botoncompra" value="Buy"></a>';
$swRegisteredMessage = '{domain} is not <span style="color: red;">Available.</span>';
$swSubmitLabel = '>>';
$swOnlyShowAvailability = false;
$swDefaultSld = 'domain';
$swDefaultTld = 'com';

?>

<html>
<head>
<title>Tekvia Domains</title>
<link rel="stylesheet" type="text/css" href="swstyles.css" />
<link rel="stylesheet" href="../../../assets/css/buscarDominio.css">
<link rel="stylesheet" href="../../../assets/css/footerstyle.css">
</head>
<body style="font-family: verdana, arial; font-size: 10pt; margin-top: 100px;">
<?php
require_once(dirname(__FILE__).'/samswhois/samswhois.inc.php');
include '../footer.html';
?>
</body>
</html>
