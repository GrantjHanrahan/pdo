<?php 

/**
 * This file will be used to store functions for later use
 * escape() function will be used to Escape HTML for output
 */

 function escape($html) {
     return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
 }
//  With this function, any variable can be wrapped in escape() and the HTML entities will be protected