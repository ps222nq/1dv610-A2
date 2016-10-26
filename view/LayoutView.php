<?php


class LayoutView
{

    public function renderIsNotLoggedIn($v, DateTimeView $dtv)
    {
        echo '<!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <title>Login Example</title>
        </head>
        <body>
          <h1>Assignment 2</h1>
          <a href="?register=1">Register a new user</a>
          <h2>Not logged in</h2>
          
          <div class="container">
              ' . $v->response() . '
              
              ' . $dtv->show() . '
          </div>
         </body>
      </html>
    ';
    }

    public function renderIsLoggedIn(LoginView $v, DateTimeView $dtv)
    {
        echo '<!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <title>Login Example</title>
        </head>
        <body>
          <h1>Assignment 2</h1>
          <a href="?register=1">Register a new user</a>
          <h2>Logged in</h2>
          
          <div class="container">
              ' . $v->response() . '
              
              ' . $dtv->show() . '
          </div>
         </body>
      </html>
    ';
    }
}
