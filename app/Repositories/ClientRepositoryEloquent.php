<?php
/**
 * Created by PhpStorm.
 * User: jeferson.oliveira
 * Date: 19/08/2016
 * Time: 11:51
 */

namespace gerenciaProjeto\Repositories;

use gerenciaProjeto\Entities\Client;
use Prettus\Repository\Eloquent\BaseRepository;


class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{

    public function model ()
    {
        return Client::class;
    }

}