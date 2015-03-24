<?php namespace Modules\Media\Repositories;

use Modules\Core\Repositories\BaseRepository;
use Symfony\Component\HttpFoundation\File\UploadedFile;

interface FileRepository extends BaseRepository
{
    /**
     * Create a file row from the given file
     * @param  UploadedFile $file
     * @return mixed
     */
    public function createFromFile(UploadedFile $file);

    /**
     * Find a file for the post by zone
     * @param string $zone
     * @param object $entity
     * @return object
     */
    public function findFileByZoneForEntity($zone, $entity);
}
