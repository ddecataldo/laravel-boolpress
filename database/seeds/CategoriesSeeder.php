<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    $categories = ['Sport', 'Tempo Libero', 'Tecnologia', 'Animali'];

    foreach ($categories as $category) {
      $new_category = new Category();
      $new_category->name = $category;
      $new_category->save();
    }
  }
}