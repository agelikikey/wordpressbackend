<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;

class User extends BasePostType{
    public static function serialize($object){

        $arrayObject=(array) $object;
        $arrayObject['firstname'] = get_field( 'firstname', $object->ID );
        return $arrayObject;

        $arrayObject=(array) $object;
        $arrayObject['lastname'] = get_field( 'lastname', $object->ID );
        return $arrayObject;

        $arrayObject=(array) $object;
        $arrayObject['phonenumber'] = get_field( 'lastname', $object->ID );
        return $arrayObject;

        $arrayObject=(array) $object;
        $arrayObject['password'] = get_field( 'password', $object->ID );
        return $arrayObject;

        $arrayObject=(array) $object;
        $arrayObject['address'] = get_field( 'address', $object->ID );
        return $arrayObject;

        $arrayObject=(array) $object;
        $arrayObject['address2'] = get_field( 'address2', $object->ID );
        return $arrayObject;

        $arrayObject=(array) $object;
        $arrayObject['city'] = get_field( 'city', $object->ID );
        return $arrayObject;

        $arrayObject=(array) $object;
        $arrayObject['state'] = get_field( 'state', $object->ID );
        return $arrayObject;

        $arrayObject=(array) $object;
        $arrayObject['zip'] = get_field( 'zip', $object->ID );
        return $arrayObject;
}
}

?>