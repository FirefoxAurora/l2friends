<?

function notloggedin() 
 {
  resetcookies();
  echo '<script language="JavaScript">
        alert("You are not logged in.");
        </script>';
  quickrefresh('index.php');
}

function quickrefresh($page) 
 {
  echo "<meta http-equiv='refresh' content='0; URL={$page}'>";
  exit();
 }

function resetcookies() 
 {
  setcookie("login", "", time()-60000);
  setcookie("pass", "0", time()-60000);
 }

function securitycheck($securitycheck) 
 {
  if ($securitycheck!=1) 
   {
    quickrefresh('index.php?id=not_logged');
    exit();
   }
 }

 
?>
