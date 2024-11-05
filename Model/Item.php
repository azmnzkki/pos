<?php

require_once __DIR__ . "/Model.php";





class Item extends Model
{

    protected $table = 'items';

    public function create($datas)
    {

        $nama_file = $datas['files']['attachment']['name'];
        $folder_destination = "./../public/img/items";
        $tmp_name = $datas['files']['attachment']['tmp_name'];
        $ekstensi_file = pathinfo($nama_file, PATHINFO_EXTENSION);
        $ekstensi_allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'heic', 'raw'];
        if (!in_array($ekstensi_file, $ekstensi_allowed)) {
            return "ekstensi file tidak sesuai";
        }

        if ($datas['files']['attachment']['size'] > 5000000) {
            return "size file tidak boleh lebih dari 5MB";
        }

        $nama_file = random_int(1000, 9999) . "." . $ekstensi_file;
        move_uploaded_file($tmp_name, "../public/img/items/" . $nama_file);

        $datas =
            [
                "name" => $datas["post"]["name"],
                "attachment" => $nama_file,
                "price" => $datas["post"]["price"],
                "category_id" => $datas["post"]["category_id"],
            ];
        return parent::create_data($datas, $this->table);
    }

    public function all()
    {
        return parent::all_data($this->table);
    }

    public function find($id)
    {
        return parent::find_data($id, $this->table);
    }

    public function update($id, $datas)
    {
        return parent::update_data($id, $datas, $this->table);
    }

    public function delete($id)
    {
        return parent::delete_data($id, $this->table);
    }
}
