<?php
$dblocation = "mysql.hostinger.com.ua";
$dbname = "photos";
$dbuser = "u300663046_data1";
$dbpasswd = "101013born";
$dbcnx = @mysql_connect($dblocation,$dbuser,$dbpasswd);
if (!$dbcnx) 
{
  echo( "<P>� ��������� ������ ������ ���� ������ �� ��������, ������� 
            ���������� ����������� �������� ����������.</P>" );
  exit();
}
if (!@mysql_select_db($dbname, $dbcnx)) 
{
  echo( "<P>� ��������� ������ ���� ������ �� ��������, �������
            ���������� ����������� �������� ����������.</P>" );
  exit();
}
?>