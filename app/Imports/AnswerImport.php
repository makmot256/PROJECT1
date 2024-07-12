<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Question;

class AnswerImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return Question|null
     */
    public function model(array $row)
    {
        return new Question([
           'answer'     => $row[0],
           'marks' => $row[1]
        ]);
    }
}
