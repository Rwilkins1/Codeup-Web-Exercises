<!DOCTYPE html>
<html>
<head>
    <title>Defuse the BOM</title>
</head>
<body>
    <h2 id="message">This BOM will self destruct in <span id="timer">5</span> seconds...</h2>


    <button id="start">Start the BOM</button>

    <button id="defuser">Defuse the BOM</button>

    <script>
        var detonationTimer = 5;

        // TODO: This function needs to be called once every second
        function updateTimer()
        {
            var interval = 1000;
            var intervalID = setInterval(function() {
                if (detonationTimer == 0) {
                    alert('EXTERMINATE!');
                    document.body.innerHTML = '';
                } else if (detonationTimer > 0) {
                    document.getElementById('timer').innerHTML = detonationTimer;
                }

                detonationTimer--;
            }, interval);
        }

        // TODO: When this function runs, it needs to
        // cancel the interval/timeout for updateTimer()
        function defuseTheBOM()
        {
            clearInterval(updateTimer());
            alert("You've saved us all!");
            location.reload(true);
        }


        // Don't modify anything below this line!
        //
        // This causes the defuseTheBOM() function to be called
        // when the "defuser" button is clicked.
        // We will learn about events in the DOM lessons
        var start = document.getElementById('start');
        start.addEventListener('click', updateTimer, false);
        var defuser = document.getElementById('defuser');
        defuser.addEventListener('click', defuseTheBOM, false);

    </script>
</body>
</html>
