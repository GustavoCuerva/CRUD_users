
# CRUD - Cadastro de usuários

Esse projeto é um CRUD feito por mim. Foi feito na forma de cadastro de usuários, nele você pode cadastrar usuários novos, consultar as informações de cada um separadamente, atualizar os dados desses usuários e deletar os usuários.

## Stack
![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)

![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)

![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white)

![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)

![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)

![Bootstrap](https://img.shields.io/badge/bootstrap-%23563D7C.svg?style=for-the-badge&logo=bootstrap&logoColor=white)

## Instalação

De um git clone no projeto em seu servidor local e abra a pasta no terminal de sua preferencia.

Primeiramnete você deverá ter o composer intalado em sua máquina assim como o node.

Dentro do terminal na pasta dode o comando `composer install`

Vá até o seu php my admin, caso esteja utilizando o xampp que já deve estar iniciado, e crie uma nova base de dados.

Depois disso vá ao arquvio `.env.example` e o configure suas informações do banco de dados com algo do tipo:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE= Nome da base de dados que você criou
DB_USERNAME=root
DB_PASSWORD=
```
E salve esse arquivo, `.env.example`, como `.env`

Voltando ao terminal de comando que está aberto na pasta raiz do projeto rode o comando `php artisan migrate`

Depois de terminar a execução do comando acima rode o comando final `php artisan serve`

Clique no link seguindo a instrução e caso ocorra algum erro como pedindo uma chave apenas clique em gerar chave.

## Screenshots

![image](https://user-images.githubusercontent.com/86535275/204145233-1cf23557-21c5-4806-af77-c45d51a40139.png)

![image](https://user-images.githubusercontent.com/86535275/204145224-5f67acd2-1f12-4a60-af62-7998bb6ee384.png)

![image](https://user-images.githubusercontent.com/86535275/204145342-2dc6d2be-50e5-4d51-85d7-9f26004d9eff.png)
