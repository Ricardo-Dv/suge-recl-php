<?php include("../modelos/editaraspectos.php"); ?>

<?php include("../includes/header.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editaraspectos.php?id=<?php echo $_GET['id']; ?>" method="POST">

                    <div class="form-group">
                        <input type="text" name="descripAspec" value="<?php echo $descripAspec; ?>" 
                            class="form-control" placeholder="Actualiza el Aspecto">
                    </div>

                    <button class= "btn btn-primary btn-block" type="submit" name="actualizar">  
                        Actualizar 
                    </button>

                </form>
            
            </div>
        
        </div>

    </div>
</div>


<?php include("../includes/footer.php"); ?>