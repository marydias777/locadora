# Roteiro de Implementação - Fase 2: Back-end da Locadora de Veículos

Este roteiro guiará a transição do front-end (Fase 1) para a implementação completa do back-end com PHP e MySQL (Fase 2). Nesta etapa, implementaremos a lógica de negócios, autenticação, sistema de permissões e persistência de dados conforme a arquitetura orientada a objetos.

## Estrutura do Projeto Completo

Antes de começar, vamos entender a estrutura completa do projeto:
<!-- Obs: Toda a estrutura será: Fornecido pelo Professor -->

```
locadora-veiculos/
├── config/
│   └── config.php             # Configurações e constantes do sistema
├── models/
│   ├── Veiculo.php            # Classe abstrata + interface Locavel
│   ├── Carro.php              # Implementação de Carro
│   └── Moto.php               # Implementação de Moto
├── public/
│   └── login.php              # Página de login (controlador + view)
├── services/
│   ├── Auth.php               # Serviço de autenticação e permissões
│   └── Locadora.php           # Serviço de gerenciamento de veículos
├── views/
│   └── template.php           # Template principal do sistema
├── css/
│   └── styles.css             # Estilos do front-end (da fase 1)
├── js/
│   └── scripts.js             # JavaScript básico (da fase 1)
├── vendor/                    # Pasta gerada pelo Composer
├── composer.json              # Configuração do Composer
├── composer.lock              # Lock-file do Composer
└── index.php                  # Controlador principal
```

## Etapa 1: Configuração do Ambiente

### 1.1 Instalar o Ambiente de Desenvolvimento
- Servidor web (Apache/Nginx) com PHP 7.4+
- MySQL 5.7+ ou MariaDB 10.3+
- Composer para gerenciamento de dependências
<!-- Obs: Apenas informativo (Ambiente já preparado) -->

### 1.2 Preparar a Estrutura de Pastas
1. Crie a estrutura de diretórios conforme mostrado acima
2. Transfira os arquivos CSS e JS da Fase 1 para as pastas correspondentes

### 1.3 Configurar o Composer
1. Crie um arquivo `composer.json` na raiz do projeto:

```json

// Fornecido completo pelo Professor

```

2. Execute `composer install` na raiz do projeto

## Etapa 2: Implementação do Banco de Dados

### 2.1 Criar o Arquivo de Configuração
Crie o arquivo `config/config.php`:

```php

// Fornecido completo pelo Professor

```

## Etapa 3: Implementação dos Modelos

### 3.1 Criar o Arquivo Veiculo.php
Crie o arquivo `models/Veiculo.php`:

```php

// 1ª Digitação (Conforme código na pasta Códigos)

```

### 3.2 Criar o Arquivo Carro.php
Crie o arquivo `models/Carro.php`:

```php
<?php

// 2ª Digitação (Conforme código na pasta Códigos)

```

### 3.3 Criar o Arquivo Moto.php
Crie o arquivo `models/Moto.php`:

```php

// 3ª Digitação (Conforme código na pasta Códigos)

```

## Etapa 4: Implementação dos Serviços

### 4.1 Criar o Arquivo Auth.php
Crie o arquivo `services/Auth.php`:

```php

// 4ª Digitação (Conforme código na pasta Códigos)

```

### 4.2 Criar o Arquivo Locadora.php
Crie o arquivo `services/Locadora.php`:

```php

// Fornecido completo pelo Professor
// Obs: Olhar a códificação para compreensão adequada.

```

## Etapa 5: Implementação das Páginas e Controladores

### 5.1 Criar o Arquivo de Login
Crie o arquivo `public/login.php`:

```php

// 5ª Digitação (Aqui)
// Obs: Apenas do PHP (Lógica) o restante esta pronto.

```

### 5.2 Criar o Template Principal
Crie o arquivo `views/template.php`:

```php

// Fornecido completo pelo Professor (Completo)

```

### 5.3 Criar o Controlador Principal
Crie o arquivo `index.php` na raiz do projeto:

```php

// Fornecido completo pelo Professor (Completo)

```

## Etapa 6: Integração e Testes

