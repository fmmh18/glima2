<?php 

require __DIR__ . '/vendor/autoload.php';

use CoffeeCode\Router\Router;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load(); 

if(getenv('APP_DEBUG') == TRUE){
    
    error_reporting(E_ALL);
    ini_set('display_errors', true);
}

include __DIR__ . '/src/depedencie.php';

$router = new Router(getenv('APP_HOST'));

//Rota do Site
$router->namespace("app\controller");
$router->group(null);
$router->get("/","Index:home"); 
$router->get("/sobre","Index:company"); 
$router->get("/contato","Index:contact");
$router->get("/contato/{message}","Index:contact");   
$router->post("/contato","Index:contactSend");   
$router->get("/trabalhe","Index:work");
$router->get("/trabalhe/{message}","Index:work");  
$router->post("/trabalhe","Index:workSend");   
$router->get("/orcamento","Index:budget");   
$router->get("/orcamento/{message}","Index:budget");   
$router->post("/orcamento","Index:budgetSend");   
$router->get("/vaga","Index:budgetSend");   

//Rota Admin
$router->namespace("app\controller");
$router->group("admin");
$router->get("/", "User:userLogin");
$router->get("/{message}", "User:userLogin");
$router->post("/login", "User:userAuthenticate");
$router->get("/principal", "User:userDashboard");
$router->get("/usuario", "User:userListAll");
$router->get("/usuario/listar/{page}", "User:userList");
$router->get("/usuario/adicionar", "User:userFormAdd");
$router->post("/usuario/adicionar", "User:userInsert");
$router->post("/usuario/editar", "User:userEdit");
$router->get("/usuario/editar/{id}", "User:userDetail");
$router->get("/usuario/editar/{id}/{message}", "User:userDetail");
$router->get("/sair", "User:userLogout");

//Exception erro
$router->namespace("app\controller");
$router->group("oops");
$router->get("/{errcode}", "Error:erro");

$router->dispatch(); 



if ($router->error()) {
    $router->redirect("/oops/{$router->error()}");
}
 