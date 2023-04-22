<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // role manual recordes
        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'User',
            'slug' => 'user',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);
        DB::table('roles')->insert([
            'id' => 2,
            'name' => 'Admin',
            'slug' => 'admin',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()

        ]);
        DB::table('roles')->insert([
            'id' => 3,
            'name' => 'Editor',
            'slug' => 'editor',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);
        DB::table('roles')->insert([
            'id' => 4,
            'name' => 'Support',
            'slug' => 'support',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);
        DB::table('permissions')->insert([
            'id' => 1,
            'name' => 'User_Create',
            'slug' => 'user_create',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);
        DB::table('permissions')->insert([
            'id' => 2,
            'name' => 'User_Read',
            'slug' => 'user_read',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);
        DB::table('permissions')->insert([
            'id' => 3,
            'name' => 'User_Update',
            'slug' => 'user_update',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);
        DB::table('permissions')->insert([
            'id' => 4,
            'name' => 'User_Delete',
            'slug' => 'user_delete',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);


        DB::table('permissions')->insert([
            'id' => 5,
            'name' => 'Admin_Create',
            'slug' => 'admin_create',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);
        DB::table('permissions')->insert([
            'id' => 6,
            'name' => 'Admin_Read',
            'slug' => 'admin_read',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);
        DB::table('permissions')->insert([
            'id' => 7,
            'name' => 'Admin_Update',
            'slug' => 'admin_update',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);
        DB::table('permissions')->insert([
            'id' => 8,
            'name' => 'Admin_Delete',
            'slug' => 'admin_delete',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);



        DB::table('permissions')->insert([
            'id' => 9,
            'name' => 'Editor_Create',
            'slug' => 'editor_create',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);
        DB::table('permissions')->insert([
            'id' => 10,
            'name' => 'Editor_Read',
            'slug' => 'editor_read',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);
        DB::table('permissions')->insert([
            'id' => 11,
            'name' => 'Editor_Update',
            'slug' => 'editor_update',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);
        DB::table('permissions')->insert([
            'id' => 12,
            'name' => 'Editor_Delete',
            'slug' => 'editor_delete',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);


        DB::table('permissions')->insert([
            'id' => 13,
            'name' => 'Support_Create',
            'slug' => 'support_create',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);
        DB::table('permissions')->insert([
            'id' => 14,
            'name' => 'Support_Read',
            'slug' => 'support_read',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);
        DB::table('permissions')->insert([
            'id' => 15,
            'name' => 'Support_Update',
            'slug' => 'support_update',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);
        DB::table('permissions')->insert([
            'id' => 16,
            'name' => 'Support_Delete',
            'slug' => 'support_delete',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

    }
}
