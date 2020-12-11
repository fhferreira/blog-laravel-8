#### Cloning the project
```
git clone git@github.com:fhferreira/blog-laravel-8.git
```
```
cd blog-laravel-8
```

#### Create env file
```
cp .env.example .env
```

#### Put container docker up using sail (You should have docker installed first)
```
./vendor/bin/sail up -d
```

#### Install dependencies
```
./vendor/bin/sail composer install
```

#### Generate key
```
./vendor/bin/sail artisan key:generate
```

### Call the migrations and seeders
```
./vendor/bin/sail artisan migrate --seed  
```

```
https://localhost:9090
You could login with:
user: admin@devphp.in
pass: password

or access https://localhost:9090/register and create a new user
```
  
### Call the command to import posts using queue
```
./vendor/bin/sail php artisan posts:import
``` 
