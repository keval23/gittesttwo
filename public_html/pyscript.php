<?php
// Report all errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

try
{
	if (exec('echo TEST') == 'TEST')
	{
	    echo 'exec works!';
	}
	echo "<br/>-------------------<br/>";
	//$command = escapeshellcmd('E:\Document\helloworld.py');
	//$command = escapeshellcmd('E:\Document\first.py');
	//$command = escapeshellcmd('E:\Document\second.py');
	//$command = escapeshellcmd('E:\Document\third.py');
	$command = escapeshellcmd('E:\Document\fourth.py');
	$output = shell_exec($command);
	echo $output;
}
catch(Exception $e)
{
  echo 'Message: ' .$e->getMessage();
}