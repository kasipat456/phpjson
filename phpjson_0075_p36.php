<!DOCTYPE html>
<html>
<body>
    <h2>Create Object from JSON String</h2>
    <p id='demo'></p>
    <script>
        var txt = '{"name": "Kasipat", "age": 21, "address": "Burapha University"}'
        var obj = JSON.parse(txt);
        document.getElementById("demo").innerHTML=obj.name + ", "+ obj.age;
    </script>
</body>
</html>