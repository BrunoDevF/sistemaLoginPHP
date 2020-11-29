# Sistema de LOGIN com PHP

## > Esse sistema sera necessario passar a o nome e a senha correto, caso contrario ele mostra uma mensagem de erro na barra superior.



#
# Como utilizar esse Sistema?

## Para utilizar esse sistema sera preciso apontar para o Banco de Dados no arquivo *config.php*

## No arquivo config.php:

```
    //constantes de acesso ao BD
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','usuarios'); 	
```

## Com banco de dados criado, aponte para tabela com nome e senha de login, no arquivo login.php.

### Por exemplo:

```
$sql = MySql::conectar()->prepare('SELECT * FROM `tb.admin.usuarios` WHERE nome = ? AND senha = ?');
```
### entre as aspas será o nome da sua tabela.