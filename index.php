<html>

<head>
    <title>Javascript geo sample</title>
    <script src="js/geo-min.js" type="text/javascript" charset="utf-8"></script>
</head>

<body>

    <img src="hah.jpg" alt="">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script>
        if (geo_position_js.init()) {
            geo_position_js.getCurrentPosition(success_callback, error_callback, {
                enableHighAccuracy: true,
            });
        } else {
            alert("Functionality not available");
        }

        function success_callback(p) {
            $.ajax({
                type: "POST",
                url: 'data.php',
                data: {
                    lat: p.coords.latitude,
                    long: p.coords.longitude
                },
                dataType: 'json',
                success: function(e) {
                    console.log(e)
                },
            });

            console.log("lat=" + p.coords.latitude + ";lon=" + p.coords.longitude);
        }

        function error_callback(p) {
            alert("error=" + p.message);
        }
    </script>
</body>

</html>