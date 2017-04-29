<?php
$conn = new Mysqli($host, $usuario,$cont,$bdd);
if($conn->connect_error)
    die ($conn->connect_error);
?>
<?php
session_start();
if (isset($_SESSION['usuario']))
{
    echo '<script>location.href = "admin.php";</script>';
}
else
{
?>