#!/usr/bin/php
<?php
if ($argc < 2)
	return 0;
if (!preg_match('/^([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche) [0-9][0-9]? ([Jj]anvier|[Ff][eé]vrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]o[uû]t|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd][ée]cembre) [0-9]{4} [0-2][0-9]:[0-5][0-9]:[0-5][0-9]$/', $argv[1]))
echo "Wrong Format\n";
else
{
$tab = explode(" ", $argv[1]);
$ori = array('/[Jj]anvier/', '/[Ff][eé]vrier/', '/[Mm]ars/', '/[Aa]vril/', '/[Mm]ai/', '/[Jj]uin/', '/[Jj]uillet/', '/[Aa]o[uû]t/', '/[Ss]eptembre/', '/[Oo]ctobre/', '/[Nn]ovembre/', '/[Dd][ée]cembre/');
  $to = array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');
  $tab[2] = preg_replace($ori, $to, $tab[2]);
  $seconds = strtotime("$tab[3]-$tab[2]-$tab[1] $tab[4]");
  if (!$seconds)
echo "Wrong Format\n";
else
echo "$seconds\n";
}
?>
