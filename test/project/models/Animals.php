<?php
    namespace Project\Models;
    use \Core\Model;

    class Animals extends Model
    {

        public function getById($id)
        {
            return $this->findOne("SELECT * FROM animals WHERE id=$id");
        }

        public function getAll()
        {
            return $this->findMany("SELECT id, name, kind, biography, img FROM animals");
        }
    }