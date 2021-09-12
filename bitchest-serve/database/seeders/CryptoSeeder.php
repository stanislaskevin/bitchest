<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Crypto;
use Illuminate\Support\Str;

class CryptoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cryptos = [
            [
            'name' => $cryptoname = 'Bitcoin',
            'slug' => Str::slug($cryptoname),
            'price' => $price = ord(substr($cryptoname,0,1)) + rand(0, 10),
            'cours' => $cours = ((rand(0, 99)>40) ? 1 : -1) * ((rand(0, 99)>49) ? ord(substr($cryptoname,0,1)) : ord(substr($cryptoname,-1))) * (rand(1,10) * .01),
            'volume' => $volumes = rand(1000, 100000000),
            'capitalisation' => $price*$volumes,
            ],
            [
            'name' => $cryptoname = 'Etherium',
            'slug' => Str::slug($cryptoname),
            'price' => $price = ord(substr($cryptoname,0,1)) + rand(0, 10),
            'cours' => $cours = ((rand(0, 99)>40) ? 1 : -1) * ((rand(0, 99)>49) ? ord(substr($cryptoname,0,1)) : ord(substr($cryptoname,-1))) * (rand(1,10) * .01),
            'volume' => $volumes = rand(1000, 100000000),
            'capitalisation' => $price*$volumes,
            ],
            [
            'name' => $cryptoname = 'Ripple',
            'slug' => Str::slug($cryptoname),
            'price' => $price = ord(substr($cryptoname,0,1)) + rand(0, 10),
            'cours' => $cours = ((rand(0, 99)>40) ? 1 : -1) * ((rand(0, 99)>49) ? ord(substr($cryptoname,0,1)) : ord(substr($cryptoname,-1))) * (rand(1,10) * .01),
            'volume' => $volumes = rand(1000, 100000000),
            'capitalisation' => $price*$volumes,
            ],
            [
            'name' => $cryptoname = 'Bitcon Cash',
            'slug' => Str::slug($cryptoname),
            'price' => $price = ord(substr($cryptoname,0,1)) + rand(0, 10),
            'cours' => $cours = ((rand(0, 99)>40) ? 1 : -1) * ((rand(0, 99)>49) ? ord(substr($cryptoname,0,1)) : ord(substr($cryptoname,-1))) * (rand(1,10) * .01),
            'volume' => $volumes = rand(1000, 100000000),
            'capitalisation' => $price*$volumes,
            ],
            [
            'name' => $cryptoname = 'Cardano',
            'slug' => Str::slug($cryptoname),
            'price' => $price = ord(substr($cryptoname,0,1)) + rand(0, 10),
            'cours' => $cours = ((rand(0, 99)>40) ? 1 : -1) * ((rand(0, 99)>49) ? ord(substr($cryptoname,0,1)) : ord(substr($cryptoname,-1))) * (rand(1,10) * .01),
            'volume' => $volumes = rand(1000, 100000000),
            'capitalisation' => $price*$volumes,
            ],
            [
            'name' => $cryptoname = 'LiteCoin',
            'slug' => Str::slug($cryptoname),
            'price' => $price = ord(substr($cryptoname,0,1)) + rand(0, 10),
            'cours' => $cours = ((rand(0, 99)>40) ? 1 : -1) * ((rand(0, 99)>49) ? ord(substr($cryptoname,0,1)) : ord(substr($cryptoname,-1))) * (rand(1,10) * .01),
            'volume' => $volumes = rand(1000, 100000000),
            'capitalisation' => $price*$volumes,
            ],
            [
            'name' => $cryptoname = 'NEM',
            'slug' => Str::slug($cryptoname),
            'price' => $price = ord(substr($cryptoname,0,1)) + rand(0, 10),
            'cours' => $cours = ((rand(0, 99)>40) ? 1 : -1) * ((rand(0, 99)>49) ? ord(substr($cryptoname,0,1)) : ord(substr($cryptoname,-1))) * (rand(1,10) * .01),
            'volume' => $volumes = rand(1000, 100000000),
            'capitalisation' => $price*$volumes,
            ],
            [
            'name' => $cryptoname = 'Stellar',
            'slug' => Str::slug($cryptoname),
            'price' => $price = ord(substr($cryptoname,0,1)) + rand(0, 10),
            'cours' => $cours = ((rand(0, 99)>40) ? 1 : -1) * ((rand(0, 99)>49) ? ord(substr($cryptoname,0,1)) : ord(substr($cryptoname,-1))) * (rand(1,10) * .01),
            'volume' => $volumes = rand(1000, 100000000),
            'capitalisation' => $price*$volumes,
            ],
            [
            'name' => $cryptoname = 'IOTA',
            'slug' => Str::slug($cryptoname),
            'price' => $price = ord(substr($cryptoname,0,1)) + rand(0, 10),
            'cours' => $cours = ((rand(0, 99)>40) ? 1 : -1) * ((rand(0, 99)>49) ? ord(substr($cryptoname,0,1)) : ord(substr($cryptoname,-1))) * (rand(1,10) * .01),
            'volume' => $volumes = rand(1000, 100000000),
            'capitalisation' => $price*$volumes,
            ],
            [
            'name' => $cryptoname = 'Dash',
            'slug' => Str::slug($cryptoname),
            'price' => $price = ord(substr($cryptoname,0,1)) + rand(0, 10),
            'cours' => $cours = ((rand(0, 99)>40) ? 1 : -1) * ((rand(0, 99)>49) ? ord(substr($cryptoname,0,1)) : ord(substr($cryptoname,-1))) * (rand(1,10) * .01),
            'volume' => $volumes = rand(1000, 100000000),
            'capitalisation' => $price*$volumes,
            ],
        ];
        foreach($cryptos as $crypto)
        {
            Crypto::create($crypto);
        }
    }
}
