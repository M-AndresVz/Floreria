<style>
  div{
    background-color: pink;
  }
</style>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar" color=red></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Florería-XALAPA</a>
    </div>

    <div id="navbar" class="collapse navbar-collapse">
      <?php $activa = $this->uri->segment(2); ?>
        <ul class="nav navbar-nav">
          <li <?php if($activa == '') {echo "class='active'";}?>>
            <a href="<?=base_url()?>">
     				  <span class="glyphicon glyphicon-home"></span>&nbsp;Inicio
            </a>
          </li>  

          <li <?php if ($activa == 'carrito'){ echo "class='active'"; } ?>>
            <a href="./carritodecompras.php">
              <span class="glyphicon glyphicon-shopping-cart"> </span> &nbsp;Carrito de compras
            </a>
          </li>

     			<li>
     				<a href="<?=base_url()?>index.php/auth/logout">
     					<span class="glyphicon glyphicon-off"> </span> &nbsp;Salir	
     				</a>
     			</li>
        </ul>
    </div>
  </div>
</nav>