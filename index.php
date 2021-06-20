<html>
<meta charset="utf-8">
	<head>
	<title>Test page</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">	
	<script type="text/javascript" src="jquery-1.11.3.min.js"></script>
	<script type="text/javascript" >
		function updateCapcha()
		{
			$.ajax({
				type: 'POST',
				url: 'php2.php',
				success: function (data) {
					$('#capcha').html(data);
				}
			});
		}
	</script>
	<script type="text/javascript" >
		function submitForm(){
			if (""!=$("input[name=name]").val()&& ""!=$("textarea[name=comment_text]").val()) {
				if ($('div#capcha').text()==$("input[name=capcha]").val()){
					$('#capcha_error').html("");
					msg = $('#addComment').serialize();
					$.ajax({
					type: 'POST',
					url: 'php.php',
					data: msg,
					success: function (data) {
					$('#last_comments').html(data);
					updateCapcha();
					}
					});
					$("input[type=text], textarea").val("");
					}
				else{
					$('#capcha_error').html("Символы введены неверно");
					updateCapcha();
				}
			}
			else {
				$('#capcha_error').html("Заполните все поля");}
			}
	</script>
	<script type="text/javascript" >
		function deleteComment(data){
			$.ajax({
				type: 'POST',
				url: 'php.php',
				data: data,
				success: function (data) {
					$('#last_comments').html(data);
					updateCapcha();
				}
			});
		}
	</script>
	<script type="text/javascript" >
		function documentReady(){
			$.ajax({
				type: 'POST',
				url: 'php.php',
				success: function (data) {
					$('#last_comments').html(data);
				}
			});
			updateCapcha();
		}
		$(document).ready=documentReady();
	</script>
	
	</head>
	<body>
		<div class='center'>
			<img src="./image.jpg"/>
		</div>
		<br><br>
		<div id="comments" class="left">
			<div id="add_comment">
				<form id='addComment' method='POST' action='javascript:void(null);' onsubmit='submitForm()'>
					<div>Ваше имя:</div>
					<input id="name" name="name" class="form-text" type="text" maxlength="60"></input>
					<br>
					<div>Ваш комментарий:
					</div>
					<textarea id="comment_text" name="comment_text" type="text" class="form-textarea resizable required"></textarea>
					<br>
					<div>Введите символы:</div>
					<div id='capcha'></div>
					<div id='capcha_error' class="error"></div>
					<input name="capcha" class="form-text" type="text" maxlength="10"></input>
					<input name="add_button" class="button" style="button" type="submit" value="Добавить комментарий"></input>
				<form></form>
			</div>
			<div id="last_comments" class="center lc">
			</div>
		</div>
	</body>
</html>
