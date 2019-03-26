<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="lib/w3school.css">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <title>Qiuz-Dashboard</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body><br/><br/>
<div  class="w3-container">
    <div class="w3-third w3-container" style="padding-left: 10%">
        <img src="lib/Fotoram.io12%20(1).png" width="150px" height="100px"/>
    </div>
    <div class="w3-third w3-container">
        <img src="lib/tisca.png" width="450px"/>
    </div>
    <div class="w3-third w3-container" style="padding-left: 10%">
        <img src="lib/cup.png" width="150px" height="150px"/>
    </div>
</div>
<br/><br/>
<div class="col-lg-12 col-md-6 ">
    <table class='table table-bordered'>
        <thead class="thread-dark" style="background-color: #77ACFF  ">
        <tr class='primary'>
            <th  class='text-capitalize text-dark info'>COLLEGE NAME</th>
            <th  class='text-capitalize text-dark info'>TEAM NAME</th>
            <th  class=' text-capitalize text-dark info'>POSITION </th>
        </tr>
        </thead>
        <?php
        include ('dbconfig.php');
        $i=1;
        $toggle=true;
        $query="select team_name,college_name from users order by score desc ";
        $op=mysqli_query($conn,"select team_name,college_name from users order by score desc ");
        while($output=mysqli_fetch_array($op)){
            if(($output[0]=="")&&($output[1]=="")) continue;
            if ($toggle)
            {
                echo "<tr style='background-color: #77FFAF'>";
            echo "<td>".$output[1]."</td>";
            echo "<td>".$output[0]."</td>";
            echo "<td>".$i."</td>";
            echo "</tr>";
            ++$i;
            $toggle=false;
            }
            else{
                echo "<tr>";
                echo "<td>".$output[1]."</td>";
                echo "<td>".$output[0]."</td>";
                echo "<td>".$i."</td>";
                echo "</tr>";
                ++$i;
            }
        }



        ?>

    </table></div>

</body>
</html>
