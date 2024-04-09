<?php
namespace Phalcon\models;

class MedicationModel {
    private array $medications =[[
        'id'=>1,
        'name'=>'Aspirine',
        'price'=>100,
        'description'=>'This is the first medication'
    ],
    [
        'id'=>2,
        'name'=>'Tetra',
        'price'=>200,
        'description'=>'This is the second medication'
    ]];
    static function findFirstByid(int $id){
        return null;
    }

    static function findAll(){
        return [[
            'id'=>1,
            'name'=>'Aspirine',
            'price'=>100,
            'description'=>'This is the first medication'
        ],
        [
            'id'=>2,
            'name'=>'Tetra',
            'price'=>200,
            'description'=>'This is the second medication'
        ]];
    }
}