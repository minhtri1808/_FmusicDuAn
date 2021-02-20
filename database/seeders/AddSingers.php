<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AddSingers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Khoa
        DB::table('singers')->insert([
            'nameSingle' => 'Chi Dân',
            'information' =>'upload/singers/ChiDan.txt',
            'gender' => '1',
            'Slug' => '1',
            'urlImages'=>'upload/singers/ChiDan.jpg',
            'trangThai'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('singers')->insert([
            'nameSingle' => 'Hòa Minzy',
            'information' =>'upload/singers/Hoa_Minzy.txt',
            'gender' => '1',
            'Slug' => '1',
            'urlImages'=>'upload/singers/Hoa_Minzy.jpg',
            'trangThai'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('singers')->insert([
            'nameSingle' => 'Sơn Tùng M-TP',
            'information' =>'upload/singers/SonTung_MTP.txt',
            'gender' => '1',
            'Slug' => '1',
            'urlImages'=>'upload/singers/SonTung_MTP.jpg',
            'trangThai'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('singers')->insert([
            'nameSingle' => 'Jack',
            'information' =>'upload/singers/Jack.txt',
            'gender' => '1',
            'Slug' => '1',
            'urlImages'=>'upload/singers/Jack.jpg',
            'trangThai'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);

        DB::table('singers')->insert([
            'nameSingle' => 'Minh Vương M4U',
            'information' =>'upload/singers/MinhVuong.txt',
            'gender' => '1',
            'Slug' => '1',
            'urlImages'=>'upload/singers/MinhVuong.jpg',
            'trangThai'=>'1',
            'thuTu'=>'1',
            'anHien'=>1,
            'updateDate'=>Now(),
            'postDate'=>Now(),
        ]);
    }
}
