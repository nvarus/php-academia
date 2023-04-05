<form class="create-book-form" action="index.php" form="form1" method="post">
	<input type="hidden" name="page" value="2">

	<input type="text" name="title" placeholder="Название книги" >
	<input type="text" name="author" placeholder="Автор книги (либо группа авторов через запятую)" >
	<div class="difficulty">
		<h3>Уровень сложности</h3>
		<div class="difficulty__flex">
			<label class="difficulty__item">
				<input type="radio" name="difficulty" value="easy">
				<span>Легкий</span>
			</label>
			
			<label class="difficulty__item">
				<input type="radio" name="difficulty" value="middle">
				<span>Средний</span>
			</label>
			<label class="difficulty__item">
				<input type="radio" name="difficulty" value="hard">
				<span>Сложный</span>
			</label>
		</div>
	</div>
		<textarea name="annotation" placeholder="Аннотация" cols="10" rows="5"></textarea>
		<input type="file" name="photo">
	<select name="category" id="" >
		<option id="select_label" value="0" disabled selected>Выберите категорию</option>
		<?php add_category_option(); ?>
	</select>
	<textarea name="tags" placeholder="Укажите тэги через запятую, например: #PHP, #ООП, #Справочник" cols="10" rows="3"></textarea>
	<input type="file" name="book">
	<input type="submit" name="button" value="Загрузить книгу">
</form>

<?php
