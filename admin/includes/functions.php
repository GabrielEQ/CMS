<?php
    // INSERIR CATEGORIA (CREATE)
function inserirCategoria(){
    global $connection;
    if(isset($_POST['adicionar'])){
    $cat_nome = $_POST['cat_nome'];
                                   
     if($cat_nome == ""){
            echo "Insira uma categoria";
      } else{
            $query = "INSERT INTO categoria(cat_nome)
                     VALUE('$cat_nome')";
            $resultado = mysqli_query($connection, $query);
                                       
           if(!$resultado){
             die('Não deu certo a inclusão');
            } else {
               echo "Categoria adicionada com sucesso!";
                 }
    
        }
                                   
    } 
}

// EXIBIR CATEGORIAS NA TABELA (READ)
function mostraDadosCategoria(){
      
    global $connection;
    $query = "SELECT * FROM categoria";
                $select_todas_categorias = mysqli_query($connection, $query);
                    
                    while($row = mysqli_fetch_assoc($select_todas_categorias)){
                        $cat_id = $row['cat_id'];
                        $cat_nome = $row['cat_nome'];
                
                        echo "<tr>";
                        echo "<td>  $cat_id  </td>";
                        echo "<td>  $cat_nome  </td>";
                        echo "<td><a href='categorias.php?delete={$cat_id}'>Apagar</a></td>";
                        echo "<td><a href='categorias.php?edit={$cat_id}'>Editar</a></td>";
                        echo "</tr>";
                    }        
}

// APAGAR CATEGORIA (DELETE)
function deletaCategoria(){
    global $connection;
     if(isset($_GET['delete'])){
                $apaga_id = $_GET['delete'];
                $query = "DELETE FROM categoria WHERE cat_id = $apaga_id";
                $resultado = mysqli_query($connection, $query);
                
                if(!$resultado){
                    die('Erro em apagar');
                }else{
                    echo 'Apagado com sucesso';
                }
                
                header('Location: categorias.php');
            }                        
               
}

?>