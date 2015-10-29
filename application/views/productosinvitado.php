  <!-- Navbar  -->
    <?=$this->load->view('headers/menuinvitado');?>
  <!--End Navbar-->

<!DOCTYPE html>
<html lang="es">
  <head>
    <style>
      section{
        width: 80%;
        min-height: 500px;
        border: 1px solid #DDD;
        padding: 2%;
        margin:0 auto;
        margin-left: 10%;
        margin-top: 50px;
      }
      .producto{
        width: 23%;
        height: auto;
        background-color: #fafafa;
        border:1px solid gray;
        display: inline-block;
        vertical-align: top;
        margin-left: 1%;
        margin-top: 1%;
      }
      .producto img{
        width: 60%;
        height: 60%;
        margin:0 auto;
      }
    </style>
  </head>

    <body>

      <section>
        
      <?php
        $query = $this->db->get('productos');
          $re=mysql_query("select * from productos")or die(mysql_error());
          while ($query=mysql_fetch_array($re)) {
            ?>
              <div class="producto">
                <center>
                  <img src="../productos/<?php echo $query['imagen'];?>"><br>
                  <span><?php echo $query['nombre'];?></span><br>
                  <!--<a href="./detalle.php?id=<?php  echo $query['id'];?>">ver</a>-->
                  <!--<a href="./carritodecompras.php?id=<?php  echo $query['id'];?>">Añadir al carrito de compras</a>-->
                </center>
              </div>
            <?php
          }
          ?>
      </section>
    </body>
</html>