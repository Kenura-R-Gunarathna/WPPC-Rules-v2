<?php
echo"<style>.good{padding:10px 20px 10px 20px;width:100%;border-width:2px;margin:10px 20px 10px 0px;background-color:#33cc33;border-color:#70db70;color:white;}.bad{padding:10px 20px 10px 20px;width:100%;border-width:2px;margin:10px 20px 10px 0px;background-color:#ff4d4d;border-color:#ff8080;color:white;}</style>";
$servername = htmlspecialchars($_POST['servername_name']);
$username = htmlspecialchars($_POST['username_name']);
$password = htmlspecialchars($_POST['password']);
$dbname = htmlspecialchars($_POST['database_name']);

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo"<br><h5>Functions</h5><br><ol>";
// Create database
$sql = "CREATE DATABASE $dbname";
if ($conn->query($sql) === TRUE) {
    echo "<li class='good'>01.&nbspDatabase created successfully</li>";
} else {
    echo "<li class='bad'>01.&nbspError creating database: " . $conn->error . "</li>";
}
$conn->close();

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE ACCOUNTS (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(100) NOT NULL,
password VARCHAR(100) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "<li class='good'>02.&nbspTable ACCOUNTS created successfully</li>";
} else {
    echo "<li class='bad'>02.&nbspError creating table: " . mysqli_error($conn) . "</li>";
}


// sql to create table
$sql = "CREATE TABLE ACCOUNT_DETAILS (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(100) NOT NULL,
password VARCHAR(100) NOT NULL,
first_name VARCHAR(100),
last_name VARCHAR(100),
picture_url VARCHAR(100),
possesion VARCHAR(100),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "<li class='good'>03.&nbspTable ACCOUNT_DETAILS created successfully</li>";
} else {
    echo "<li class='bad'>03.&nbspError creating table: " . mysqli_error($conn) . "</li>";
}

// sql to create table
$sql = "CREATE TABLE RULES (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
rule_number VARCHAR(100) NOT NULL,
content TEXT(100000) NOT NULL,
picture_url VARCHAR(100),
rule_type_img_url VARCHAR(100) NOT NULL,
rule_sinhala VARCHAR(100) NOT NULL,
rule_tamil VARCHAR(100) NOT NULL,
rule_english VARCHAR(100) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "<li class='good'>04.&nbspTable RULES created successfully</li>";
} else {
    echo "<li class='bad'>04.&nbspError creating table: " . mysqli_error($conn) . "</li>";
}

// sql to create table
$sql = "CREATE TABLE RULES_HYPERLINKS (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
rule_number VARCHAR(100) NOT NULL,
rule_hyperlinks TEXT(100000) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "<li class='good'>04.&nbspTable RULES_HYPERLINKS created successfully</li>";
} else {
    echo "<li class='bad'>04.&nbspError creating table: " . mysqli_error($conn) . "</li>";
}

// sql to create table
$sql = "CREATE TABLE SHARE_RULE (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
rule_number VARCHAR(100),
picture_url VARCHAR(100),
content TEXT(100000),
close VARCHAR(100),
rule_sinhala VARCHAR(100),
rule_tamil VARCHAR(100),
rule_english VARCHAR(100),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "<li class='good'>05.&nbspTable SHARE_RULE created successfully</li>";
} else {
    echo "<li class='bad'>05.&nbspError creating table: " . mysqli_error($conn) . "</li>";
}

// sql to create table
$sql = "CREATE TABLE INBOX (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(100) NOT NULL,
title TEXT(100000) NOT NULL,
email_from VARCHAR(100) NOT NULL,
details TEXT(100000),
read_or_not VARCHAR(100),
delete VARCHAR(100),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "<li class='good'>06.&nbspTable INBOX created successfully</li>";
} else {
    echo "<li class='bad'>06.&nbspError creating table: " . mysqli_error($conn) . "</li>";
}

// sql to create table
$sql = "CREATE TABLE OUTBOX (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(100) NOT NULL,
title TEXT(100000) NOT NULL,
email_to VARCHAR(100) NOT NULL,
details TEXT(100000),
read_or_not VARCHAR(100),
delete VARCHAR(100),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "<li class='good'>07.&nbspTable OUTBOX created successfully</li>";
} else {
    echo "<li class='bad'>07.&nbspError creating table: " . mysqli_error($conn) . "</li>";
}

// sql to create table
$sql = "CREATE TABLE SAVE (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(100) NOT NULL,
title TEXT(100000) NOT NULL,
email_to VARCHAR(100) NOT NULL,
details TEXT(100000),
read_or_not VARCHAR(100),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "<li class='good'>08.&nbspTable SAVE created successfully</li>";
} else {
    echo "<li class='bad'>08.&nbspError creating table: " . mysqli_error($conn) . "</li>";
}

