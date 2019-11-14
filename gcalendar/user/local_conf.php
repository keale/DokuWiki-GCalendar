<?php
/**
 * gCalendar user configuration-file
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Frank Hinkel <frank@hi-sys.de>
 *
 * copy settings from inc/conf.php and modify them here
 */
 
 # how to display times in events -> #h=hour ; #m=minutes ; #r=rest (am/pm)
 #$conf['gCal_time']= "#h<sup><em class= 'u'>#m</em><sup>#r"; //minutes superscript underlined
 $conf['gCal_time']="#h:#m#r";// use this, if you dont like the superscript-form