<?php
function loadTemplate($filename, $templateVars){
    ob_start();
    extract($templateVars);
    require_once $filename;
    $output = ob_get_clean();

    return $output;

}

function update($pdo, $table, $record, $primaryKey) {
    $query = 'UPDATE' . $table . 'SET';

    $parameters = [];
    foreach($record as $key => $value){
        $parameters[] = $key . ' = :' . $key;
    }

    $query .= implode(', ', $parameters);
    $query .= 'WHERE ' . $parameters . ' = :primaryKey';
    
    $record['primaryKey'] = $record[$primaryKey];

    $stmt = $pdo->prepare($query);
    $stmt->execute($record);
}
/*$record[];
update($pdo, 'tableName ' , $record, 'id');
*/

function insert($pdo, $table, $record){
    $keys = array_keys($record);
    
    $values = implode(', ', $keys);
    $valuesWithColon = implode(', :', $keys);

    $query = 'INSERT INTO ' . $table . '(' . $values . ') VALUES (:' . $valuesWithColon . ')';

    $stmt = $pdo->prepare($query);
    $stmt->execute($record);
}
/*$record[];
insert($pdo, 'tableName ' , $record);
*/

function findAll($pdo, $table) {
    $stmt = $pdo->prepare('SELECT * FROM ' . $table);

    $stmt->execute();
    return $stmt->fetchAll();
}
/*echo loadTemplate('../templates/layout.html.php', [
    'title' => 'joke list',
    'output' => loadTemplate('amendjokes.php',[
        'jokes' => $jokes
    ])    
]);
*/

function find($pdo, $table, $id){
    $stmt = $pdo->prepare('SELECT * FROM ' . $table . ' WHERE id = :id');

    $values=[
        'id' => $id,
    ];
    $stmt->execute($values); 

    return $stmt->fetch();
}
/*$tableName = find($pdo, 'tableName' , $)_GET['id']);*/