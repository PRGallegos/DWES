```
composer create-project --prefer-dist laravel/laravel MiProyecto
```

# Accede al directorio

cd MiProyecto

# Configura la base de datos en .env

DB_DATABASE=mi_base_de_datos
DB_USERNAME=usuario
DB_PASSWORD=contraseña

# Genera el modelo y la migración

php artisan make:model Item -m

# Edita la migración en database/migrations

Schema::create('items', function (Blueprint $table) {
$table->id();
$table->string('name');
$table->text('description');
$table->timestamps();
});

# Aplica la migración

php artisan migrate

# Genera el controlador

php artisan make:controller ItemController --resource

# Configura las rutas en routes/web.php

Route::resource('items', ItemController::class);

# Edita ItemController con métodos CRUD

```
public function store(Request $request) {
    Item::create($request->all());
    return redirect()->route('items.index');
}

public function update(Request $request, Item $item) {
    $item->update($request->all());
    return redirect()->route('items.index');
}

public function destroy(Item $item) {
    $item->delete();
    return redirect()->route('items.index');
}
```

# Levanta el servidor

```
php artisan serve
```
