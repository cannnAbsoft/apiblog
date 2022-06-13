<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Customer
 *
 * @property int $id_customer
 * @property string $name_customer
 * @property string $phone_customer
 * @property string $address_customer
 * @property string $email_customer
 * @property string $city_customer
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Database\Factories\CustomerFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereAddressCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCityCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereEmailCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereIdCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereNameCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer wherePhoneCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Customer extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name_customer',
        'phone_customer',
        'address_customer',
        'email_customer',
        'city_customer',
    ];

    protected $primaryKey = 'id_customer';

    protected $table = 'customer';
}
