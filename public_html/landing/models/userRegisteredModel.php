<?php

    class principalModelo{
        
        static public function mdlRegisterUser()
        {
            $sql = "SELECT *
					FROM formulario
					ORDER BY id DESC";
            $stmt = conexionPDO::conectar('c2110576_form')->prepare($sql);
            $stmt -> execute();
            return $stmt->fetchAll();
        }
    }