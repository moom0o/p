<?php

$user = $_POST['user'];
$password = $_POST['password'];

?>

<html>
    <head>

    </head>
    <body>
    <input type="button" name="answer" value="Login" onclick="showDiv()" />
<center>
    <div id="welcomeDiv"  style="display:none;" class="answer_list" >
    <form action="login.php" method="post">
    <b>Username: </b><br>
    <input type="text" name="user" /><br>
    <b>Password: </b><br>
    <input type="password" name="password" /><br>
    <input type="submit" value="Login">
    </form>
     </div>
         </center>

    </body>
    <script>
    function showDiv() {
   document.getElementById('welcomeDiv').style.display = "block";
}
    </script>
</html>
<?php

if($user == "Brian" && $password == "123")
{
    echo "<center><h1>Welcome back $user </h1></center>";
}
else 
{
    echo "Failed to login.";
}
?>


<?PHP

function getUserIP()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


$user_ip = getUserIP();

echo $user_ip; // Output IP address [Ex: 177.87.193.134]


?>