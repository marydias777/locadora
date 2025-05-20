<?php
namespace Services;

/**
 * Classe que gerencia a autenticação de usuários
 */
class Auth {
    /**
     * Conexão com o banco de dados
     * @var \PDO
     */
    private \PDO $db;

    /**
     * Construtor da classe Auth
     */
    public function __construct() {
        $this->db = getConnection();
    }

    /**
     * Realiza o login do usuário
     * 
     * @param string $username Nome de usuário
     * @param string $password Senha do usuário
     * @return bool Retorna true se o login for bem-sucedido, false caso contrário
     */
    public function login(string $username, string $password): bool {
        $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        if ($usuario && password_verify($password, $usuario['password'])) {
            $_SESSION['auth'] = [
                'logado' => true,
                'username' => $username,
                'perfil' => $usuario['perfil']
            ];
            return true;
        }
        return false;
    }

    /**
     * Encerra a sessão do usuário 
     */
    public function logout(): void {
        session_destroy();
    }

    /**
     * Verifica se o usuário está autenticado
     * 
     * @return bool Retorna true se o usuário estiver autenticado, false caso contrário
     */
    public function verificarLogin(): bool {
        return isset($_SESSION['auth']) && $_SESSION['auth']['logado'] === true;
    }

    /**
     * Verifica se o usuário tem determinado perfil
     * 
     * @param string $perfil Perfil a ser verificado 
     * @return bool Verdadeiro se o usuário tem o perfil
     */
    public static function isPerfil(string $perfil): bool {
        return isset($_SESSION['auth']) && $_SESSION['auth']['perfil'] === $perfil;
    }


    /**
     * 
     */
}
        