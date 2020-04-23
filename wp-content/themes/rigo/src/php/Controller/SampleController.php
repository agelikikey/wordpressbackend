<?php
namespace Rigo\Controller;

use Rigo\Types\User;

class SampleController{
    
    public function getHomeData(){
        return [
            'name' => 'Rigoberto'
        ];
    }

   public function getDraftUser(){
        $query = User::all([ 'status' => 'draft' ]);
        $lst = [];
        forEach($query->posts as $user) {
            $lst[] = User::serialize($user);
        }
        return $lst;
    }    
}
?>