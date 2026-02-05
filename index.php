<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>SQL Functions Demo</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        a { text-decoration: none; color: blue; }
    </style>
</head>
<body>

<center><h1>SQL Functions Demonstration</h1></center>

<table>
     <tr>
     <th>SQL Function</th>
         <th>Description</th>
           <th>Example Code</th>
              <th>Example Output</th>
         </tr>

<tr>
<td>ASCII()</td>
   <td>ASCII value of first character</td>
   <td>SELECT ASCII(first_name) FROM employees;</td>
  <td><a href="template.php?title=ASCII&q=SELECT ASCII(first_name) FROM employees">View Output</a></td>
</tr>

<tr>
   <td>CHAR_LENGTH()</td>
  <td>Length of first name</td>
  <td>SELECT CHAR_LENGTH(first_name) FROM employees;</td>
    <td><a href="template.php?title=CHAR_LENGTH&q=SELECT CHAR_LENGTH(first_name) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>CHARACTER_LENGTH()</td>
  <td>Same as CHAR_LENGTH()</td>
  <td>SELECT CHARACTER_LENGTH(first_name) FROM employees;</td>
  <td><a href="template.php?title=CHARACTER_LENGTH&q=SELECT CHARACTER_LENGTH(first_name) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>CONCAT()</td>
  <td>Combine first and last name</td>
  <td>SELECT CONCAT(first_name,' ',last_name) FROM employees;</td>
  <td><a href="template.php?title=CONCAT&q=SELECT CONCAT(first_name,' ',last_name) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>CONCAT_WS()</td>
  <td>Combine names with separator</td>
  <td>SELECT CONCAT_WS('-',first_name,last_name) FROM employees;</td>
  <td><a href="template.php?title=CONCAT_WS&q=SELECT CONCAT_WS('-',first_name,last_name) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>FIELD()</td>
  <td>Position of value in list</td>
  <td>SELECT FIELD('Sales', department,'IT','Sales','HR') FROM employees;</td>
  <td><a href="template.php?title=FIELD&q=SELECT FIELD('Sales', department,'IT','Sales','HR') FROM employees">View Output</a></td>
</tr>

<tr>
  <td>FIND_IN_SET()</td>
  <td>Position of value in comma list</td>
  <td>SELECT FIND_IN_SET(department,'IT,Sales,HR') FROM employees;</td>
  <td><a href="template.php?title=FIND_IN_SET&q=SELECT FIND_IN_SET(department,'IT,Sales,HR') FROM employees">View Output</a></td>
</tr>

<tr>
  <td>FORMAT()</td>
  <td>Format salary with 2 decimals</td>
  <td>SELECT FORMAT(salary,2) FROM employees;</td>
  <td><a href="template.php?title=FORMAT&q=SELECT FORMAT(salary,2) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>INSERT()</td>
  <td>Insert string into first_name</td>
  <td>SELECT INSERT(first_name,2,0,'X') FROM employees;</td>
  <td><a href="template.php?title=INSERT&q=SELECT INSERT(first_name,2,0,'X') FROM employees">View Output</a></td>
</tr>

<tr>
  <td>INSTR()</td>
  <td>Position of substring</td>
  <td>SELECT INSTR(first_name,'a') FROM employees;</td>
  <td><a href="template.php?title=INSTR&q=SELECT INSTR(first_name,'a') FROM employees">View Output</a></td>
</tr>

<tr>
  <td>LCASE()</td>
  <td>Lowercase first name</td>
  <td>SELECT LCASE(first_name) FROM employees;</td>
  <td><a href="template.php?title=LCASE&q=SELECT LCASE(first_name) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>LEFT()</td>
  <td>First 2 letters</td>
  <td>SELECT LEFT(first_name,2) FROM employees;</td>
  <td><a href="template.php?title=LEFT&q=SELECT LEFT(first_name,2) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>LENGTH()</td>
  <td>Length of first name</td>
  <td>SELECT LENGTH(first_name) FROM employees;</td>
  <td><a href="template.php?title=LENGTH&q=SELECT LENGTH(first_name) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>LOCATE()</td>
  <td>Position of substring</td>
  <td>SELECT LOCATE('a',first_name) FROM employees;</td>
  <td><a href="template.php?title=LOCATE&q=SELECT LOCATE('a',first_name) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>LOWER()</td>
  <td>Lowercase first name</td>
  <td>SELECT LOWER(first_name) FROM employees;</td>
  <td><a href="template.php?title=LOWER&q=SELECT LOWER(first_name) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>LPAD()</td>
  <td>Pad left to 10 chars</td>
  <td>SELECT LPAD(first_name,10,'*') FROM employees;</td>
  <td><a href="template.php?title=LPAD&q=SELECT LPAD(first_name,10,'*') FROM employees">View Output</a></td>
