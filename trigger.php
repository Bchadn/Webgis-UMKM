<!DOCTYPE html>
<html>
  <body>
    <h2>Menggunakan AJAX, Client Mengeksecute PHP file yang ada di server.</h2>
    <p id="demo"></p>
    <script>
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.open("GET", "creategeojson.php", true);
      xmlhttp.send();
      xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("demo").innerHTML = "json berhasil di load";
        }
      };
    </script>
  </body>
</html>
