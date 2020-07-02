<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Writing a cookie to the client computer</title>
    <style type="text/css">
        label,
        p {
            width: 10em;
            font-family:
                Verdana, sans-serif;
            float: left;
            text-align: center;
        }

        body {
            background-image:
                url("brownIMG.jpg");
        }

        h2 {
            text-align: left;
            font-family:
                Verdana, sans-serif;
            font: 24pt;
            color: black;
            text-align: center;
            vertical-align:
                middle;
            line-height:
                90px;
        }

        h2.thick {
            font-weight:
                bold;
        }
    </style>
</head>

<body>
    <h2>Write Cookie to save your cookie data for TweetAnalyzer.</h2>
    <form method="post" action="cookie.php">
        <div><label><b>Name:</b></label>
            <input type="text" name="name"></div>
        <div><label><b>Surname:</b></label>
            <input type="text" name="surname"></div>
        <div><label><b>Email:</b></label>
            <input type="text" name="email"></div>
        <div><label><b>Phone:</b></label>
            <input type="text" name="phone" placeholder="(555) 555-5555"></div>
        </div>
        <p><input type="submit" value="Write Cookie">
    </form>
</body>

</html>