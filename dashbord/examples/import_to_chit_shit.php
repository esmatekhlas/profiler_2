<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>import fourm</title>
    <style>
        .impot{
            border: 1px solid rgb(228, 220, 220);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 1rem;
            background-color: rgba(250, 235, 215, 0.433);
        }
        #import{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 2rem;

        }
        #btn :hover{
            color: antiquewhite;
            cursor: pointer;
            
        }

    </style>
</head>
<body>
    <div id="import">
        <?php
        $chit_shit_catid = $_GET['chit_shit_catid'];
        echo '
        <form action="import.php?chit_shit_catid='.$chit_shit_catid.'" method="post" class="impot">
                <h1>Place foll this form for updit your websit</h1>
        <input name ="header" type="text" placeholder="Header"><br>
        <textarea name="comment" id="" cols="30" rows="10" placeholder="commonde info "></textarea><br>
        <textarea name="code" id="" cols="30" rows="10" placeholder="Past your code hear! "></textarea><br>
        <button id="btn">submint</button>
        <br>
        <div>
           <a href="dashboard.php">Dahsbord</a>
        </div>
    </form>
    ';
    ?>
        </div>
</body>
</html>