</tr>

<tr>
  <td>LTRIM()</td>
  <td>Trim left spaces</td>
  <td>SELECT LTRIM(first_name) FROM employees;</td>
  <td><a href="template.php?title=LTRIM&q=SELECT LTRIM(first_name) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>MID()</td>
  <td>Same as SUBSTRING()</td>
  <td>SELECT MID(first_name,2,3) FROM employees;</td>
   <td><a href="template.php?title=MID&q=SELECT MID(first_name,2,3) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>POSITION()</td>
  <td>Position of substring</td>
  <td>SELECT POSITION('a' IN first_name) FROM employees;</td>
  <td><a href="template.php?title=POSITION&q=SELECT POSITION('a' IN first_name) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>REPEAT()</td>
  <td>Repeat first name 2 times</td>
  <td>SELECT REPEAT(first_name,2) FROM employees;</td>
  <td><a href="template.php?title=REPEAT&q=SELECT REPEAT(first_name,2) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>REPLACE()</td> 
  <td>Replace a with @</td>
  <td>SELECT REPLACE(first_name,'a','@') FROM employees;</td>
  <td><a href="template.php?title=REPLACE&q=SELECT REPLACE(first_name,'a','@') FROM employees">View Output</a></td>
</tr>

<tr>
  <td>REVERSE()</td>
  <td>Reverse first name</td>
  <td>SELECT REVERSE(first_name) FROM employees;</td>
  <td><a href="template.php?title=REVERSE&q=SELECT REVERSE(first_name) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>RIGHT()</td>
  <td>Last 2 letters</td>
  <td>SELECT RIGHT(first_name,2) FROM employees;</td>
  <td><a href="template.php?title=RIGHT&q=SELECT RIGHT(first_name,2) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>RPAD()</td>
  <td>Pad right to 10 chars</td>
  <td>SELECT RPAD(first_name,10,'*') FROM employees;</td>
  <td><a href="template.php?title=RPAD&q=SELECT RPAD(first_name,10,'*') FROM employees">View Output</a></td>
</tr>

<tr>
  <td>RTRIM()</td>
  <td>Trim right spaces</td>
  <td>SELECT RTRIM(first_name) FROM employees;</td>
  <td><a href="template.php?title=RTRIM&q=SELECT RTRIM(first_name) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>SPACE()</td>
  <td>Returns spaces</td>
  <td>SELECT CONCAT(first_name,SPACE(5),last_name) FROM employees;</td>
  <td><a href="template.php?title=SPACE&q=SELECT CONCAT(first_name,SPACE(5),last_name) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>STRCMP()</td>
  <td>Compare two strings</td>
  <td>SELECT STRCMP(first_name,last_name) FROM employees;</td>
  <td><a href="template.php?title=STRCMP&q=SELECT STRCMP(first_name,last_name) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>SUBSTR()</td>
  <td>Substring first name</td>
  <td>SELECT SUBSTR(first_name,2,3) FROM employees;</td>
  <td><a href="template.php?title=SUBSTR&q=SELECT SUBSTR(first_name,2,3) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>SUBSTRING()</td>
  <td>Same as SUBSTR()</td>
  <td>SELECT SUBSTRING(first_name,2,3) FROM employees;</td>
  <td><a href="template.php?title=SUBSTRING&q=SELECT SUBSTRING(first_name,2,3) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>SUBSTRING_INDEX()</td>
  <td>Substring before separator</td>
  <td>SELECT SUBSTRING_INDEX(CONCAT(first_name,' ',last_name),' ',1) FROM employees;</td>
  <td><a href="template.php?title=SUBSTRING_INDEX&q=SELECT SUBSTRING_INDEX(CONCAT(first_name,' ',last_name),' ',1) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>TRIM()</td>
  <td>Trim spaces</td>
  <td>SELECT TRIM(first_name) FROM employees;</td>
  <td><a href="template.php?title=TRIM&q=SELECT TRIM(first_name) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>UCASE()</td>
  <td>Uppercase first name</td>
  <td>SELECT UCASE(first_name) FROM employees;</td>
  <td><a href="template.php?title=UCASE&q=SELECT UCASE(first_name) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>UPPER()</td>
  <td>Uppercase first name</td>
  <td>SELECT UPPER(first_name) FROM employees;</td>
  <td><a href="template.php?title=UPPER&q=SELECT UPPER(first_name) FROM employees">View Output</a></td>
