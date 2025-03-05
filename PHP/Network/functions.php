<?php

function get_filenames(string $filename):array
{
	$splitted_name = explode("/", $filename);
	$name = $splitted_name[array_key_last($splitted_name)];
	echo $name;
	$number = (int)$name;
	echo $filename;
	echo "<h1>{$number}</h1>";
	$filenames =
		[
		"source"	=> $filename,
		"WAL"		=> __DIR__ . "/files/{$number}.WAL",
		"DHCPD"		=> __DIR__ . "/files/{$number}.dhcpd"
		];
	return $filenames;
}
function read_addresses_from_file(string $filename, array &$IPs, array &$MACs): void
{
	$src_filename = $filename;
	//echo file_exists($filename);
	//$src_file = fopen($src_filename, 'r');
	$content = file($src_filename);
	echo '<pre>';
	print_r($content);
	echo '</pre>';
	//fclose($src_file);

	for ($i = 0; $i < count($content); $i++) {
		$subs = explode(' ', $content[$i]);
		$IP = $subs[array_key_first($subs)];
		$MAC = $subs[array_key_last($subs)];
		$MAC = str_replace("\n", "", $MAC);

		echo '<pre>';
		//print_r($subs);
		echo "$MAC\t$IP";
		//echo $MAC . $IP . '<br>';
		echo '</pre><hr>';

		$IPs[] = $IP;
		$MACs[] = $MAC;
	}
}

function write_addresses_to_file(string $filename, array $IPs, array $MACs): void
{
	$dst_filename = $filename;
	$dst_file = fopen($dst_filename, 'w');
	
	for($i=0; $i < count($MACs); $i++)
	{
		fwrite( $dst_file,"{$MACs[$i]}\t{$IPs[$i]}\n");
	}
	
	fclose($dst_file);
}

function print_table_from_file(string $filename): void
{
	$wal_filename = $filename;
	//$wal_file = fopen($wal_filename, 'r');
	$content = file($wal_filename);
	echo '<table border cellspacing="0">';
	echo '<tr>';
	echo '<th>';
	echo 'MAC address';
	echo '</th>';
	echo '<th>';
	echo 'IP address';
	echo '</th>';

	for ($i = 0; $i < count($content); $i++) {

		echo '<tr>';
		echo '<td>';
		echo explode("\t", $content[$i])[0];
		echo '</td>';
		echo '<td>';
		echo explode("\t", $content[$i])[array_key_last(explode("\t", $content[$i]))];
		echo '</td>';

		echo '</tr>';
	}

	echo '</tr>';
	echo '</table>';

	//fclose($wal_file);
}
?>