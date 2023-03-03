<?php

namespace App\Repositories;

use App\http\Requests\SeriesFormRequest;
use App\Models\Series;

interface SeriesRepository
{
    public function add(SeriesFormRequest $request): Series;
}