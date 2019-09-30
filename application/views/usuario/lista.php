<h1>Usuários</h1> <!--Maior Titulo-->
<h3>Tabela de Usuários</h3> <!--Sub titulo-->

<a href="<?php echo base_url('usuario/novo');?>">Novo</a><br /><!--Link para adcionar uma nova instituição -->

<table>
<tr>
    <th>Codigo</th>
    <th>Cpf</th>    
    <th>Nome</th>
    <th>Email</th>
    <th>Username</th>
    <th>X</th>
</tr>
<?php foreach ($usuarios as $usuario): ?>
<tr>
    <td><a href="<?php echo base_url('usuario/atualizar/').$usuario["id"];?>"><?php echo $usuario["id"];?></td>
    <td><?php echo $usuario["cpf"]; ?></td>
    <td><?php echo $usuario["nome"]; ?></td>
    <td><?php echo $usuario["email"]; ?></td>
    <td><?php echo $usuario["username"]; ?></td>
    <td><a href="<?php echo base_url('usuario/deletar/').$usuario["id"];?>">X</td>
</tr>
<?php endforeach; ?>
</table>