</tr>


<tr>
  <td>ABS()</td>
  <td>Absolute value of salary difference</td>
  <td>SELECT ABS(salary-35000) FROM employees;</td>
  <td><a href="template.php?title=ABS&q=SELECT ABS(salary-35000) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>ACOS()</td>
  <td>Arc cosine of 1</td>
  <td>SELECT ACOS(1);</td>
  <td><a href="template.php?title=ACOS&q=SELECT ACOS(1)">View Output</a></td>
</tr>

<tr>
  <td>ASIN()</td>
  <td>Arc sine of 0.5</td>
  <td>SELECT ASIN(0.5);</td>
  <td><a href="template.php?title=ASIN&q=SELECT ASIN(0.5)">View Output</a></td>
</tr>

<tr>
  <td>ATAN()</td>
  <td>Arc tangent of 1</td>
  <td>SELECT ATAN(1);</td>
  <td><a href="template.php?title=ATAN&q=SELECT ATAN(1)">View Output</a></td>
</tr>

<tr>
  <td>ATAN2()</td>
  <td>Arc tangent of y/x</td>
  <td>SELECT ATAN2(1,1);</td>
  <td><a href="template.php?title=ATAN2&q=SELECT ATAN2(1,1)">View Output</a></td>
</tr>

<tr>
  <td>CEIL()/CEILING()</td>
  <td>Ceiling of 5.7</td>
  <td>SELECT CEILING(5.7);</td>
  <td><a href="template.php?title=CEIL&q=SELECT CEILING(5.7)">View Output</a></td>
</tr>

<tr>
  <td>COS()</td>
  <td>Cosine of 0</td>
  <td>SELECT COS(0);</td>
  <td><a href="template.php?title=COS&q=SELECT COS(0)">View Output</a></td>
</tr>

<tr>
  <td>COT()</td>
  <td>Cotangent of 1</td>
  <td>SELECT COT(1);</td>
  <td><a href="template.php?title=COT&q=SELECT COT(1)">View Output</a></td>
</tr>

<tr>
  <td>DEGREES()</td>
  <td>Convert radian to degree</td>
  <td>SELECT DEGREES(PI()/2);</td>
  <td><a href="template.php?title=DEGREES&q=SELECT DEGREES(PI()/2)">View Output</a></td>
</tr>

<tr>
  <td>DIV()</td>
 <td>Integer division</td>
   <td>SELECT 10 DIV 3;</td>
  <td><a href="template.php?title=DIV&q=SELECT 10 DIV 3">View Output</a></td>
</tr>

<tr>
  <td>EXP()</td>
  <td>Exponential</td>
  <td>SELECT EXP(1);</td>
  <td><a href="template.php?title=EXP&q=SELECT EXP(1)">View Output</a></td>
</tr>

<tr>
  <td>FLOOR()</td>
  <td>Floor 5.7</td>
  <td>SELECT FLOOR(5.7);</td>
  <td><a href="template.php?title=FLOOR&q=SELECT FLOOR(5.7)">View Output</a></td>
</tr>

