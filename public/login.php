<?php include '../private/includes/header.php'; ?>

<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-6 col-sm-8 col-10">
            
            <div class="text-center mb-4">
                <img src="/Ficha 08/public/assets/img/gym125.png" class="img-fluid me-3">
                <h2><strong> <?php echo APP_NAME; ?></strong></h2>
            </div>

            <form action="../private/index.php" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Utilizador</label>
                    <input type="email" name="text_username" id="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="text_password" id="password" class="form-control">
                </div>

                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-secondary px-4">
                        Entrar <i class="fa-solid fa-right-to-bracket ms-2"></i>
                    </button>
                </div>

                <div>
                    <div class="alert alert-danger p-2 text-center">
                        Erro: Utilizador não registado 
                    </div>
                </div>
            </form>

        </div>
    </div>
</div> 

<?php include '../private/includes/footer.php'; ?>