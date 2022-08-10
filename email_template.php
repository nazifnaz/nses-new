<!DOCTYPE html>
{% load static %}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NSES</title>
</head>
<body>
<div>
    <p> NAME: {{name}}</p>
    <p> EMAIL: {{email}}</p>
    {% if subject %} <p> SUBJECT: {{subject}}</p> {% endif %}
    {% if message %} <p> MESSAGE: {{message}}</p> {% endif %}
</div>
</body>
</html>