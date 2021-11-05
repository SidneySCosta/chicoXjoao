<?php

class PersonaModel
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    public function salvar(Persona $persona)
    {
        $sql = "INSERT into persona 
                (nome, altura, verifica)
                VALUES
                (:nome, :altura, :verifica)";

        $query = $this->pdo->prepare($sql);

        $query->execute([
            'nome'    => $persona->getNome(),
            'altura'  => $persona->getAltura(),
            'verifica'    => $persona->getVerifica(),
        ]);
    }


    public function listar()
    {
        $sql = "SELECT * from persona";

        $result = $this->pdo->query(
            $sql,
            PDO::FETCH_CLASS,
            'Persona'
        );

        $pessoa = [];
        foreach ($result as $persona) {
            $pessoa[] = $persona;
        }

        return $pessoa;
    }

    public function atualizar(Persona $persona)
    {
        $sql = "UPDATE persona SET 
                altura  = :altura
                WHERE id = :id
                ";

        try {
            $query = $this->pdo->prepare($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        $query->execute([
            'altura'    => $persona->getAltura(),
            'id'        => $persona->getId(),
        ]);
    }
    public function pesquisar($id)
    {
        $sql = "SELECT * FROM persona WHERE id = :id";
        $query = $this->pdo->prepare($sql);
        $query->execute([
            'id' => $id,
        ]);
        $persona = $query->fetchObject('Persona');
        return $persona;
    }

    public function removertodos()
    {
        $sql = "TRUNCATE TABLE persona";
        $query = $this->pdo->prepare($sql);
        $query->execute();
    }
}
