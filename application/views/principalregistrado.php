<!--Navbar  ?=$this->load->view('headers/menuregistrado');?-->
  <?=$this->load->view('headers/menuregistrado');?>
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
    <meta charset="utf-8"/>
    <title>Carrito de Compras</title>
    <link rel="stylesheet" type="text/css" href="./css/estilos.css">
    <script type="text/javascript"  href="./js/scripts.js"></script>
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
                  <img src="./productos/<?php echo $query['imagen'];?>"><br>
                  <span><?php echo $query['nombre'];?></span><br>
                  <a href="./detalle.php?id=<?php  echo $query['id'];?>">ver</a>
                </center>
              </div>
            <?php
          }
          ?>
      </section>
    </body>
</html>