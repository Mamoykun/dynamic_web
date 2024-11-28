<!DOCTYPE html>
<html>
<head>
    <title>Test Image</title>
</head>
<body>
    <h1>Test Image</h1>
    <p>Image path: {{ $homeSetting->hero_image }}</p>
    <p>Direct URL: {{ asset('storage/' . $homeSetting->hero_image) }}</p>
    <img src="{{ asset('storage/' . $homeSetting->hero_image) }}" alt="Hero Image" style="max-width: 300px">
</body>
</html>