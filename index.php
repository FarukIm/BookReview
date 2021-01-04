<!--
    Author: Faruk Imamovic
    Project: CS412-Project6-BookReview
    email: f.imamovic27@gmai.com
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1, shrink-to-fit=no">
    <title>Geek Review</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<?php include 'functions.php'; ?>

<body data-spy="scroll" data-target=".navbar" data-offset="50" class="">
    <div class="parallax">

        <nav class="navbar navbar-expand-lg navbar-light bg-info sticky-top">
            <div class="container">

                <a class="navbar-brand" href="#">Logo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mr-auto" id="navbarText">
                    <span class="navbar-text">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </span>
                    <ul class="navbar-nav ml-auto float-lg-right">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"> Register <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Log in</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container accordion-spacing">
            <div class="accordion position-sticky" id="posts">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Write your review!
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class=" collapse" aria-labelledby="headingOne" data-parent="#posts">
                        <div class="card-body">
                            <form class=" bg-light" action="insert.php" method="post">
                                <fieldset>
                                    <legend class="text-center "> Write like it matters, and it will. </legend>

                                    <div class="form-group">
                                        <span class="col-md-1  text-center">
                                            <label for="title"> Book Title: </label>
                                        </span>
                                        <div class="col-md-8">
                                            <input id="title" name="title" type="text" placeholder="eg. The Hitchhiker's Guide to the Galaxy" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <span class="col-md-1 text-center">
                                            <label for="author">Author:</label>
                                        </span>
                                        <div class="col-md-8">
                                            <input id="author" name="author" type="text" placeholder="eg. Douglas Adams" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <span class="col-md-1 text-center">
                                            <label for="genre">Select Genre: </label>
                                        </span>
                                        <div class="col-md-8">
                                            <select class="form-control" id="genre" name="genre" type="text">
                                                <option value="" selected disabled>Please select</option>
                                                <option>Action</option>
                                                <option>Biography</option>
                                                <option>Children's</option>
                                                <option>Classic</option>
                                                <option>Comedy</option>
                                                <option>Comic Book</option>
                                                <option>Crime</option>
                                                <option>Drama</option>
                                                <option>Fairytale</option>
                                                <option>Fantasy</option>
                                                <option>History</option>
                                                <option>Horror</option>
                                                <option>Mystery</option>
                                                <option>Philosophy</option>
                                                <option>Poetry</option>
                                                <option>Romance</option>
                                                <option>Satire</option>
                                                <option>Sci-fi</option>
                                                <option>Thriller</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <span class="col-md-1  text-center">
                                            <label for="review"> Your Review:</label>
                                        </span>
                                        <div class="col-md-8">
                                            <textarea class="form-control" id="review" name="review" placeholder="Write your review here..." rows="7"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" name="submit" class="btn btn-light bg-success btn-lg">Submit</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php displayAllData(); ?>

        <div class="container-sm shadow mb-5 bg-info rounded-5">
            <div class="row space p-2">
                <div class="col center end">
                    No more posts :( </br>
                    <a href="#"> Try writting a review! </a>
                </div>
            </div>
        </div>

        <footer class=" bg-info">
        <div class="container">
           <div class="row">
               <div class="col-4 text-left">
               Faruk Imamovic &copy; 2021
               </div>
               <div class="col-4">
                   
               </div>
               <div class="col-4 foot">
                   Contact:<br>
                   Email: <a href="mailto:f.imamovic27@gmail.com">f.imamovic27@gmail.com</a><br>
                   Phone: <a href="tel:+387 69 940 063">+387 63 940 069</a>
               </div>
           </div>
        </div>
    </footer>

    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>