<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Setting extends Model implements TranslatableContract
{
    use HasFactory, Translatable;
    public $translatedAttributes = ['title', 'address', 'content'];
    protected $fillable = ['logo', 'favicon', 'facebook', 'instagram', 'phone', 'email'];

    public static function checkSettings()
    {
        $settings = self::all();
        if (count($settings)<1) {
            $data = [
                'id' => '1',
                'facebook'=>'nono@gmail.com', 
                'instagram'=>'nono@gmail.com', 
                'phone'=>'0123243434354', 
                'email'=>'nono@gmail.com',
        
        ];
            foreach (config('app.languages') as $key => $value) {
                $data[$key]['title'] = $value;
                $data[$key]['address']  ='818 Patrick Fall Suite 713 ,USA';
                $data[$key]['content']  ='this a test dashboard using mult languages arabic & english';
            }        
            self::create($data);
        }
        return self::first();
    }
}
