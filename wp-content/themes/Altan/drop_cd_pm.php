<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> -->
<?php $idioma= ICL_LANGUAGE_CODE; ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">
<style>
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
}
.mobile .dropdown-submenu .dropdown-menu {
    top: 20px;
    left: 50%;
    margin-top: -1px;
}
.ciudades
{
  margin-left: 60px;
  margin-top: 20px;
}
.pueblos
{
  margin-left: 60px;
  margin-top: 20px;
}
.dropdown-menu.show
{
  width: 90%;
  background: #f1f1f1;
  text-align: center;
  transform: translate3d(0px, 35px, 0px)!important;
}
.dropdown-menu.show a
{
  color: black;
}
p.test:hover
{
  text-decoration: underline;
  cursor: pointer;
}
p.test
{
  line-height: 10px;
}
p.click:hover
{
  text-decoration: underline;
  cursor: pointer;
}
p.click
{
  line-height: 10px;
}
.dropdown-menu
{
  background: #f3f3f3 !important;
  text-align: center;
}
.mobile
{
  display: none;
}
@media screen and (max-width: 770px) 
{
  .pueblos.mobile
  {
    display: block;
  }
  .pueblos
  {
    display: none;
  }
}

</style>
<div style="margin-bottom: 145px;" class="container">
  <div class="ciudades">  
  <div class="dropdown">
    <button style="width: 90%" class="btn btn-default" type="button" data-toggle="dropdown">
      <?php 
      if ($idioma == "en")
      {
        echo "Main Cities";
      }
      else
      {
        echo "Ciudades Principales";
      }
      ?>      
      <span style="position: absolute; right: 15%;" class="fa fa-caret-down"></span></button>
    <ul style="transform: none !important" class="dropdown-menu">
      <li><p>
      <?php 
      if ($idioma == "en")
      {
        echo "Mexico City and suburbs";
      }
      else
      {
        echo "Ciudad de México y área conurbada";
      }
      ?>  
      </p></li>
      <li><p>
      <?php 
      if ($idioma == "en")
      {
        echo "Guadalajara, JAL and suburbs";
      }
      else
      {
        echo "Guadalajara, JAL y área conurbada";
      }
      ?>       
      </p></li>
      <li><p>
      <?php 
      if ($idioma == "en")
      {
        echo "Monterrey, NL and suburbs";
      }
      else
      {
        echo "Monterrey, NL y área conurbada";
      }
      ?>      
      </p></li>
      <li><p>Aguascalientes, AGS</p></li>
      <li><p> Celaya, GTO</p></li>
      <li><p>Puebla, PUE</p></li>
      <li><p>Querétaro, QRO</p></li>
      <li><p>Morelia, MICH</p></li>
      <li><p>Tepic, NAY</p></li>
      <li><p>Colima, COL</p></li>
      <li><p>Toluca, EDOMEX</p></li>          
    </ul>
  </div>
</div>

