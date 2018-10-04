<?php

namespace Fuel\Migrations;

class Songs
{

    function up()
    {
        \DBUtil::create_table('songs', array(
            'id' => array('type' => 'int', 'constraint' => 11, 'auto_increment' => true),
            'name' => array('type' => 'varchar', 'constraint' => 100),
            'title' => array('type' => 'varchar', 'constraint' => 100),
            'duration' => array('type' => 'varchar', 'constraint' => 120),
            'id' => array('type' => 'int', 'constraint' => 11),


        ), array('id'));
    }

    function down()
    {
       \DBUtil::drop_table('tablapruebauno');
    }
}