<tr>
  <td>GREATEST()</td>
  <td>Greatest of 10,20,15</td>
  <td>SELECT GREATEST(10,20,15);</td>
  <td><a href="template.php?title=GREATEST&q=SELECT GREATEST(10,20,15)">View Output</a></td>
</tr>

<tr>
  <td>LEAST()</td>
  <td>Smallest of 10,20,15</td>
  <td>SELECT LEAST(10,20,15);</td>
  <td><a href="template.php?title=LEAST&q=SELECT LEAST(10,20,15)">View Output</a></td>
</tr>

<tr>
  <td>LN()</td>
  <td>Natural log of 2</td>
  <td>SELECT LN(2);</td>
  <td><a href="template.php?title=LN&q=SELECT LN(2)">View Output</a></td>
</tr>

<tr>
  <td>LOG()</td>
 <td>Log base e of 10</td>
   <td>SELECT LOG(10);</td>
  <td><a href="template.php?title=LOG&q=SELECT LOG(10)">View Output</a></td>
</tr>

<tr>
  <td>LOG10()</td>
  <td>Log base 10 of 100</td>
  <td>SELECT LOG10(100);</td>
  <td><a href="template.php?title=LOG10&q=SELECT LOG10(100)">View Output</a></td>
</tr>

<tr>
  <td>LOG2()</td>
  <td>Log base 2 of 8</td>
  <td>SELECT LOG2(8);</td>
  <td><a href="template.php?title=LOG2&q=SELECT LOG2(8)">View Output</a></td>
</tr>

<tr>
  <td>MOD()</td>
  <td>Modulo 10 % 3</td>
  <td>SELECT MOD(10,3);</td>
  <td><a href="template.php?title=MOD&q=SELECT MOD(10,3)">View Output</a></td>
</tr>

<tr>
  <td>PI()</td>
  <td>PI value</td>
  <td>SELECT PI();</td>
  <td><a href="template.php?title=PI&q=SELECT PI()">View Output</a></td>
</tr>

<tr>
  <td>POW()/POWER()</td>
  <td>2^3</td>
  <td>SELECT POWER(2,3);</td>
  <td><a href="template.php?title=POWER&q=SELECT POWER(2,3)">View Output</a></td>
</tr>

<tr>
  <td>RAND()</td>
  <td>Random number</td>
  <td>SELECT RAND();</td>
  <td><a href="template.php?title=RAND&q=SELECT RAND()">View Output</a></td>
</tr>

<tr>
  <td>ROUND()</td>
  <td>Round 5.678 to 2 decimals</td>
  <td>SELECT ROUND(5.678,2);</td>
  <td><a href="template.php?title=ROUND&q=SELECT ROUND(5.678,2)">View Output</a></td>
</tr>

<tr>
  <td>SIGN()</td>
  <td>Sign of -15</td>
  <td>SELECT SIGN(-15);</td>
  <td><a href="template.php?title=SIGN&q=SELECT SIGN(-15)">View Output</a></td>
</tr>

<tr>
  <td>SIN()</td>
  <td>Sine of PI()/2</td>
  <td>SELECT SIN(PI()/2);</td>
  <td><a href="template.php?title=SIN&q=SELECT SIN(PI()/2)">View Output</a></td>
</tr>

<tr>
  <td>SQRT()</td>
  <td>Square root of 16</td>
  <td>SELECT SQRT(16);</td>
  <td><a href="template.php?title=SQRT&q=SELECT SQRT(16)">View Output</a></td>
</tr>

<tr>
  <td>SUM()</td>
  <td>Sum of salaries</td>
  <td>SELECT SUM(salary) FROM employees;</td>
  <td><a href="template.php?title=SUM&q=SELECT SUM(salary) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>TAN()</td>
  <td>Tangent of PI()/4</td>
  <td>SELECT TAN(PI()/4);</td>
  <td><a href="template.php?title=TAN&q=SELECT TAN(PI()/4)">View Output</a></td>
</tr>

<tr>
  <td>TRUNCATE()</td>
  <td>Truncate 5.678 to 2 decimals</td>
  <td>SELECT TRUNCATE(5.678,2);</td>
  <td><a href="template.php?title=TRUNCATE&q=SELECT TRUNCATE(5.678,2)">View Output</a></td>
