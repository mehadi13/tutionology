<form method="POST" action="/test">
    {{csrf_field()}}
    <input type="text" name="test_str">
    <input type="submit">
</form>