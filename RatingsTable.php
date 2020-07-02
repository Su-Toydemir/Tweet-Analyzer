<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome Icon Library -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, sans-serif;
            margin: 0 auto;
            /* Center website */
            width: auto;
            height: auto;
            /* Max width */
            padding: 0;
        }

        .heading {
            font-size: 25px;
            margin-right:
                25px;
        }

        .fa {
            font-size: 25px;
        }

        .navigator {
            background-color:
                #00000098;
            overflow: hidden;
            font-family: Verdana, sans-serif;
            z-index: 99999;
        }

        .navigator a {
            float: left;
            color: rgb(255,
                255, 255);
            text-align: center;
            padding: 14px 16px;
            text-decoration:
                none;
            font-size: 17px;
        }

        .navigator a:hover {
            background-color:
                rgb(76, 156,
                161);
            color: black;
        }

        .navigator a.topnav {
            background-color:
                orange;
            color: rgb(255,
                255, 255);
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .striped-border {
            border: 1px dashed #000;
            width: 100%;
            margin: auto;
            margin-top: 5%;
            margin-bottom:
                5%;
        }

        #main {
            width: 1300px;
            height: 500px;
            background-color:
                white;
            margin: 0;
            border: solid 10px #9eb6b8;
            border-style:
                none;
            border-bottom:
                solid 0px;
            padding: 0px;
        }

        h2 {
            text-align: left;
            font-family: Verdana, sans-serif;
            font: 14pt;
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

        hr {
            height: 2px;
            color: #9eb6b8;
        }

        p {
            font-family: Verdana, sans-serif;
            font-size: 12pt;
            text-align: left;
            color: #2f2d2d;
        }

        p.thick {
            font-weight:
                bold;
            font-family: Verdana, sans-serif;
            text-align: middle;
        }

        /* navigator css */

        .banner-text {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,
                -50%);
            color: black;
        }

        .content {
            padding: 16px;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }

        .sticky+.content {
            padding-top:
                60px;
        }

        /*dropdown menu navbar*/

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color:
                inherit;
            font-family: Verdana, sans-serif;
            margin: 0;
        }

        .navbar a:hover,
        .dropdown:hover .dropbtn {
            background-color:
                rgb(76, 156,
                161);
        }

        .dropdown-content {
            display: none;
            position: relative;
            background-color:
                #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,
                0, 0,
                0.2);
            overflow: visible;
            z-index: 2000000;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration:
                none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color:
                rgba(22, 19,
                19, 0.404);
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        table {
            background-color:
                #9eb6b8;
            border-collapse:
                collapse;
            border: 1px solid black;
            margin: 0px auto;
            text-align: center;
            vertical-align:
                middle;
        }

        th,
        td {
            padding: 15px;
        }

        tr:nth-child(odd) {
            background-color:
                white;
        }
    </style>
</head>

<body>

    <body>
        <div id=main>
            <header>
                <div class="panel-body">
                    <div id="page" class="navigator">
                        <ul>






                            <a href="http://localhost/webproject.php#home">Home</a>
                            <a href="http://localhost/webproject.php#aboutus">About Us</a>
                            <div class="dropdown">
                                <button class="dropbtn">Series
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="http://localhost/Genres.php#series">Genres</a>
                                    <a href="http://localhost/ratingchart.php#ratings">Rating Charts</a>
                                    <a href="http://localhost/RatingsTable.php">Ratings Table</a>

                                </div>

                            </div>

                            <a href="http://localhost/contact.php">Contact</a>

                            <a href="http://localhost/search.php">Search</a>
                        </ul>
                    </div>
            </header>

            <table>
                <h2>Series Table</h2>
                <tr>
                    <th>No:
                    </th>
                    <th>Serie Names:
                    </th>
                    <th>Serie Genres:
                    </th>
                    <th># of Tweets:
                    </th>
                    <th>Serie Rates(%):
                    </th>
                </tr>
                <?php
                $servername =
                    "localhost";
                $username = "root";
                $password = "";
                $dbname = "twitterdb";

                // Create connection
                $conn = new
                    mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " .
                        $conn->connect_error);
                }

                $sql = "SELECT s.id, s.SeriesName, g.SeriesGenre,n.Tweets,r.SeriesRating
FROM seriesName
AS s 
INNER JOIN genres 
AS g on s.id=g.id
INNER JOIN numoftweets
AS n 
on g.id=n.id
INNER JOIN ratings
AS r 
on n.id=r.id
";
                $result = $conn->query($sql);

                if (
                    $result->num_rows >
                    0
                ) {
                    // output data of each row
                    while ($row =
                        $result->fetch_assoc()
                    ) {
                        echo "<tr><td>" .
                            $row["id"] .
                            "</td><td>" . $row["SeriesName"] .
                            "</td><td>" . $row["SeriesGenre"] .
                            "</td><td>" . $row["Tweets"] .
                            "</td><td>" . $row["SeriesRating"] .
                            "</td><tr>";
                        // echo '<br>';
                    }
                } else {
                    echo "0 results";
                }

                $conn->close();
                ?>

            </table>
            <hr style="border:3px solid #f1f1f1">
    </body>

</html>