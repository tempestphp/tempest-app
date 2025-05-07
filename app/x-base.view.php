<html lang="en">
<head>
    <title :if="isset($title)">{{ $title }} | Tempest</title>
    <title :else>Tempest</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script src="https://cdn.tailwindcss.com"></script>
    <x-slot name="styles"/>
</head>
<body>
<x-slot/>
</body>
</html>