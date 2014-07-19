<?php
class Post extends AppModel {
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'name' => array(
            'rule' => 'notEmpty'
        ),
        'description' => array(
            'rule' => 'notEmpty'
        ),
        'age' => array(
            'rule' => 'notEmpty'
        ),
        'breed' => array(
            'rule' => 'notEmpty'
        ),
        'latitude' => array(
            'rule' => 'notEmpty'
        ),
        'longitude' => array(
            'rule' => 'notEmpty'
        )
    );
    public function isOwnedBy($post, $user) {
    return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
}
}