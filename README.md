### Database Migration Schema Builder 

##### Requirement
- [composer](https://getcomposer.org/)
- [PHP 7.x](https://www.php.net/downloads) or higher

##### How to use (FIRST TIME USE)

- install composer dependencies
  
  `composer install`


- copy environment file  
  
    `cp .env.example .env`
  
        Fill the variables
  
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=sekelton_db
        DB_USERNAME=root
        DB_PASSWORD=root
        DB_CHARSET=utf8
        DB_COLLATION=utf8_general_ci

- Command
    - `php artisan migrate:dev` 
      <br> this will execute command : 
       - auto create a new database,
       - auto migrate table schema,
       - auto seed table with dummy data 
       
- option backup

    `--column-statistics=0`

##### Available .SQL backup (mysqldump)

- [/storage/dumps]()
            
