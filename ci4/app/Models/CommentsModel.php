<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentsModel extends Model
{
    protected $table = 'mcagbanlog_myguests';

    protected $allowedFields = ['name', 'email', 'website', 'comment', 'friendly_reg_date'];

    public function getComments()
    {       
        return $this->findAll();
    }
}