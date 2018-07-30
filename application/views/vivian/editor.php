<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<script src="//cdn.ckeditor.com/4.9.2/full/ckeditor.js"></script>
				<h2 class="title1">Test 01 - Editor to Array</h2>
				<div class="blank-page widget-shadow scroll" id="style-2 div1">
					<form action="editor_engine/" method="post">
						<textarea name="myeditor"></textarea>
						<input type="submit" name="submit">
					</form>
				</div>
			</div>
		</div>

		<script>
			CKEDITOR.replace( 'myeditor' );
		</script>
        