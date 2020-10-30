<?php


namespace App\Model;


class ProjectManager extends AbstractManager
{
    const TABLE = 'project';
    const TABLEPICTURE = 'picture';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

    public function selectMainPictureProjectByType(string $projectType)
    {
        $statement = $this->pdo->query("SELECT * FROM $this->table JOIN " . self::TABLEPICTURE .
            " ON project.id=picture.project_id WHERE is_main=1 AND type_of_project=$projectType");
        return $statement->fetchAll();
    }



    public function selectMainPictureProjectFavorite()
    {
        $statement = $this->pdo->query("SELECT * FROM $this->table JOIN " . self::TABLEPICTURE .
            " ON project.id=picture.project_id WHERE is_main=1 AND is_favorite");
        return $statement->fetchAll();
    }
}
