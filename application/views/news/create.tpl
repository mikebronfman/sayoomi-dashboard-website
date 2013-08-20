<h2>Create a news item</h2>

{validation_errors()}

{form_open('news/create')}

	<label for="title">Title</label>
	<input type="input" name="title" x-webkit-speech speech /><br />

	<label for="text">Text</label>
	<textarea name="text"></textarea><br />

	<input type="submit" name="submit" value="Create news item" />

</form>

