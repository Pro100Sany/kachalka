<?php
header('Content-Type: text/html; charset=utf-8'); 

require( "Classes/Autoload.php" );//подключение автозагрузчика классов

$db = new DB_CONFIG();
$param = $db->connectDataBase();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Kachalka</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--////////////////////////BOOTSTRAP - include///////////////////////////-->
    <link rel="stylesheet" href="Bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <!--////////////////////////SLIDER - include///////////////////////////-->
    <script src="Slider/jquery-1.5.1.min.js" type="text/javascript"></script>
    <script src="Slider/jquery.orbit-1.2.3.js" type="text/javascript"></script>
    <script src="Slider/jquery.orbit-1.2.3.min.js" type="text/javascript"></script>
    <link href="Slider/orbit-1.2.3.css" rel="stylesheet" type="text/css"/>
    <!--////////////////////////Font Awesome - include///////////////////////////-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="font_awesome/css/font-awesome.min.css">
    <!--////////////////////////CSS - include///////////////////////////-->
    <link rel="stylesheet" href="/CSS/template.css">
  </head>
  <body >
      <div class="container col-lg-10 col-lg-offset-3" style="top:200px;">
<!--//////////////////////////SLIDER//////////////////////////////////////// --><!-- -->         
          <div class="row">
              <div class="slider-nav col-lg-16" >
                  <script type="text/javascript">
                            $(window).load(function() {
                                    $('#featured').orbit();
                            });
                    </script>
                    <div id="featured"> 
                            <div class="content" style="">
                                <img class="img_slider" src="Slider/shtanga.jpg" data-caption="#htmlCaption" alt=""/>
                            </div>
                            <a href="">
                                <img class="img_slider" src="Slider/shtanga2.jpg" alt=""/>
                            </a>
                            <a href="">
                                <img class="img_slider" src="Slider/kachok.jpg" alt=""/>
                            </a>
                            <a href="">
                                <img class="img_slider" src="Slider/kachok2.jpg" alt=""/>
                            </a>
                            <a href="">
                                <img class="img_slider" src="Slider/ganteli.jpg" alt=""/>
                            </a>
                    </div>
                    <span class="orbit-wrapper orbit-caption" id="htmlCaption"><strong>I'm A Badass Caption:</strong> I can haz <a href="#">links</a>, <em>style</em> or anything that is valid markup :)</span>	
              </div>
          </div>
<!--///////////////////////MAIN_MENU//////////////////////////////////////// -->
          <div class="row">
              <div class="col-lg-16">
                  <a href="index.php"><div class="col-lg-2  box_menu">Главная</div></a>
                  <a href=""><div class="col-lg-2  box_menu">Упражнения</div></a>
                  <a href=""><div class="col-lg-2  box_menu">Инвентарь</div></a>
                  <a href=""><div class="col-lg-2  box_menu">Помощь</div></a>
                  <!--///////////////REGISTRATION//////////////// -->
                  <div class="col-lg-8 box_autorisation">
                      <form class="col-lg-16" method="post" action="index.php" name="autorisation">
                          <!-- Login-->
                          <input class="log_input col-lg-6" type="text" name="login"
                               value="Логин" 
                               onfocus="if (this.value == 'Логин') this.value = '';"
                               onblur="if (this.value == '') this.value = 'Логин';">
                          <!-- Password-->
                          <input class="log_input col-lg-6" type="password" name="password"
                               value="Ваш Пароль" 
                               onfocus="if (this.value == 'Ваш Пароль') this.value = '';"
                               onblur="if (this.value == '') this.value = 'Ваш Пароль';">
                          <!-- Submit-->
                          <input class="log_submit col-lg-3 col-lg-offset-1" value="Войти" type="submit" name="submit_autorisation">
                      </form>
                      
                      <a href="" style="text-decoration:underline; font-size: 12px; ">Зарегистрироваться</a>
                  </div>
              </div>
          </div>
<!--///////////////////////EXERCISE FILTER////////////////////////////////// -->
          <div class="row" style="margin-top:10px;">
              <div class="col-lg-16">
                  <h1 style=""> Подобрать упражнение </h1>
                  <div class="col-lg-6 col-lg-offset-1  ">
                      <h3>Группы мышц</h3>
                      <hr/>
                      <div class="col-lg-16 muscle_group">
                          <ul class="muscle_ul">
                              <form method="post" name="muscle_post" >
                                  <div class="checkbox">
                                    <label><input type="checkbox" name="back" value="Спина">Спина</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" name="breast" value="Грудь">Грудь</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" name="delta" value="Дельта">Дельта</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" name="biceps" value="Битцепс">Битцепс</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" name="triceps" value="Трицепс">Трицепс</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">...</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">...</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">...</label>
                                  </div>
                                  <input id=submit1 type = 'submit' value = 'Submit'>

                             
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-6 col-lg-offset-2  ">
                      <h3>Имеющийся инвентарь</h3>
                      <hr/>
                      <div class="col-lg-16 inventory_group">
                          <ul class="inventory_ul">
                             
                                  <div class="checkbox">
                                     <label><input type="checkbox" name="dumbbells" value="Гантели">Гантели</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" name="bench" value="Скамейка">Скамейка</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" name="mat" value="Коврик">Коврик</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" name="barbell" value="Штанга">Штанга</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" name="invent_5" value="">...</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" name="invent_6" value="">...</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" name="invent_7" value="">...</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" value="">...</label>
                                  </div>
                                  <input id=submit2 type = 'submit' value = 'Submit'>

                              </form>    
                          </ul>
                      </div>
                  </div>
              </div>
                <script>
                function submit_forms () {
              document.getElementById('submit1').click();
              document.getElementById('submit2').click();

            }

                </script>
                <form method="post"> 
                <input name="submit_filter" type=button value="Super POST" onClick="javascript:submit_forms ();">
                </form>

                 
