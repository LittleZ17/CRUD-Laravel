<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       $role1 = Role::create(['name' => 'admin']);
       $role2 = Role::create(['name' => 'register']);
       $user = User::find(1);
       $user->assignRole($role1);
       $crudPermissions = ['create', 'read', 'update', 'delete'];
       $adminRole = Role::where('name', 'admin')->first();

       Schema::table('users', function(Blueprint $table){
        $table->integer('role') ->default('0');
        //register id=? role colomn for users?
       });

       foreach ($crudPermissions as $permission) {
        $permission = Permission::where('name', $permission.' quotes')->first();
        $adminRole->syncPermissions([$permission]);
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table){
            $table->dropcolumn('role') ;
            //register  role colomn for users?
           });

    }
};
