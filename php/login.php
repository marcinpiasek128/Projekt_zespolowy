
<?php
require_once("login-script.php");
?>

<style>
    #div_login {
        width: 290px;
        height: 270px;
        margin: 0 auto;
    }

    #div_login h1 {
        margin-top: 0px;
        font-weight: normal;
        padding: 10px;
        text-align: center;
        color: white;
        font-family: 'Josefin Sans', sans-serif;
    }

    #div_login div {
        clear: both;
        margin-top: 10px;
        padding: 5px;
    }

    #div_login .textbox {
        width: 96%;
        padding: 7px;
    }

    #div_login input[type=submit] {
        padding: 6px;
        width: 102.5%;
        background-color: #e52d27;
        border: 0px;
        color: white;
        font-size: 20px;
    }

    #div_login textarea {
        width: 96%;
        padding: 7px;
    }

    a.sign {
        padding: 6px;
        font-size: 20px;
        width: 100px;
        color: white;
        text-decoration: none;
        background-color: #e52d27;
        text-align: center;
    }

    .sign:hover {
        background-color: #f63e38;
    }

    input[type=password] {
    display: block;
    height: 38px;
    border: none;
    width: 280px;
    text-align: center;
}
</style>
<script>
    $(document).ready(function() {
        var trigger = $('a'),
            container = $('#content');
        trigger.on('click', function() {
            var $this = $(this)
            target = $this.data('target');
            container.load(target + '.php');
            return false;
        });
    });

</script>
<form method="post">
    <div id="div_login">
        <h1>Logowanie</h1>
        <div>
            <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Nazwa użytkownika" />
        </div>
        <div>
            <input type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Hasło" />
        </div>
        <div>
            <input type="submit" value="Zaloguj" name="but_submit" id="but_submit" />
        </div>
        <div>
            <a href="#" data-target="php/signup" class="sign">Załóż konto</a>
        </div>
        <div>

            <?php
                            if(isset($_SESSION['e_txt_uname']))
                            {
                                echo '<div class="error">'.$_SESSION['e_txt_uname'].'</div>';
                                unset($_SESSION['e_txt_uname']);
                            }
                        ?>
            <?php
                            if(isset($_SESSION['e_txt_pwd']))
                            {
                                echo '<div class="error">'.$_SESSION['e_txt_pwd'].'</div>';
                                unset($_SESSION['e_txt_pwd']);
                            }
                        ?>

        </div>
    </div>
</form>
