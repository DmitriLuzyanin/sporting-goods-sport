<?php
	function vestovar($kategotia)//проверяем категорию товара
	{
		//подключение к БД
		$link = mysqli_connect("localhost", "diman128_base", "Base01", "diman128_base") or die("Ошибка " . mysqli_error($link));
		if($link)//проверяем правильность подключения
		{
			//если катеогрия все товары
			if($kategotia==0)
			{
				//все 12 товаров выводим 
				for($i=1;$i<=12;$i+=2)
				{
					//запросы на получение данных о товаре
					$query = "SELECT `name_tovar`, `opisanie` FROM `tovar` WHERE id=".$i;
					$query2 = "SELECT `name_tovar`, `opisanie` FROM `tovar` WHERE id=".($i+1);

					$result1 = mysqli_query($link, $query) or die(mysqli_error($link));
					for ($data = []; $row = mysqli_fetch_assoc($result1); $data[] = $row);
					$result='';
	                foreach ($data as $elem) 
	                {
		                $result.= "<div class='row-0-gutter'>"
										."<!-- start portfolio item -->"
										."<div class='col-md-6 col-0-gutter'>"
											."<div class='ot-portfolio-item'>"
												."<figure class='effect-bubba'>"
													."<img src='images/katalog/товар".$i.".jpg' alt='img02' class='img-responsive' />"
													."<figcaption>"
														."<h2>".$elem['name_tovar']."</h2>"

														."<a href='' data-toggle='modal' data-target='#Modal-".$i."'>Больше</a>"
													."</figcaption></figure></div></div>";
	                }

	                $result2 = mysqli_query($link, $query2) or die(mysqli_error($link));
					for ($data = []; $row = mysqli_fetch_assoc($result2); $data[] = $row);

	                foreach ($data as $elem) 
	                {
		                    $result.="<div class='col-md-6 col-0-gutter'>"
											."<div class='ot-portfolio-item'>"
												."<figure class='effect-bubba'>"
													."<img src='images/katalog/товар".($i+1).".jpg' alt='img02' class='img-responsive' />"
													."<figcaption>"
														."<h2>".$elem['name_tovar']."</h2>"
														."<p>".$elem['opisanie']."</p>"
														."<a href='' data-toggle='modal' data-target='#Modal-".($i+1)."' >Больше</a>"
													."</figcaption></figure></div></div></div>";
	                }

	                //выводим результат в виде html разметки с данными о товаре
	                echo $result;
				}
			}
			//если катеогрия "Букеты" или "Подарочные наборы"
			else if($kategotia==1|$kategotia==2)
			{
				//переменный,которые помогут нам выводить определённые товары из бд
				$i=0;$kon=0;
				if($kategotia==1){
					//первые 6 товаров это подарочные наборы, остальные букеты
					$i=1;
					$kon=6;
				}
				else{
					$i=7;
					$kon=12;
				}
				$result='';
				for($i;$i<$kon;$i+=2)
				{
					$query = "SELECT `name_tovar`, `opisanie` FROM `tovar` WHERE id=".$i." and kategoria=".$kategotia;
					$query2 = "SELECT `name_tovar`, `opisanie` FROM `tovar` WHERE id=".($i+1)." and kategoria=".$kategotia;

					$result1 = mysqli_query($link, $query) or die(mysqli_error($link));
					for ($data = []; $row = mysqli_fetch_assoc($result1); $data[] = $row);
					$result='';
	                foreach ($data as $elem) 
	                {
		                $result.= "<div class='row-0-gutter'>"
										."<!-- start portfolio item -->"
										."<div class='col-md-6 col-0-gutter'>"
											."<div class='ot-portfolio-item'>"
												."<figure class='effect-bubba'>"
													."<img src='images/katalog/товар".$i.".jpg' alt='img03' class='img-responsive' />"
													."<figcaption>"
														."<h2>".$elem['name_tovar']."</h2>"
														."<p>".$elem['opisanie']."</p>"
														."<a href='' data-toggle='modal' data-target='#Modal-".$i."'>Больше</a>"
													."</figcaption></figure></div></div>";
	                }
	                $result2 = mysqli_query($link, $query2) or die(mysqli_error($link));
					for ($data = []; $row = mysqli_fetch_assoc($result2); $data[] = $row);

	                foreach ($data as $elem) 
	                {
		                    $result.="<div class='col-md-6 col-0-gutter'>"
											."<div class='ot-portfolio-item'>"
												."<figure class='effect-bubba'>"
													."<img src='images/katalog/товар".($i+1).".jpg' alt='img02' class='img-responsive' />"
													."<figcaption>"
														."<h2>".$elem['name_tovar']."</h2>"
														."<p>".$elem['opisanie']."</p>"
														."<a href='' data-toggle='modal' data-target='#Modal-".($i+1)."' >Больше</a>"
													."</figcaption></figure></div></div></div>";
	                }
	                //выводим результат на экран
	                echo $result;
				}
			}
		}
				
	}
	
