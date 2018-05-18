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
                            Posts
                            <small>/ Adicionar posts</small>
                        </h1>
                        
                        
                        
              <?php
                  if(isset($_POST['adicionar'])){
                  $post_titulo = $_POST['post_titulo'];
                  $post_autor = $_POST['post_autor'];
                  $post_imagem = $_FILES['post_imagem']['name'];
                  $post_imagem_temp = $_FILES['post_imagem']['tmp_name'];
                                        
                  $post_data = date('d-m-y');
                                    
                  $post_conteudo = $_POST['post_conteudo'];    
                    
                  move_uploaded_file($post_imagem_temp, '../images/' . $post_imagem);      
                      
                 $query = "INSERT INTO posts(post_titulo, post_autor, post_imagem, post_data, post_conteudo) VALUES('$post_titulo', '$post_autor', '$post_imagem', now(), '$post_conteudo')";      
                      
                 $add_post = mysqli_query($connection, $query); 
                      
                 if(!$add_post){
                     die('Falha na inserção');
                 } else{
                     echo "Post adicionado com sucesso!";
                 }     
                      
                }
              ?>
                        
                        <form action="" method="post" enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <label for="post_titulo">Título do Post:</label>
                            <input type="text" class="form-control" name="post_titulo">
                        </div>    
                        
                        <div class="form-group">
                            <label for="post_autor">Autor:</label>
                            <input type="text" class="form-control" name="post_autor">
                        </div>    
                       
                        <div class="form-group">
                            <label for="post_imagem">Imagem do Post:</label>
                            <input type="file" class="form-control" name="post_imagem">
                        </div>    
                        
                        <div class="form-group">
                            <label for="post_conteudo">Conteúdo do Post:</label>
                            <textarea class="form-control" name="post_conteudo" cols="30" rows="10"></textarea>
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

