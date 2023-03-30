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
        text-decoration: none;

    }
    .add-reader{
        text-decoration: none;
        font-size: 16px;
    }
    .delete-reader{
        text-decoration: none;
        font-size: 16px;
    }
    .main{
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
        margin-left: auto;
        margin-top: 10px;
        display: flex;


        gap: 10px;
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
    .down-line{

        margin-top: 778px;
        width: 1900px;
        height: 50px;
        background-color: black;
    }
    .add-reader1{
        display: flex;
        gap: 20px;
    }
    .add1{
        border-radius: 25px;
        align-items: center;
        justify-content: center;
        display: flex;
        text-align: center;
        text-decoration: none;
        width: 125px;
        height: 30px;
        background-color: black;
        color: white;
    }
</style>
    <div class="line"></div>
    <h1>Добавление читателя</h1>
    <div class="add-reader1">
    <div class="reader-name">
        Введите имя:   <input type="text" placeholder="Имя...">
    </div>
    <div class="reader-number">
        Введите номер чит. билета <input type="text" placeholder="">
    </div>
    <div class="reader-login">
        Введите логин: <input type="text" placeholder="login...">
    </div>
    <div class="reader-password">
        Введите пароль <input type="password" placeholder="password...">
    </div>
    <a href="add.php" class="add1">Подтвердить
    </a>
</div>
    <footer>
        <div class="down-line"></div>
    </footer>