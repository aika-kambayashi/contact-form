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
            'mail_address'  => '',
        ];
        return $data;
    }

    public function insert($form) {
        //プリペアステートメント用のSQL作成
        $sql = "
            insert into form(name,age,prefecture,address1,address2,comment,mail_address) values(:name,:age,:prefecture,:address1,:address2,:comment,:mail_address)
        ";
        //SQL実行
        $stmt = $this->execute($sql,$form);
    }
}