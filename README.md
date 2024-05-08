## POC-Volk-LMS

Este é um projeto de demonstração para o sistema VOLK LMS. Ele inclui uma aplicação simples para gerenciar processos.

### Conteúdo

1. [Descrição do Projeto]
2. [Instruções de Uso]
3. [Estrutura do Projeto]
4. [Como Contribuir]
5. [Licença]

### Descrição do Projeto

O projeto POC-Volk-LMS é uma prova de conceito (POC) para demonstrar um sistema de gerenciamento de processos simples, chamado VOLK LMS. 

Ele consiste em uma aplicação PHP que permite o cadastro, edição, exclusão e filtro de processos. Os processos são armazenados em um banco de dados MySQL.


### Instruções de Uso

1. **Clonar o repositório:**
   git clone https://github.com/LucasCarvalho23/POC-Volk-LMS.git
   
2. **Importar o Banco de Dados:**
Importe o arquivo db_volk.sql para criar a estrutura do banco de dados.

3. **Configurar a Conexão com o Banco de Dados:**
Edite o arquivo Private/php/conection.php com as configurações do seu ambiente, se necessário.

4. **Acessar a Aplicação:**
Abra o navegador e vá para o diretório onde o projeto foi clonado.


### Estrutura do Projeto
- css: Contém os arquivos de estilo CSS.
- Private: Contém arquivos PHP sensíveis.
- php: Contém classes PHP para manipulação de dados.
- javascript: Contém arquivos JavaScript.
- README.md: Este arquivo, com instruções e informações sobre o projeto.
- index.php: Página principal da aplicação.
- novoProcesso.php: Página para cadastrar novos processos.
- editProcess.php: Página para editar processos existentes.
- autentication.php: Arquivo de autenticação e controle de ações.
- navbar.php: Barra de navegação comum a todas as páginas.


### Como Contribuir
Contribuições são bem-vindas! Se você deseja contribuir com melhorias, correções de bugs ou novos recursos, siga estas etapas:

1. Faça um fork do projeto.
2. Crie uma nova branch com a sua feature (git checkout -b feature/nova-feature).
3. Faça o commit das suas alterações (git commit -am 'Adiciona nova feature').
4. Faça o push para a sua branch (git push origin feature/nova-feature).
5. Abra um pull request.


### Licença
Este projeto está licenciado sob a MIT License.
