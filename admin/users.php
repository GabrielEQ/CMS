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
                            Usuários
                            <small>/ Ver todos os usuários</small>
                        </h1>
                        
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Permissão</th>
                                    <th>Nome</th>
                                <tr>    
                            </thead>    
                            
                                <tbody>
                                    <?php
                    $query = "SELECT * FROM usuario";
                    $select_todos_usuarios = mysqli_query($connection, $query);
                    while($row = mysqli_fetch_assoc($select_todos_usuarios)){
                        $user_id   = $row['user_id'];
                        $username  = $row['username'];
                        $user_role = $row['user_role'];
                        $user_nome = $row['user_nome'];
                    
                        
                        echo "<tr>";
                        echo "<td>" . $user_id . "</td>";
                        echo "<td>" . $username . "</td>";
                        echo "<td>" . $user_role . "</td>";
                        echo "<td>" . $user_nome . "</td>";
                        echo "</tr>";
                        
                        
                    }
                                    
                                    ?>
                                </tbody>    
                            
                        </table>    
          
                        
                      </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include 'includes/admin_footer.php'; ?>

