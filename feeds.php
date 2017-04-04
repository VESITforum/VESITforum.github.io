<!--<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Default Panel
        </div>
        <div class="panel-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
        </div>
        <div class="panel-footer">
            Panel Footer
        </div>
    </div>
</div>-->

<?php
    require("dbCon.php");
    $sql = "select * from posts";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            require("part1.html");
            echo "#".$row["post_id"]." ".$row["post_title"];
            require("part2.html");
            echo "<p>";
            echo $row["post_content"];
            echo "</p>";
            
            echo "<p>Posted On: ".$row["post_date"]."</p>";
            echo "<p>Post Topic: ".$row["post_topic"]."</p>";
            echo "<p>Posted By: ".$row["post_by"]."</p>";
            require("part3.html");
        }
    }
?>