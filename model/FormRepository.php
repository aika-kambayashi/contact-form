<?php

class FormRepository extends DbRepository {
    public function getFormModel() {
        //フォームの入力データモデル配列
        $data = [
            'name'          => '',
            'age'           => '',
            'prefecture'    => '',
            'address1'      => '',
            'address2'      => '',
            'comment'       => '',
        ];
        return $data;
    }
}