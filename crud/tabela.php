<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
 
</head>

<body>
  <?php
 $pesquisa = $_POST['busca'] ?? '';
 include "conexao.php";
  $sql = "SELECT * FROM produtos where nome LIKE '%$pesquisa%' ";
  $dados = mysqli_query($conexao, $sql);
  ?>
  <div class="container">
    <div class="row">
      <div class="col">
  
          </form>
        </nav>
        <table class="table table-hover">
          <thead >
            <tr>
              <th scope="col"style="color: green;">Id</th>
              <th scope="col"style="color: green;">Nome</th>
              <th scope="col"style="color: green;">Preço</th>
             
            </tr>
          </thead>
          <tbody>
            <?php
            while ($linha =  mysqli_fetch_assoc($dados)) {
              $id = $linha['id_produto'];
              $nome = $linha['nome'];
              $preco = $linha['preco'];

              echo "<tr>
      <td>$id</td>
      <td>$nome</td>
      <td>$preco</td>

      <td width= 150px><a href='editar.php? id_produto=$id' class='btn btn-success btn-sm' >Editar</a>
                <a href='../crud/excluir.php' class='btn btn-danger btn-sm' data-tOggle='modal' data-target='#confirma'
                onclick=".'"'."pegar_dados($id, '$nome')".'"'.">Excluir</a>
                 </td>
    
      </tr>";
            }
            ?>

          </tbody>

        </table>
      </div>
    </div>
  </div>
  <div class="modal fade" id="confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">CONFIRMAR EXCLUSÃO</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form  action="../crud/excluir.php" method="post">
                      <p>Tem certeza que deseja excluir o cadastro de <b id="nome_pessoa">   </b>?</p>
                      
                    </div>
                    <div class="modal-footer">
                    <a href="../crud/index.php"><button    type="button" class="btn btn-secondary" data-dismiss="modal">Cadastrar produto</button></a>
                    <button    type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                      <input type="hidden" name="nome" id="nome_pessoa1" value="">
                      <input type="hidden" name="id" id="cod_pessoa" value="">
                      
                      <input type="submit" class="btn btn-primary" value="Sim">
                    </form>
                    </div>
                  </div>
                </div>
              </div>

           
              <script>
                function pegar_dados(id,nome){
                  document.getElementById("nome_pessoa").innerHTML = nome;
                  document.getElementById("nome_pessoa1").value = nome;
                  document.getElementById("cod_pessoa").value = id;
                }
                </script>

                

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
              

           
             

                

</body>

</html>