</tr>

<tr>
   <td>ADDDATE()</td>
   <td>Add 10 days to hire_date</td>
   <td>SELECT ADDDATE(hire_date,10) FROM employees;</td>
   <td><a href="template.php?title=ADDDATE&q=SELECT ADDDATE(hire_date,10) FROM employees">View Output</a></td>
</tr>

<tr>
   <td>ADDTIME()</td>
   <td>Add 1 hour 30 min to current time</td>
   <td>SELECT ADDTIME(CURTIME(),'01:30:00');</td>
   <td><a href="template.php?title=ADDTIME&q=SELECT ADDTIME(CURTIME(),'01:30:00')">View Output</a></td>
</tr>

<tr>
   <td>CURDATE()</td>
   <td>Current date</td>
   <td>SELECT CURDATE();</td>
   <td><a href="template.php?title=CURDATE&q=SELECT CURDATE()">View Output</a></td>
</tr>

<tr>
   <td>CURRENT_DATE()</td>
   <td>Same as CURDATE()</td>
   <td>SELECT CURRENT_DATE();</td>
   <td><a href="template.php?title=CURRENT_DATE&q=SELECT CURRENT_DATE()">View Output</a></td>
</tr>

<tr>
   <td>CURRENT_TIME()</td>
   <td>Current time</td>
   <td>SELECT CURRENT_TIME();</td>
   <td><a href="template.php?title=CURRENT_TIME&q=SELECT CURRENT_TIME()">View Output</a></td>
</tr>

<tr>
   <td>CURRENT_TIMESTAMP()</td>
   <td>Current timestamp</td>
   <td>SELECT CURRENT_TIMESTAMP();</td>
   <td><a href="template.php?title=CURRENT_TIMESTAMP&q=SELECT CURRENT_TIMESTAMP()">View Output</a></td>
</tr>

<tr>
   <td>CURTIME()</td>
   <td>Current time</td>
   <td>SELECT CURTIME();</td>
   <td><a href="template.php?title=CURTIME&q=SELECT CURTIME()">View Output</a></td>
</tr>

<tr>
  <td>DATE()</td>
  <td>Extract date from timestamp</td>
  <td>SELECT DATE(hire_date) FROM employees;</td>
  <td><a href="template.php?title=DATE&q=SELECT DATE(hire_date) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>DATEDIFF()</td>
  <td>Days between hire_date and today</td>
  <td>SELECT DATEDIFF(CURDATE(), hire_date) FROM employees;</td>
  <td><a href="template.php?title=DATEDIFF&q=SELECT DATEDIFF(CURDATE(), hire_date) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>DATE_ADD()</td>
  <td>Add 1 month to hire_date</td>
  <td>SELECT DATE_ADD(hire_date, INTERVAL 1 MONTH) FROM employees;</td>
  <td><a href="template.php?title=DATE_ADD&q=SELECT DATE_ADD(hire_date, INTERVAL 1 MONTH) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>DATE_FORMAT()</td>
  <td>Format hire_date</td>
  <td>SELECT DATE_FORMAT(hire_date,'%W %M %Y') FROM employees;</td>
  <td><a href="template.php?title=DATE_FORMAT&q=SELECT DATE_FORMAT(hire_date,'%W %M %Y') FROM employees">View Output</a></td>
</tr>

<tr>
  <td>DATE_SUB()</td>
  <td>Subtract 10 days from hire_date</td>
  <td>SELECT DATE_SUB(hire_date, INTERVAL 10 DAY) FROM employees;</td>
  <td><a href="template.php?title=DATE_SUB&q=SELECT DATE_SUB(hire_date, INTERVAL 10 DAY) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>DAY()</td>
  <td>Day of month from hire_date</td>
  <td>SELECT DAY(hire_date) FROM employees;</td>
  <td><a href="template.php?title=DAY&q=SELECT DAY(hire_date) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>DAYNAME()</td>
  <td>Weekday name of hire_date</td>
  <td>SELECT DAYNAME(hire_date) FROM employees;</td>
  <td><a href="template.php?title=DAYNAME&q=SELECT DAYNAME(hire_date) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>DAYOFMONTH()</td>
  <td>Day of month</td>
  <td>SELECT DAYOFMONTH(hire_date) FROM employees;</td>
  <td><a href="template.php?title=DAYOFMONTH&q=SELECT DAYOFMONTH(hire_date) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>DAYOFWEEK()</td>
  <td>Weekday number</td>
  <td>SELECT DAYOFWEEK(hire_date) FROM employees;</td>
  <td><a href="template.php?title=DAYOFWEEK&q=SELECT DAYOFWEEK(hire_date) FROM employees">View Output</a></td>
