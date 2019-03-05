<header>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> 

<?php include_once "navbar_connecte.php"; ?>
<header>


<form class="form-group" action="traitement_inscription.php" method="post">

<body>
<div class="row">
<div class=" col-xs-4 col-sm-4 col-md-4 col-lg-4 " >
</div>
<div class=" col-xs-4 col-sm-4 col-md-4 col-lg-4 " >


    <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 " ><h2>Inscription</h2> <br>

                <label>Nom:</label>
                <input required type="text" class="form-control" method="post" name="nom" placeholder="" />
    </div>
    <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 ">  

                    <label>Prénom:</label>
                    <input required type="text" class="form-control" method="post" name="prenom" placeholder="" />
    </div>


    <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 " >
            <div class="form-group">
                <label>Date de naissance:</label>
                <input required type="date" class="form-control" method="post" name="date_naissance" placeholder="" />
            </div>
    </div>




    <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 " >
        <div class="form-group">
            <label>Login :</label>
            <input required type="text" class="form-control" method="post" name="login" placeholder="Login" />
        </div>
        <div class="form-group">
            <label>Password</label>
            <input required type="password" class="form-control" name="password" placeholder="password">
        </div>
    </div>



    <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 " >

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
    </div>

    </form>
</div>
<div class=" col-xs-4 col-sm-4 col-md-4 col-lg-4 " >
</div>
</div>
</body>






