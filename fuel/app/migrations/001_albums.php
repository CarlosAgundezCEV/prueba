<?php

namespace Fuel\Migrations;

class Albums
{

    function up()
    {
        \DBUtil::create_table('albums', array(
            'id' => array('type' => 'int', 'constraint' => 11, 'auto_increment' => true),
            'name' => array('type' => 'varchar', 'constraint' => 100),
            'title' => array('type' => 'varchar', 'constraint' => 100),
            'year' => array('type' => 'varchar', 'constraint' => 20),
        ), array('id'));
    }

    function down()
    {
       \DBUtil::drop_table('albums');
    }
}
