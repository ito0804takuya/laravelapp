<html>
  <body>
    <h1>Index</h1>
    <p>{{ $msg }}</p>
    <form method="POST" action="/hello">
      @csrf
      <input type="text" name="msg">
      <input type="submit">
    </form>
  </body>
</html>