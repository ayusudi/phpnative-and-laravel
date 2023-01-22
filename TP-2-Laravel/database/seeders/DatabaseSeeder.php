<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
      $roles = [
        [ "roleName" =>  "Admin", "description" => "Able to modify any data in TP2 database" ],
        [ "roleName" =>  "Staff", "description" =>  "Able to read and create data in TP2 database" ],
        [ "roleName" =>  "StaffIntern", "description" => "Only able to read data in TP2 database"]
      ];
      foreach ($roles as $role) {
        DB::table("Roles")->insert([
            "roleName" => $role["roleName"],
            "description" => $role["description"]
        ]);
      }
      $data = [
        [
          "name" => "Ayu Sudi",
          "phoneNumber" => "+6212345678901",
          "email" => "ayusudi.abc@companymail.com",
          "nik" => "1234567890123456",
          "dateOfBirth" => "1998-06-24",
          "password" => "qwerty124",
          "RoleId" => 1
        ],
        [
          "name" => "John Doe",
          "phoneNumber" => "+6212345678902",
          "email" => "johndoe@companymail.com",
          "nik" => "1234567890123455",
          "dateOfBirth" => "1997-01-20",
          "password" => "qwerty123",
          "RoleId" => 2
        ],
        [
          "name" => "Foo Bar",
          "phoneNumber" => "+6212345678903",
          "email" => "bar.foo@companymail.com",
          "nik" => "1234567890123454",
          "dateOfBirth" => "1999-05-01",
          "password" => "qwerty122",
          "RoleId" => 2
        ],
        [
          "name" => "Jane Doe",
          "phoneNumber" => "+6212345678904",
          "email" => "doejane@companymail.com",
          "nik" => "1234567890123453",
          "dateOfBirth" => "2002-08-15",
          "password" => "qwerty121",
          "RoleId" => 3
        ],
        [
          "name" => "Magoo Mixu",
          "phoneNumber" => "+6212345678905",
          "email" => "mmixu@companymail.com",
          "nik" => "1234567890123452",
          "dateOfBirth" => "2003-10-28",
          "password" => "qwerty120",
          "RoleId" => 3
        ]
      ];  
      foreach ($data as $el) {
        DB::table('Users')->insert([
            'name' => $el["name"],
            'phoneNumber' => $el["phoneNumber"],
            'email' =>  $el["email"],
            'nik' => $el["nik"],
            'dateOfBirth' => $el["dateOfBirth"],
            'password' => Hash::make($el["password"]),
            'RoleId' =>  $el["RoleId"],
            'remember_token' => ''
        ]);
      }
    }
}
