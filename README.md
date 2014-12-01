addSubtractMonth
================

Add And Subtract Month Php Function

Its just a simple function that can add or subtract month from date given
i create this function because the simple date('Y-m-d',strtotime('+1 Month')) or date('Y-m-d',strtotime('-2 Month')) 
is not give the right date 
e.g if i set date 2014-12-30 then add 2 months then the date i get is 2015-03-02 not 2014-02-28


How to Use
=================

Just simply 
 - require_once('function.php');
 - or you can copy the function in function.php
and call the class like 
 - $tweak = new tweakMonth();
then call the function
 - $tweak->addSubtractMonth(date('Y-m-d'),1);