</tr>

<tr> 
  <td>DAYOFYEAR()</td>
  <td>Day number of year</td>
  <td>SELECT DAYOFYEAR(hire_date) FROM employees;</td>
  <td><a href="template.php?title=DAYOFYEAR&q=SELECT DAYOFYEAR(hire_date) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>EXTRACT()</td>
  <td>Extract year from hire_date</td>
  <td>SELECT EXTRACT(YEAR FROM hire_date) FROM employees;</td>
  <td><a href="template.php?title=EXTRACT&q=SELECT EXTRACT(YEAR FROM hire_date) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>HOUR()</td>
  <td>Hour from CURRENT_TIME()</td>
  <td>SELECT HOUR(CURRENT_TIME());</td>
  <td><a href="template.php?title=HOUR&q=SELECT HOUR(CURRENT_TIME())">View Output</a></td>
</tr>

<tr>
  <td>MINUTE()</td>
  <td>Minute from CURRENT_TIME()</td>
  <td>SELECT MINUTE(CURRENT_TIME());</td>
  <td><a href="template.php?title=MINUTE&q=SELECT MINUTE(CURRENT_TIME())">View Output</a></td>
</tr>

<tr>
  <td>MONTH()</td>
  <td>Month number from hire_date</td>
  <td>SELECT MONTH(hire_date) FROM employees;</td>
  <td><a href="template.php?title=MONTH&q=SELECT MONTH(hire_date) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>MONTHNAME()</td>
  <td>Month name from hire_date</td>
  <td>SELECT MONTHNAME(hire_date) FROM employees;</td>
  <td><a href="template.php?title=MONTHNAME&q=SELECT MONTHNAME(hire_date) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>NOW()</td>
  <td>Current datetime</td>
  <td>SELECT NOW();</td>
  <td><a href="template.php?title=NOW&q=SELECT NOW()">View Output</a></td>
</tr>

<tr>  
  <td>QUARTER()</td>
  <td>Quarter of hire_date</td>
  <td>SELECT QUARTER(hire_date) FROM employees;</td>
  <td><a href="template.php?title=QUARTER&q=SELECT QUARTER(hire_date) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>SECOND()</td>
  <td>Second of CURRENT_TIME()</td>
  <td>SELECT SECOND(CURRENT_TIME());</td>
  <td><a href="template.php?title=SECOND&q=SELECT SECOND(CURRENT_TIME())">View Output</a></td>
</tr>

<tr>
  <td>SEC_TO_TIME()</td>
  <td>Convert seconds to time</td>
  <td>SELECT SEC_TO_TIME(3600);</td>
  <td><a href="template.php?title=SEC_TO_TIME&q=SELECT SEC_TO_TIME(3600)">View Output</a></td>
</tr>

<tr>
  <td>STR_TO_DATE()</td>
  <td>Convert string to date</td>
  <td>SELECT STR_TO_DATE('2026-02-05','%Y-%m-%d');</td>
  <td><a href="template.php?title=STR_TO_DATE&q=SELECT STR_TO_DATE('2026-02-05','%Y-%m-%d')">View Output</a></td>
</tr>

<tr>
  <td>SUBDATE()</td>
  <td>Subtract 5 days from hire_date</td>
  <td>SELECT SUBDATE(hire_date,5) FROM employees;</td>
  <td><a href="template.php?title=SUBDATE&q=SELECT SUBDATE(hire_date,5) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>SYSDATE()</td>
  <td>Current system datetime</td>
  <td>SELECT SYSDATE();</td>
  <td><a href="template.php?title=SYSDATE&q=SELECT SYSDATE()">View Output</a></td>
