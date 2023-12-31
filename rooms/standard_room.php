<!DOCTYPE html>
<html>
    <head>
        <title>STANDARD ROOM</title>
        <link rel="stylesheet" href="../Resort.css">
        <script src="../Resort.js"></script>
    </head>
    <body>
        <br><br><br>
        <div class="subdiv divset2 automargin">
            <h1>IDEAL BEACH RESORT</h1>
            <h2 id="roomname">Standard Room</h2>
            <div class="flex w1412">
                <div id="div5">
                    <h3>Details</h3>
                    <div class="flex">
                        <div id="div6"><img src="../Images/Ro_St_I1.jpg" height="510px" width="350px"></div>
                        <div id="div7">
                            <div id="div8"><img src="../Images/Ro_I4.jpg" height="250px" width="320px"></div>
                            <div><img src="../Images/Ro_St_I2.jpg" height="250px" width="320px"></div>
                        </div>
                    </div>
                    <p id="details"></p>
                </div>
                <div class="p40">
                    <br>
                    <h3>Facilities</h3>
                    <br>
                    <ul>
                        <li>Room size: 24 m<sup>2</sup>/258 ft<sup>2</sup></li>
                    </ul>
                    <br><br><br>
                    <form action="add.php" method="post">
                        <label>Rooms&nbsp;&nbsp;
                            <select id="rooms" name="rooms" onchange="price(6730,3365,1680);setList(0);">
                            <?php
                                $qry="SELECT rno FROM standard_room WHERE fn IS NULL";
                                $lcv=1;
                                include '../database.php';
                                mysqli_select_db($con,"PROJECT");
                                $result = mysqli_query($con,$qry);
                                while($tabledata=mysqli_fetch_row($result) && $lcv<5)
                                {
                                    echo "<option value='$lcv'>$lcv</option>";
                                    $lcv++;
                                }
                                mysqli_close($con);
                            ?>
                            </select>
                        </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>Adults&nbsp;&nbsp;
                            <select id="adults" name="adults" onchange="price(6730,3365,1680)">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>Children&nbsp;&nbsp;
                            <select id="children" name="children" onchange="price(6730,3365,1680)">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </label><br><br>
                        <?php
                            $qry="SELECT rno FROM standard_room WHERE fn IS NULL";
                            $lcv=0;
                            include '../database.php';
                            mysqli_select_db($con,"PROJECT");
                            $result1 = mysqli_query($con,$qry);
                            echo "<h2 class='ml140'>Select Your Room Number<h2></h2>
                            <div class='ml100 pl20'>";
                            echo "<label>&nbsp;Room
                            <select id='room1' name='room1' onchange='setList(1)'>";
                            while($tabledata=mysqli_fetch_row($result1))
                            {
                                echo "<option value='$tabledata[0]'>$tabledata[0]</option>";
                            }
                            echo "</select>
                            </label>";
                            mysqli_close($con);
                        ?>
                        <label>&nbsp;Room
                            <select id="room2" name="room2" onchange="setList(2)"></select>
                        </label>
                        <label>&nbsp;Room
                            <select id="room3" name="room3" onchange="setList(3)"></select>
                        </label>
                        <label>&nbsp;Room
                            <select id="room4" name="room4"></select>
                        </label>
                        </div>
                        <br><br><br>
                        <h1 id="price1" style="font-size: 60px;">₹ 6730 Rs</h1>
                        <br><br><br><br>
                        <input style="visibility: hidden;" type="number" name="roomtype" value=4><br>
                        <a href="../rooms.php"><div style="background-color: gainsboro;border-style: solid;border-color: rgba(0, 0, 0, 0.8);width: 85px;" class="inline pl20">CANCEL</div></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div style="background-color: gainsboro;border-style: solid;border-color: rgba(0, 0, 0, 0.8);width: 100px;" class="inline"><input type="submit" style="width:100px" value="BOOK NOW"></div>
                    </form>
                    <br><br>
                </div>
            </div>
        </div>
    </body>
</html>