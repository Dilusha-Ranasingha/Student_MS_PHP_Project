<head>
    <title>signin</title>
</head>
<body>
    <fieldset>
        <legend><b>SIGN-IN</b></legend>
        <form method="post" action="login_php.php" id="signinForm">
            Email : <input type="email" name="email"><br>
            Password : <input type="password" name="password"><br>

            <input type="submit" name="submit" value="Sing in">
            <button type="button" onclick="window.location.href='signup.php'">Sign up</button>

        </form>
    </fieldset>
    
</body>
</html>