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
    .login-field{
        display: flex;
        align-items: center;
        gap: 35px;
        margin-left: 15px;
    }
    .field1{
        height: 25px;
    }
    .field2{
        height: 25px;
    }
    .field3{
        height: 25px;
    }
    .submit{
        height: 25px;
        background-color: black;
        color: white;
        border-radius: 25px;
        border: 0;
    }
    .down-line{

        margin-top: 778px;
        width: 1900px;
        height: 50px;
        background-color: black;
    }
</style>
<h3><?= $message ?? ''; ?></h3>
</div>
<div class="line"></div>
<form method="post">
    <div class="main">
        <h1>Регистрация</h1>
        <div class="login-field">
            <p>Имя</p>
            <input class="field1"type="text" name="name">
            <p>Логин</p>
            <input class="field2" type="text" name="login">
            <p>Пароль</p>
            <input class="field3" type="password" name="password">
            <select name="id_role" id="id_role">
                <option value="1">Администратор</option>
                <option value="2">Читатель</option>


            </select>
            <button class="submit">Зарегистрироваться</button>
        </div>

    </div>
</form>
