<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllTables extends Migration
{
    public function up()
    {
        // Table des voitures
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('marque');
            $table->string('modele');
            $table->integer('annee');
            $table->decimal('prix', 10, 2);
            $table->string('carburant');
            $table->integer('kilometrage');
            $table->text('description');
            $table->json('photos')->nullable();
            $table->enum('statut', ['disponible', 'vendu', 'loué'])->default('disponible');
            $table->timestamps();
        });

        // Table des locations
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('car_id')->constrained()->onDelete('cascade');
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('statut', ['en attente', 'confirmé', 'terminé'])->default('en attente');
            $table->timestamps();
        });

        // Table des achats
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('car_id')->constrained()->onDelete('cascade');
            $table->string('nom');
            $table->string('email');
            $table->string('telephone');
            $table->text('message')->nullable();
            $table->enum('statut', ['en attente', 'confirmé', 'annulé'])->default('en attente');
            $table->timestamps();
        });

        // Table des messages de contact
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('email');
            $table->string('telephone');
            $table->string('sujet');
            $table->text('message');
            $table->timestamps();
        });

        // Table des paramètres du site
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->string('logo')->nullable();
            $table->string('adresse');
            $table->string('telephone');
            $table->string('email');
            $table->text('google_maps_iframe')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cars');
        Schema::dropIfExists('rentals');
        Schema::dropIfExists('purchases');
        Schema::dropIfExists('contact_messages');
        Schema::dropIfExists('settings');
    }
}