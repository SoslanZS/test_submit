<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" href="style.css">
	    <title>Document</title>
	</head>
	<body>
	    <form action="" class="form _form" method="POST">
	        <label for="" class="form__inner">
	            <p>E-mail <span>*</span></p>
	            <input type="text" class="form__input form-val _input-val _email" name="mail" required>
	        </label>
	        <div class="form__block form__inner form__data">
	            <label for="" class="form__label-num">
	                <p>Номер телефона <span>*</span></p>
	                <input type="tel" id="phone" class="form__input form-val _input-val _phon" name="phon" required>
	            </label>
	            <label for="" class="form__label-num">
	                <p>Дополнительный номер</p>
	                <input type="tel" id="phone2" class="form__input" name="phon2">
	            </label>
	        </div>
	        <label for="" class="form__inner">
	            <p>Фамилия <span>*</span></p>
	            <input type="text" class="form__input form-val _input-val" name="userLastname" required>
	        </label>
	        <label for="" class="form__inner">
	            <p>Имя <span>*</span></p>
	            <input type="text" class="form__input form-val _input-val" name="usreName" required>
	        </label>
	        <label for="" class="form__inner">
	            <p>Отчество</p>
	            <input type="text" class="form__input" name="patronymic">
	        </label>
	        <label for="" class="form__inner">
	            <p>Дата рождения</p>
	            <div class="form__inner form__data">
	                <input type="number" class="form__input" name="days">
	                <input type="text" class="form__input" name="month">
	                <input type="number" class="form__input" name="year">
	            </div>
	        </label>
	        <div for="" class="form__inner">
	            <p>Пол</p>
	            <div class="form__block form__data">
	            	<label for="radio1" class="form__radio">
	                	<input type="radio" class="form__input" id="radio1" name="floor">
	                	<div class="form__last-radio">Мужской</div>
	                </label>
	                <label for="radio2" class="form__radio">
	                	<input type="radio" class="form__input" id="radio2" name="floor">
	                	<div class="form__last-radio">Женский</div>
	                </label>
	            </div>
	        </div>
	        <button class="_btn" type="submit" onclick="validate.send(this, event)">Сохранить изменения</button>
	    </form>
	    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
	    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js"></script>
	    <script src="./min.js"></script>
	</body>
</html>
