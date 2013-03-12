<?php
include 'class.krumo.php';

$str = "<big>'''Welcome to the Student Support WIKI.'''</big>

IT Student Assistants will use this site for documentation of systems, services, processes, procedures, etc...

== Basic Overview ==

<b>Employment of students</b>: Students Assistants are employed by the CNT to assist in routine and menial tasks. Student also work on web or programming projects as directed by the CNT. Student support needs (and student employment) are evaluated on a quarter by quarter basis.

<b>Expectations of students</b>: Each school quarter (or whenever the students schedule changes) the student will post their working schedule on this section of the web site (see below). Students are expected to notify the CNT prior to any deviations from the schedule (sick days, doctors appointments, midterms, finals). In general, there is never a problem with missing some number of days, as long as the CNT is notified ahead of time.

<b>General goals (or mission) of the Computer Support Assistant position</b>: Your overriding goal is to make the CNTs job easier. Secondary to that will be streamlining and documenting the job you have done to make it easier for future students in this position.

<b>General Schedule of operations for students by quarter</b>: The following is a rough outline of what you can expect over the course of a quarter.

== For Newly Employed Student Assistants ==
* First day -
** Complete UCSB employment paperwork.
** Begin work on schedule, optimal are windows of 1.5 to 3.0 hours, for 3-5 days a week.
** Establish computer account(s) (NIS, Desktop, Support Website) with CNT.
** Introduction to support website.
* First week
** Browse student section of support website.
** Browse other sections of support website taking notes of items that are unclear or might need further documentation.
** Introduction to routine tasks.
** Gain familarity with routine tasks and begin completing those tasks each day.
** Begin learning APIs or languages that may be needed for upcoming projects (PHP, HTML).
* Second week and on - begin adding project(s) as available. Perform routine tasks as needed.
* 2nd to last week of quarter - work on documentation and organization of past quarters work.
* Last week of quarter - cleaning up and organizing.
** Remove unneeded temporary and development files. This includes intermediate stage source code.
** Verify that development projects still work and that the project code is in production location.
*** Run source
*** Check output

== Current Computer Support Student Assistants ==

====Christopher Kim - 2012-01====

Fall Quarter, 2012:
*Monday-Friday: 10AM-1:30PM, 2PM-4:30PM

====Zachary Babtkis====


Fall Quarter, 2012:
*Monday-Friday: 10AM-1:30PM, 2PM-4:30PM


== Current Tasks ==
*configure G4 mac mini, or quicksilver G4 for donation to Geol.  
**Get specs on each, leaning towards quicksilver - 
*[[CISN Display]]
*[[New CISN Display]]
*fix issues with cisn display and update the one at girvetz
*[[cein drupal site]]


*create mapping of network switches to data panel
*Creating an cleaned, archive version of the ICESS homepage
** [[ICESS files and folders]]
**[[ICESS website directories]]

* [[shell script documentation]]
* [[drupal documentation]]
* followup on inventory stuff
*create inventory pickup table from info on pad
**pull disks from systems, return trays to raid arrays
**erase those disks
*investigate/practice unix shell programming
*migrate non-sensitive material from support.crustal.ucsb.edu/sysadm to sysadm wiki.
*start working on drupal configuration/modification
Pending Tasks:
*Reassigning Mac-Mini
*Determine all absolute links on ICESS site
**Current locations located in ICESS Files/Folders.ods spreadsheet
*Finish ESPD for spare hardware in 6706
*one Disc RMA on desk

== Completed Tasks ==
*create mapping of network switches to data panel
* sort rack parts in 6706
* locate and purchase one (or two maybe) usb to serial adaptors. prefer Keyspan USA-19QW, but may be good to try one or two others if not too expensive
* [[ethernet jacks]]

== Documentation ==

