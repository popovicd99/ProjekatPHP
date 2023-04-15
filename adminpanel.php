<?php
session_start();

if(!isset($_SESSION['isadmin']) || $_SESSION['isadmin'] == 0){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Music library</title>
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/adminpanel.css" />
</head>
    <?php
    include_once "db/dbbroker.php";
    include_once "model/song.php";
    include_once "model/category.php";
    ?>
<body>

    <div id="popupadd" class="popup">
        <form  method="POST" name="add" class="popup-content animate" id="add">
            <div class="close" onclick="document.getElementById('popupadd').style.display='none'">&times;</div>
            <div class="sign-in-form">
                <h4 class="text-center">New song</h4>
                <label for="artist">Artist</label>
                <input type="text" name="artist" class="field" id="artist" required>

                <label for="song">Song name</label>
                <input type="text" name="songname" class="field" id="song" required>

                <label for="category">Category</label>
                <select name="cat" class="field" id="category">
                    <?php 
                        $result = Category::getAll($conn);
                        if(!empty($result)):
                            foreach($result as $row):
                    ?>
                    <option value="<?php echo $row["id"];?>"><?php echo $row["categoryname"];?></option>
                    <?php endforeach; endif;?>
                </select>

                <label for="date">Realease date</label>
                <input type="text" name="date" class="field" id="date" required>

                <label for="rank">Best ranking</label>
                <input type="text" name="rank" class="field" id="rank" required>
                <button type="submit" class="sign-in-form-button">Add</button>
            </div>
        </form>
    </div>

    <div id="popupedit" class="popup">
        <form  method="POST" name="edit" class="popup-content animate" id="edit">
            <div class="close" onclick="document.getElementById('popupedit').style.display='none'">&times;</div>
            <div class="sign-in-form">
                <h4 class="text-center">Edit song</h4>
                <label for="artist">Artist</label>
                <input type="text" name="eartist" class="field" id="eartist" value="" required>
                <label for="song">Song name</label>
                <input type="text" name="esongname" class="field" id="esong" value="" required>
                <label for="category">Category</label>
                <select name="ecat" class="field" id="category">
                    <?php 
                        $result = Category::getAll($conn);
                        if(!empty($result)):
                            foreach($result as $row):
                    ?>
                    <option value="<?php echo $row["id"];?>"><?php echo $row["categoryname"];?></option>
                    <?php endforeach; endif;?>
                </select>

                <label for="date">Realease date</label>
                <input type="text" name="edate" class="field" id="edate" value="" required>

                <label for="rank">Best ranking</label>
                <input type="text" name="erank" class="field" id="erank" value="" required>

                <input type="hidden" name="eid" id="eid" value="">
                <button type="submit" class="sign-in-form-button">Edit</button>
            </div>
        </form>
    </div>

    <header>
        <a href="index.php" class="logo">Home</a>
        <nav>
            <ul>
                <li id="dugme"><a>Add song</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <div class="hero-section-admin">
        <div class="row">
            <div class="columns">
                <h1>Filters</h1>
            </div>
            <div class="columns">
                <button class="button filter" value="Hip-Hop">Hip-Hop</button>
                <button class="button filter" value="R&B">R&B</button>
                <button class="button filter" value="EDM">EDM</button>
            </div>
            <div class="columns">
                <input type="search" onkeyup="search(this.value)" placeholder="Search for a song...">
            </div>

            <div class="row tabela">
                <table class="table-expand">
                    <thead>
                        <tr class="table-expand-row">
                            <th width="200">Artist</th>
                            <th width="200">Song name</th>
                            <th class="text-right" width="150">Category</th>
                            <th width="150">Release date</th>
                            <th width="150">Best ranking</th>
                            <th width="150">Options</th>
                        </tr>
                    </thead>                  
                    <tbody id="test">
                        <?php 
                            $result = Song::getAll($conn);
                            if(!empty($result)):
                                foreach($result as $row):
                        ?>
                        <tr class="table-expand-row">
                            <td><?php echo $row["artist"];?></td>
                            <td><?php echo $row["songname"];?></td>
                            <td class="text-right"><?php echo $row["categoryname"];?></td>
                            <td><?php echo $row["date"];?></td>
                            <td><?php echo $row["rank"];?></td>
                            <input type="hidden" value="<?php echo $row["id"];?>">
                            <td>
                                <button class="button warning">Edit</button>
                                <button class="button alert">Remove</button>
                            </td>
                        </tr>
                        <?php endforeach; endif;?>
                    </tbody>
                </table>
            </div>
        </div>



    </div>

    <div class="sticky-footer-css">
        <div class="columns shrink footer text-center">
            <p>©Danilo Popovic.All rights reserved</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="js/ajax.js" type="text/javascript"></script>
    <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
        $(document).foundation();    
    </script>
</body>

</html>