?>

<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">
		<title>Интернет магазин СпторТоваров</title>
		<link rel="shortcut icon" href="images/bouquet_101953.ico">
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Custom styles for this template -->
		<link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="css/media.css" media="all and (max-width: 900px)">

    <style>
   body {
    background:  url(images/fonts.png); 
    }
  </style>
	</head>

	<body id="page-top">
		<!-- Navigation -->
		<nav class="navbar navbar-default">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header page-scroll">
					<a class="navbar-brand page-scroll" href="#page-top" style="padding-top: 0px;"><img src="images/logo.jpg" width="300" height="70"></a>
				<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="nav navbar-nav navbar-right">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li>
							<a class="page-scroll" >г.Пермь ул. Калинина д.42<br>
							8-800-562-45-23</a>
						</li>

					</div>
				</div>
			</div>
		</nav>
		
		
			<section id="about" class="mz-module">
			<div class="container light-bg">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>Новые поступления</h2>
							<p></p>
						</div>
					</div>
				</div>
				<div class="row">
					<wrapper>
					    <div id="carousel" class="carousel slide" data-ride="carousel">
					        <!--Показатели-->
					        <ol class="carousel-indicators">
					            <li data-target="#carousel" data-slide-to="0" class="active"></li>
					            <li data-target="#carousel" data-slide-to="1"></li>
					            <li data-target="#carousel" data-slide-to="2"></li>
					            <li data-target="#carousel" data-slide-to="3"></li>
					            <li data-target="#carousel" data-slide-to="4"></li>
					            <li data-target="#carousel" data-slide-to="5"></li>
					            <li data-target="#carousel" data-slide-to="6"></li>
					            <li data-target="#carousel" data-slide-to="7"></li>
					        </ol>

					        <!--Обертка для слайдов-->
					        <div class="carousel-inner" role="listbox">
					            <div class="item active"><img src="images/картинка1.jpg" alt="Картинка 1">
					                <div class="carousel-caption">
					                    <h3 class="text-uppercase">Кроссовки мужские Nike Revolution 5</h3>
					                    
					                </div>
					            </div>
					            
					            <div class="item"><img src="images/картинка2.jpg" alt="Картинка 2">
					                <div class="carousel-caption">
					                    <h3 class="text-uppercase">Ветровка для мальчиков Demix</h3>
					                    
					                </div>
					            </div>
					            <div class="item"><img src="images/картинка3.jpg" alt="Картинка 3">
					                <div class="carousel-caption">
					                    <h3 class="text-uppercase">Мужская футболка Demix</h3>
					                    
					                </div>
					            </div>
					            <div class="item"><img src="images/картинка4.jpg" alt="Картинка 4">
					                <div class="carousel-caption">
					                    <h3 class="text-uppercase">Спортивный топ бра для девочек FILA</h3>
					                    
					                </div>
					            </div>
					            <div class="item"><img src="images/картинка5.jpg" alt="Картинка 5">
					                <div class="carousel-caption">
					                    <h3 class="text-uppercase">Худи женская nike sportswear essential</h3>
					                    
					                </div>
					            </div>
					            <div class="item"><img src="images/картинка6.jpg" alt="Картинка 6">
					                <div class="carousel-caption">
					                    <h3 class="text-uppercase">Мешок боксерский UFC HASTTINGS MMA 126 см</h3>
					                    
					                </div>
					            </div>
					            <div class="item"><img src="images/картинка7.jpg" alt="Картинка 7">
					                <div class="carousel-caption">
					                    <h3 class="text-uppercase">Толстовка мужская Craft Eaze FZ Sweat Hood</h3>
					                    
					                </div>
					            </div>
					            <div class="item"><img src="images/картинка8.jpg" alt="Картинка 8">
					                <div class="carousel-caption">
					                    <h3 class="text-uppercase">Перчатки боксерские Venum</h3>
					                </div>
					            </div>
					   
					        </div>

					        <!--Элементы управления-->
					      
					    </div>
					</wrapper>
				</div>
					<script>
					    $('.carousel').carousel({
					        interval: 6000
					    })
					</script>
				</div>
			</div>
		</section>
		
		
	<form method="POST">	
		<section id="portfolio">
			<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="section-title">
						<h2>Каталог товаров</h2>
					</div>

				</div>
			
			</div>

				<?php
				//проверяем какую кнопку нажал пользователь
					if( isset( $_POST['btn1'] ) ){
						vestovar(0);
					}
					else if( isset( $_POST['btn2'] ) ){
						vestovar(2);
					}
					else if( isset( $_POST['btn3'] ) ){
						vestovar(1);
					}
					else{
						vestovar(0);
					}
				?>

			</div><!-- container -->
		</section>

		<!-- ПОСЛЕДНИЕ ПОКУПКИ-->
		<section id="team">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>Наши консультанты</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- team member item -->
					<div class="col-md-4">
						<div class="team-item">
							<div class="team-image">
								<img src="images/dmitriy.jpg" class="img-responsive" alt="cons">
							</div>
							<div class="team-text">
								<h3>Михалев Дмитрий Александрович</h3>
							</div>
						</div>
					</div>
					<!-- end team member item -->
					<!-- team member item -->
					<div class="col-md-4">
						<div class="team-item">
							<div class="team-image">
								<img src="images/Eva.jpg" class="img-responsive" alt="cons">
							</div>
							<div class="team-text">
								<h3>Польская Ева Михайловна</h3>
							</div>
						</div>
					</div>
					<!-- end team member item -->
					<!-- team member item -->
					<div class="col-md-4">
						<div class="team-item">
							<div class="team-image">
								<img src="images/Oleg.jpg" class="img-responsive" alt="cons">
							</div>
							<div class="team-text">
								<h3>Верещагин Олег Павлович</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Оплата товара -->
		<section id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>Оформить заказ</h2>
						</div>
					</div>
				</div>
											<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Ваше ФИО*" id="FIO" required="" data-validation-required-message="Пожалуйста, введите Ваше ФИО" name="FIO">
										<p class="help-block text-danger"></p>
									</div>
								</div>
				<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Номер телефона*" id="tele" required="" data-validation-required-message="Пожалуйста, введите Ваш номер телефона" name="tele">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
                                          <select type="tovar" class="form-control" placeholder="Название товара и размер (в скобках)*" id="tovar" required="" data-validation-required-message="Пожалуйста, введите название товара и размер (в скобках)" name="tovar">
                                            <option value="8">ТАЙТСЫ МУЖСКИЕ CRAFT WARM TRAIN WIND</option>
                                            <option value="9">ТОЛСТОВКА МУЖСКАЯ CRAFT EAZE FZ SWEAT HOOD</option>
                                            <option value="10">ВЕЛОСИПЕД STERN EXTREME BMX STEEL 20"</option>
                                            <option value="11">ТРЕНАЖЕР ЭЛЛИПТИЧЕСКИЙ PRO-FORM ENDURANCE 520 E</option>
                                            <option value="12">ГИРЯ REEBOK 8 КГ</option>
                                            <option value="13">БЕГОВЫЕ ЛЫЖИ ATOMIC MOVER XCRUISE GRIP</option>
                                            <option value="14">КРОССОВКИ МУЖСКИЕ NIKE AIR MONARCH IV</option>
                                            <option value="15">ВЕТРОВКА ЖЕНСКАЯ OUTVENTURE</option>
                                            <option value="16">ХУДИ ЖЕНСКАЯ NIKE SPORTSWEAR ESSENTIAL</option>
                                            <option value="17">ФУТБОЛКА МУЖСКАЯ ADIDAS</option>
                                            <option value="18">БУТСЫ МУЖСКИЕ NIKE LEGEND 8 CLUB TF</option>
                                            <option value="19">РЮКЗАК ADIDAS</option>
                                          </select>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="number" class="form-control" placeholder="Количесвто товара" id="tele" required="" data-validation-required-message="Пожалуйста, введите Ваш номер телефона" name="tele">

										<p class="help-block text-danger"></p>
									</div>
								</div>
								
								</div>
								<div class="row">
								        <div class="carta">
								            <h2>Данные карты</h2>
								        </div>
							    <div class="col-md-6">
									<div class="form-group">
										<div id="css-script-menu">
                                      <div class="card-bounding">
                                    
                                        <aside>Card Number:</aside>
                                        <div class="card-container">
                                          <!--- ".card-type" is a sprite used as a background image with associated classes for the major card types, providing x-y coordinates for the sprite --->
                                          <input placeholder="0000 0000 0000 0000" maxlength="19" onkeyup="$cc.validate(event)" />
                                          <!-- The checkmark ".card-valid" used is a custom font from icomoon.io --->
                                        </div>
                                        <div class="card-details clearfix">
                                    
                                          <div class="expiration">
                                            <aside>Expiration Date</aside>
                                            <input onkeyup="$cc.expiry.call(this,event)" maxlength="5" placeholder="mm/yyyy" />
                                          </div>
                                          <div class="cvv " >
                                            <aside>CVV</aside>
                                            <input placeholder="XXX" maxlength="3"/>
                                          </div>
                                        </div>
                                </div>
								<div class="clearfix"></div>
									<div id="success"></div>
									<input type="submit" name="btn4" class="btn" value="Отправить запрос" >
								</div>
							</div>
					
					</div>
				</div>
			</div>
		</section>
	</form>
		<p id="back-top">
			<a href="#top"><i class="fa fa-angle-up"></i></a>
		</p>

		<!-- Нижний блок -->
		<footer>
				<h4>Администрация Сайта не несет ответственности за размещаемые Пользователями материалы (в т.ч. информацию и изображения), их содержание и качество.<br>
				© 2019—2020 Компания MегаСпорт
				</h4>
		</footer>

		<?php
			//проверяем нажатие кнопки "Отправить сообщение"
    		
    		if( isset( $_POST['btn4'] ) ){
    			$tele=$_POST['tele'];
    			$tovar=$_POST['tovar'];
    			$FIO=$_POST['FIO'];
    			$number=$_POST['number'];
    			$date=$_POST['date'];
    			$code=$_POST['code'];
    			$name=$_POST['name'];
		            //подлючаемся к БД
		            $link = mysqli_connect("localhost", "diman128_base", "Base01", "diman128_base") or die("Ошибка " . mysqli_error($link));
					if($link)//проверяем правильность подключения
					{
		                //запрос на добавление сообщения в БД
		                $query="INSERT INTO `zakaz`(`tele`, `tovar`, `FIO`, `number`, `date`, `code`, `name`) VALUES ('$tele','$tovar','$FIO', '$number', '$date', '$code', '$name')";
						$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
		                if($result)
		                {
		                	//выводим сообщение об успехе
		                	echo '<script type="text/javascript">alert("Заказ одобрен! Вам придет SMS-уведомление, когда товар придет в магазин!");</script>';
		                }
		                else{
		                	echo '<script type="text/javascript">alert("Заказ не одобрен! Убедитесь в правильности ввода полей!");</script>';
		                }
		                // закрываем подключение
		                mysqli_close($link);
						
		           }
        	}

		

		//программный код по выводу данный в модальные окна
        //всего у нас 12 товаров, значит и модальных окон тоже 12

			$link = mysqli_connect("localhost", "diman128_base", "Base01", "diman128_base") or die("Ошибка " . mysqli_error($link));
			if($link)//проверяем правильность подключения
			{
					for($i=1;$i<=12;$i++)
					{
						$query = "SELECT `name_tovar`, `opisanie`, `price`, `dopoln` FROM `tovar` WHERE id=".$i;

						$result1 = mysqli_query($link, $query) or die(mysqli_error($link));
						for ($data = []; $row = mysqli_fetch_assoc($result1); $data[] = $row);
						$result='';
		                foreach ($data as $elem) 
		                {
							$result='<div class="modal fade" id="Modal-'.$i.'" tabindex="-1" role="dialog" aria-labelledby="Modal-label-'.$i.'">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<h4 class="modal-title" id="Modal-label-'.$i.'">'.$elem['name_tovar'].'</h4>
												</div>
												<div class="modal-body">
													<img src="images/katalog/товар'.$i.'.jpg" alt="img01" class="img-responsive" />
													<div class="modal-works"><span>'.$elem['price'].'p.</span><span>'.$elem['dopoln'].'</span></div>
													<p><b>Описание</b></br>'.$elem['opisanie'].'</br>'.$elem[''].
													'</p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
												</div></div></div></div>';
		                }
		                //вывод результата 
		                echo $result;
					}
				
			}
		?>
		
		<!-- Bootstrap core JavaScript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/SmoothScroll.js"></script>
		<script src="js/theme-scripts.js"></script>
		<script src="js/creditCardValidator.js"></script>
	</body>
</html>