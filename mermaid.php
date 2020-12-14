<?php   
$RecipeInfo['mermaid']['Version'] = '20201214';
   Markup(
   'mermaid',
   'fulltext',
   '/\\(:mermaid:\\)(.*?)\\(:mermaidend:\\)/msi',
   "mermaid"
   );

// Security check.
if (!defined('PmWiki')) exit();

//---------------- Global Configuration Variables ----------------
global $PubDirUrl;
global $MermaidSrvUrl;
SDV($MermaidSrvUrl, "https://unpkg.com/mermaid@8.8.4/dist/mermaid.min.js");

function mermaid ($m) {
  global $HTMLHeaderFmt;
  $HTMLHeaderFmt['mermaid'] = '
<script src="$MermaidSrvUrl"></script>';
   $output == "";
   $output .= '<div class="mermaid">';
   $output .= (str_replace(array('&lt;', '&gt;', '&'), array('<', '>', '&'), $m[1]));
   $output .= '</div>';
   return Keep($output);
};
?>
