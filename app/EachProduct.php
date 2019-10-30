<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EachProduct extends Model
{
    public function presentPrice()
    {
       // return money_format('$%i', $this->price /100);
       //$pricetotal = asDollars($pricetotal);
       return "$ ".number_format($this->price / 100);
    }
}