</tr>

<tr>
  <td>TIME()</td>
  <td>Extract time from timestamp</td>
  <td>SELECT TIME(NOW());</td>
  <td><a href="template.php?title=TIME&q=SELECT TIME(NOW())">View Output</a></td>
</tr>

<tr>
  <td>TIME_FORMAT()</td>
  <td>Format current time</td>
  <td>SELECT TIME_FORMAT(CURTIME(),'%H:%i:%s');</td>
  <td><a href="template.php?title=TIME_FORMAT&q=SELECT TIME_FORMAT(CURTIME(),'%H:%i:%s')">View Output</a></td>
</tr>

<tr>
  <td>TIMEDIFF()</td>
  <td>Difference between two times</td>
  <td>SELECT TIMEDIFF('12:30:00','10:00:00');</td>
  <td><a href="template.php?title=TIMEDIFF&q=SELECT TIMEDIFF('12:30:00','10:00:00')">View Output</a></td>
</tr>

<tr>
  <td>TIMESTAMP()</td>
  <td>Combine date and time</td>
  <td>SELECT TIMESTAMP(CURDATE(),'12:00:00');</td>
  <td><a href="template.php?title=TIMESTAMP&q=SELECT TIMESTAMP(CURDATE(),'12:00:00')">View Output</a></td>
</tr>

<tr>
  <td>TO_DAYS()</td>
  <td>Convert date to days</td>
  <td>SELECT TO_DAYS(hire_date) FROM employees;</td>
  <td><a href="template.php?title=TO_DAYS&q=SELECT TO_DAYS(hire_date) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>WEEK()</td>
  <td>Week number of hire_date</td>
  <td>SELECT WEEK(hire_date) FROM employees;</td>
  <td><a href="template.php?title=WEEK&q=SELECT WEEK(hire_date) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>WEEKDAY()</td>
  <td>Weekday index</td>
  <td>SELECT WEEKDAY(hire_date) FROM employees;</td>
  <td><a href="template.php?title=WEEKDAY&q=SELECT WEEKDAY(hire_date) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>WEEKOFYEAR()</td>
  <td>Week of year</td>
  <td>SELECT WEEKOFYEAR(hire_date) FROM employees;</td>
  <td><a href="template.php?title=WEEKOFYEAR&q=SELECT WEEKOFYEAR(hire_date) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>YEAR()</td>
  <td>Year of hire_date</td>
  <td>SELECT YEAR(hire_date) FROM employees;</td>
  <td><a href="template.php?title=YEAR&q=SELECT YEAR(hire_date) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>YEARWEEK()</td>
  <td>Year and week number</td>
  <td>SELECT YEARWEEK(hire_date) FROM employees;</td>
  <td><a href="template.php?title=YEARWEEK&q=SELECT YEARWEEK(hire_date) FROM employees">View Output</a></td>
</tr>
<tr>
  <td>BIN()</td>
  <td>Convert number to binary</td>
  <td>SELECT BIN(10);</td>
  <td><a href="template.php?title=BIN&q=SELECT BIN(10)">View Output</a></td>
</tr>

<tr>
  <td>BINARY()</td>
  <td>Binary string comparison</td>
  <td>SELECT 'a' = BINARY 'A';</td>
  <td><a href="template.php?title=BINARY&q=SELECT 'a' = BINARY 'A'">View Output</a></td>
</tr>

<tr>
  <td>CASE</td>
  <td>Conditional statement example</td>
  <td>SELECT CASE WHEN salary>40000 THEN 'High' ELSE 'Low' END FROM employees;</td>
  <td><a href="template.php?title=CASE&q=SELECT CASE WHEN salary>40000 THEN 'High' ELSE 'Low' END FROM employees">View Output</a></td>
</tr>

