
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Frirend</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
    <?php include "./assets/css/style.css"; ?>

    </style>
</head>
<body>
    <?php require "./layout/Header.php"; ?>
    <div class="container row "  >
    <div id="fb" >
        <div id="fb-top">
            <p><b>Friend Requests</b><span>Find Friends &bull; Settings</span></p>
        </div>
        <img src="https://static01.nyt.com/images/2016/09/10/us/10fd-facebook_web1/10fd-facebook_web1-superJumbo.jpg" height="100" width="100" alt="Image of woman">
        <p id="info"><b>KenZie Lopez</b> <br></br> <span>14 mutual friends</p>
        <div id="button-block">
            <div id="confirm">Confirm</div>
            <div id="delete">Delete Request</div>
        </div>
    </div>
    <div id="fb">
        <div id="fb-top">
            <p><b>Friend Requests</b><span>Find Friends &bull; Settings</span></p>
        </div>
        <img src="data:image/jpeg;base64,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" height="100" width="100" alt="Image of woman">
        <p id="info"><b>Dustin Moskovitch</b> <br></br> <span>14 mutual friends</p>
        <div id="button-block">
            <div id="confirm">Confirm</div>
            <div id="delete">Delete Request</div>
        </div>
    </div>
    <div id="fb">
        <div id="fb-top">
            <p><b>Friend Requests</b><span>Find Friends &bull; Settings</span></p>
        </div>
        <img src="https://avatars.githubusercontent.com/u/15678712?v=4" height="100" width="100" alt="Image of woman">
        <p id="info"><b>Dustin Moskovitch</b> <br></br> <span>14 mutual friends</p>
        <div id="button-block">
            <div id="confirm">Confirm</div>
            <div id="delete">Delete Request</div>
        </div>
    </div>
    <div id="fb">
        <div id="fb-top">
            <p><b>Friend Requests</b><span>Find Friends &bull; Settings</span></p>
        </div>
        <img src="https://img.buzzfeed.com/buzzfeed-static/static/2015-07/22/14/enhanced/webdr02/enhanced-buzz-14621-1437588481-7.jpg?output-quality=auto&output-format=auto&downsize=640:*" height="100" width="100" alt="Image of woman">
        <p id="info"><b>Dustin Moskovitch</b> <br></br> <span>14 mutual friends</p>
        <div id="button-block">
            <div id="confirm">Confirm</div>
            <div class="delete" id="delete">Delete Request</div>
        </div>
    </div>
    </div>
<script >
    <?php include "./assets/js/scripts.js" ?>
</script>
    
</body>