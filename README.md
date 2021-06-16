 
## Run Locally

Clone the project

```bash
  git clone https://github.com/tarikulIslamNahid/laravel-8-basic-product-crud.git $PROJECT_NAME
```

Go to the project directory

```bash
  cd $PROJECT_NAME
```
 Install Composer Dependencies
 
```bash
composer install
```

Create a copy of your .env file
```bash
cp .env.example .env
```
In the .env file, add database information to allow Laravel to connect to the database

terminal run:

```bash
php artisan key:generate

php artisan config:clear
``` 
Migrate & Seed the database

```bash
php artisan migrate:fresh --seed
``` 
Run tinker
```bash
 php artisan tinker

 products::factory()->count(10)->create()

 exit
``` 
 ``

Start the server

```bash
  php artisan serve
```

  
## Author

- [@Tarikul Islam](https://www.facebook.com/md.tarekul.313/)
