<?php

class Form{

    public function inputName(){

        return "<label for='UserName' class=\"col-sm-2 control-label\">Name</label><input type='text' class='form-control' name='User' id='UserName' placeholder='Name'></input>";

    }

    public function inputPassword(){

        return "<label for='UserPassword' class=\"col-sm-2 control-label\">Password</label><input type='text' class='form-control' name='pass' id='UserPassword' placeholder='Password'></labelinput>";

    }

    public function submit(){

        return "<input type='submit' name='submit' value='Submit'>";

    }

    public function newAccount(){

        return "<input type='button' name='NewAccount' value='New Account' onclick='window.location.href='NewUser.php''/>";

    }

    public function newMail(){

        return "<label for='Email' class=\"col-sm-2 control-label\">Mail</label><input type='text' class='form-control' name='Mail' id='Mail' placeholder='Mail'></input>";

    }

}

?>