<?php
for ($i = 1; $i <= 100; $i+=2) {
    echo "$i, ";      เลขคี่
}
echo "<br>";
?>
<?php
for ($i = 0; $i <= 100; $i +=2) {
    echo "$i, ";
}
echo "<br>";
?>




<!-- <?php
    $date = 25;
    $month = 'เมษายน';
    $year = 2550-543;

echo "วันที่ $date ";
echo "เดือน $month ";
echo "ค.ศ $year ";
?>
<?php
$h=6;
for($i=1;$i<=6;$i++){
echo "<font size=$h> Hello World"."<br />";
$h--;
}
?>
<?php
$s=array(65,85,40);
echo " Tom's score = ".$s[0];
echo " <Br>Jack's score = ".$s[1];
echo " <br>Bell's score = ".$s[2];
echo "<br>";

for($n=0;$n<3;$n++)
{

if( $s[$n]>=85)
$grade='A';
else
if( $s[$n]>=65)
$grade='B';
else
if( $s[$n]>=45)
$grade='C';
else
$grade='D';

echo " Grade =".$grade."<br>";

}

?>
<?php

$student[0] = 75;
$student[1] = 50;
$student[2] = 55;
$student[3] = 70;
$student[4] = 80;
$student[5] = 90;
$student[6] = 100;
$student[7] = 60;
$student[8] = 65;
$student[9] = 40;

xgrade($student[0]);
xgrade($student[1]);
xgrade($student[2]);
xgrade($student[3]);
xgrade($student[4]);
xgrade($student[5]);
xgrade($student[6]);
xgrade($student[7]);
xgrade($student[8]);
xgrade($student[9]);

function xgrade($point)
{
    if ($point > 79) echo 'A';
    if ($point > 69 AND $point < 80) echo 'B';
    if ($point > 59 AND $point < 70) echo 'C';
    if ($point > 49 AND $point < 60) echo 'D';
    if ($point < 50) echo 'F';
}

?>

<?php

$score = array("45", "50", "40", "65", "78", "85", "99", "25", "33", "72");
$c = count($score);
for($i=0;$i<$c;$i++)
{
if (($score[$i] >=80) && ($score[$i]<=100))	
{	
echo "ได้เกรด A<br>";	
}

elseif (($score[$i] >="70") && ($score[$i]<="79"))
{	
echo "ได้เกรด B<br>";	
}

elseif (($score[$i] >="60") && ($score[$i]<="69"))
{	
echo "ได้เกรด C<br>";	
}

elseif (($score[$i] >="50") && ($score[$i]<="59"))
{	
echo "ได้เกรด D<br>";	
}
else
{	
echo "ได้เกรด F<br>";	
}

}
?>

<?php
for ($i=1; $i < 100 ; $i++)
{
echo $i." ".pow($i+2);
// ." ".pow($i,3)."<br>";
}
?> -->
<?php

$firstname = $_POST['text_firstname'];
echo
$name = $_POST['text_name'];
$lastname = $_POST['text_lastnameM'];
$sex = $_POST['text_sex'];
$birthdate = $_POST['text_birthdate'];
$address = $_POST['text_address'];
$tel = $_POST['text_tel'];
$email = $_POST['text_email'];
$user = $_POST['txt_username'];
$password = $_POST['txt_password'];
?>
<?php
$SQL = "insert into tbl_member"
if($Query)
    echo""