<!--////////////////////////LISTS OF SELECTED MUSCLES AND INVENTORY////////////////////////////////// -->              
              <div class="col-lg-16">
                  <div class="col-lg-4">
                     <?php 
                            
                                $selected_filter = new SelectFilter($param, $_POST['back'],$_POST['breast'], $_POST['delta'], $_POST['biceps'], $_POST['triceps'],//Отправляем в конструктор
                                                                                  $_POST['dumbbells'],$_POST['bench'], $_POST['mat'], $_POST['barbell'] );              // выбранные мышцы и инветарь
                                $selected_filter->showSelectedMuscles(); //Выводим выбранные мышцы
                            
                        ?>
                  </div>
                  
                  <div class="col-lg-4 col-lg-offset-8 ">
                      <?php $selected_filter->showSelectedInventory(); //Выводим выбранный инвентарь
                        ?>
                  </div>
              </div>
          </div>
          <hr/>
<!--////////////////////////SHOW EXERCISES////////////////////////////////// -->
          <div class="row">
              <h1>Занимайтесь на здоровье!</h1>
              <?php      
                 
                 $result_filter = $selected_filter->selectExersises();     

                 while ($exercise = $result_filter->fetch_assoc()) {
                 ?>
              <div class="col-lg-4  showBox" >
                  <div class=" col-lg-16 showBordersBlue " >
                      <img style="width: 100%;" src="<?php echo $exercise['img1'];?>" alt="Фото">
                  </div>
                  <div class="col-lg-16 box_description showBordersGreen">
                      <?php $str = $exercise['description']; 
                       echo $str = substr($str,0,300)."...";
                                    ?>
                  </div>
                  <div class="col-lg-16 showBordersPink"style="padding: 15px;">
                     <?php echo $exercise['muscles_group'];?> 
                  </div>
                  <div class="col-lg-16 showBorders"style="padding: 15px;">
                     <?php echo $exercise['inventory'];?> 
                  </div>
              </div>
              <?php } ?>
          </div>
<!--/////////////////////////////FOOTER///////////////////////////////////// -->
          <div class="row footer">
              <footer> 
<!----------------------------------Контакты----------------------------------->                     
                  <div class="col-lg-6">
                      <div class="col-lg-16 " style="border-right: solid 2px #00baff ;">
                          <h3 style="text-align: center;">Контакты</h3>
                          <?php      
                                 $admins = new SelectAdmins($param);
                                 $result_admins = $admins->selectAdmins();       

                                 while ($admin = $result_admins->fetch_assoc()) {    
                                 ?>
                          <div class="col-lg-8 ">
                              <div class="img-circle " style="padding: 20px; "><img src="<?php echo $admin['foto'];?>" alt=""/></div>                          
                              <br/>
                              <span class="col-lg-16" style="font-size: 20px; text-align: center;"><?php echo $admin['name'];?></span> 
                              <br/>
                              тел.<a href="tel:<?php echo $admin['tel'];?>"><span  style="color: greenyellow;"><?php echo $admin['tel'];?></span></a>
                              <br/>
                              e-mail.<a href="mailto:<?php echo $admin['email'];?>"><span  style="color: goldenrod;"><?php echo $admin['email'];?></span></a>
                          </div>
                                 <?php } ?>
                      </div>
                  </div>
<!------------------------------Вторая колонка--------------------------------->                     
                  <div class="col-lg-5">
                      <div class="col-lg-16 " style="border-right: solid 2px #00baff ;">
                          <h3 style="text-align: center;">Сотрудничество</h3>
                          <div class="col-lg-16">
                          
                          </div>
                      </div>    
                  </div>
<!----------------------Подписаться на рассылку-------------------------------->                  
                  <div class="col-lg-5">
                      <h3 style="text-align: center;">Подписаться на рассылку</h3>
                      <br /><br />
                      <div class="col-lg-16">
                          <form method="post" >
                              <input class="form-control" type="text" 
                                   value="Имя" 
                                   onfocus="if (this.value == 'Имя') this.value = '';"
                                   onblur="if (this.value == '') this.value = 'Имя';">
                              <input class="form-control" type="email" 
                                   value="Email" 
                                   onfocus="if (this.value == 'Email') this.value = '';"
                                   onblur="if (this.value == '') this.value = 'Email';">
                              <input class="form-control" type="submit" value="Подписаться">
                          </form>
                      </div>
                  </div>
              </footer>
          </div>    
      </div>
  </body>
</html>


