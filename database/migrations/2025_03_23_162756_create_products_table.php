<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // đc sử dụng khi gõ câu lệnh php artisan migarate
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id'); // tự hiểu int | unsigned | primary key | AI (auto...)
            $table->string('name', 200);
            $table->float('price', 8, 2); // 12345678.23
            $table->integer('view');
            $table->timestamps(); // created_at | updated_at
        });
    }

    // đc sử dụng khi gõ câu lệnh php artisan migarate:rollback | reset
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
