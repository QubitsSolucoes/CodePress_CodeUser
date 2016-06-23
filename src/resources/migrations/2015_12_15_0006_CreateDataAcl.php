<?php

use CodePress\CodeUser\Models\Permission;
use CodePress\CodeUser\Models\Role;
use Illuminate\Database\Migrations\Migration;

class CreateDataAcl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $roleAdmin = Role::create([
            'name' => Role::ROLE_ADMIN
        ]);

        $roleEditor = Role::create([
            'name' => Role::ROLE_EDITOR
        ]);

        $roleReadator = Role::create([
            'name' => Role::ROLE_REDATOR
        ]);

        $permissionPublishPost = Permission::create([
           'name' => 'publish_post',
            'description' => 'Permissão para publicação posts que estão em rascunho'
        ]);

        $roleEditor->permissions()->save($permissionPublishPost);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
