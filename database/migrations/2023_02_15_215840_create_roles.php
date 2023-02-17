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
    //    $userreg = User::find('mail');
    //    $userreg->assignRole($role2);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
};
