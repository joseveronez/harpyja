<?php
    require 'Controller.php';
    require_once caminhoFisico . '/model/Tabelas.php';
    require caminhoFisico . '/helper.php';
    require caminhoFisico . '/includes/Bcrypt.php';

    class UsuariosController extends Controller {
    	public function login() {
            try {
    		    $this->renderViewUnique('login/index');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
    	}

        public function recuperar_senha() {
            try {
                $this->renderViewUnique('usuarios/recuperar_senha');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }

        public function email() {
            try {
                $email = addslashes($this->requestParametrosPost['email']);

                $usuario = Usuarios::sql("SELECT * FROM :table WHERE email = '" . $email . "'", SimpleOrm::FETCH_ONE);

                $email_md5 = md5($usuario->email);

                if (!empty($usuario)) {
                    $headers = "MIME-Version: 1.1\r\n";
                    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";
                    $headers .= "From: contato@comberweb.com.br\r\n";
                    $headers .= "Return-Path: contato@comberweb.com.br\r\n";

                    $message .= "Clique no link abaixo para inserir uma nova senha.

    ".caminhoSite."/usuarios/verificacao/".$email_md5."";

                    mail("nicolas@comberweb.com.br","SOLICITAÇÃO PARA RECUPERAÇÃO DA SENHA", $message, $headers);

                    $this->redirect(caminhoSite . '/usuarios/login');
                } else {
                    setSession('erroLogin', 'S');
                    $this->redirect(caminhoSite . '/usuarios/recuperar-senha');
                }
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }

        public function verificacao() {
            try {
                $email_md5 = $this->requestParametrosGet[0];

                $usuarios = Usuarios::all();
                foreach ($usuarios as $lista_usuarios) {
                    
                    $email_md5_usuario = md5($lista_usuarios->email);
                    if($email_md5_usuario == $email_md5) {
                        $this->redirect(caminhoSite . '/usuarios/nova-senha/'. $email_md5);
                    }
                }
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }

        public function nova_senha() {
            try {
                $email = $this->requestParametrosGet[0];
                $this->renderViewUnique('usuarios/nova_senha', $email);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }

        public function salvar_senha() {
            try {
                $email_md5 = $this->requestParametrosPost['email_md5'];
                $senha_primaria = $this->requestParametrosPost['senha_primaria'];
                $senha_secundaria = $this->requestParametrosPost['senha_secundaria'];

                if($senha_primaria == $senha_secundaria) {
                    
                    $usuarios = Usuarios::all();
                    foreach ($usuarios as $lista_usuarios) {
                        
                        $email_md5_usuario = md5($lista_usuarios->email);
                        if($email_md5_usuario == $email_md5) {
                            
                            $senha_criptografada = Bcrypt::hash($senha_primaria);

                            $dados = Usuarios::retrieveByPK($lista_usuarios->id);
                            $dados->senha = $senha_criptografada;
                            $dados->save();

                            setSession("senha", "S");
                            $this->redirect(caminhoSite . '/usuarios/login');
                        }
                    }
                } else {
                    setSession('erroSenha', 'S');
                    $this->redirect(caminhoSite . '/usuarios/nova-senha/'. $email_md5);
                }
                die();

                if (!empty($usuario)) {
                    if (Bcrypt::check($senha, $usuario->senha)) {
                        unsetSession('erroLogin');
                        setSession('usuLogado', 'S');
                        setSession('usuNome', $usuario->nome);
                        setSession('usuEmail', $usuario->email);
                        $this->redirect(caminhoSite . '/home');
                    } else {
                        setSession('erroLogin', 'S');
                        $this->redirect(caminhoSite . '/usuarios/login');
                    }
                } else {
                    setSession('erroLogin', 'S');
                    $this->redirect(caminhoSite . '/usuarios/login');
                }
                // $this->redirect(caminhoSite . '/usuarios/login');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }


    	public function faz_login() {
            try {
                $email = addslashes($this->requestParametrosPost['email']);
                $senha = addslashes($this->requestParametrosPost['senha']);
                $usuario = Usuarios::sql("SELECT * FROM :table WHERE email = '" . $email . "'", SimpleOrm::FETCH_ONE);

                if (!empty($usuario)) {
                    if (Bcrypt::check($senha, $usuario->senha)) {
                        unsetSession('erroLogin');
                        setSession('usuLogado', 'S');
                        setSession('usuId', $usuario->id);
                        setSession('usuNome', $usuario->nome);
                        setSession('usuEmail', $usuario->email);
                        $this->redirect(caminhoSite . '/home');
                    } else {
                        setSession('erroLogin', 'S');
                        $this->redirect(caminhoSite . '/usuarios/login');
                    }
                } else {
                    setSession('erroLogin', 'S');
                    $this->redirect(caminhoSite . '/usuarios/login');
                }
                // $this->redirect(caminhoSite . '/usuarios/login');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
    	}

    	public function logout() {
            try {
                unsetSession('usuLogado');
                unsetSession('usuNome');
                unsetSession('usuEmail');
                $this->redirect(caminhoSite . '/usuarios/login');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
    	}

    	public function nao_logado() {
            try {
    		    $this->renderViewUnique('login/nao_logado');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
    	}

        public function novo_usuario() {

            setSession("paginaAtual", "usuarios/gerenciar");
            setSession("blackPage", "usuarios/novo-usuario");
            $this->renderView('usuarios/novo_usuario');    
        }

        public function salvar_usuario() {
            try {
                // PROCESSO PARA VERIFICAR SE EXISTE USUÁRIO CADASTRADO
                $usuario_cadastrado = Usuarios::sql("SELECT * FROM usuarios WHERE nome = '".$this->requestParametrosPost['nome']."' AND email = '".$this->requestParametrosPost['email']."'", SimpleOrm::FETCH_ONE);
                if($usuario_cadastrado) {
                    setSession('erroCadastro', 'E');
                    $this->redirect(caminhoSite . '/usuarios/novo-usuario');
                } else {
                    // PROCESSO PARA CRIPTOGRAFAR SENHA
                    $senha_criptografada = Bcrypt::hash($this->requestParametrosPost['senha']);
                    // /PROCESSO PARA CRIPTOGRAFAR SENHA

                    // PROCESSO PARA SALVAR OS DADOS NO BANCO
                    $usuario = new Usuarios();
                    $usuario->nome = $this->requestParametrosPost['nome'];
                    $usuario->email = $this->requestParametrosPost['email'];
                    $usuario->senha = $senha_criptografada;
                    $usuario->save();
                    // /PROCESSO PARA SALVAR OS DADOS NO BANCO
                }
                // /PROCESSO PARA VERIFICAR SE EXISTE USUÁRIO CADASTRADO

                setSession('sucesso', 'S');
                $this->redirect(caminhoSite . '/usuarios/gerenciar-usuarios');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }

        public function gerenciar_usuarios() {
            $usuarios = Usuarios::all();

            setSession("paginaAtual", "usuarios/gerenciar");
            setSession("blackPage", "usuarios/gerenciar-usuarios");
            $this->renderView('usuarios/gerenciar_usuarios', $usuarios);
        }

        public function editar_usuario() {
            $id = $this->requestParametrosGet[0];
            $usuario = Usuarios::retrieveByPK($id);

            setSession("paginaAtual", "usuarios/gerenciar");
            setSession("blackPage", "usuarios/gerenciar-usuarios");
            $this->renderView('usuarios/editar_usuario', $usuario);
        }

        public function atualizar_usuario() {
            try {
                // PROCESSO PARA VERIFICAÇÃO DE SENHA
                if(!empty($this->requestParametrosPost['senha'])) {
                    $senha_criptografada = Bcrypt::hash($this->requestParametrosPost['senha']);
                    $senha = $senha_criptografada;
                } else {
                    $senha = $this->requestParametrosPost['senha_atual'];
                }
                // /PROCESSO PARA VERIFICAÇÃO DE SENHA

                $id = $this->requestParametrosPost['id'];
                $usuario = Usuarios::retrieveByPK($id);

                $usuario->nome = $this->requestParametrosPost['nome'];
                $usuario->email = $this->requestParametrosPost['email'];
                $usuario->senha = $senha;

                $usuario->save();

                setSession('sucesso', 'S');
                $this->redirect(caminhoSite . '/usuarios/gerenciar-usuarios');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
    }
?>