<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width:device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="footer_css/css/zerogrid.css">
        <link rel="stylesheet" href="footer_css/css/style.css">
        <link rel="stylesheet" type="text/css" href="style2.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
    $("tr:nth-child(odd)").css("background-color", "#1d262b");
    $("tr:nth-child(even)").css("background-color", "#252e33");
});</script>
    <script>
        function chang(){
            document.getElementById("1st").onclick = function(){
                location.href = "page2test.php";
            };
        }
    </script>
        <title>WORK & LIFE</title>
</head>
<body style="background-color: #CF4747">
   <nav class="navbar navbar-inverse navbar-fixed-top" >
    <div class="container">
        <div class="navbar-header">
            <ul style="list-style-type: none">
            <li class="navbar-brand"><img src="images/Manipal.jpg" style="height: 38px;width: 250px; background-color: white; margin-left: -110px;margin-top: -10px;"></li>
            <li class="navbar-brand" style="padding-left: 320px"></li>
            </ul>
        </div>
        <ul class="nav navbar-nav navbar-right">
            
            <li style="margin-top: 10px;margin-right: 50px;">
                <button class="btn" onclick="chang()" id="1st">Graph View</button>
                <button class="btn btn-success" id="2nd">Student View</button>
            </li>
            <li><a href="Logout.php">LOGOUT</a></li>
        </ul>
    </div>
</nav>
    <div class="container">
        <div class="scrollable des" style="margin-top: 90px;">
            <table class="table table-hover table-striped" style="color: white;">
                <tbody>
                    <tr>
                        <th>Questions</th>
                        <th>Answers</th>
                    </tr>
                    <tr>
                        <td>Test</td>
                        <td>Test</td>
                    </tr>
                    <tr>
                        <td>Test</td>
                        <td>Test</td>
                    </tr>
                    <tr>
                        <td>Test</td>
                        <td>Test</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>