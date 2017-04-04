<div class="container-fluid" style="padding: 0px; margin-top: -30px;background: black">
    <nav class="navbar navbar-inverse" style="padding: 0px; margin: 0px" >  
    <div class="container-fluid" >
        <div class="navbar-header" >
        <a class="navbar-brand" href="#" style="color:aliceblue">VESITforum</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="think.php">Create A Topic</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <?php
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
                {
                    ?>
                    <li><a href="logout.php">Log Out</a></li>
                    <?php
                }
                else
                {
                    ?>
                    <li><a href="signUp.php">SignUp</a></li>
                    <li><a href="signUp.php">Login</a></li>
                        
                    <?php
                }
            ?>
        </ul>
        <form class="navbar-form navbar-right">
            <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
                </button>
            </div>
            </div>
        </form>
        </div>
    </nav>
    </form>
</div>