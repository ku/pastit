<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="{{$config.url}}css/paste.css" type="text/css" />
<title>Embed | Pastit</title>
</head>
<body>

<div id="main">
<pre>
{{$app.paste.content}}
</pre>
</div>

<div id="footer">
  <p>
    Pasted: <a href="{{$config.url}}embed/{{$app.paste.id}}">{{$config.url}}embed/{{$app.paste.id}}</a>.
  </p>
</div>
</body>
</html>

