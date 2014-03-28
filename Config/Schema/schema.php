<?php
class FAQSchema extends CakeSchema
{

    public function before($event = array())
    {
        return true;
    }

    public function after($event = array())
    {
    }

    public $questions = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'question' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'answer' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'active' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
        'sort' => array('type' => 'integer', 'null' => true, 'default' => '0'),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array(
            'PRIMARY' => array('column' => 'id', 'unique' => 1),
            'id' => array('column' => 'id', 'unique' => 1)
        ),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );

}