<tr>
  <td>CAST()</td>
  <td>Convert salary to CHAR</td>
  <td>SELECT CAST(salary AS CHAR) FROM employees;</td>
  <td><a href="template.php?title=CAST&q=SELECT CAST(salary AS CHAR) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>COALESCE()</td>
  <td>Return first non-null value</td>
  <td>SELECT COALESCE(NULL,salary,0) FROM employees;</td>
  <td><a href="template.php?title=COALESCE&q=SELECT COALESCE(NULL,salary,0) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>CONNECTION_ID()</td>
  <td>Current connection ID</td>
  <td>SELECT CONNECTION_ID();</td>
  <td><a href="template.php?title=CONNECTION_ID&q=SELECT CONNECTION_ID()">View Output</a></td>
</tr>

<tr>
  <td>CONV()</td>
  <td>Convert 10 from decimal to binary</td>
  <td>SELECT CONV(10,10,2);</td>
  <td><a href="template.php?title=CONV&q=SELECT%20CONV(10,10,2)">View Output</a></td>
</tr>

<tr>
  <td>CONVERT()</td>
  <td>Convert salary to CHAR</td>
  <td>SELECT CONVERT(salary,CHAR) FROM employees;</td>
  <td><a href="template.php?title=CONVERT&q=SELECT%20CONVERT(salary,CHAR)%20FROM%20employees">View Output</a></td>
</tr>

<tr>
  <td>CURRENT_USER()</td>
  <td>Show current MySQL user</td>
  <td>SELECT CURRENT_USER();</td>
  <td><a href="template.php?title=CURRENT_USER&q=SELECT%20CURRENT_USER()">View Output</a></td>
</tr>


<tr>
  <td>DATABASE()</td>
  <td>Current database</td>
  <td>SELECT DATABASE();</td>
  <td><a href="template.php?title=DATABASE&q=SELECT DATABASE()">View Output</a></td>
</tr>

<tr>
  <td>IF()</td>
  <td>Conditional example</td>
  <td>SELECT IF(salary>40000,'High','Low') FROM employees;</td>
  <td><a href="template.php?title=IF&q=SELECT IF(salary>40000,'High','Low') FROM employees">View Output</a></td>
</tr>

<tr>
  <td>IFNULL()</td>
  <td>Return 0 if NULL</td>
  <td>SELECT IFNULL(NULL,salary) FROM employees;</td>
  <td><a href="template.php?title=IFNULL&q=SELECT IFNULL(NULL,salary) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>ISNULL()</td>
  <td>Check if value is NULL</td>
  <td>SELECT ISNULL(salary) FROM employees;</td>
  <td><a href="template.php?title=ISNULL&q=SELECT ISNULL(salary) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>LAST_INSERT_ID()</td>
  <td>Last auto-increment ID</td>
  <td>SELECT LAST_INSERT_ID();</td>
  <td><a href="template.php?title=LAST_INSERT_ID&q=SELECT LAST_INSERT_ID()">View Output</a></td>
</tr>

<tr>
  <td>NULLIF()</td>
  <td>Return NULL if equal</td>
  <td>SELECT NULLIF(salary,35000) FROM employees;</td>
  <td><a href="template.php?title=NULLIF&q=SELECT NULLIF(salary,35000) FROM employees">View Output</a></td>
</tr>

<tr>
  <td>SESSION_USER()</td>
  <td>Current session user</td>
  <td>SELECT SESSION_USER();</td>
  <td><a href="template.php?title=SESSION_USER&q=SELECT SESSION_USER()">View Output</a></td>
</tr>

<tr>
  <td>SYSTEM_USER()</td>
  <td>Current system user</td>
  <td>SELECT SYSTEM_USER();</td>
  <td><a href="template.php?title=SYSTEM_USER&q=SELECT SYSTEM_USER()">View Output</a></td>
</tr>

<tr>
  <td>USER()</td>
  <td>Current MySQL user</td>
  <td>SELECT USER();</td>
  <td><a href="template.php?title=USER&q=SELECT USER()">View Output</a></td>
          </tr>

 <tr>
  <td>VERSION()</td>
    <td>MySQL version</td>
       <td>SELECT VERSION();</td>
          <td><a href="template.php?title=VERSION&q=SELECT VERSION()">View Output</a></td>
            </tr> 
        </table>
      </body>
    </html>