<h1>Usuario</h1>
<h3>Formulário de Usuários</h3>

<?php echo form_open('usuario/salvar'); ?>

<label for="nome">Nome</label>
<input type="input" name="nome" value="<?php echo $usuario['nome']; ?>" /><br />

<label for="text">Cpf</label>
<input type="input" name="cpf" value="<?php echo $usuario['cpf']; ?>" ><br />

<label for="text">Email</label>
<input type="input" name="email" value="<?php echo $usuario['email']; ?>" ><br />

<label for="text">Username</label>
<input type="input" name="username" value="<?php echo $usuario['username']; ?>" ><br />

<!-- Campo oculto hidden que armazena o id do usuário editado -->
<input type="hidden" name="id"  value="<?php echo $usuario['id']; ?>" />
<input type="submit" name="submit" value="Salvar" />

</form>