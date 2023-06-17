# Projeto em PHP para o curso Girau de Oportunidades.
## Sistema para gerenciamento e cadastro dos alunos.
### Concluído em 15/06/2023

###Alunos: Suellen Lima da Silva, Andressa Lorrane da Silva Lima, Isabel Cristina de Oliveira Silva e Anthony Gomes.

### O projeto teve como objetivo a criação de um sistema de cadastro para inserir dados de indivíduos inscritos no programa Girau de Oportunidades. O mesmo é composto por um sistema com CRUD completo, além de usar o método POST e ter um sistema de login feito com SESSIONS, que tem como objetivo ser acessado por meio de credenciais exclusivas  disponibilizadas pela prefeitura, para funcionários designados a exercer a função de administrar e inserir os dados.

- Arquivos que vão ser vistas na Pasta do projeto:
  - cadastro.php
  - conexao.php
  - delete.php
  - formularioCadastro.html
  - formularioEditarAluno.php
  - formularioInicial.html
  - login.php
  - sair.php
  - StyleCadastro.css
  - StyleLogin.css
  - StyleDelete.css
  - StyleEdicao.css
  - StyleListagem.css
  - telaDelete.html
  - telaListagemAlunos.php
  - telaLogin.html
  - visualInicial.css

Para chegar ao resultado final do projeto, foram utilizados:

- PHP(Hypertext Preprocessor) -> linguagem de programação script open source de uso geral, tanto no backend, quanto no frontend.
- HTML(HyperText Markup Language) -> linguagem de marcação que permite a construção de websites.
- CSS(Cascading Style Sheets ) -> altera o visual de elementos, melhorando e organizando o aspecto estético de uma página.
- SQL(Structured Query Language) -> linguagem que armazena dados em um banco de dados relacional.

A linguagem de programação PHP foi usada para fazer todo o backend, compondo um CRUD;
O HTML foi usado para fazer as páginas que serão utilizadas pelos usuários;
O CSS foi usado para compor o design do site, deixando mais bonito, organizado e facilitando o entendimento do usuário em relação ao uso do sistema;
O SQL foi usado para armazenar os dados dos alunos cadastrados, além das credenciais de acesso do funcionário usuário do sistema.


- Tem como funcionalidades: Cadastrar alunos, listar os alunos cadastrados, editar os dados e remover alunos.

### As tabelas do banco de dados foram criadas a partir das informações a seguir:
  
  Tabela "alunos":
  
   id (integer, primary key, auto_increment), nome (varchar(100)), endereco (varchar(50)), nomepai (varchar(100)), nomemae (varchar(100)), cpf (varchar(15)), rg (int), datanascimento (date), curso (varchar(50)), experiencia (varchar(250)) e participacao (varchar(5)).
  
Tabela "acesso":

  id (integer, primary key, auto_increment), usuario (varchar(50)) e senha (varchar(50)).


Um usuario cadastra N alunos(UM para MUITOS);
Um aluno tem UM único cadastro( UM para UM).


### Descrição das telas em ordem de acesso.

- Tela Login: A tela de login é composta por dois campos (usuario e senha) juntamente de um botão 'Entrar', ao digitar os dados, os mesmos serão verificados se estão de acordo com o que está no banco, se sim, o funcionário poderá acessa-lo.
- Tela Inicial: Composta pelas opções disponíveis no sistema, onde o usuário poderá ter acesso ao clicar na opção desejada.
- Tela Cadastro: Composta por campos onde devem ser inseridos os dados dos alunos;
- Tela Listagem:Composta pela listagem dos alunos e seus respectivos dados;
- Tela Deletar: Composta por um campo onde o usuário deve digitar o id do usuario que deve ser removido;
- Tela Editar: Composta por campos preenchidos com os dados com aluno, mas disponíveis para alteração.


### Instruções de instalação:

1. Instalação do XAMPP:

Faça o download e a instalação do XAMPP, de acordo com o seu sistema operacional, a partir do site oficial: https://www.apachefriends.org/index.html
Siga as instruções do instalador para concluir a instalação.

Configuração do XAMPP:

Abra o painel de controle do XAMPP após a instalação.
Inicie os serviços Apache e MySQL.

2. Clone do projeto:

- Acesse o repositório do projeto no GitHub e clique em "Code" e em seguida "Download ZIP" para baixar o código-fonte do projeto.
- Extraia o arquivo ZIP para uma pasta de sua escolha.

Ou 

- Abra Git Bash.
- Altere o diretório de trabalho atual para o local em que deseja ter o diretório clonado.
- Digite git clone e cole a URL do repositório já copiada.
- Pressione ENTER para criar seu clone local.

3. Configuração do Banco de Dados:

Abra um navegador web e digite "localhost" na barra de endereço.
Clique em "phpMyAdmin" para acessar o gerenciador do banco de dados.
Crie um novo banco de dados com o nome desejado para o projeto (por exemplo, "giraudeoportunidades").
Selecione o banco de dados recém-criado e clique na guia "Importar".
Clique em "Escolher arquivo" e selecione o arquivo SQL do projeto (se houver) para importar a estrutura e os dados iniciais.
Clique em "Executar" para importar o arquivo SQL.

4.Configuração do projeto:

Abra o XAMPP e navegue até a pasta onde você extraiu o código-fonte do projeto.
Copie todo o conteúdo do projeto para a pasta "htdocs" do XAMPP (geralmente localizada em "C:\xampp\htdocs").

5.Acesso ao projeto:

Abra um navegador web e digite "localhost/nome-do-projeto" na barra de endereço, substituindo "nome-do-projeto" pelo nome da pasta onde você colocou o projeto no diretório "htdocs".
O projeto deve ser exibido no navegador e você poderá interagir com ele.

### Instruções de uso:

  1. Inicialmente acesse a tela login e insira corretamente o usuario e a senha;
  2. Na página inicial escolha a opção que deseja;
  3. Caso escolha a opção cadastrar, insira os dados do aluno e clique no botão, o usuário será direcionado para a tela listagem caso o aluno tenha sido cadastrado com sucesso, caso não seja, aparecerá a mensagem de erro;
  4. A tela listagem irá mostrar todos os alunos cadastrados e seus respectivos dados;
  5. Caso escolha a tela editar, o usuário terá que fornecer o id do aluno que deseja editar, se o id do aluno existir, aparecerá o formulário com os dados do aluno para edição, caso não exista, aparecerá a mensagem de erro;
  6. Caso a escolha seja a opção deletar, o usuário terá que fornecer o id do aluno que deseja deletar, se o dado for deletado, o usuario será direcionado a tela listagem, caso não, aparecerá a mensagem de erro.
  7. Para finalizar, caso o usuário escolha a opção sair, ele irá sair do sistema e será direcionado a tela de login.


### Testes

- Foram testados todas as opções do CRUD, com todas funcionando bem e com sucesso, trazendo segurança ao usuário que irá utilizar o sistema.
- Obs.: As opções de login e sair do sistema não foram testadas completamente, devido ao prazo de entrega do projeto, podendo ocorrer algum erro simples.

### Conclusão

O projeto teve seus objetivos iniciais cumpridos, funcionando todas as opções e com uma interface razoável para o usuário. Espera-se que tenha ficado claro as especificações do sistema e suas formas de uso. Ainda assim, deixa-se claro que para a sua execução real em perfeito funcionamento é necessário fazer algumas alterações para garantir que os dados estejam em segurança e não ocorram erros simples(os quais poderão dificultar o uso do usuário), além de fazer novamente uma sequência completa de testes.