<div class="pueblos">
  <div class="dropdown">
    <button style="width: 90%" class="btn btn-default" type="button" data-toggle="dropdown">
      <?php 
      if ($idioma == "en")
      {
        echo "Magical Towns";
      }
      else
      {
        echo "Pueblos Mágicos";
      }
      ?>  
      <span style="position: absolute; right: 15%;" class="fa fa-caret-down"></span></button>
    <ul class="dropdown-menu">
      <li class="dropdown-submenu">
        <p class="test">Estado de México<span style="position: absolute; right: 5%;" class="fa fa-caret-right"></span></p>
        <ul class="dropdown-menu">          
          <li><p>Metepec</p></li> 
          <li><p>Villa del Carbón</p></li> 
          <li><p>El Oro de Hidalgo</p></li> 
          <li><p>Tepotzotlán</p></li> 
          <li><p>Valle de Bravo</p></li> 
          <li><p>San Martín de las Pirámides</p></li>        
        </ul>
      </li>
      <li class="dropdown-submenu">
        <p class="test">Jalisco<span style="position: absolute; right: 5%;" class="fa fa-caret-right"></span></p>
        <ul class="dropdown-menu">          
          <li><p>Tequila</p></li> 
          <li><p>Tapalpa</p></li> 
          <li><p>San Sebastián del Oeste</p></li>             
        </ul>
      </li>
      <li class="dropdown-submenu">
        <p class="test">Zacatecas<span style="position: absolute; right: 5%;" class="fa fa-caret-right"></span></p>
        <ul class="dropdown-menu">          
          <li><p>Nochistlán de Mejía</p></li> 
          <li><p>Teúl de González Ortega</p></li>                 
        </ul>
      </li>
      <li class="dropdown-submenu">
        <p class="test">Hidalgo<span style="position: absolute; right: 5%;" class="fa fa-caret-right"></span></p>
        <ul class="dropdown-menu">          
          <li><p>Huichapan</p></li> 
          <li><p>Tecozautla</p></li>
          <li><p>Huasca de Ocampo</p></li> 
          <li><p>Mineral del Chico</p></li> 
        </ul>
      </li>
      <li class="dropdown-submenu">
        <p class="test">Michoacán<span style="position: absolute; right: 5%;" class="fa fa-caret-right"></span></p>
        <ul class="dropdown-menu">          
          <li><p>Cuitzeo del Porvenir</p></li> 
          <li><p>Jiquilpan de Juárez</p></li>
          <li><p>Mineral de Angangueo</p></li>                 
        </ul>
      </li>
      <li class="dropdown-submenu">
        <p class="test">Morelos<span style="position: absolute; right: 5%;" class="fa fa-caret-right"></span></p>
        <ul class="dropdown-menu">          
          <li><p>Tlayacapan</p></li> 
          <li><p>Tepoztlán</p></li>                 
        </ul>
      </li>
      <li class="dropdown-submenu">
        <p class="test">Colima<span style="position: absolute; right: 5%;" class="fa fa-caret-right"></span></p>
        <ul class="dropdown-menu">          
          <li><p>Comala</p></li>                         
        </ul>
      </li>
      <li class="dropdown-submenu">
        <p class="test">Aguascalientes<span style="position: absolute; right: 5%;" class="fa fa-caret-right"></span></p>
        <ul class="dropdown-menu">          
          <li><p>San José de Gracia</p></li> 
          <li><p>Real de Asientos</p></li>                 
        </ul>
      </li>
      <li class="dropdown-submenu">
        <p class="test">Nayarit<span style="position: absolute; right: 5%;" class="fa fa-caret-right"></span></p>
        <ul class="dropdown-menu">          
          <li><p>Jala</p></li>                         
        </ul>
      </li>
      <li class="dropdown-submenu">
        <p class="test">Guanajuato<span style="position: absolute; right: 5%;" class="fa fa-caret-right"></span></p>
        <ul class="dropdown-menu">          
          <li><p>Jalpa de Cánovas</p></li>                         
        </ul>
      </li>
      <li class="dropdown-submenu">
        <p class="test">Nuevo León<span style="position: absolute; right: 5%;" class="fa fa-caret-right"></span></p>
        <ul class="dropdown-menu">          
          <li><p>Linares</p></li> 
          <li><p>Santiago</p></li>                 
        </ul>
      </li>
      <li class="dropdown-submenu">
        <p class="test">Querétaro<span style="position: absolute; right: 5%;" class="fa fa-caret-right"></span></p>
        <ul class="dropdown-menu">          
          <li><p>Bernal</p></li> 
          <li><p>Tequisquiapan</p></li>                 
        </ul>
      </li>
    </ul>
  </div>