### 6.1 Estrutura de Arquivos Final
Certifique-se de que a estrutura de arquivos está completa:
```
locadora-veiculos/
├── config/
│   └── config.php             # Configurações e constantes do sistema
├── models/
│   ├── Veiculo.php            # Classe abstrata + interface Locavel
│   ├── Carro.php              # Implementação de Carro
│   └── Moto.php               # Implementação de Moto
├── public/
│   └── login.php              # Página de login (controlador + view)
├── services/
│   ├── Auth.php               # Serviço de autenticação e permissões
│   └── Locadora.php           # Serviço de gerenciamento de veículos
├── views/
│   └── template.php           # Template principal do sistema
├── css/
│   └── styles.css             # Estilos do front-end (da fase 1)
├── js/
│   └── scripts.js             # JavaScript básico (da fase 1)
├── vendor/                    # Pasta gerada pelo Composer
├── composer.json              # Configuração do Composer
├── composer.lock              # Lock-file do Composer
└── index.php                  # Controlador principal
```

### 6.2 Verificação do Banco de Dados
- Verifique se o banco de dados `locadora_db` foi criado corretamente
- Confirme que as tabelas `usuarios` e `veiculos` foram criadas
- Verifique se os dados iniciais foram inseridos

### 6.3 Teste Completo
1. Acesse a página de login (`public/login.php`)
   - Teste login com credenciais inválidas
   - Teste login com usuário admin (`admin`/`admin123`)
   - Teste login com usuário comum (`usuario`/`user123`)

2. Teste a página principal (`index.php`) com perfil admin
   - Adicione novos veículos
   - Alugue veículos disponíveis
   - Devolva veículos alugados
   - Delete veículos
   - Calcule previsões de aluguel

3. Teste a página principal (`index.php`) com perfil usuario
   - Verifique que apenas as permissões corretas estão disponíveis
   - Tente acessar funcionalidades restritas (deve ser bloqueado)
   - Teste a calculadora de previsões

4. Teste a funcionalidade de logout
   - Verifique se a sessão é encerrada corretamente
   - Confirme que foi redirecionado para a página de login

## Etapa 7: Conceitos Importantes

### 7.1 Programação Orientada a Objetos
- **Classes e Objetos**: Classes como `Veiculo`, `Carro` e `Moto` representam entidades reais
- **Herança**: As classes `Carro` e `Moto` herdam de `Veiculo`
- **Abstração**: Usada nos métodos abstratos em `Veiculo`
- **Encapsulamento**: Usado nos atributos protegidos e acessados via métodos

### 7.2 Padrão MVC
- **Model**: Classes de modelo (`Veiculo`, `Carro`, `Moto`) e serviços (`Auth`, `Locadora`)
- **View**: Template principal (`template.php`) e página de login (`login.php`)
- **Controller**: Lógica de controle em `index.php`

### 7.3 Sistema de Permissões
- Matriz de permissões em `Auth::temPermissao()`
- Note como as permissões afetam a interface e as ações
- Note a segurança em camadas (UI, controlador, serviço)

### 7.4 Persistência com MySQL
- Uso do PDO para conexão segura
- Operações CRUD nos métodos da classe `Locadora`
- Vantagens da persistência em banco de dados

## Etapa 8: Expandindo o Projeto (Ideias para Desafios - Opcional)

1. **Implementar Novos Tipos de Veículos**
   - Adicionar classes para `Caminhao`, `Van`, etc.
   - Adaptar a interface para suportar os novos tipos

2. **Aprimorar o Sistema de Usuários**
   - Adicionar funcionalidade de cadastro de novos usuários
   - Implementar recuperação de senha
   - Criar mais perfis com diferentes níveis de permissão

3. **Adicionar Recursos Avançados**
   - Histórico de aluguéis
   - Relatórios financeiros
   - Sistema de reservas futuras

4. **Melhorar a Interface**
   - Adicionar filtros e pesquisa na tabela de veículos
   - Implementar tema escuro
   - Adicionar gráficos para visualização de dados

Este roteiro completo fornece todas as instruções necessárias para implementar o back-end do sistema de locadora de veículos, transformando o front-end estático da Fase 1 em um sistema completo e funcional com PHP e MySQL.