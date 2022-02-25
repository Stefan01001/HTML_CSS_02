<?php require __DIR__ . "/_header.php"; ?>

<style>
    table, tr, th, td {
        border: 1px solid black;
    }

</style>

<h2>Tabelas</h2>

<h3>Referências:</h3>
<ul>
    <li><a href="https://www.w3schools.com/html/html_tables.asp" target="_blank">Tabelas no W3Schools</a></li>
</ul>

<ul>
    <li><strong>table</strong> &rarr; Cria uma tabela.</li>
    <li><strong>tr</strong> &rarr; table row &rarr; Cria uma linha na tabela.</li>
    <li><strong>th</strong> &rarr; table header &rarr; Cria uma célula de cabeçalho dentro da linha.</li>
    <li><strong>td</strong> &rarr; table data &rarr; Cria uma célula de dados dentro da linha.</li>
    <li><strong>colspan</strong> &rarr; Expande coluna &rarr; Esse atributo espande uma célula na mesma linha.</li>
    <li><strong>rowspan</strong> &rarr; Expande linha &rarr; Esse atributo espande uma célula para a linha seguinte.</li>
</ul>

<h3>Exemplo simples</h3>

<table style="border: 1px solid black">

    <tr>
        <th style="background: gray">Nome</th>
        <th style="background: gray">E-mail</th>
        <th style="background: gray">Nascimento</th>
    </tr>

    <tr>
        <td>Joca da Silva</td>
        <td>joca@silva.com</td>
        <td>10/11/1980</td>
    </tr>

    <tr>
        <td>Setembrino Trocatapas</td>
        <td>set@brino.com</td>
        <td>23/12/1979</td>
    </tr>

    <tr>
        <td>Marineuza Siriliano</td>
        <td>mari@neuza.com</td>
        <td>02/02/2000</td>
    </tr>

    <tr>
        <td>Edilineuza Carmisona</td>
        <td>edir@carmo.com</td>
        <td>10/04/1971</td>
    </tr>

</table>

<h3>Outra tabela</h3>

<table>

    <tr>
        <th>Produto</th>
        <th>Preço</th>
        <th>Seção</th>
        <th>Subseção</th>
    </tr>

    <tr>
        <td>Bicicleta</td>
        <td>R$1000,00</td>
        <td colspan="2">Veículos</td>
    </tr>

    <tr>
        <td>Bola</td>
        <td>R$20,00</td>
        <td>Esportes</td>
        <td>Bolas</td>
    </tr>

    <tr>
        <td>Patins</td>
        <td>R$500,00</td>
        <td colspan="2" rowspan="2">Veículos</td>
    </tr>

    <tr>
        <td>Patinete</td>
        <td>R$700,00</td>
    </tr>

</table>

<!--
    Exercício: Crie mais uma tabela simples representando dados em 4 colunas e 6 linhas.
-->

<table>

<tr>
    <td>A</td>
    <td>y</td>
    <td>z</td>
    <td>x</td>
</tr>

<tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
</tr>

<tr>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>8</td>
</tr>

<tr>

<td>e</td>
<td>t</td>
<td>u</td>
<td>v</td>

</tr>

<tr>

<td>i</td>
<td>o</td>
<td>p</td>
<td>d</td>

</tr>

<tr>

<td>k</td>
<td>l</td>
<td>m</td>
<td>c</td>

</tr>



</table>





</table>

<?php require __DIR__ . "/_footer.php"; ?>