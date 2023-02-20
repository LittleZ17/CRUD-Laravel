<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\User;
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
        Schema::table('admin_role', function (Blueprint $table) {
            $crudPermissions = ['create', 'read', 'update', 'delete'];
            $adminRole = Role::where('name', 'admin')->first();
            
            foreach ($crudPermissions as $permission) {
                $permission = Permission::where('name', $permission.' quotes')->first();
                $adminRole->syncPermissions([$permission]);
            }
            if (!Role::where('name', 'admin')->exists()) {
                Role::create(['name' => 'admin']);
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admin_role', function (Blueprint $table) {
         
        });
    }
};
