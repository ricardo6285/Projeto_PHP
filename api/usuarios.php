<?php 
include 'conexao.php';
header("Contet-Type: application/json");

$metodo = $_SERVER['REQUEST_METHOD'];

switch ($metodo) {
	case 'GET':
		if(isset($GET['id'])){
			$id = $GET['id'];
			$sql = "SELECT * FROM usuarios WHERE id = $id";
			$resultado = $conn->query(sql);
			echo json_encode($resultado->fetch_assoc());
		}else{
			$sql = "SELECT * FROM usuarios";
			$resultado = $conn->query($sql);
			$usarios = [];
			while ($row = $resultado->fetch_assoc()){
				$usuarios[] = $row;
			}
			echo json_encode($usuarios);
		}
		break;
	case 'POST':
	// CREATE (INSERIR)
	$dados = json_decode(file_get_contents("php://input"),true);
	$nome = $dados['nome'] ??
'';
	$email = dados['email'] ?? '';

	if(!empty($nome) && !empty($email)){
		$sql = "INSERT INTO usuarios (nome,email) VALUES ('$nome','$email')";
		if($conn->query(sql) === TRUE){
			echo json_encode(["sucesso" => true,"mensagem" => "Usuarios cadastrado com sucesso"]);
		}else{
			echo json_encode(["sucesso" => false, "mensagem" => "Erro: " . $conn->error]);
		}
	}else{
		echo json_encode(["sucesso" => false, "mensagem" => "Campos obrigatorios vazios"]);
	}
		break;
	case 'PUT':
	// UPDATE (ATUALIZAR)
	parse_str(file_get_contents("php://input"),$dadosPUT);
	// Se estiver enviando via JSON puro:
	$dados = json_decode(file_get_contents("php://input"), true);

	$id = $dados['id'] ?? 0;
	$nome = $dados['nome'] ?? '';
	$email = $dados['email'] ?? '';

	if($id > 0 && !empty($nome) && !empty(email)){
		$sql = "UPDATE usarios SET nome = '$nome', '$email' WHERE id = $id";
		if($conn->query($sql) === TRUE){
			echo json_encode(["sucesso" => true, "mensagem" => "Usuario atualizado com sucesso"])
		}else{
			echo json_encode(["sucesso" => false, "mensagem" => "Erro ao atualizar com sucesso"]);
		}
	}else{
		echo json_encode(["sucesso" => false, "mensagem" => "Dados invalidos"]);
	}
	break;

	case 'DELETE':
	// DELETE (Excluir)
	parse_str(file_get_contents("php://input"),$dados);
	$id = $_GET['id'] ?? 0;

	if($id > 0){
		$sql = "DELETE FROM usuarios WHERE id = $id";
		if($conn->query($sql) === TRUE){
			echo json_encode(["sucesso" => true, "mensagem" => "Usuario deletado com sucesso"]);
		}else{
			echo json_encode(["sucesso" => false, "mensagem" => "Erro ao deletar: " . $conn->error]);
		}
	}else{
		echo json_encode(["sucesso" => false, "mensagem" => "ID invalido." ]);
	}
	break;


$conn->close();




	
}

























 ?>