// sql to create table
$sql = "CREATE TABLE TRASH (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(100) NOT NULL,
title TEXT(100000) NOT NULL,
email_to VARCHAR(100) NOT NULL,
details TEXT(100000),
read_or_not VARCHAR(100),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "<li class='good'>09.&nbspTable TRASH created successfully</li>";
} else {
    echo "<li class='bad'>09.&nbspError creating table: " . mysqli_error($conn) . "</li>";
}

// sql to create table
$sql = "CREATE TABLE SETTINGS (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
row_1_color VARCHAR(100) NOT NULL,
row_2_color VARCHAR(100) NOT NULL,
row_3_color VARCHAR(100) NOT NULL,
normal_body_color VARCHAR(100),
bg_color VARCHAR(100),
mail_header_color VARCHAR(100),
mail_body_color VARCHAR(100),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "<li class='good'>10.&nbspTable SETTINGS created successfully</li>";
} else {
    echo "<li class='bad'>10.&nbspError creating table: " . mysqli_error($conn) . "</li>";
}

// sql to create table
$sql = "CREATE TABLE ALERT_SAVE (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(100) NOT NULL,
icon VARCHAR(100) NOT NULL,
bg_color VARCHAR(100) NOT NULL,
title TEXT(100000) NOT NULL,
close VARCHAR(100),
details TEXT(100000),
files VARCHAR(100),
duration VARCHAR(100) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "<li class='good'>11.&nbspTable ALERT_SAVE created successfully</li>";
} else {
    echo "<li class='bad'>11.&nbspError creating table: " . mysqli_error($conn) . "</li>";
}

// sql to create table
$sql = "CREATE TABLE ALERT_REFUSE (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(100) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "<li class='good'>12.&nbspTable ALERT_REFUSE created successfully</li>";
} else {
    echo "<li class='bad'>12.&nbspError creating table: " . mysqli_error($conn) . "</li>";
}

// sql to create table
$sql = "CREATE TABLE search_for_help (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
search_for_help_col VARCHAR(100) NOT NULL,
search_for_help_url VARCHAR(100) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "<li class='good'>13.&nbspTable search_for_help created successfully</li>";
} else {
    echo "<li class='bad'>13.&nbspError creating table: " . mysqli_error($conn) . "</li>";
}

// sql to insert data to search_for_help
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('What is WPPC Rules', 'index3.php')";
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('Benifits', 'index4.php')";
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('Features', 'index8.php')";
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('Get started', 'index9.php')";
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('Custom log in', 'index10.html')";
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('Advanced log in', 'index11.html')";
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('Dashboard', 'index12.html')";
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('Home panel', 'index13.html')";
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('Search', 'index14.html')";
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('Text search', 'index15.html')";
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('Voice search', 'index16.html')";
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('Books', 'index17.html')";
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('Sinhala book', 'index18.html')";
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('Tamil book', 'index19.html')";
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('English book', 'index20.html')";
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('First page', 'index21.html')";
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('Content', 'index22.html')";
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('Download the books', 'index23.html')";
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('Print the books', 'index24.html')";
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('Settings', 'index25.html')";
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('Massage', 'index26.html')";
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('Inbox', 'index27.html')";
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('Outbox', 'index28.html')";
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('Compose', 'index29.html')";
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('Notifications', 'index31.html')";
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('Share rules', 'index32.html')";
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('Quick massages', 'index33.html')";
$sql = "INSERT INTO search_for_help (search_for_help_col, search_for_help_url)
VALUES ('Trash', 'index30.html')";

if (mysqli_query($conn, $sql)) {
    echo "<li class='good'>14.&nbspTable search_for_help inset data successfully</li>";
} else {
    echo "<li class='bad'>14.&nbspError inseting data to table: " . mysqli_error($conn) . "</li>";
}

mysqli_close($conn);

echo"</ol><br><p align='center'style='color:#ff0055;'>There must be 14 green color masages to fulfil the complete installation!</p><br>";

$dbname_myfile = fopen("../data/txt/dbname.txt", "w") or die("<br><br>Unable to open dbname.txt!");
$dbname_txt = $dbname;
fwrite($dbname_myfile, $dbname_txt);
fclose($dbname_myfile);

$servername_myfile = fopen("../data/txt/servername.txt", "w") or die("<br><br>Unable to open servername.txt!");
$servername_txt = $servername;
fwrite($servername_myfile, $servername_txt);
fclose($servername_myfile);

$password_myfile = fopen("../data/txt/password.txt", "w") or die("<br><br>Unable to open password.txt!");
$password_txt = $password;
fwrite($password_myfile, $password_txt);
fclose($password_myfile);

$username_myfile = fopen("../data/txt/username.txt", "w") or die("<br><br>Unable to open username.txt!");
$username_txt = $username;
fwrite($username_myfile, $username_txt);
fclose($username_myfile);
?>