<h1>Instituições</h1> <!--Maior Titulo-->
<h3>Tabela de Instituições</h3> <!--Sub titulo-->

<a href="<?php echo base_url('instituicao/novo');?>">Novo</a><br /><!--Link para adcionar uma nova instituição -->

<table>
<tr>
    <th>Codigo</th>
    <th>Nome</th>
    <th>Descrição</th>
    <th>Especialidade</th>
    <th>Endereço</th>
    <th>Telefone</th>
    <th>X</th>
</tr>
<?php foreach ($instituicoes as $inst): ?>
<tr>
    <td><a href="<?php echo base_url('instituicao/atualizar/').$inst["id"];?>"><?php echo $inst["id"];?></td>
    <td><?php echo $inst["nome"]; ?></td>
    <td><?php echo $inst["descricao"]; ?></td>
    <td><?php echo $inst["especialidade"]; ?></td>
    <td><?php echo $inst["endereco"]; ?></td>
    <td><?php echo $inst["telefone"]; ?></td>
    <td><a href="<?php echo base_url('instituicao/deletar/').$inst["id"];?>">X</td>
</tr>
<?php endforeach; ?>
</table>