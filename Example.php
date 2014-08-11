<?php

require_once "HttpRouter.class.php";
require_once "AjaxHandler.class.php";


$handlers = array(
    array("/^\/foo\/bar\/$/", "FooBarHandler"),
    array("/^\/foo\/baz\$/", "FooBazHandler"),
    array("/^\/Test\.php\/news\/(.*)$/", "MyNewsHandler"),
);


class MyNewsHandler extends AjaxHandler
{
    public function get($news_id)
    {
        $this->write(array("This is my response", intval($news_id)));
    }
}


class FooBarHandler extends AjaxHandler
{
    public function get() 
    {
        $this->write(array("This is my response"));
    }
}


class FooBazHandler extends AjaxHandler
{
    public function get() 
    {
        $this->response->setStatus(200);
        $this->response->setBody("This is my response 2");
        $this->response->write();
    }
}


$router = new HttpRouter($handlers);
$router->initHandler();