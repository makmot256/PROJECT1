<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Question;

class UploadImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return Answer|null
     */
    public function model(array $row)
    {
        return new Question([
           'question_text'     => $row[0],
        ]);
    }
}

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
