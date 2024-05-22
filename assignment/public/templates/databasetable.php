<?
Class databaseTable{
    private $table;
    private $pdo;
    private $primaryKey;

    public function __construct($table,$primaryKey){
        $this->pdo = new PDO('mysql:host=mysql;dbname=sys;charset=utf8','student','student');
        $this->table = $table;
        $this->primaryKey = $primaryKey;
    }

    public function findRecords($field, $value){
        $stmt=$this->pdo->prepare('SELECT * FROM '.$this->table.' WHERE '.$field.' =:value');
        $values = ['value'=>$value];
        $stmt->execute($values);
        return $stmt->fetchAll();
    }

    public function findRecordsOrdered($orderField,$order,$field,$value){
        $stmt=$this->pdo->prepare('SELECT * FROM '.$this->table.' WHERE '.$field.' =:value ORDER BY '.$orderField.' '.$order);
        $values = ['value'=>$value];
        $stmt->execute($values);
        return $stmt->fetchAll();
    }

    public function findAllRecords(){
        $stmt=$this->pdo->prepare('SELECT * FROM '.$this->table);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findAllRecordsOrdered($field, $order){
        $stmt=$this->pdo->prepare('SELECT * FROM '.$this->table.' ORDER BY '.$field.' '.$order);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findAllRecordsOrderedLimit($field, $order, $limit){
        $stmt=$this->pdo->prepare('SELECT * FROM '.$this->table.' ORDER BY '.$field.' '.$order.' LIMIT '.$limit);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findRecordsByMultipleFields($record){
        $keys = array_keys($record);
        $values = implode(', ', $keys);
        $valuesWithColon = implode(', :', $keys);
        $stmt=$this->pdo->prepare('SELECT * FROM '.$this->table.' WHERE ('.$values.')=(:'.$valuesWithColon.')');
        $stmt->execute($values);
        return $stmt->fetchAll();
    }

    public function deleteRecord($field, $value){
        $stmt=$this->pdo->prepare('DELETE FROM '.$this->table.' WHERE '.$field.' =:value');
        $values = ['value'=>$value];
        $stmt->execute($values);
    }

    public function insertRecord($record){
        $keys = array_keys($record);
        $values = implode(', ', $keys);
        $valuesWithColon = implode(', :', $keys);
        $query = 'INSERT INTO ' . $this->table . ' (' . $values . ') VALUES (:' . $valuesWithColon . ')';
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($record);
    }

    public function updateRecord($record){
        $query = 'UPDATE ' . $this->table . ' SET ';
        $parameters = [];
        foreach ($record as $key=>$value) {
            $parameters[] = $key . ' = :' .$key;
        }
        $query .= implode(', ', $parameters);
        $query .= ' WHERE ' . $this->primaryKey . ' = :primaryKey';
        $record['primaryKey'] = $record[$this->primaryKey];
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($record);
    }

    public function saveRecord($record){
        if (empty($record[$primaryKey])) {
            unset($record[$primaryKey]);
        }
        try {
            insertRecord($record);
        }
        catch (Exception $e) {
            updateRecord($record);
        }
            
    }
}

$productsTable = new databaseTable('products','product_id');
$questionsTable = new databaseTable('questions','question_id');
$usersTable = new databaseTable('users','user_id');


