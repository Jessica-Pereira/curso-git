<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//funções aqui

function branch_teste(){
    return TRUE;
}

function  branch_teste2($id){
    if ($id>=0)
        return FALSE;
    return TRUE;
}