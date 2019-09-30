<h1>Usuario</h1>
<h3>Formulário de Usuários</h3>

<?php echo form_open('usuario/salvar'); ?>

<label for="nome">Nome</label>
<input type="input" name="nome" /><br />

<label for="text">Cpf</label>
<input type="input" name="cpf"><br />

<label for="text">Email</label>
<input type="input" name="email"><br />

<label for="text">Username</label>
<input type="input" name="username"><br />

<label for="text">Senha</label>
<input type="password" name="senha"><br />

<input type="submit" name="submit" value="Salvar" />

</form>