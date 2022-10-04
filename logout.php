<?php 
session_start();
if(isset($_SESSION["user_id"]))
{
    unset($_SESSION["user_id"]);
    session_destroy();
      echo "<script>
			alert('Logout Successfully ');	window.location = 'index.php';
				</script>";

}

if(isset($_SESSION["user_name"]))
{
    unset($_SESSION["user_name"]);
    session_destroy();
     echo "<script>
     alert('Logout Successfully ');	window.location = 'index.php';
				</script>";
}

// if(isset($_SESSION["manager_Session"]))
// {
//     unset($_SESSION["manager_Session"]);
//     session_destroy();
//      echo "<script>
// 				window.location = '/Nader_online_shoping/index.php';
// 				</script>";
// }


?>