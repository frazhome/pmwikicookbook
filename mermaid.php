<?php if (!defined('PmWiki')) exit();

/*
 * Enable the use of mermaid graphing solution https://mermaid-js.github.io/mermaid/#/
 *
 * This program is free software; you can redistribute it
 * and/or modify it under the terms of the GNU General
 * Public License as published by the Free Software
 * Foundation; either version 3 of the License, or (at your
 * option) any later version. Available at
 * https://www.gnu.org/licenses/gpl.txt
 *
 * Copyright 2020 franz pfoertsch (franz.pfoertsch@gmail.com)
 * Version 20201215
 */

$RecipeInfo['mermaid']['Version'] = '20201215';

//---------------- Global Configuration Variables ----------------
global $PubDirUrl;
global $MermaidSrvUrl;
SDV($MermaidSrvUrl, "https://unpkg.com/mermaid@8.8.4/dist/mermaid.min.js");

   Markup(
   'mermaid',
   'fulltext',
   '/\\(:mermaid:\\)(.*?)\\(:mermaidend:\\)/msi',
   "mermaid"
   );

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