</div>
<!--MOBILE-->
<div class="pueblos mobile">
  <div class="dropdown">
    <button style="width: 90%" class="btn btn-default" type="button" data-toggle="dropdown">
      <?php 
      if ($idioma == "en")
      {
        echo "Magical Towns";
      }
      else
      {
        echo "Pueblos Mágicos";
      }
      ?>  
      <span style="position: absolute; right: 15%;" class="fa fa-caret-down"></span></button>
    <ul class="dropdown-menu">
      <li class="dropdown-submenu">
        <p class="click">Estado de México<span style="position: absolute; right: 5%;" class="fa fa-caret-down"></span></p>
        <ul class="dropdown-menu">

          <li><p>Metepec</p></li> 
          <li><p>Villa del Carbón</p></li> 
          <li><p>El Oro de Hidalgo</p></li> 
          <li><p>Tepotzotlán</p></li> 
          <li><p>Valle de Bravo</p></li> 
          <li><p>San Martín de las Pirámides</p></li>        
        </ul>
      </li>
      <li class="dropdown-submenu">
        <p class="click">Jalisco<span style="position: absolute; right: 5%;" class="fa fa-caret-down"></span></p>
        <ul class="dropdown-menu">          
          <li><p>Tequila</p></li> 
          <li><p>Tapalpa</p></li> 
          <li><p>San Sebastián del Oeste</p></li>             
        </ul>
      </li>
      <li class="dropdown-submenu">
        <p class="click">Zacatecas<span style="position: absolute; right: 5%;" class="fa fa-caret-down"></span></p>
        <ul class="dropdown-menu">          
          <li><p>Nochistlán de Mejía</p></li> 
          <li><p>Teúl de González Ortega</p></li>                 
        </ul>
      </li>
      <li class="dropdown-submenu">
        <p class="click">Hidalgo<span style="position: absolute; right: 5%;" class="fa fa-caret-down"></span></p>
        <ul class="dropdown-menu">          
          <li><p>Huichapan</p></li> 
          <li><p>Tecozautla</p></li>
          <li><p>Huasca de Ocampo</p></li> 
          <li><p>Mineral del Chico</p></li> 
        </ul>
      </li>
      <li class="dropdown-submenu">
        <p class="click">Michoacán<span style="position: absolute; right: 5%;" class="fa fa-caret-down"></span></p>
        <ul class="dropdown-menu">          
          <li><p>Cuitzeo del Porvenir</p></li> 
          <li><p>Jiquilpan de Juárez</p></li>
          <li><p>Mineral de Angangueo</p></li>                 
        </ul>
      </li>
      <li class="dropdown-submenu">
        <p class="click">Morelos<span style="position: absolute; right: 5%;" class="fa fa-caret-down"></span></p>
        <ul class="dropdown-menu">          
          <li><p>Tlayacapan</p></li> 
          <li><p>Tepoztlán</p></li>                 
        </ul>
      </li>
      <li class="dropdown-submenu">
        <p class="click">Colima<span style="position: absolute; right: 5%;" class="fa fa-caret-down"></span></p>
        <ul class="dropdown-menu">          
          <li><p>Comala</p></li>                         
        </ul>
      </li>
      <li class="dropdown-submenu">
        <p class="click">Aguascalientes<span style="position: absolute; right: 5%;" class="fa fa-caret-down"></span></p>
        <ul class="dropdown-menu">          
          <li><p>San José de Gracia</p></li> 
          <li><p>Real de Asientos</p></li>                 
        </ul>
      </li>
      <li class="dropdown-submenu">
        <p class="click">Nayarit<span style="position: absolute; right: 5%;" class="fa fa-caret-down"></span></p>
        <ul class="dropdown-menu">          
          <li><p>Jala</p></li>                         
        </ul>
      </li>
      <li class="dropdown-submenu">
        <p class="click">Guanajuato<span style="position: absolute; right: 5%;" class="fa fa-caret-down"></span></p>
        <ul class="dropdown-menu">          
          <li><p>Jalpa de Cánovas</p></li>                         
        </ul>
      </li>
      <li class="dropdown-submenu">
        <p class="click">Nuevo León<span style="position: absolute; right: 5%;" class="fa fa-caret-down"></span></p>
        <ul class="dropdown-menu">          
          <li><p>Linares</p></li> 
          <li><p>Santiago</p></li>                 
        </ul>
      </li>
      <li class="dropdown-submenu">
        <p class="click">Querétaro<span style="position: absolute; right: 5%;" class="fa fa-caret-down"></span></p>
        <ul class="dropdown-menu">          
          <li><p>Bernal</p></li> 
          <li><p>Tequisquiapan</p></li>                 
        </ul>
      </li>
    </ul>
  </div>
</div>
<!--MOBILE-->
</div>



<script>
$(document).ready(function(){
  $('.dropdown-submenu p.test').hover(function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
  $('.dropdown-submenu p.click').on("click", function(e){
    // $('.mobile .dropdown-submenu .dropdown-menu').hide();
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
  $(document).click( function(){
        $('.mobile .dropdown-submenu .dropdown-menu').hide();
    });  
});
</script>