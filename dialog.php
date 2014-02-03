<?php
/*
*  Copyright (c) Codiad & Kent Safranski (codiad.com), distributed
*  as-is and without warranty under the MIT License. See 
*  [root]/license.txt for more. This information must remain intact.
*/
require_once('../../common.php');
require_once('class.active_user.php');

//////////////////////////////////////////////////////////////////
// Verify Session or Key
//////////////////////////////////////////////////////////////////
checkSession();
?>
<label><?php i18n("Active Users"); ?></label>
<div id="project-wrapper">
<table width="100%">
<?
    $activity = new ActiveUsers;
    if($activity->listOpenFiles())
    {
        $data = $activity->listOpenFiles();
        foreach($data as $user => $files)
        {
            echo "<tr>";
            echo "<td style=\"text-align:center\">";
                echo ucfirst($user);
            echo "</td>";
            echo "</tr>";
            $i = 0;
            while($i <= count($files)-1){
                echo "<tr><td>";
//                echo "<a href=\"javascript:codiad.filemanager.openfile('".$files[$i]. "', true)\" onclick=\"codiad.filemanager.openfile('". $files[$i]."', true)>";
                echo $files[$i];
                echo "</a>";
                echo "</td></tr>";
                $i++;
            }
        }
        echo "</table>";
    }
    else
    {
        echo "No Active Users or no files have been opened"; 
    }
?>
</div>