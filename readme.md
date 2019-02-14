# Evaluation Picatsa
> Etienne Blanc-Coquand

## Création du Controller et du Model pour les vignettes
```
php artisan make:model Vignettes -mc
```

## Génération de l'authentification
```
php artisan make:auth
```

## Migrations
### Lancer les migrations
```
php artisan migrate
```

### Tout effacer (avec les tables) dans la base de données
```
php artisan migrate:reset
```

## Création du seeder
```
php artisan make:seeder VignettesTableSeeder
```

## Création du factory
```
php artisan make:factory VignettesFactory
```

## Seeder
```
php artisan db:seed --class=VignettesTableSeeder
```