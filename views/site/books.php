<style>
    .header{
        display: flex;

    }
    .header-left{
        margin: 0;
        margin-left: 15px;
        padding: 0px;
        display: flex;
        gap: 20px;
        font-size: 18px;
        font-weight: lighter;

    }
    .main-link{
        margin-top: 10px;
        text-decoration: none;
        font-size: 16px;
    }
    .readers{
        text-decoration: none;
        font-size: 16px;
    }
    .books{
        text-decoration: none;
        font-size: 16px;
    }
    .buttons{
        display: flex;
        margin-left: 1400px;
        gap: 10px;
        margin-top: 10px;
    }
    .login{
        display: flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        font-size: 12px;
        text-align: center;
        width: 75px;
        height: 40px;
        border: 2px;
        border-color: black;
        border-radius: 25px;
        background-color: black;
        color: white;

    }
    .registration{
        display: flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        font-size: 12px;
        text-align: center;
        width: 100px;
        height: 40px;
        border: 2px;
        border-color: black;
        border-radius: 25px;
        background-color: black;
        color: white;
    }
    .registration:hover{
        background-color: grey;
    }
    .login:hover{
        background-color: grey;
    }
    .line{
        margin-top: 15px;
        height: 1px;
        width: 1890px;
        background-color: black;
    }
    .main{
        margin-top: 50px;
        display: grid;
        margin-left: 400px;
        grid-template-columns: repeat(3, 300px);
        grid-template-rows: repeat(3, 300px);
        justify-items: center;
        grid-gap: 25px;
    }


    .kv1{
        border-color: black;
        border: 2px solid;
        height: 200px;
        width: 200px;
        background-color: rgb(235, 235, 235);
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .add{
        justify-content: center;
        display: flex;
        text-align: center;
        align-items: center;
        text-decoration: none;
        float: right;
        width: 40px;
        height: 30px;
        background-color: white;
        color: black;
        border-radius: 30px;
        border: 1px solid;
        font-size: 15px;
        margin-top: 10px;
    }
    .cr1{

        border: 1px solid;
        border-color: black;
        border-radius: 60px;
        width: 120px;
        height: 120px;
        background-color: white;
    }

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/books.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
</head>
<body>
    <div class="line"></div>
    <div class="main">
        <div class="book1">
            <div class="kv1"><div class="cr1"></div>
        </div>
            <a href="books.php" class="add">Add</a>
            <p>Название</p>
            <p>Цена</p>
            
        </div>
        <div class="book2">
            <div class="kv1">
                <div class="cr1"></div>
            </div>
            <a href="books.php" class="add">Add</a>
            <p>Название</p>
            <p>Цена</p>
        </div>
        <div class="book3">
            <div class="kv1">
                <div class="cr1"></div>
            </div>
            <a href="books.php" class="add">Add</a>
            <p>Название</p>
            <p>Цена</p>
        </div>
        <div class="book4">
            <div class="kv1">
                <div class="cr1"></div>
            </div>
            <a href="books.php" class="add">Add</a>
            <p>Название</p>
            <p>Цена</p>
        </div>
        <div class="book5">
            <div class="kv1">
                <div class="cr1"></div>
            </div>
            <a href="books.php" class="add">Add</a>
            <p>Название</p>
            <p>Цена</p>
        </div>
        <div class="book6">
            <div class="kv1">
                <div class="cr1"></div>
            </div>
            <a href="books.php" class="add">Add</a>
            <p>Название</p>
            <p>Цена</p>
        </div>
    </div>