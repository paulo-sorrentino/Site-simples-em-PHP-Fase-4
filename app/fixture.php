<?php
require_once 'bd_config.php';
try {
    $conexao = new \PDO(DSN, USER, PASS);
} catch (\PDOException $e) {
    die("Error código: " . $e->getCode() . ": " . $e->getMessage());
}

$sql = 'DROP TABLE IF EXISTS `conteudo`;';
$sql = utf8_decode($sql);

$stmt = $conexao->prepare($sql);
$stmt->execute();

$sql = <<<'EOT'
CREATE TABLE IF NOT EXISTS `conteudo` (
  `id_conteudo` int(11) NOT NULL AUTO_INCREMENT,
  `pagina` varchar(50) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `conteudo` text,
  `imagem` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_conteudo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;
EOT;
$sql = utf8_decode($sql);

$stmt = $conexao->prepare($sql);
$stmt->execute();

$sql = <<<'EOT'
INSERT INTO `conteudo` (`id_conteudo`, `pagina`, `titulo`, `conteudo`, `imagem`) VALUES
(1, 'produtos', 'Banco de Dados', 'Bancos de dados (português brasileiro) ou bases de dados (português europeu) são coleções organizadas de dados que se relacionam de forma a criar algum sentido(Informação) e dar mais eficiência durante uma pesquisa ou estudo.1 2 3 São de vital importância para empresas, e há duas décadas se tornaram a principal peça dos sistemas de informação.4 2 5 Normalmente existem por vários anos sem alterações em sua estrutura. São operados pelos Sistemas Gerenciadores de Bancos de Dados (SGBD), que surgiram na década de 70.8 9 Antes destes, as aplicações usavam sistemas de arquivos do sistema operacional para armazenar suas informações.10 9 Na década de 80 a tecnologia de SGBD relacional passou a dominar o mercado, e atualmente utiliza-se praticamente apenas ele.8 9 Outro tipo notável é o SGBD Orientado a Objetos, para quando sua estrutura ou as aplicações que o utilizam mudam constantemente. A principal aplicação de Banco de Dados é controle de operações empresariais.4 5 11 Outra aplicação também importante é gerenciamento de informações de estudos, como fazem os Bancos de Dados Geográficos, que unem informações convencionais com espaciais.', 'galaxy.png'),
(2, 'produtos', 'Design', 'Design [dizáin]1 é a idealização, criação, desenvolvimento, configuração, concepção, elaboração e especificação de objetos que serão produzidos industrialmente ou por meio de sistema de produção seriada e que demandem padronização dos componentes e compatibilização do desenho para construção em maquinário mecânico ou manual, envolvendo a repetição das diferentes etapas de produção. Essa é uma atividade estratégica, técnica e criativa, normalmente orientada por uma intenção ou objetivo, ou para a solução de um problema. Exemplos de coisas que se podem projetar incluem muitos tipos de objetos, como utensílios domésticos, vestimentas, máquinas, ambientes, serviços, marcas e também imagens, como em peças gráficas, famílias de letras (tipografia), livros e interfaces digitais de softwares ou de páginas da Internet, entre outros.', 'kitkat_yellow.jpg'),
(3, 'produtos', 'Projeto', 'A palavra projeto vem da palavra latina projectum do verbo em latim proicere, "antes de uma ação", que por sua vez vem de pró-, que denota precedência, algo que vem antes de qualquer outra coisa no tempo (em paralelo com o grego πρό) e iacere, "fazer". Portanto, a palavra "projeto", na verdade, significava originalmente "antes de uma ação". Quando o idioma Português inicialmente adotou a palavra, ela se referia a um plano de alguma coisa, não o ato de realmente levar esse plano a concretização. Algo realizado de acordo com um projeto tornou-se conhecido como um "objetivo".', 'kitkat_blue.jpg'),
(4, 'servicos', 'Padrões de Projeto', 'Em engenharia de software, um padrão de projeto ou padrão de desenho (do inglês design pattern) é uma solução geral reutilizável para um problema que ocorre com frequência dentro de um determinado contexto no projeto de software. Um padrão de projeto não é um projeto finalizado que pode ser diretamente transformado em código fonte ou de máquina, ele é uma descrição ou modelo (template) de como resolver um problema que pode ser usado em muitas situações diferentes. Padrões são melhores práticas formalizadas que o programador pode usar para resolver problemas comuns quando projetar uma aplicação ou sistema. Padrões de projeto orientados a objeto normalmente mostram relacionamentos e interações entre classes ou objetos, sem especificar as classes ou objetos da aplicação final que estão envolvidas. Padrões que implicam orientação a objetos ou estado mutável mais geral, não são tão aplicáveis em linguagens de programação funcional.Padrões de projeto residem no domínio de módulos e interconexões. Em um nível mais alto há padrões arquiteturais que são maiores em escopo, usualmente descrevendo um padrão global seguido por um sistema inteiro.', 'abstract_wp.png'),
(5, 'servicos', 'História', 'Em 1987, a partir dos conceitos criados por Alexander, os programadores Kent Beck e Ward Cunningham propuseram os primeiros padrões de projeto para a área da ciência da computação. Em um trabalho para a conferência OOPSLA, eles apresentaram alguns padrões para a construção de janelas na linguagem Smalltalk.5 Nos anos seguintes Beck, Cunningham e outros seguiram com o desenvolvimento destas idéias. O movimento ao redor de padrões de projeto ganhou popularidade com o livro Design Patterns: Elements of Reusable Object-Oriented Software, publicado em 1995. Os autores desse livro, Erich Gamma, Richard Helm, Ralph Johnson e John Vlissides, são conhecidos como a "Gangue dos Quatro" (Gang of Four) ou simplesmente "GoF".Posteriormente, vários outros livros do estilo foram publicados, merecendo destaque Applying UML and Patterns: An Introduction to Object-Oriented Analysis and Design and Iterative Development, que introduziu um conjunto de padrões conhecidos como GRASP (General Responsibility Assignment Software Patterns).', 'galaxy.png');
EOT;
$sql = utf8_decode($sql);

$stmt = $conexao->prepare($sql);
$stmt->execute();

echo "Renovado<br>";
header('Location: /');