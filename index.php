<?php
function IPnya() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'IP Tidak Dikenali';

    return $ipaddress;
}
$user_agent = $_SERVER['HTTP_USER_AGENT'];
function getOS() { 
    global $user_agent;
    $os_platform    =   "Unknown OS Platform";
    $os_array       =   array(
                            '/windows nt 10/i'      =>  'Windows 10',
                            '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/linux/i'              =>  'Linux',
                            '/ubuntu/i'             =>  'Ubuntu',
                        );
    foreach ($os_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $os_platform = $value;
        }
    }   
    return $os_platform;
}
function getBrowser() {
    global $user_agent;
    $browser        =   "Unknown Browser";
    $browser_array  =   array(
                            '/firefox/i'    =>  'Firefox',
                            '/safari/i'     =>  'Safari',
                            '/chrome/i'     =>  'Chrome',
                            '/opera/i'      =>  'Opera',
                        );
    foreach ($browser_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $browser = $value;
        }
    }
    return $browser;
}
$user_os        =   getOS();
$user_browser   =   getBrowser();
$user_ip        =   IPnya();
if ($user_ip == " ") {
    echo $user_ip;
} else {
            $country = "Indonesia";
			echo $country;
}
?>
<html>
<head>
    <title>Sistem Operasi Dari Client</title>
    <style type="text/css">
<!--
.style3 {
	color: #FFFFFF;
	font-family: Arial, Helvetica, sans-serif;
}
.style4 {font-family: Arial, Helvetica, sans-serif}
.style5 {
	color: #FFFFFF;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
-->
    </style>
</head>
<body background="2.png">
    <table align="center" cellpadding="10" cellspacing="10" border="0" bgcolor="#33FF33">
        <tr align="center" bgcolor="#33FF33">
          <th colspan="3" bordercolor="#000000" bgcolor="#333333"><h1 class="style3 style3">SISTEM OPERASI </h1></th>
      </tr>
        <tr>
            <td width="168" bgcolor="#33FF33"><span class="style2 style4"><strong>NIM</strong></span></td>
            <td width="4">&nbsp;</td>
            <td width="355" bgcolor="#33FF33"><span class="style1 style4">2014081095</span></td>
        </tr>
        <tr>
            <td bgcolor="#33FF33"><span class="style1 style4"><b>NAMA</b></span></td>
            <td>&nbsp;</td>
            <td bgcolor="#33FF33"><span class="style1 style4">Riki Rusnandar </span>        </tr>
        <tr>
            <td bgcolor="#33FF33"><span class="style1 style4"><b>Kelas</b></span></td>
            <td>&nbsp;</td>
            <td bgcolor="#33FF33"><span class="style1 style4">TEKNIK INFORMATIKA-2014-A</span></td>
        </tr>
        <tr>
            <td bgcolor="#33FF33"><span class="style1 style4"><b>SISTEM OPERASI</b></span></td>
            <td>&nbsp;</td>
            <td bgcolor="#33FF33"><span class="style1 style4"><?php echo $user_os;?></span></td>
        </tr>
        <tr>
            <td bgcolor="#33FF33"><span class="style1 style4"><b>BROWSER</b></span></td>
            <td>&nbsp;</td>
            <td bgcolor="#33FF33"><span class="style1 style4"><?php echo  $user_browser;?></span></td>
        </tr>
        <tr>
            <td bgcolor="#33FF33"><span class="style1 style4"><b>IP</b></span></td>
            <td>&nbsp;</td>
            <td bgcolor="#33FF33"><span class="style1 style4"><?php echo $user_ip ;?></span></td>
        </tr>
        <tr>
            <td bgcolor="#33FF33"><span class="style1 style4"><b>NEGARA</b></span></td>
            <td>&nbsp;</td>
            <td bgcolor="#33FF33"><span class="style1 style4"><?php echo $country;?></span></td>
        </tr>
        <tr>
            <td bgcolor="#33FF33"><span class="style1 style4"><b>LENGKAPNYA</b></span></td>
            <td><span class="style1 style4">:</span></td>
            <td bgcolor="#33FF33"><span class="style1 style4"><?php echo $_SERVER['HTTP_USER_AGENT'];?></span></td>
        </tr>
        <tr bgcolor="#33FF33">
          <td colspan="3" bgcolor="#333333"><p class="style5"><br>
            <marquee behavior="alternate">PROJEK SISTEM OPERASI</marquee>
            <br>
          <br>
           <br>
          </p>
          </td>
      </tr>
</table>
</body>
</html>