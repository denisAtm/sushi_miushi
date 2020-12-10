<?php
require 'parts/header.php';
?>
<main class="container  py-5 mt-4" style="display: flex;justify-content: center;align-items: center;justify-content: space-between">
    <form class="form-signin cal-md-6" action="login.php" method="post">
        <h1 class="h3 mb-3 font-weight-normal">Авторизуйтесь</h1>
        <label for="inputEmail" class="sr-only">login</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="login" required="" autofocus="" name="login">
        <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="password">
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Авторизоваться</button>
    </form>
    <form class="form-register cal-md-6" action="registration.php" method="post">
        <h1 class="h3 mb-3 font-weight-normal">Зарегистрируйтесь</h1>
        <label for="inputEmail" class="sr-only">login</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" name="login">
        <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="password">
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Зарегистрироваться</button>
    </form>
</main>
<?php
require 'parts/footer.php';
?>