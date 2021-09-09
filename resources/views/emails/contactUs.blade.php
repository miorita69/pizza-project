<!DOCTYPE html>
<html lang="en">
<head>
 </head>
<body>
    <p> Name: {{ $name }}</p>
    <p> Email: {{ $email }}</p>
    <p> Department: {{ $department }}</p>
    <p> Districts: {{ implode(', ', $districts) }}</p>
    {{ $messageText }}
</body>
</html>