* [[Documentation]] - Student Documentation page - largely pulled from support.crustal.ucsb.edu
* [http://support.crustal.ucsb.edu/stadm/docs/ Documentation] page from ICS Computer Support

== Software Projects and Development ==
* [http://support.crustal.ucsb.edu/stadm/development Projects Development area] - Development are for Computer Support Assistant projects. When completed, projects should be moved to Former Projects area below.
* [http://support.crustal.ucsb.edu/stadm/projects Former Projects area] - Projects done by Computer Support Assistants that are no longer under active development.

== Student Assistants History ==

* Zachary Babtkis: 2012-07 to present
* Chris Kim: 2012-01 to present
* Vincent Radzicki: 2011-03 to 2011-06
* Kenny Cao: 2010-01 to 2010-12
* Nicholas Webster: 2008-02 to 2010-06
* Elisabeth Lagalee: 2007-08 to 2007-09
* Tyler King: 2007-07
* Rodrigo Noronha: 2006-09 to 2007-06
* Kurt Olsson: 2006-07 to 2006-12
* Robert Dame: 2006-02-24 to 2006-06-16
* Joe Mount: 2005-01 to 2006-02-24
* Anne Ducale: 2005-01
* Mark Gorecki: 2004-06 to 2004-12

== Getting started ==
* [http://www.mediawiki.org/wiki/Manual:Configuration_settings Configuration settings list]
* [http://www.mediawiki.org/wiki/Manual:FAQ MediaWiki FAQ]
* [https://lists.wikimedia.org/mailman/listinfo/mediawiki-announce MediaWiki release mailing list]";

/*$ar = preg_split('/(=|==|===|====|%)/', $str, 0, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
echo "<pre>";
$count[1] = 0;
$count[2] = 0;
$dir = 1;
foreach($ar as $a)
{
	if($dir == 1 && $a == "=")
	{
		$count[1]++;
	}
	elseif($a != '=')
	{
		$dir = 0;
	}
	elseif($a == "=" && $dir == 0)
	{
		$count[2]++;
		$dir = 1;
	}
	if($count[1] == $count[2] && $count[1] != 0 && $a != "=")
	{
		print("yeah");
		$count[1] = 0;
		$count[2] = 0;
	}
	print("indent = " . $count[1] . $count[2]);
	print("->" . $a . "\n");
}
echo "</pre>";*/

function strpos_r($haystack, $needle)
{
    if(strlen($needle) > strlen($haystack))
        trigger_error(sprintf("%s: length of argument 2 must be <= argument 1", __FUNCTION__), E_USER_WARNING);

    $seeks = array();
    while($seek = strrpos($haystack, $needle))
    {
        array_push($seeks, $seek);
        $haystack = substr($haystack, 0, $seek);
    }
    return $seeks;
}
echo "<pre>";
$ar = array_reverse(strpos_r($str, "="));
echo "<pre>";

$last = strpos($str, "=");
$c =1;
$forward = true;
$c_last = 0;
$head = 1;
$list = array();
$heading = 0;
$curr_str = "";
$contents = "";
$array_catch = 0;
foreach($ar as $p)
{
	
	if($p-1 == $last)
	{
		$c++;
	}
	else
	{
		$c_last = $c;
		for($i = $last+1; $i < $p; $i++)
		{
			if($c == 1 && $head == 2)
			{
				$curr_str .= $str[$i];
				$heading = 2;
			}
			elseif($c == 2 && $head == 2)
			{
				$curr_str .= $str[$i];
				$heading = 3;
			}
			elseif($c == 3 && $head == 2)
			{
				$curr_str .= $str[$i];
				$heading = 4;
			}
			else
			{
				$contents .= $str[$i];
			}
		}
		if($array_catch == 1)
		{
			$item['value'] = $curr_str;
			$item['contents'] = $contents;
			$item['heading'] = $heading;
			$list[] = $item;
			$curr_str = "";
			$contents = "";
			$array_catch = 0;
		}
		$array_catch++;
		//$forward = true;
		$c=0;
		if($head==2)
		{
			$head = 1;
		}
		else
		{
			$head++;
		}
		
	}
	$last = $p;
	//echo $c + ":" + $c_last;
}
krumo($list);

?>
