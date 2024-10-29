<?php

require_once __DIR__ . "/Model.php";



define('TABLE_OWNER', 'owners');


class Owner extends Model
{

    protected $table = 'owner';

    public function create($datas)
    {

        return parent::create_data($datas, TABLE);
    }

    public function all()
    {
        return parent::all_data(TABLE);
    }

    public function find($id)
    {
        return parent::find_data($id, TABLE);
    }

    public function update($id, $datas)
    {
        return parent::update_data($id, $datas, TABLE);
    }

    public function delete($id)
    {
        return parent::delete_data($id, TABLE);
    }
}
