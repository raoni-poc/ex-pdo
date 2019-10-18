<?php
try {
    $pdo = new PDO("mysql:dbname=crud_pdo;host=localhost", "root", "UUbdCuu2307");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro com banco de dados: " . $e->getMessage();
} catch (Exception $e) {
    echo "Erro generico:" . $e->getMessage();
}

//try {
//    $res = $pdo->prepare("INSERT INTO pessoa(nome, telefone, email) VALUES (:n, :t, :e)");
//    $res->bindValue(":n", "Miriam");
//    $res->bindValue(":t", "0000000");
//    $res->bindValue(":e", "teste@gmail.com");
//    $res->execute();
//    if ($res->errorInfo()) {
//        var_dump($res->errorInfo());
//    }
//} catch (PDOException $e) {
//    echo "Erro com banco de dados: " . $e->getMessage();
//} catch (Exception $e) {
//    echo "Erro generico:" . $e->getMessage();
//}
//
//
//try {
//    $pdo->query("INSERT INTO pessoa(nome, telefone, email) VALUES ('Paulo', '333333', 'fasdfasdfasd@gmail.com')");
//} catch (PDOException $e) {
//    echo "Erro com banco de dados: " . $e->getMessage();
//} catch (Exception $e) {
//    echo "Erro generico:" . $e->getMessage();
//}

//try {
//    $res = $pdo->prepare("DELETE FROM pessoa WHERE id = :id");
//    $res->bindValue(':id', 1);
//    $res->execute();
//} catch (PDOException $e) {
//    echo "Erro com banco de dados: " . $e->getMessage();
//} catch (Exception $e) {
//    echo "Erro generico:" . $e->getMessage();
//}


//try {
//    $pdo->query("DELETE FROM pessoa WHERE id = '2'");
//} catch (PDOException $e) {
//    echo "Erro com banco de dados: " . $e->getMessage();
//} catch (Exception $e) {
//    echo "Erro generico:" . $e->getMessage();
//}


//try {
//    $res = $pdo->prepare("UPDATE pessoa SET email = :e WHERE id = :id");
//    $res->bindValue(':e', 'emaileditado@email.com');
//    $res->bindValue(':id', '3');
//    $res->execute();
//} catch (PDOException $e) {
//    echo "Erro com banco de dados: " . $e->getMessage();
//} catch (Exception $e) {
//    echo "Erro generico:" . $e->getMessage();
//}
//
//try {
//    $pdo->query("UPDATE pessoa SET email = 'teste-email2@editado.com' WHERE id = '5'");
//} catch (PDOException $e) {
//    echo "Erro com banco de dados: " . $e->getMessage();
//} catch (Exception $e) {
//    echo "Erro generico:" . $e->getMessage();
//}

//try {
//    $cmd = $pdo->prepare("Select * FROM pessoa WHERE id = :id");
//    $cmd->bindValue(":id", 4);
//    $cmd->execute();
//    $resultado = $cmd->fetch(PDO::FETCH_ASSOC);
//    echo "<pre>";
//    print_r($resultado);
//    echo "</pre>";
//} catch (PDOException $e) {
//    echo "Erro com banco de dados: " . $e->getMessage();
//} catch (Exception $e) {
//    echo "Erro generico:" . $e->getMessage();
//}

//try {
//    $cmd = $pdo->prepare("Select * FROM pessoa");
//    $cmd->bindValue(":id", 4);
//    $cmd->execute();
//    $resultado = $cmd->fetchAll(PDO::FETCH_ASSOC);
//    echo "<pre>";
//    print_r($resultado);
//    echo "</pre>";
//} catch (PDOException $e) {
//    echo "Erro com banco de dados: " . $e->getMessage();
//} catch (Exception $e) {
//    echo "Erro generico:" . $e->getMessage();
//}
