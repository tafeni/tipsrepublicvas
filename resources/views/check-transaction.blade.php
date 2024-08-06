<!DOCTYPE html>
<html>
<head>
    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- #favicon -->
{{--<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">--}}
<!-- #title -->
    <title>Welcome to Africa Gaming Box</title>
    <!-- #keywords -->
    <meta name="keywords" content="Gaming">
    <!-- #description -->
    <meta name="description" content="Africa Gaming Box">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .center-container {
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh;
            flex-direction: column;
        }
        .progress-bar {
            width: 100%;
            height: 30px;
            background-color: #f3f3f3;
            margin: 20px 0;
        }
        .progress-bar-fill {
            height: 100%;
            width: 0;
            background-color: #4caf50;
            text-align: center;
            line-height: 30px;
            color: white;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
<div class="center-container">
    <h2 style="align-content: center; justify-content:center">Checking Transaction Status</h2>
    <div class="progress-bar">
        <div class="progress-bar-fill">0%</div>
    </div>
    <p>Please wait you will be redirected shortly...</p>
</div>

<script>
    $(document).ready(function() {
        var progress = 0;
        var interval = setInterval(function() {
            progress += 5;
            $('.progress-bar-fill').css('width', progress + '%').text(progress + '%');
            if (progress >= 100) {
                progress = 0;
            }
        }, 1000);

        function checkTransactionStatus() {
            $.ajax({
                url: '{{ url("/query-transaction") }}',
                method: 'POST',
                data: {
                    txn: '{{ $txn }}',
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.status === 'success') {
                        clearInterval(interval);
                        window.location.href = response.url;
                    }
                }
            });
        }

        var checkInterval = setInterval(checkTransactionStatus, 5000);

        var timeout = setTimeout(function() {
            clearInterval(checkInterval);
            window.location.href = 'http://africagamingbox.com.ng';
        }, 120000); // 5 minutes in milliseconds

    });
</script>
</body>
</html>
