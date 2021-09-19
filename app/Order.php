<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   public function products(){
       return $this->belongsToMany(Product::class)->withPivot('count');
   }

   public function calculateFullPrice() {
       $sum = 0;
       foreach ($this -> products as $product){
       $sum += $product -> getPriceForCount($product -> pivot ->count);
   }
       return $sum;
   }

   public function saveOrder($name, $phone) {
       if ($this-> satus ==0) {
           $this -> name = $name;
           $this -> phone = $phone;
           $this-> satus = 1;
           $this ->save();
           session()->forget('orderId');

           return true;
       }
       else {
           return false;
       }
   }

}
