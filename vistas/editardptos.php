<?php include("../modelos/editardptos.php"); ?>

<?php include("../includes/header.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editardptos.php?id=<?php echo $_GET['id']; ?>" method="POST">

                    <div class="form-group">
                        <input type="text" name="descripDpto" value="<?php echo $descripDpto; ?>" 
                            class="form-control" placeholder="Actualiza el Dpto">
                    </div>

                    <button class= "btn btn-primary ml-5" type="submit" name="actualizar">  
                        Actualizar 
                    </button>

                    <a class="btn btn-primary ml-5" href="dptos.php"> 
                        Volver
                    </a>

                </form>
            
            </div>
        
        </div>

    </div>
</div>


<?php include("../includes/footer.php"); ?>