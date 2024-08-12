
<!DOCTYPE HTML>
<html>

<head>
<title>Load Balancer</title>
<link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body >
<form action="index.php" method="post" class="form">
    <h2>Mess Load Balancer</h2>
    <label for="username">Roll No.</label>
    <input type="text" id="username" name="user"><br>
    <label for="username">Mess</label>
    <input type="text" id="mess" name="mess"><br>   
    <input type="submit" name="submit" value="Log In" class="button"> 
    <div id="response">
<?php 

if(!empty($_POST["submit"]))
{
    $user = $_POST["user"];     
    $mess = $_POST["mess"];
    if(!empty($user) && !empty($mess))
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "http://load_balancer/$mess");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);   

        curl_close($ch);
        $data = json_decode($response, true);
        echo "{$data['message']}";
    }
    else
    {
        echo "Please fill all the fields";
    }
}

?>
</div>
</form>

</body>
</html>
