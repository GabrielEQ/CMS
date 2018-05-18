<?php ob_start();?>
<?php include 'includes/functions.php';?>
<?php include 'includes/admin_header.php'; ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include 'includes/admin_navigation.php'; ?>
       
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Users
                            <small>/ Adicionar users</small>
                        </h1>
                        
                        
                        
                        <?php
                            if(isset($_user['adicionar'])){
                            $username = $_user['username'];
                            $password = $_user['password'];
                            $role = $_user['role'];
                            $nome = $_user['nome'];
             
                                                  
              
                                
                           $query = "INSERT INTO usuario(username, user_password, user_role, user_nome) VALUES('$username', '$password', '$role', '$nome')";      
                                
                           $add_user = mysqli_query($connection, $query); 
                                
                           if(!$add_user){
                               die('Falha na inserção');
                           } else{
                               echo "Usuário adicionado com sucesso!";
                           }     
                                
                          }
                        ?>
                        
                        <form action="" method="post">
                        
                        <div class="form-group">
                            <label for="user_titulo">Username:</label>
                            <input type="text" class="form-control" name="username">
                        </div>    
                        
                        <div class="form-group">
                            <label for="user_autor">Password:</label>
                            <input type="password" class="form-control" name="password">
                        </div>  

                        <div class="form-group">
                            <label for="user_autor">Permissão:</label>
                            <input type="text" class="form-control" name="role">
                        </div>   

                        <div class="form-group">
                          <label for="user_autor">Nome:</label>
                          <input type="text" class="form-control" name="nome">
                        </div>   
                       
                        
                        <div class="form-group">
                           <input type="submit" class="btn btn-primary" name="adicionar" value="ADICIONAR">                 
                        </div>    
                            
                        </form>
                    
                        
                      </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include 'includes/admin_footer.php'; ?>

