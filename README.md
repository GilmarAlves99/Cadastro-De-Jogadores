<h2> Oque você verá aqui? </h2>

• Uma pequena forma de demonstrar como funciona um gerenciamento com banco de dados </b><br>
• Aqui você poderá adicionar ou excluir nomes que irá adicionar como um 'jogador' </b><br>
• É uma base, que pode ser facilmente mofificado.


**Comando SQL :**
<pre>
<code>
CREATE DATABASE selecao;
use selecao;
CREATE TABLE jogadores(
    id int(10) PRIMARY KEY AUTO_INCREMENT,
    nome varchar(255) NOT null,
    numero int(100) NOT null,
    time varchar(255) NOT null
    );
    </code>
</pre>

<h3 align="center"> Demonstração do programa em execução </h3>

![videoApresentacao](https://user-images.githubusercontent.com/68366424/99921540-c51e8780-2d09-11eb-9169-a63123a113b2.gif)
