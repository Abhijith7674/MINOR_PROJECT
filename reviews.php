<!DOCTYPE html>
<html>
    <head>
        <title>REVIEWS</title>
        <link rel="stylesheet" href="Resort.css">
        <script src="Resort.js"></script>
    </head>
    <body>
        <div id="overview" class="automargin">
            <div class="navigation">
                <a href="index.php" class="inlink">Overview</a>
                <a href="facilities.html" class="inlink">Facilities</a>
                <a href="rooms.php" class="inlink">Rooms</a>
                <a href="reviews.php" class="inlink">Reviews</a>
                <a href="policy.html" class="inlink">Location</a>
                <a href="policy.html" class="inlink">Policies</a>
              <h6 id="h1" class="inline">from</h6><h5 class="inline">Rs.</h5><h4 class="inline">5,480</h4>
              <a id="lk1" href="./rooms/garden_view_room.php">VIEW THIS DEAL</a>
            </div>
            <br><br><br><br>
            <div class="subdiv divset2 automargin">
                <h2>Reviews</h2>
                <span class="spanset2">
                    <h3>"Good food, great location, friendly staff, a clean private beach..."</h3>
                    <p>Excellent professional service, very good food...enjoyed our stay What stood out: Honesty about the rooms that only slight view of sea will be there...from deluxe rooms...it was very crowded and peak time...it is understandable </p>
                    <img src="./Images/I_I5.jpg" class="inline pl50 h100">
                    <img src="./Images/I_I6.jpg" class="inline pl10 h100">
                    <img src="./Images/Re_I1.jpg" class="inline pl10 h100">
                    <img src="./Images/Re_I2.jpeg" class="inline pl10 h100">
                    <img src="./Images/Re_I3.webp" class="inline pl10 h100">
                    <img src="./Images/Re_I4.webp" class="inline pl10 h100">
                    <p> Muhammed Suhail M and Adwaid CM from India<br>
                        Group<br>
                        Garden View Rooms<br>
                        Stayed 3 night in February 2022</p>
                </span>
                <span class="spanset2">
                    <h3>"Amazing stay and pleasant ambience"</h3>
                    <p>It’s a very beautiful, clean, organised and well maintained staying place. Private beach provides an amazing experience, you can collect sea shells and different sea creatures along the sea shore. Hammocks are tied around the beach to chill around. There are provisions for candle night dinners in the sea shore. Staff are very helpful and cooperative. Everywhere camera is installed and working. Security is also very tight. Overall it’s a perfect place to enjoy your vacation. The place is far more beautiful than what’s shown in the photos provided here.</p>
                    <p>Jayati from India<br>
                        Family with young children<br>
                        Garden View Rooms<br>
                        Stayed 2 nights in February 2021</p>
                </span>
                <span class="spanset2">
                    <h3>"A nice surprise"</h3>
                    <p>I stayed here with a friend for just one night and wish i had booked longer. The staff were so welcoming and accommodating. The resort is right on the ocean, and one can enjoy the sea breeze with a few drinks and snacks in the sand. The pool is large and was very clean, and the gardens were very well maintained. I would love to stay here again one day and recommend to others for a relaxing break.</p>
                    <p>Jessica from Australia<br>
                        Couple<br>
                        Garden View Rooms<br>
                        Stayed 1 night in August 2018</p>
                </span>
                <span class="spanset2">
                    <h3>"Memorable and Value for Money"</h3>
                    <p>Since i booked this through agoda i got it in discounted rate.. The place was good, beach attached, comfortable. Break fast was buffet and good. I would recommend it to others.. Totally memorable for me.. </p>
                    <p> Manoj from India<br>
                        Couple<br>
                        Garden View Rooms<br>
                        Stayed 1 night in December 2021</p>
                </span>
                <span class="spanset2">
                    <h3>"Restful with breathtaking beach location!"</h3>
                    <p>Somehow my two day get away from business seemed longer and more refreshing because of the absolutely breathtaking beach location. The hotel is maintained well, service is good, and the dining room served tasty food. Special thanks to Bala my server each meal, who was most pleasant!</p>
                    <p>Paul from Canada<br>
                        Solo traveler<br>
                        Garden View Rooms<br>
                        Stayed 2 nights in March 2022</p>
                </span>
                <?php
                    $qry="SELECT * FROM reviews";
                    include 'database.php';
                    mysqli_select_db($con,"PROJECT");
                    $result = mysqli_query($con,$qry);
                    while($tabledata=mysqli_fetch_row($result))
                    {
                        echo "<span class='spanset2'>
                            <h3>\"$tabledata[3]\"</h3>
                            <p>$tabledata[4]</p>
                            <p>$tabledata[0] from $tabledata[2]<br>
                            $tabledata[1]<br>
                            $tabledata[5]<br>
                            </p>
                        </span>
                        <br><br>";
                    }
                    mysqli_close($con);
                    ?>
                <form action="./reviews/add.php" method="post">
                    <input style="width: 140px;height: 60px;" type="submit" value="ADD COMMENT">
                </form>
                <br>
            </div>
        </div>
    </body>
</html>