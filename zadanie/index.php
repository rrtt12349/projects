<?php require_once('components/setings.php'); ?>
<?php echo $index; ?>
    <body>
        
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
  <a class="navbar-brand" href="" style="margin-left: 10px;">WEB_DEVELOPMENT</a>
  <button class="navbar-toggler" type="button">
  </button>

  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="">Дом <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">О разработчиках</a>
      </li>
      </li>
            <li class="nav-item">
            <button class="btn btn-secondary">Войти</button>
            </li>
      <li class="nav-item drpdown">
      <a class="nav-link" href="">
          Заказать сайт
        </a>
        
    </ul>
  </div>
  </div>
</nav>
        <div class="container g-2" >
            <div>
                <form action=""  method="GET">
                <input id="name" name="name" class="form-control input" type="text" placeholder="ФИО" style="margin-top: 10px; width: 500px;"> 
                <input id="nomber_phone" name="nomber_phone" class="form-control input" type="tel" placeholder="номер телефона" style="margin-top: 10px; width: 500px;"> 
                <input id="email" name="email" class="form-control input" type=" email" placeholder="email" style="margin-top: 10px; width: 500px;"> 
                <input id="adress" name="adress" class="form-control input" type="text" placeholder="адрес проживания" style="margin-top: 10px; width: 500px;"> 
                <button type="submit" class="btn btn-dark" style="margin-top: 10px;">Отпрвавка формы</button>
            </form>
            </div>
 
        
<?php  echo $_GET['name'];?>
 <?php   echo $_GET['nomber_phone']; ?>
 <?php  echo $_GET['email'];?>
 <?php   echo $_GET['adress']; ?>
 </div>  
 <footer>
    <h1 class="text-center">Footer</h1>
<div class="text-center p-4" style="background-color: rgb(187,187,187);"> 
&copy <?php echo date ('Y') ?>
</div>
</footer>
    </body>

</html>