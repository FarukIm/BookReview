<?php

function displayAllData()
{
    $link = mysqli_connect("localhost", "root", "", "bookreview");
    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $sql = "SELECT id, title, author, genre, review FROM posts";
    $result = $link->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { ?>
            <div class="container shadow p-3 mb-5 bg-white rounded-2 mt-2">
                <div class="row booktitle">
                    <div class="col">
                        <?php echo $row['title']; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col bookauthor">
                        Author: <a class="bookauthor"><?php printf( $row['author']); ?></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col bookgenre">
                        Genre: <a class="bookgenre"><?php echo $row['genre']; ?></a>
                    </div>
                </div>
                <div class="row  bookreview">
                    <div class="col">
                        <a><?php echo $row['review']; ?></a>
                    </div>
                </div>
            </div>
<?php }
    } else {
        echo "0 results";
    }
    $link->close();
}

?>