<?php

namespace App\Models;

use CodeIgniter\Model;

class Wisata extends Model
{
    protected $table = 'wisatas';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];

    public function getAllWisata()
    {
        return $this->findAll();
    }


    public function getWisataById($name)
    {
        return $this->find($name);
    }

    public function getWisataByLocation($location)
    {
        return $this->where('location', $location)->findAll();
    }

    public function getWisataByKeyword($query)
    {
        return $this
            ->like('name', $query, 'both')  // Search for keyword in the 'name' column
            ->orLike('location', $query, 'both')  // Search for keyword in the 'location' column
            ->orLike('description', $query, 'both')  // Search for keyword in the 'description' column
            ->findAll();
    }
}
